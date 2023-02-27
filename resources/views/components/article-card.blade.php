<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">

        <div class="card-body text-center">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->author}}</p>
          <p class="card-text">{{$article->body}}</p>
          <p class="card-text"><small class="text-muted">creato il {{$article->created_at->format('d/m/y')}}</small></p>
            <a   href="{{route('article.edit', compact('article'))}}" class="btn btn-dettagli">Modifica</a>
            <form method="POST" action="{{route('article.delete',compact('article'))}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-dettagli">Elimina</button>

            </form>
        </div>

      </div>

    </div>

  </div>

