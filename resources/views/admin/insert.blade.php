@extends('admin.base')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <form action=""method="">
                       <div class="mb-3">
                        <label class="">title</label>
                        <input type="text"name="title"class="form-control"value="{{ old('title') }}">
                        @error('title')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                       <div class="mb-3">
                        <label class="category_id"></label>
                        <input type="text"name="category_id"class="form-control"value="{{ old('categpry_id') }}">
                        @error('category_id')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                       <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control"enctype="multipart/data">
                        @error('image')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="">Image2</label>
                        <input type="file" name="image2" class="form-control"enctype="multipart/data">
                        @error('image2')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                       <div class="mb-3">
                        <label class="">price</label>
                        <input type="text"name="price"class="form-control"value="{{ old('price') }}">
                        @error('price')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                       <div class="mb-3">
                        <label class="">offer_price</label>
                        <input type="text"name="offer_price"class="form-control"value="{{ old('offer_price') }}">
                        @error('offer_price')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                       <div class="mb-3">
                        <label class="">qty</label>
                        <input type="text"name="qty"class="form-control"value="{{ old('qty') }}">
                        @error('qty')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                     
                       <div class="mb-3">
                        <label class="">description</label>
                        <input type="text"name="description"class="form-control"value="{{ old('description') }}">
                        @error('description')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                     
                       <div class="mb-3">
                        <label class="">designed_by/label>
                        <input type="text"name="designed_by"class="form-control"value="{{ old('designed_by') }}">
                        @error('designed_by')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection