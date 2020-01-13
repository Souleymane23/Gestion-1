@extends('layouts.adminlay')
@section('admin')

    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="container">

        <a href="{{route('ajout_employers')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter Employer</a>
    </div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste Employers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Liste Employers</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Listes des Employer</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>Fonction</th>
                                    <th>statut</th>
                                    <th>email</th>
                                    <th>telephone</th>
                                    <th>Editer</th>
                                    <th>Supprime</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($page as $perso)
                                <tr>
                                    <td>{{$perso->nom}}</td>
                                    <td>{{$perso->prenom}}</td>
                                    <td>{{$perso->fonction}}</td>
                                    <td>{{$perso->statut}}</td>
                                    <td>{{$perso->email}}</td>
                                    <td>{{$perso->telephone}}</td>
                                    <td><p><a class="btn btn-primary" href="{{route('edit_employer',['id'=>$perso->id])}}">Editer</a></td>
                                    <td><form action="personne/{{$perso->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                                        </form></td>
                                </tr>
                                @endforeach
                                <tr aria-label="...">
                                     {{$page->links()}}
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
@endsection
