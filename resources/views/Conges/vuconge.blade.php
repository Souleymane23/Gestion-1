@extends('layouts.headfooter')

@section('headefooter')
    <div class="container">
        <a href="{{route('planifier_conge')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Planifier Conge</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th scope="col">Motif Conge</th>
                <th scope="col">Matricule</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conge as $vuconges)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$vuconges->date_debut}}</td>
                    <td>{{$vuconges->date_fin}}</td>
                    <td>{{$vuconges->motif}}</td>
                    <td>{{$vuconges->personne_id}}</td>
                    
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
