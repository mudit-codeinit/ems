@extends('admin.layouts.master')

 @section('inner-content')
  <section class="content-header">
      <h1>
        Brands
      </h1>
      
    </section>
<section class="content"> 
@if ($message = \Session::get('success'))
<div class="callout callout-success">
    <p>{{ $message }}</p>
</div>
@endif
 <div class="row">
     <a href="{{ url('add_brand') }}" class="btn btn-default" style="float:right;margin: 14px;">Add Brand</a>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Brands List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Brand Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($brand as $brands)
                <tr>
                  <td>{{ $brands->name }}</td>
                  <td><a href="{{ url("brand/edit/$brands->id") }}" class="btn btn-app">
                <i class="fa fa-edit"></i> Edit
              </a><a href="{{ url("brand/delete/$brands->id") }}" class="btn btn-app">
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
        dom: 'Bfrtip',
         buttons: [
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0, 1 ]
                }
            },
            {
                extend: 'excelHtml5',
               exportOptions: {
                    columns: [ 0, 1 ]
                }
            },
            
        ]
    } );
  })
</script>
 @endsection