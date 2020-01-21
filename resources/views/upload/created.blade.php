@extends('layouts.adminlay')

@section('admin')
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Ajouter un Fichier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('insertfile')}}"  method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Tite Fichier">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="form-goup">
          <div class="custom-file">
              <input type="file" name="filename"  class="filename" id="validatedCustomFile" >
              <label class="custom-file-label" for="validatedCustomFile">Choisir fichier...</label>
          </div>
        </div>
      <hr>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Ajouter</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
</div>
@endsection
