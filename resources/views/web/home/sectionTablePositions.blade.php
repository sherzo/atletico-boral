<section>
	<div class="row">
		<div class="m1 col"></div>
		<div class="col m3">
			<h6 style="font-size: 20px;"><strong><span>||</span> TABLA DE POSICIONES</strong></h6>
			<br>
			<table class="table" style="font-size: 12px;">
				<thead >
					<tr class="grey darken-4 white-text">
						<th>EQUIPO</th>
						<th>W</th>
						<th>D</th>
						<th>L</th>
						<th>PTS</th>
					</tr>
				</thead>
				<?php $imagen = 1?>
				<tbody>
					<?php for($i = 1; $i<10; $i++){ ?>
					<tr>
						<td>{{ $i }} <img src="{{ asset('img/'.$i.'.png') }}" width="25" height="30" align="center"> Nombre</td>
						<td>{{ ($i + 1) }}</td>
						<td>{{ ($i + 1) }}</td>
						<td>{{ ($i + 1) }}</td>
						<td>{{ ($i + 1) }}</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5"><button class="btn btn-small red lighten-1">Ver toda la tabla</button></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="col m7">
			<h6 style="font-size: 20px;"><strong><span>||</span> ENTRADAS RECIENTES</strong></h6>
			<br>
			<div class="row">
				<?php for($i = 1; $i<5; $i++){ ?>
				<div class="col m6">
					<div class="card">
				        <div class="card-image">
				          <img src="{{ asset('img/entrada-'.$i.'.jpg')}}">
				          
				        </div>
				        <div class="card-content">
				          <span class="card-title">Título de la entrada</span>
				          <span class="grey-text lighten-1-text" style="font-size: 12px;"> 13 Mayo 2017 <i class="material-icons"></i></span>
				          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
				        </div>
				      </div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
