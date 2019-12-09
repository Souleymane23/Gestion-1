@extends('layouts.headfooter')

@section('headefooter')
    <div class="container">
        <form action="{{route('update_employer',['id'=>$pers->id])}}"method="post">
            @csrf
            @method('patch')

            <div class="form-group">

                <input type="text" class="form-control" name="nom"  placeholder="nom" value="{{$pers->nom}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="prenom" placeholder="prenom" value="{{$pers->prenom}}">
            </div>
            <div class="form-group">

                <input type="number" class="form-control" name="matricule"  placeholder="matricule" value="{{$pers->matricule}}" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="fonction" placeholder="status" value="{{$pers->fonction}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="statu" placeholder="status" value="{{$pers->statut}}">
            </div>
            <div class="form-group">

                <input type="email" class="form-control" name="email"  placeholder="adresse email" value="{{$pers->email}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="telephone"  placeholder="numero telephone" value="{{$pers->telephone}}">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="adresse" placeholder=" adresse" value="{{$pers->adresse}}">
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
@endsection
