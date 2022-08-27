<div>
    @if(empty($filename))
        <img src="{{ asset('images/noimage.jpeg') }}">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}">
    @endif
</div>