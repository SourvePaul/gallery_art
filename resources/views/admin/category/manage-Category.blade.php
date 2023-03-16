@extends('admin.master')
@section('title')
    Manage-Category
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($categories as $category)

                        <tr class="text-center">
                            <td> {{ $i++ }} </td>
                            <td> {{ $category->category_name}} </td>
                            <td>{{ $category->status==1?'Published':'Unpublished' }}</td>
                            <td>
                                @if($category->status==1)
                                    <a href="{{route('cStatus',['id' => $category->id]) }}" class="btn btn-warning">Unpublished</a>
                                @else
                                <a href="{{route('cStatus',['id' => $category->id])}}" class="btn btn-success">Published</a>
                                    @endif
                                <br>
                                    <a href="{{ route('edit-category',['id' => $category->id]) }}" class="btn btn-primary">Edit Category</a>
                                <a>
                                    <form action="{{route('delete-category')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $category->id }}" name="category_id">
                                        <input type="submit" value="Delete category" class="btn btn-danger" onclick="return confirm('Are you confirm delete this!!')">
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
