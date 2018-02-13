@foreach($matches as $match)

    @if($match->local->category_id == $category->id)
    
        <match :matchid="{{ $match->id }}" :url="'{{ url('/') }}'"></match>
    
    @endif

@endforeach  