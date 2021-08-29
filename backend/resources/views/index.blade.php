@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
        <td>ID</td>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
		<th>Status</th>
		<th>Location</th>
		<th>Phone</th>
		<td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nom}}</td>
            <td>{{$user->prenom}}</td>
            <td>{{$user->pseudo}}</td>
            <td>{{$user->statut}}</td>
            <td>{{$user->Emplacement}}</td>
            <td>{{$user->Telephone}}</td>
            <td><a href="{{ route('clients.edit', $user->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('clients.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
