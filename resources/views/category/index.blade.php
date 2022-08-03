@extends('layouts.master')

@section('title')
    Category
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="clearfix">
                                    <h6 class="font-weight-bolder mb-0 text-capitalize">Category Table</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="clearfix">
                                    <a href="{{ route('category.create') }}" type="button" class="btn btn-primary">Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="dataTable" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center text-secondary text-uppercase text-secondary text-xxs font-weight-bold opacity-7">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                    <tr>
                                        <input type="hidden" class="catdelete_val_id" value="{{ $category->id }}">
                                        <td class="text-xs align-middle text-center font-weight-bold">{{ ++$i }}</td>
                                        <td class="text-xs align-middle text-center font-weight-bold">{{ $category->title }}</td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="p-2">
                                                <a href="{{ route('category.edit',$category->id) }}"><i class="fas fa-user-edit text-secondary"></i></a>
                                            </span>
                                            <span class="deleteCategory p-2">
                                                <a href="javascript:void(0)"><i class="fas fa-trash text-secondary"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    @if(count($category->childs))
				                        @include('category.manageChild',['childs' => $category->childs])
				                    @endif
                                    @endforeach
                                    @else
                                <tr>
                                    <td>No records found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        {{-- {{$categories->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        
        $('.deleteCategory').click(function (e) {
            var delete_id = $(this).closest("tr").find('.catdelete_val_id').val();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {
                            "_token": "{{ csrf_token() }}",
                            "id": delete_id,
                        };
                        $.ajax({
                            url: '/category/' + delete_id,
                            type: 'DELETE',
                            data: data,
                            success: function (response) {
                                swal(response.status , {
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                });

                            },
                            error: function() {
                                console.log('error');
                            }
                        });

                    }
                });

        });
    </script>
@endsection
