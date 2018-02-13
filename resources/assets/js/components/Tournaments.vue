<template>
    <div :id="category.id" class="col s12 mt-10">

        <!-- Listado general de torneos por categoría -->
        <div v-show="!show">
            <h5>Torneos de la categoría {{ category.category | mayusFirst }}</h5>
            <div class="collection" >
                <a class="collection-item red-text text-lighten-2" v-for="time in times" @click="getTournaments(time)">
                    {{ time.tournament.name | mayusFirst }}
                    <br>
                </a>
            </div>  
        </div>

        <!-- Listado veces que se realizado el torneo seleccionado -->
        <div v-show="selected()">
            <h5>{{ tName | mayusFirst }}</h5>
            <div class="collection">
                <a class="collection-item red-text text-lighten-2" v-for="time in tournaments" @click="getMatches(time)">
                    {{ time.start_date | fullDate }}
                    <br>
                </a>
            </div>
            <a @click="show = false">Atras</a>      
        </div>

        <!-- Listado de partidos de un torneo específico -->
        <div v-if="!noMatch">
            <h5>Partidos del</h5>
            <div class="card" v-for="match in matches">
                <div class="card-content" >
                    <p>
                        {{ match.local.name }} {{ match.result.goals_local }} vs {{ match.visitor.name }} {{ match.result.goals_visitor }}
                    </p>
                </div>
            </div>
            <a @click="desSelected()">Atras</a>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['category', 'url'],
        data() {
            return {
                times: [],
                show: false,
                tournaments: [],
                tName: '',
                matches: [],
                noMatch: true,
            }
        },
        mounted() {
            axios.get('/api/'+ this.category.id +'/tournaments')
                .then(response => {
                    this.times = response.data;
                })
        },
        methods: {
            getTournaments(time) {
                axios.get('/api/'+ this.category.id +'/'+ time.tournament.id +'/tournaments')
                    .then(response => {
                        this.tournaments = response.data;
                    })
                this.tName = time.tournament.name;
                this.show = true;
            },
            getMatches(time) {
                axios.get('/api/'+ time.id +'/'+ this.category.id +'/matches')
                    .then(response => {
                        this.matches = response.data;
                    })
                this.noMatch = false;
            },
            selected() {
                return (this.show && this.noMatch);
            },
            desSelected() {
                this.noMatch = true
                this.matches = []
                this.show = true
            }
        },
        filters: {
            fullDate: function (d) {
                let date = new Date(d.split('-'))
                let month = ['Enero', 'Febrero', 'Marzo', 
                             'Abril', 'Mayo', 'Junio', 
                             'Julio', 'Agosto', 'Septiembre', 
                             'Octubre', 'Noviembre', 'Diciembre']
                return month[date.getMonth()] + ' ' + date.getFullYear()
            },
            mayusFirst: function (str){
                str = str.toLowerCase();
                return str.charAt(0).toUpperCase() + str.slice(1);
            }
        }
    }
</script>
