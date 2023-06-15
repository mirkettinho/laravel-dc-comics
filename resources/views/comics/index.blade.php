@extends("layout.main")

@section("content")


{{-- <div class="bg-h1 ">
  <h1>Elenco Fumetti</h1>


</div> --}}
<div class="scroll">

  @if(session("deleted"))
  <div class="alert alert-success" role="alert">
    {{session("deleted")}}
  </div>
  @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Serie</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Data di vendita</th>
      <th scope="col">Categoria</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic )

    <tr>
      <td>{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
      <td>{{$comic->series}}</td>
      <td>{{$comic->price}}</td>
      <td>{{$comic->sale_date}}</td>
      <td>{{$comic->type}}</td>
      <td>
        <a class="bg-primary" href="{{route("comics.show", $comic)}}"><i class="fa-solid fa-eye text-white"></i></a>
        <a class="bg-warning" href="{{route("comics.edit", $comic)}}"><i class="fa-solid fa-pen text-white"></i></a>

        <form class="d-inline" action="{{route("comics.destroy", $comic) }}" method="POST" onsubmit="return confirm('Conferma per eliminare il prodotto: {{$comic->title}}')">
          @csrf
          @method("DELETE")
          <button type="submit" class="bg-danger"><i class="fa-solid fa-trash-can text-white"></i></button>
        </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection



@section("name")
Elenco Fumetti
@endsection
