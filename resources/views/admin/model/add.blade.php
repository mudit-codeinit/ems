@extends('admin.layouts.master')

 @section('inner-content')
 <section class="content-header">
      <h1>
        Add Model
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
            <form method="POST" action="{{url('model/store') }}" role="form">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Model Name</label>
                  <input type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder="Enter Model name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Brands</label>
                  <select name="brand" required class="form-control">
                      <option>---Select Brand---</option>
                      @foreach($brand as $brands)
                      <option value="{{ $brands->name }}">{{ $brands->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                <input type="checkbox" name="top" value="1"> Top<br>
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