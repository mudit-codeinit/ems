@extends('admin.layouts.master')

 @section('inner-content')
 <section class="content-header">
      <h1>
        Edit User
      </h1>
      
    </section>
<section class="content"> 
 <div class="row">
     <div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{url('user/update') }}" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $users->id  }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" required class="form-control" id="name" value="{{ $users->name }}" placeholder="Name">
                </div>
                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" required class="form-control" id="email" value="{{ $users->email }}" placeholder="email">
                </div>
                 <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" required class="form-control" id="password" placeholder="Password">
                </div>
                 <div class="form-group">
                  <label for="role">Role</label>
                  <select  required class="form-control" value="" name="role"  id="role">
                      
                      <option>---Select Role---</option>
                      
                      <option value="{{ $users->role }}" selected>@if($users->role == 1)
                  Admin
                  @else
                  Blog Writer
                  @endif</option>
                  <option value="1">Admin</option>
                  <option value="2">Blog Writer</option>
                  
                      
                  </select>
                </div>
                
                
                
                
                 <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              
              <!-- /.box-body -->
            </form>
            </div>
          </div>
          </div>
      </div>
      </section>
      
 @endsection