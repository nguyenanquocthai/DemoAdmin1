@extends('admin.dashboard')
@section('title', 'Product Create')
@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Product Create</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.store.product') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Create</h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="category_id" class="form-control selectric">
                                        @foreach ($data as $key => $data_ca)
                                            <option value="{{ $data_ca->id }}"> {{ $data_ca->category_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="status" class="form-control selectric">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload file/image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" name="image" class="form-control" />
                                </div>
                            </div>
                            
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section>
    
@endsection
