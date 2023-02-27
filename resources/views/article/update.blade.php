<x-layout>

    <x-header
    title='Modifica il tuo articolo'
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
                <form method="POST" action="{{route('article.update',compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label  class="form-label">Titolo articolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{($article->title)}}">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">autore</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{($article->author)}}">
                        @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">immagine</label>
                        <input type="file" class="form-control" name="img">

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">lascia il tuo commento</label>
                        <textarea name="body"  id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{($article->body)}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit">Modifica</button>

                </form>
            </div>
        </div>
    </x-layout>
