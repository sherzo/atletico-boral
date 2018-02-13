<div class="row clearfix">
	<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
		<p class="align-justify"> 
			<b> {{ $events->title }} </b>
		</p>
		<p class="align-justify">{!! $events->content !!}</p>
	</div>

	<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 p-t-30">
		@forelse($events->imagesUpload as $images)
            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                <a href="../../images/image-gallery/1.jpg" data-sub-html="Demo Description" target="_blank">
                    <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-1.jpg">
                </a>
            </div>
        @empty		                       
            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                <a href="http://www.tea-tron.com/antorodriguez/blog/wp-content/uploads/2016/04/image-not-found-4a963b95bf081c3ea02923dceaeb3f8085e1a654fc54840aac61a57a60903fef-584x276.png" data-sub-html="Not found" target="_blank">
                    <img class="img-responsive thumbnail" src="http://www.tea-tron.com/antorodriguez/blog/wp-content/uploads/2016/04/image-not-found-4a963b95bf081c3ea02923dceaeb3f8085e1a654fc54840aac61a57a60903fef-584x276.png">
                </a>
            </div>
        @endforelse
	</div>
</div>