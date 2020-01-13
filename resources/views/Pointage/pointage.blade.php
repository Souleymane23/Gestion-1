@extends('layouts.adminlay')
@section('admin')
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tableau des Pointages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tableau des pointage</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">pointage</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>DatePointer</th>
                                    <th>Heure d'arrive</th>
                                    <th>Heure de sortie</th>
                                    <th>Absence</th>
                                    <th>Motifs</th>
                                    <th>Editer</th>
                                    <th>Supprime</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pointer as $pt)
                                    <tr>
                                        <td>{{$pt->datejr}}</td>
                                        <td>{{$pt->heure_arrive}}</td>
                                        <td>{{$pt->heure_sorti}}</td>
                                        <td>{{$pt->absence}}</td>
                                        <td>{{$pt->motif }}</td>
                                        <td><p><a class="btn btn-primary" href="{{route('edit_pointage',['id'=>$pt->id])}}">Editer</a></td>
                                        <td><form action="Pointage/{{$pt->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                                            </form></td>
                                    </tr>
                                @endforeach
                                <tr aria-label="Pagination">
                                    {{$pointer->links()}}
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
