@extends('admin.master')
@section('title')
    Edit Image
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Image Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-image') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $categoryimage->id }}" name="categoryimage_id">
                            <div class="row mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <select class="form-control" name="category_id">
                                        <option value=""> Select a Category </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputImage" name="cImage" type="file"/>
                                <img src="{{ asset($categoryimage->cImage) }}" style="height: 100px; width: 100px" alt="edit_image">
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="Edit Save" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
