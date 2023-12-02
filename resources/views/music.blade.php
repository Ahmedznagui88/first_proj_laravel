<x-layout >

    <x-slot name="title">
        UniX
    </x-slot>
<x-header >
Music
</x-header>

{{--  cards  --}}
    <div class="container card-1 d-flex justify-content-center ">
        <div class="row ">
         @foreach ($sounds as $sound)
            <div class="col-12 col-md-3 div-int">
                <x-card
                picture="{{ $sound['picture'] }}"
                id="{{ $sound['id'] }}"
                name="{{ $sound['name'] }}"
                description="{{ $sound['description'] }}"
                price="{{ $sound['price'] }}"
                />
            </div>
            @endforeach
        </div>
    </div>


    
</x-layout>

{{--  --}}
