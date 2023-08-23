@extends('admin.layouts.master')

 @section('inner-content')
 <section class="content-header">
      <h1>
        Add Branch
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
            <form method="POST" action="{{url('branch/store') }}" role="form">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Branch Name</label>
                  <input type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder="Enter Branch name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                  <input type="text" name="location" required class="form-control" id="exampleInputEmail1" placeholder="Enter Branch name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>
      </div>
      </section>
 @endsection