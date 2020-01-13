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
                        <h1>Tableau des departements</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tableau des departements</li>
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
                            <h3 class="card-title">Departement</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom departement</th>
                                    <th>Editer</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($deptmt as $dp)
                                    <tr>
                                        <td>#</td>
                                        <td>{{$dp->nom_departemet}}</td>

                                        <td><p><a class="btn btn-primary" href="{{route('edit_departement',['id'=>$dp->id])}}" >Editer</a></td>
                                        <td><form action="department/{{$dp->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                                            </form></td>
                                    </tr>
                                @endforeach
                                {{$deptmt->links()}}
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
