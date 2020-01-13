@extends('layouts.adminlay')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Formulaire General</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
                    <div class="col-md-9">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ajout Employer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('update_employer',['id'=>$pers->id])}}"method="post">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">nom</label>
                                        <input type="text" class="form-control" name="nom" value="{{$pers->nom}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Prenom</label>
                                        <input type="text" class="form-control" name="prenom" value="{{$pers->prenom}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Matricule</label>
                                        <input type="number" class="form-control" name="matricule"  placeholder="matricule" value="{{$pers->matricule}}" disabled>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Statut</label>
                                        <input type="text" class="form-control" name="statut" value="{{$pers->statut}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fonction</label>
                                        <input type="text" class="form-control" name="fonction" value="{{$pers->fonction}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">departement</label>
                                        <select name="department_id" id="department_id" class="form-control">
                                            <option value=""></option>
                                            @foreach($reidedit as $key => $value)
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Adresse email</label>
                                        <input type="email" class="form-control" name="email" value="{{$pers->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numero telephone</label>
                                        <input type="text" class="form-control" name="telephone"  value="{{$pers->telephone}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Domicile</label>
                                        <input type="text" class="form-control" name="adresse" value="{{$pers->adresse}}">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                </div>
@endsection
