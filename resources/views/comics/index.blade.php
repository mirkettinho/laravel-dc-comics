@extends("layout.main")

@section("content")


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titolo</th>
      <th scope="col">serie</th>
      <th scope="col">pulsanti</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic )

    <tr>
      <td>{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
      <td>{{$comic->series}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
