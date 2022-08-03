@extends('layouts.master')

@section('title')
    Category-Add
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
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <h5 class="card-title">Add Category</h5>
                            <div class="col-md-9">
                                <label for="name" class="form-label">Name <span class="text-danger ">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-9 mt-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>
                            <div class="col-md-9 mt-2">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="clearfix">
                                        <button type="submit" class="btn btn-primary">Save</button>
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
