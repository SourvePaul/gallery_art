@extends('admin.master')
@section('title')
    Add-Image
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4 fw-bold">Category Image FORM</h3></div>
                    <h5 style="color: #0c4128; text-align: center;">{{session('message')}}</h5>
                    <div class="card-body">
                        <form action="{{ route('new-image') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="category_id">
                                            <option value=""> Select a Image Category</option>
                                            @foreach($Categories as $Category)
                                                <option value="{{ $Category->id }}"> {{ $Category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputCompanyLogo" name="cImage" type="file" />
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="SAVE" class="form-control btn btn-outline-dark fw-bold">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
