@extends('admin.layouts.master')

 @section('inner-content')
 <section class="content-header">
      <h1>
        Add User
      </h1>
      
    </section>
<section class="content"> 
 <div class="row">
     <div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{url('user/store') }}" role="form">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="username">Name</label>
                  <input type="text" name="name" required class="form-control" id="username" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" required class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" required class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="role">Role</label>
                  <select name="role" required class="form-control">
                      <option>---Select Role---</option>
                      <option value="1">Admin</option>
                     <option value="2">Blog Writer</option>
                  </select>
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