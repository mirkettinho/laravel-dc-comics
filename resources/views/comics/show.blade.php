@extends("layout.main")


@section("name")
Visualizzazione
@endsection


@section("content")
<div class="scroll">
<div class="box-card-show">
  <div class="d-flex">

    <div class="img-show">
      <img src="{{$comic->thumb}}" alt="">
    </div>
      <div class="card-md-description">
        <h3>{{$comic->title}}</h3>
        <h5>Serie: {{$comic->series}}</h5>
        <h5>Categoria: {{$comic->type}}</h5>
        <p class="font-0-8">{{$comic->description}}</p>
        {{$comic->price}}
        <div>Data vendita: {{$comic->sale_date}}</div>
        <div class="md-center">
          <a href="{{route("comics.index")}}">Torna a l'elenco</a>
          <a class="bg-warning" href="{{route("comics.edit", $comic)}}">Modifica</a>

          <form class="d-inline" action="{{route("comics.destroy", $comic) }}" method="POST" onsubmit="return confirm('Conferma per eliminare il prodotto: {{$comic->title}}')">
            @csrf
            @method("DELETE")
            <button type="submit" class="bg-danger">Elimina</button>
          </form>

        </div>
      </div>
  </div>

</div>

  <div class="d-flex">

    <div class="box-card-show-bottom text-center">
      <h3>Artisti</h3>
      <p>{{$comic->artists}}</p>

    </div>

    <div class="box-card-show-bottom text-center">
      <h3>Scrittori</h3>
      <p>{{$comic->writers}}</p>
    </div>

  </div>

</div>



@endsection
