@extends('layouts.headfooter')

@section('headefooter')

    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="container">

        <a href="{{route('ajout_employers')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter Employer</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">matricule</th>
                <th scope="col">statut</th>
                <th scope="col">email</th>
                <th scope="col">telephone</th>
                <th scope="col">adresse</th>
                <th scope="col">Editer</th
            </tr>
            </thead>
            <tbody>

                @foreach($persos as $perso)
                    <tr>
                    <th scope="row">#</th>
                    <td>{{$perso->nom}}</td>
                    <td>{{$perso->prenom}}</td>
                    <td>{{$perso->matricule}}</td>
                   <td>{{$perso->statut}}</td>
                   <td>{{$perso->email}}</td>
                   <td>{{$perso->telephone}}</td>
                   <td>{{$perso->adresse}}
                   </td>
                        <td><p><a href="{{route('edit_employer',['id'=>$perso->id])}}">Editer</a></td>
                    </tr>
                    @endforeach


            </tbody>
        </table>
    </div>
@endsection
