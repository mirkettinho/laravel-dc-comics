@extends("layout.main")



@section("name")
Dashboard
@endsection


@section("content")

    <div class="d-flex justify-content-center">

      <div class="box-card">
        <div class="circle-img text-center">
          <i class="fa-solid fa-rectangle-list purple"></i>
        </div>
          <div class="card-md-description">
            <h3>Elenco Fumetti</h3>
            <p class="font-0-8">Tabella lista fumetti dc comics compilata con le informazioni</p>
            <div class="md-center">
              <a href="{{route("comics.index")}}">Vai</a>
            </div>
          </div>
      </div>

      <div class="box-card">
        <div class="circle-img text-center">
          <i class="fa-solid fa-file-circle-plus blue"></i>
        </div>
          <div class="card-md-description">
            <h3>Aggiungi Prodotto</h3>
            <p class="font-0-8">Compilare il form per aggiungere un nuovo prodotto nell'elenco dei fumetti</p>
            <div class="md-center">
              <a href="{{route("comics.index")}}">Vai</a>
            </div>
          </div>
      </div>

      <div class="box-card">
        <div class="circle-img text-center">
          <i class="fa-solid fa-person-digging"></i>
        </div>
          <div class="card-md-description">
            <h3>////////</h3>
            <p class="font-0-8">Work in progress</p>
            <div class="md-center">
              <a class="disabled" href="{{route("comics.index")}}"><i class="fa-solid fa-triangle-exclamation"></i></a>
            </div>
          </div>
      </div>
</div>


@endsection

