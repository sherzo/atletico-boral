<div class="row clearfix">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<p class="align-justify"> 
			<b> {{ $tab->title }} </b>
		</p>
		<p class="align-justify">{!! $tab->content !!}</p>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-t-30">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @forelse($tab->imagesUpload as $key => $images)
                    <div class="item {{ ($key == 0) ? 'active' : '' }}">
                        <img src="{{ asset('storage/tabs/'. $images->url) }}" />
                    </div>              
                @empty		
                    <div class="item active">
                        <center>
                            <img src="{{ asset('img/escudo.png') }}" style="max-width: 40%;" />
                        </center>
                    </div>
                @endforelse
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
	</div>
</div>
