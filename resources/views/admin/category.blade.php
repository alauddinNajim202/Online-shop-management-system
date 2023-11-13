@extends('admin.templete')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid page-body-wrapper">

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Category</h4>


                        <form action="{{route('admin.createcategory')}} " method="POST" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Category Name</label>
                                    <input  type="text" class="form-control text-light" name="category_name" placeholder="Enter category Name">
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Add category</button>
                        </form>

                    </div>
                    </div>
        </div>
        </div>
        </div>

    </div>
</div>

@endsection
