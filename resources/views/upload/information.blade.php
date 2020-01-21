@extends('layouts.adminlay')

@section('admin')
<div class="contenaire">
  <img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}"
  width="50">
</div>
@endsection
