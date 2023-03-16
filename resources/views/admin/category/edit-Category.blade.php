@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Company Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $category->id }}" name="category_id">
                            <div class="row mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputCategoryName" value="{{ $category->category_name }}" name="category_name" type="text" />
                                    <label for="inputCategoryName">Category Name</label>
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="UPDATE SAVE" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
