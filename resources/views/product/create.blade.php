<x-layout>

    <x-header
    title='Aggiungi il tuo prodotto'
    />
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class=" col-12 col-md-8 col-lg-6 colore-testo">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Nome Prodotto</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Descrizione</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">prezzo</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img">

                    </div>

                   <button class="btn" type="submit">crea</button>
                </form>
            </div>
        </div>
    </x-layout>
