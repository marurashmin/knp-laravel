@extends('layouts.master')

@section('title')
    Product-Edit
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="clearfix">
                            <a href="{{ route('product.index') }}" type="button" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-2 p-5">
                    <form class="row" method="POST" enctype="multipart/form-data" action="{{ route('product.update',$product->id) }}" data-parsley-validate>
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="col-md-12">
                            
                            <div class="col-md-9 mt-2">
                                <label for="name" class="form-label">Name <span class="text-danger ">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="col-md-9 mt-2">
                                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                <select name="category" id="category" class="form-control selectBox @error('category') is-invalid @enderror">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $row)
                                        <option value="{{ $row->id }}" {{$product->category == $row->id ? 'selected' : ''}}>{{$row->title}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-9 mt-2">
                                <label for="description" class="form-label">Description:</label>
                                <textarea  class="form-control" name="description" id="description">{{$product->description}}</textarea>
                            </div>
                            <div class="col-md-9 mt-2">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="clearfix">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
<script>
        $(function(){
            $("#published_date").datepicker({
                format: "dd/mm/yyyy",
                autoclose: true
            });
        });
</script>
@endsection
