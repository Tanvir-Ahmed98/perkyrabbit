@extends('layouts.app')

@section('content')


<form action="{{route('products.store')}}" method="post">
        @csrf
      <label for="exampleInputEmail1">Product Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="product_name" placeholder="Product Name">
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection 