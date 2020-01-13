@extends('layouts.headfooter')

@section('headefooter')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    <div class="container">
        <form action="{{route('adddepart')}}" method="post" >
            @csrf
            <div class="form-group">

                <input type="text" class="form-control" name=" nom_departemet"  placeholder="Nom departement...">
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
@endsection
