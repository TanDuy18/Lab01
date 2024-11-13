@extends('layout.admin.main')
@section('content')
<h5 style="font-weight: bold">Add Category</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="categoryname" style="font-weight: bold">Category Name:</label>
                    <input type="text" name="categoryName" id="categoryname" class="form-control">
                </div>
                <div class="form-group">
                    <input class="btn btn-info btn-sm" type="submit" value="Create Category">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
