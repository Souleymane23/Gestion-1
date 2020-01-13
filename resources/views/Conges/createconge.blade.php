@extends('layouts.headfooter')

@section('headefooter')
    <div class="container">
        <form action="{{route('Conges')}}" method="post" >
            @csrf
            <div class="form-group">

                <input type="date" class="form-control" name="date_debut"  placeholder="date_debut">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="date_fin" placeholder="date_fin">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="motif"  placeholder="motif du conge">
            </div>
            <div class="form-group">
                <select name="personne_id" id="personne_id" class="form-control">
                    <option value=""></option>
                    @foreach($congeidmigran as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
@endsection
