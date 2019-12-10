@extends('layouts.headfooter')

@section('headefooter')
    <div class="alert alert-success">{{session('success')}}</div>
    <div class="container">
        <a href="{{route('planifier_conge')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Planifier Conge</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th scope="col">Motif Conge</th>
                <th scope="col">Jour Consomme</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>

            </tr>
            </thead>
            <tbody>
            @foreach($conge as $vuconges)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$vuconges->date_debut}}</td>
                    <td>{{$vuconges->date_fin}}</td>
                    <td>{{$vuconges->motif}}</td>
                    <td>20</td>

                    <td><p><a class="btn btn-primary" href="{{route('edit_conge',['id'=>$vuconges->id])}}">Editer</a></td>
                    <td><form action="Conges/{{$vuconges->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                        </form></td>
                </tr>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
