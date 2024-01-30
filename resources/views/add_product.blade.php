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
          <h1 class="text-capitalize mb-5 text-lg">Add Products</h1>
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
        Add New Product
      </div>

    </div>
    {!! Form::open(['url' => url('/add-new-product'),'id'=>'addProductForm',  'class' => 'addProductForm m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
    <div class="row">
      <div class="col-lg-6">
      <div class="col-lg-12 pl-4 mt-4 ">
        <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Select Category') }}</label>
         <select name="service_id" class="form-control required removeErrorField" id="changeType">                                    
            <option value="">--select category--</option>
            @if(count($categories)>0)
                    @foreach($categories as $key => $ph)
                      <option value="{{$ph['id']}}" @if ($ph['id'] == $id) {{'selected="selected"'}} @endif >{{$ph['name']}}</option>
                    @endforeach
                 @endif
        </select>
      </div>

      <div class="col-lg-12 pl-4 mt-4">
        <label for="composition" class="col-md-4 col-form-label text-md-end">{{ __('Composition') }}</label>
        <input type="text" name="composition" class="form-control required removeErrorField">
      </div>

     <!--  <div class="col-lg-12">
        <label for="packing" class="col-md-4 col-form-label text-md-end">{{ __('Add Product Image') }}</label>
        <input
            type="file"
            id="addPhotos"
            class="form-control demo required removeErrorField"
            data-position="bottom left"
            name="profile_pic"
            value=""
            accept="image/png, image/gif, image/jpeg,image/jpg"
        />
      </div> -->

      <!-- <div class="col-lg-6">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control required removeErrorField">
      </div>

      <div class="col-lg-6">
       <label for="packing" class="col-md-4 col-form-label text-md-end">{{ __('Packing') }}</label>
        <input type="text" name="packing" class="form-control required removeErrorField">
      </div>

     

      

      <input type="hidden" name="content" id="hiddenArea">
      <div class="col-lg-6">
        <label for="packing" class="col-md-4 col-form-label text-md-end">{{ __('Add Content') }}</label>
        <div id="editor" name="blog-text" style="height: 100px">
                   
        </div>
      </div> -->

      <div class="col-lg-12 pl-4 mt-4">
        <button type="button" class="btn btn-primary" id="addProduct">
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
<script src="<?php echo url('/').'/public/quill/dist/quill.min.js?time='.time().''?>"></script>
<script type="text/javascript">

  var toolbarOptions = [
                ['bold', 'italic', 'underline'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                     // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                //[ 'image' ],          // add's image support
                [{ 'color': [] }], 
                [{ 'align': [] }],

                ['clean']                                         // remove formatting button
            ];


  var quill = new Quill("#editor", {
    theme: 'snow',
    modules: {

                toolbar: toolbarOptions
            }
      });
</script>
@endsection('js-files')