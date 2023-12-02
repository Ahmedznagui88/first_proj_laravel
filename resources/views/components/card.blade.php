
<div class="card rounded-4 div-int" style="width: 18rem; border: none">
    <img src="{{ $picture }} " class="rounded-4" alt="">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $name }}  </h5>
        <p class="card-text">{{ $description }}</p>
        @if(Route::currentRouteName() == 'sounds')
        <a href="{{route ('sound-dettaglio', ['id' => $id])}}" class="btn btn-primary">{{ $price}}</a>
        @else
        <a href="{{route ('sound-dettaglio', ['id' => $id])}}" class="btn btn-primary">{{ $price}}</a>
        @endif
    </div>
</div>

