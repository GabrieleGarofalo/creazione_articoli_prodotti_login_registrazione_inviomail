<x-layout>



    <div class="container my-5">
        <div class="row justify-content-center">
            <h1>Registrati</h1>

            <div class="col-12 col-md-8 col-lg-6 colore-testo">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Nome utente</label>
                      <input type="text" class="form-control" name="name" >

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">

                      </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                      </div>

                    <button type="submit" class="btn btn-primary">Conferma Registrazione</button>
                  </form>


            </div>
        </div>


    </div>

</x-layout>
