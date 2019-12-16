@extends('layouts.headfooter')

@section('headefooter')


    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="container">

        <a href="{{route('tablpointage')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter Employer</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">DatePointer</th>
                <th scope="col">Heure d'arrive</th>
                <th scope="col">Heure de sortie</th>
                <th scope="col">Absence</th>
                <th scope="col">Motifs</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprime</th>

            </tr>
            </thead>
            <tbody>
            @foreach($pointer as $pt)
                <tr>
                    <td>#</td>
                    <td>{{$pt->datejr}}</td>
                    <td>{{$pt->heure_arrive}}</td>
                    <td>{{$pt->heure_sorti}}</td>
                    <td>{{$pt->absence}}</td>
                    <td>{{$pt->motif }}</td>
                    <td><p><a class="btn btn-primary" >Editer</a></td>
                    <td><form action="" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                        </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
