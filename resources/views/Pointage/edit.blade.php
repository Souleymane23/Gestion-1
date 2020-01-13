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
                        <h3 class="card-title">Editer Pointage</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('update_Pointage',['id'=>$poita->id])}}"method="post">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date pointe</label>
                                <input type="date" class="form-control" name="datejr" value="{{$poita->datejr}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Heure d'arrive</label>
                                <input type="time" class="form-control" name="heure_arrive" value="{{$poita->heure_arrive}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Heure de sorti</label>
                                <input type="time" class="form-control" name="heure_sorti"   value="{{$poita->heure_sorti}}" >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">absence</label>
                                <input type="text" class="form-control" name="absence" value="{{$poita->absence}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">motif</label>
                                <input type="text" class="form-control" name="motif" value="{{$poita->motif}}">
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
