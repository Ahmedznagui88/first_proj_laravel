<x-layout>
    <x-slot name="title">
        {{ $sound['name'] }}
    </x-slot>

<x-header class="">
    <h5 class="card-title text-center">{{$sound['name']}} </h5>
</x-header>
{{-- detail card --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="card rounded-4" style="border: none">
                    <img src="{{$sound['picture']}}" class="rounded-4" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$sound['name'] }} </h5>
                        <p class="card-text">{{ $sound['description'] }}</p>
                        <p class="card-text">Price{{ $sound ['price']}}</p>
                        <a href="" class="btn btn-warning w-25">Try it</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



</x-layout>
