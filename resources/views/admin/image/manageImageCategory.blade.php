@extends('admin.master')
@section('title')
    Manage-Image
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($category_images as $categoryimage)

                        <tr class="text-center">
                            <td> {{ $i++ }} </td>
                            <td> {{ $categoryimage->category_name}} </td>
                            <td>
                                <img src="{{asset($categoryimage->cImage)}}" alt="category-image" style="width: 100px;height: 100px; border-radius: 50%; border: 1px solid #eee;">
                            </td>
                            <td>
                                    <a href="{{ route('edit-image',['id' => $categoryimage->id]) }}" class="btn btn-primary">Edit Company</a>
                                <a>
                                    <form action="{{route('delete-image')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $categoryimage->id }}" name="categoryimage_id">
                                        <input type="submit" value="Delete Image" class="btn btn-danger" onclick="return confirm('Are you confirm delete this!!')"> 
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
