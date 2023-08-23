@extends('admin.layouts.master')

 @section('inner-content')
 <section class="content-header">
      <h1>
        Edit Branch
      </h1>
      
    </section>
<section class="content"> 
 <div class="row">
     <div class="col-md-6">
    <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{url('branch/update') }}" role="form">
                {{ csrf_field() }}
              <input type="hidden" name="id" value="{{  $model->id }}">  
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Branch Name</label>
                  <input type="text" name="name" value="{{ $model->name }}" required class="form-control" id="exampleInputEmail1" placeholder="Enter Brand name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                  <input type="text" name="location" required class="form-control" value="{{ $model->location }}" id="exampleInputEmail1" placeholder="Enter Branch name">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>
      </div>
      </section>
 @endsection