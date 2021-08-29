@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un Client
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('clients.store') }}">
.         @csrf
          <div class="form-group">
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="nom"/>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom:</label>
              <input type="text" class="form-control" name="prenom"/>
          </div>

          <div class="form-group">
              <label for="pseudo">Votre email:</label>
              <input type="text" class="form-control" name="pseudo"/>
          </div>

          <div class="form-group">
              <label for="statut">Votre statut:</label>
              <input type="text" class="form-control" name="statut"/>
          </div>

          <div class="form-group">
              <label for="Emplacement">Votre emplacement:</label>
              <input type="text" class="form-control" name="Emplacement"/>
          </div>

          <div class="form-group">
              <label for="Telephone">Votre Telephone :</label>
              <input type="text" class="form-control" name="Telephone"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection