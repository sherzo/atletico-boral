<aside>
	<div class="col m4">
		<h5>|| Categorías</h5>
		<ul class="collection">
        @for($i = 0; $i< 4; $i++)
					<li class="collection-item">> <a href="#">{{ $categories[$i]['name'] }}</a> ({{ $i }})</li>
        @endfor
    </ul>
	</div>
</aside>