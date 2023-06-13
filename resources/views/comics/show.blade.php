@extends("layout.main")



@section("content")

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$comic -> thumb}}" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">{{$comic -> title}} <a href="#">modifica</a></h3>
    <h5 class="card-text">{{$comic -> type}}</h5>
    <p class="card-text">{{$comic -> description}}</p>
    <h5 class="card-text">{{$comic -> sale_date}}</h5>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection
