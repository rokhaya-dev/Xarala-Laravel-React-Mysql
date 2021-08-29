@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier l'utilisateur
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

      <form method="post" action="{{ route('clients.update', $client->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $client->nom }}"/>
          </div>

          <div class="form-group">
                <label for="prenom">Prenom:</label>
              <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}"/>
          </div>

          <div class="form-group">
              <label for="pseudo">Votre email:</label>
              <input type="text" class="form-control" name="pseudo" value="{{ $client->pseudo }}"/>
          </div>

          <div class="form-group">
              <label for="statut">Votre statut:</label>
              <input type="text" class="form-control" name="statut" value="{{ $client->statut }}"/>
          </div>

          <div class="form-group">
              <label for="Emplacement">Votre emplacement:</label>
              <input type="text" class="form-control" name="Emplacement" value="{{ $client->Emplacement }}"/>
          </div>

          <div class="form-group">
              <label for="Telephone">Votre Telephone :</label>
              <input type="text" class="form-control" name="Telephone" value="{{ $client->Telephone }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection