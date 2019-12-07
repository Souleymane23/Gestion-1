@extends('layouts.headfooter')

@section('headefooter')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <div class="container">
<form action="{{route('ajout_employer')}}" method="post" >
    @csrf
    <div class="form-group">

        <input type="text" class="form-control" name="nom"  placeholder="nom">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="prenom" placeholder="prenom">
    </div>
    <div class="form-group">

        <input type="number" class="form-control" name="matricule"  placeholder="matricule">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="statut" placeholder="status">
    </div>
    <div class="form-group">

        <input type="email" class="form-control" name="email"  placeholder="adresse email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="telephone"  placeholder="numero telephone">
    </div>
    <div class="form-group">

        <input type="text" class="form-control" name="adresse" placeholder=" adresse">
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
@endsection
