<x-layout>
    <x-header
    title='contattaci per lavorare con noi'

    />
    <div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 colore-testo">
                <form method="POST" action="{{route('contacts.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Nome e cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Perchè vuoi lavorare con noi</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="spiegaci il motivo"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>

            </div>
        </x-layout>
