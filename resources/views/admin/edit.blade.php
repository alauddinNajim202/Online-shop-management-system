@extends('admin.templete')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid page-body-wrapper">

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Update Category</h4>

                        <form action="{{route('admin.updatecategory')}} " method="POST" class="forms-sample">
                            @csrf
                            <input type="hidden" value="{{$category->id}}" name="category_id">
                                <div class="form-group">
                                    <label for="exampleInputName1">Category Name</label>
                                    <input  type="text" class="form-control text-light" name="category_name" value="{{$category->category_name}}" >
                                </div>
                                <button type="submit" class="btn btn-success me-2">Update category</button>
                        </form>

                    </div>
                    </div>
        </div>
        </div>
        </div>

    </div>
</div>

@endsection
