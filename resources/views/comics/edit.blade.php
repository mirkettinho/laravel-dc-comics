@extends("layout.main")


@section("name")
MODIFICA
@endsection

@section("content")


@if ($errors->any())

<div class="alert alert-danger" role="alert">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{route("comics.update", $comic)}}" method="POST" class="scroll">
  @method("PUT")
  @csrf
  {{-- 1 --}}
  <h1>Modifica di {{$comic->title}} </h1>

  <div class="mb-3">
    <label for="title" class="form-label">Titolo *</label>
    <input
    type="text"
    class="form-control @error("title") is-invalid @enderror"
    id="title"
    name="title"
    placeholder="inserisci il titolo"
    value="{{old("title", $comic->title)}}"
    >
    @error("title") <p class="text-danger">{{$message}}</p> @enderror
  </div>
  {{-- 2 --}}
  <div class="mb-3">
    <label for="thumb" class="form-label">Immagine</label>
    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserisci l'immagine"
    value="{{old("thumb", $comic->thumb)}}"
    >
  </div>
  {{-- 3 --}}
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text-area" class="form-control" id="description" name="description" placeholder="inserisci la descrizione"
    value="{{old("description", $comic->description)}}"
    >
  </div>
  {{-- 4 --}}
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="inserisci il prezzo"
    value="{{old("price", $comic->price)}}"
    >
  </div>
  {{-- 5 --}}
  <div class="mb-3">
    <label for="series" class="form-label">Serie</label>
    <input
    type="text"
    class="form-control @error("series") is-invalid @enderror"
    id="series"
    name="series"
    placeholder="inserisci la serie"
    value="{{old("series", $comic->series)}}"
    >
    @error("series") <p class="text-danger">{{$message}}</p> @enderror
  </div>
  {{-- 6 --}}
  <div class="mb-3">
    <label for="type" class="form-label">Categoria</label>
    <input
    type="text"
    class="form-control @error("type") is-invalid @enderror"
    id="type" name="type"
    placeholder="inserisci la categoria"
    value="{{old("type", $comic->type)}}"
    >
    @error("type") <p class="text-danger">{{$message}}</p> @enderror
  </div>
  {{-- 7 --}}
  <div class="mb-3">
    <label for="sale_date" class="form-label">Data uscita</label>
    <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita"
    value="{{old("sale_date", $comic->sale_date)}}"
    >
  </div>
  {{-- 8 --}}
  <div class="mb-3">
    <label for="artists" class="form-label">Artisti</label>
    <input
    type="text"
    class="form-control @error("artists") is-invalid @enderror"
    id="artists"
    name="artists"
    placeholder="inserisci il nome degli artisti"
    value="{{old("artists", $comic->artists)}}"
    >
    @error("artists") <p class="text-danger">{{$message}}</p> @enderror
  </div>
  {{-- 9 --}}
  <div class="mb-3">
    <label for="writers" class="form-label">Scrittori</label>
    <input
    type="text"
    class="form-control @error("writers") is-invalid @enderror"
    id="writers"
    name="writers"
    placeholder="inserisci il nome degli scrittori"
    value="{{old("writers", $comic->writers)}}"
    >
    @error("writers") <p class="text-danger">{{$message}}</p> @enderror
  </div>
  {{-- 10 --}}
  <button type="submit" class="btn btn-primary">Aggiungi Prodotto</button>
</form>
@endsection
