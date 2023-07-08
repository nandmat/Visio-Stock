@extends('base')

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
      <h1>Cadastrar Vendedor</h1>
    </div>
    <section class="section">
      <div class="row">

        <div class="col-lg-12">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" action="" method="post">
                @csrf
                <input type="hidden" value="{{ $perfil }}" name="perfil">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Nome:</label>
                  <input type="text" class="form-control" id="inputName5" name="name">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail5" name="email">
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">CPF</label>
                  <input type="number" max="11" class="form-control" id="inputAddres5s" placeholder="Ex: 12345678910">
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">Filial</label>
                    <select id="inputState" class="form-select">
                      {{-- <option selected>Choose...</option> --}}
                      @foreach (json_decode($filiais) as $value )
                        <option value="{{ $value }}">{{ $value}}</option>
                      @endforeach

                    </select>
                  </div>
                {{-- <div class="col-6">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div> --}}
                {{-- </div> --}}
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <button type="reset" class="btn btn-secondary">Resetar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
