<x-layout>



    <x-header>
        Contatti
    </x-header>

    <div class="conmtainer my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form action="{{ route("invia.contatto") }}" method="POST" class="shadow p-4 rounded-4">
                    @csrf
                    @if (session('emailError'))
                        <div class="alert alert-danger">
                            {{ session('emailError') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Name / Surname</label>
                        <input type="text" name="name" class="form-control bg-transparent" id="name" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label ">Email Address</label>
                        <input type="email" name="email" class="form-control bg-transparent" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="user_message" class="form-label">Message</label>
                        <textarea name="user_message" class="form-control bg-transparent" id="user_message" cols="30" rows="6"></textarea>

                    </div>

                    <button type="submit" class="btn btn-outline-dark ">Invia</button>
                </form>
            </div>
        </div>
    </div>


    <div style="height: 100px">

    </div>
</x-layout>
