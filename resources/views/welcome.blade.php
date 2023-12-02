<x-layout>
<x-slot name="title">
    UniX
</x-slot>

<x-header>
UniX
</x-header>

@if (session('emailSent'))
    <div class="alert alert-success text-center">
        {{ session('emailSent') }}
    </div>
@endif

{{-- Video Demo --}}
    <div class="d-flex justify-content-center rounded-4 ">
        <video autoplay controls muted loop class="rounded-4 col-12 col-md-6">
            <source src="/media/unix.mp4" type="video/mp4">
                <source src="/media/unix.ogg" type="video/ogg">
                </video>
            </div>


</x-layout>
