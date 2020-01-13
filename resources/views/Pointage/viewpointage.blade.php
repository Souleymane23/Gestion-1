@extends('layouts.headfooter')

@section('headefooter')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <div class="container">
        <h3>Pointage Personnel</h3>
        <form action="{{route('pointage')}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="date" class="form-control" name="datejr">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Heure arrive</label>
                <input type="time" class="form-control" name="heure_arrive">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Heure sorti</label>
                <input type="time" class="form-control" name="heure_sorti">
            </div>
            <label for="exampleInputEmail1">Absence</label>
            <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" name="absence" value="option1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Motif absence</span>
                </div>
                <input type="text" class="form-control" name="motif" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Matricule</label>
                <select name="personne_id" name="personne_id" class="form-control">
                    <option value=""></option>
                    @foreach($pointage as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>

            </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
    @endsection
