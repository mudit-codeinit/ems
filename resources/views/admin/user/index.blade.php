@extends('admin.layouts.master')

 @section('inner-content')
  <section class="content-header">
      <h1>
        users
      </h1>
      
    </section>
<section class="content"> 
@if ($message = \Session::get('success'))
<div class="callout callout-success">
    <p>{{ $message }}</p>
</div>
@endif
 <div class="row">
     <a href="{{ url('user') }}" class="btn btn-default" style="float:right;margin: 14px;">Add User</a>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users List </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User Name</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                <tr>
                  <td>{{ $users->name }}</td>
                 
                   <td> @if($users->role == 1)
                  Admin
                  @else
                  Blog Writer
                  @endif</td>
                  <td><a href="{{ url("user/edit/$users->id") }}" class="btn btn-app">
                <i class="fa fa-edit"></i> Edit
              </a><a href="{{ url("user/delete/$users->id") }}" class="btn btn-app">
                <i class="fa fa-trash"></i> Delete
              </a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      </section>
      <script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
 @endsection