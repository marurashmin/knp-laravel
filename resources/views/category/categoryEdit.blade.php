@extends('layouts.master')

@section('title')
    Category-Edit
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="clearfix">
                            <a href="{{ route('category.index') }}" type="button" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-2 p-5">
                    <form class="row" method="POST" enctype="multipart/form-data" action="{{ route('category.update',$categories->id) }}" data-parsley-validate>
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $categories->id }}">
                        <div class="col-md-12">
                            <h5 class="card-title">Edit Category</h5>
                            <div class="col-md-9 mt-2">
                                <label for="name" class="form-label">Name <span class="text-danger ">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $categories->name }}" required>
                            </div>
                            <div class="col-md-9 mt-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description">{{ $categories->description }}</textarea>
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

@endsection
