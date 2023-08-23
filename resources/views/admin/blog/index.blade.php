@extends('admin.layouts.master')

 @section('inner-content')
  <section class="content-header">
      <h1>
        Blogs
      </h1>
      
    </section>
<section class="content"> 
@if ($message = \Session::get('success'))
<div class="callout callout-success">
    <p>{{ $message }}</p>
</div>
@endif
 <div class="row">
     <a href="{{ url('add_blog') }}" class="btn btn-default" style="float:right;margin: 14px;">Add Blog</a>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Blogs List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Blog Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($brand as $brands)
                <tr>
                  <td>{{ $brands->title }}</td>
                  <td><a href="{{ url("admin-blog/edit/$brands->id") }}" class="btn btn-app">
                <i class="fa fa-edit"></i> Edit
              </a><a href="{{ url("admin-blog/delete/$brands->id") }}" class="btn btn-app">
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
    $('#example1').DataTable( {
    } );
  })
</script>
 @endsection