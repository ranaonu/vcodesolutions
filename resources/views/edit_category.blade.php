@extends('layouts.aaryav')
@section('content')
<link
      rel="stylesheet"
      type="text/css"
      href="<?php echo url('/').'/public/quill/dist/quill.snow.css?time='.time().''?>"
    />
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Category</h1>
        </div>
      </div>
    </div>
  </div>
</section>

      <br>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        Edit Category
      </div>

    </div>
    {!! Form::open(['url' => url('/add-new-category'),'id'=>'addCategoryForm',  'class' => 'addCategoryForm m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
    <div class="row">
      <div class="col-lg-6">
      <!-- <div class="col-lg-12">
        <label for="category" class="col-md-6 col-form-label text-md-end">{{ __('Select Parent Category') }}</label>
         <select name="parent_category" class="form-control required removeErrorField" id="changeType">                                    
            <option value="">--select Parent category--</option>
            <option value="1">By Dosage Form</option>
            <option value="2">By Therapy wise</option>
        </select>
      </div> -->

      <div class="col-lg-12">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control required removeErrorField" value="{{$categories['name']}}">
      </div>

      <div class="col-lg-12">
        <label for="packing" class="col-md-4 col-form-label text-md-end">{{ __('Add Image') }}</label>
        <input
            type="file"
            id="addPhotos"
            class="form-control demo"
            data-position="bottom left"
            name="image"
            value=""
            accept="image/png, image/gif, image/jpeg,image/jpg"
        />
      </div>

      <div class="col-lg-12">
      </div>
      <input type="hidden" name="edit_id" value="{{$id}}">
      <div class="col-lg-12"> 
        <br>
        <br>
        <button type="button" class="btn btn-primary" id="addCategory">
            {{ __('Submit') }}
        </button>
      </div>


    </div>
    </div>
       {{ Form::close() }}

  </div>
</section>


@endsection


@section('js-files')

<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>

@endsection('js-files')