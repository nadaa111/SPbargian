@extends('layouts.admin')

@section("content")

<div class="row">
  <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit Category
                <a href="{{url('admin/category/')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
            </h3>
        </div>
        <div class="card-body">
           <form action="{{url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
           <div class="row">

          <div class="col-md-6 mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control"/>
            @error('name') <small class ="text-danger">{{$message}}</small> @enderror

          </div>

          <div class="col-md-6 mb-3">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ $category->slug }}" class="form-control"/>
            @error('slug') <small class ="text-danger">{{$message}}</small> @enderror
          </div>
          <div class="col-md-12 mb-3">
            <label>Description</label>
            <input name="description" value="{{ $category->description }}" class="form-control" rows="3"></input>
            @error('description') <small class ="text-danger">{{$message}}</small> @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control"/>
            <img src="{{ asset('/upload/category'.$category->image) }}" width=60px height="60px" />
            @error('image') <small class ="text-danger">{{$message}}</small> @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label>Status</label><br/>
            <input type="checkbox" name="status"  {{ $category->status== '1'? 'checked':''  }} />
          </div>
          <div class="col-md-12">
            <h4>SEO Tags</h4>
          </div>
          <div class="col-md-6 mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title"  value="{{ $category->meta_title }}" class="form-control"/>
          </div>
          <div class="col-md-12 mb-3">
            <label>Meta Keyword</label>
            <input name="meta_Keyword"   value="{{ $category->meta_Keyword}}"  class="form-control" rows="3"></input>
          </div>

          <div class="col-md-12 mb-3">
            <label>Meta Description</label>
            <input name="meta_description"   value="{{ $category->meta_description }}"   class="form-control" rows="3"></input>
          </div>
          <div class="col-md-12 mb-3">
            <button type="submit" class="btn btn-primary float-end">Update</button>
           </div>

          </div>
           </form>
        </div>
    </div>
  </div>
</div>

@endsection