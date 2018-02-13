<template>
	<div class="panel panel-default">
	    <div class="panel-body">
	        <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 align-right">
	            <h3>{{ local.name }}</h3>
	            <div class="align-right" v-show="edit">
		            <button class="btn waves-effect m-t-20" v-on:click="local_goals++">+</button>
		            <button class="btn waves-effect m-t-20" v-on:click="substracLocal">-</button>
	           	</div>
	        </div>
	        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
	            <input type="button" class="btn btn-danger waves-effect m-t-20" :value="local_goals" v-model="local_goals"/>
	        
	        	<input type="button" class="btn btn-danger waves-effect m-t-20" :value="visitor_goals" v-model="visitor_goals"/>
	        </div>
	        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-left">
	            <h3>{{ visitor.name }}</h3>
	            <div class="align-left" v-show="edit">
	            	<button class="btn waves-effect m-t-20" v-on:click="visitor_goals++">+</button>
	            	<button class="btn waves-effect m-t-20" v-on:click="substracVisitor">-</button>
	            </div>
	        </div>
	        <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 align-left button-demo">
	            <button class="btn bg-red waves-effect m-t-90" @click="editing" v-if="!edit">MODIFICAR</button>
	            <template v-else>
	            	<button class="btn bg-red waves-effect m-t-80" @click="store">GUARDAR</button>
	            	<button class="btn waves-effect " @click="cancel">CANCELAR</button>
	            </template>
	        </div>
	        <div class="col-md-12 hr"></div>
	        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	            <span>{{ match.hour }}</span> 
	            <span style=" font-weight: bold; color: #BD1A22;">•</span>
	            <span>{{ match.hour }}</span>
	            <span style=" font-weight: bold; color: #BD1A22;">•</span>
	            <span>{{ place.place }}</span>
	        </div>
	        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 align-right">
	            <a :href="statiticsUrl" class="align-right">CARGAR ESTADISTICAS</a>
	        </div>
	    </div>
	</div>
</template>

<script>
export default {
	props: ['matchid', 'url'],
	data() {
		return {
			match: [], 
			local: [], 
			visitor: [], 
			place: [], 
			result: [],
			edit: false,
			local_goals: 0,
			visitor_goals: 0,
			statiticsUrl: this.url + '/matches/'+ this.matchid +'/results'
		}
	},
	mounted() {
		axios.get('/api/'+ this.matchid +'/match')
		.then(response => {
			this.match = response.data;
			this.local = response.data.local;
			this.visitor = response.data.visitor;
			this.place = response.data.place;
			if(response.data.result){
				this.result = response.data.result;
				this.local_goals = this.result.goals_local;
				this.visitor_goals = this.result.goals_visitor;
			}
		});	
	},
	methods: {
		substracLocal: function () {
			if(this.local_goals > 0){
				this.local_goals--;
			}
		},
		substracVisitor: function () {
			if (this.visitor_goals > 0) {
				this.visitor_goals--;
			}
		},
		editing: function () {
			this.edit = true;
		},
		store: function () {
			this.edit = false;
			axios({
			  method: 'post',
			  url: this.url + '/matches/results',
			  data: {
			  	id: this.matchid, 
			    local_goals: this.local_goals,
			    visitor_goals: this.visitor_goals
			  }
			});
			showNotification(null, 'Se guardo el resultado exitosamente');
		},
		cancel: function(){
			this.edit = false;
			axios.get('/api/'+ this.matchid +'/result') // Peteción para verificar el resultado antes de editar
			.then(response => {
				if(response.data){
					this.result = response.data;
					this.local_goals = this.result.goals_local;
					this.visitor_goals = this.result.goals_visitor;
				}else{
					this.local_goals = 0;
					this.visitor_goals = 0;
				}
			});
		}
	}
}
</script>