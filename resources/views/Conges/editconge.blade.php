@extends('layouts.headfooter')

@section('headefooter')
    <div class="container">
        <form action="{{route('updateconges',['id'=>$congesudate->id])}}" method="post" >
            @csrf
            @method('patch')
            <div class="form-group">

                <input type="date" class="form-control" name="date_debut"  value="{{$congesudate->date_debut}}">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="date_fin" value="{{$congesudate->date_fin}}">
            </div>


            <div class="md-form">
                <label for="form7">Material textarea</label>
                <textarea id="form7" class="md-textarea form-control" name="motif"  rows="3"><?=$congesudate->motif?></textarea>

            </div>
            <hr>
            <div class="form-group">
                <select name="personne_id" id="personne_id" class="form-control">
                    <option value="" ></option>
                    @foreach($recupidperso as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
@endsection
