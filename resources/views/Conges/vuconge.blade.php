@extends('layouts.adminlay')
@section('admin')
    <div class="alert alert-success">{{session('success')}}</div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tableau des conges</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tableau des conges</li>
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
                            <h3 class="card-title">Congés en cours</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Date debut</th>
                                    <th>Date fin</th>
                                    <th>Motif Conge</th>
                                    <th>Jour Restante</th>
                                    <th>Editer</th>
                                    <th>Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($conge as $vuconges)
                                    <tr>
                                        <td>{{$vuconges->date_debut}}</td>
                                        <td>{{$vuconges->date_fin}}</td>
                                        <td>{{$vuconges->motif}}</td>
                                        <td><?php
                                           $datef= $vuconges->date_fin;
                                           $dateday = date('Y-m-d');
                                           $dureesejour = (strtotime($datef) - strtotime($dateday))/86400;
                                           echo $dureesejour;
                                        ?>
                                        </td>

                                        <td><p><a class="btn btn-primary" href="{{route('edit_conge',['id'=>$vuconges->id])}}">Editer</a></td>
                                        <td><form action="Conges/{{$vuconges->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                                            </form></td>
                                    </tr>
                                @endforeach
                                <tr aria-label="...">
                                    {{$conge->links()}}
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
