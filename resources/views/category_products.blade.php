@extends('layouts.aaryav')
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize text-lg">Our Products</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section_add_products">
  <div class="container">
    <!-- <div class="row">
      <div class="col-lg-10">
        <a href ="{{url('/add_product')}}">Add Products</a>
      </div>
      <div class="col-lg-2">
        <a href ="{{url('/add_category')}}">Add Category</a>
      </div>
    </div> -->
  </div>
</section>

<section class="section1 service-2">
  <div class="container">
    <div class="row">
    
      <div class="col-lg-12" data-groups="[&quot;cat2&quot;]">
        <table class="table table-bordered ">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Composition</th>
              @auth
              <th>Action</th>
              @endauth 
            </tr>
          </thead>
          <tbody>
            @if(count($category_products)>0)
              @foreach($category_products as $key => $ph)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$ph['composition']}}</td>
                  @auth
                  <td>
                    <button type="button" class="btn-danger btn-sm text-white deleteAssessment" row-id="{{$ph['id']}}" id="deleteAssessment" modelName="subservices" delete-rowId="teamList-">
                          Delete
                        </button>
                  </td>
                  @endauth 
                </tr>
              @endforeach
              @else
                <tr>
                  <td>No record found</td>
                </tr>
            @endif
          </tbody>
        </table>


       
    
    </div>
  </div>
</section>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>

@endsection('js-files')