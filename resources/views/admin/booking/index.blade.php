@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.master')

 @section('inner-content')
 <style>
.table-scrollable{ border: none; }
</style>
  <section class="content-header">
      <h1>
        All Bookings
      </h1>
      
    </section>
<section class="content"> 
@if ($message = \Session::get('success'))
<div class="callout callout-success">
    <p>{{ $message }}</p>
</div>
@endif
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Booking List</h3>
			  <div class="btn-group pull-right">
            <div id="reportdaterange" class="btn default">
      <i class="fa fa-calendar"></i> &nbsp;
      <span> </span>
      <b class="fa fa-angle-down"></b>
    </div>
    </div>
	
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped booking-table">
                <thead>
                <tr>
                  <th>Year</th>
                  <th>Brand Name</th>
                  <th>Model Name</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Branch</th>
                  <th>Email</th>
                  <th>User IP</th>
                  <th>Status</th>
                  <th>Booking on</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($booking as $brands)
                <tr>
                  <td style="width:70px;">{{ $brands->year }}</td>
                  <td>{{ $brands->brand }}</td>
                  <td>{{ $brands->model }}</td>
                  <td>{{ $brands->phone }}</td>
                  <td>{{ $brands->date }}</td>
                  <td>{{ $brands->time }}</td>
                  <td>{{ $brands->branch }}</td>
                  <td>{{ $brands->email }}</td>
                  <td>{{ $brands->user_ip }}</td>
                  <td>@if($brands->approve == 0) disapprove @else approve @endif</td>
                  <td>{{ isset($brands->created_at) ? Carbon\Carbon::parse($brands->created_at)->format('d-m-Y H:i A') : '' }}</td>
                  <td><a href="{{ url("booking/approve/$brands->id") }}" class="btn btn-app">
                <i class="fa fa-edit"></i> Approve
              </a><a href="{{ url("booking/disapprove/$brands->id") }}" class="btn btn-app">
                <i class="fa fa-trash"></i> Disapprove
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
      <form action='' method='post' id="filter">
  {{ csrf_field() }}
  <input type="hidden" name="from_date" id="from_date"/>
  <input type="hidden" name="to_date" id="to_date"/>
</form>
@stop

@section('javascript')
      <script>
   $(document).ready(function(){
   $('#example1').DataTable( {
        "ordering": false,
        dom: 'Bfrtip',
         buttons: [
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                }
            },
            {
                extend: 'excelHtml5',
               exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                }
            },
            
        ]
    } );
});
$(function () {
  var initDashboardDaterange = function () {
    jQuery().daterangepicker && ($("#reportdaterange").daterangepicker({
      opens: "left",
      startDate:moment().subtract("month",1),
      endDate:moment(),
      startDate: '<?php echo $request->session()->get('rfrom_date'); ?>',
      endDate: '<?php echo $request->session()->get('rto_date'); ?>', 
      //minDate: "01/01/2012",
      //maxDate: "12/31/2014",
      dateLimit: {
        months: 36
      },
      showDropdowns: !1,
      showWeekNumbers: !0,
      timePicker: !1,
      timePickerIncrement: 1,
      timePicker12Hour: !0,
      ranges: {
        "This Month": [moment().startOf("month"), moment().endOf("month")],
        "Last Month": [moment().subtract("month", 1).startOf("month"), moment().subtract("month", 1).endOf("month")],
        //"This Year": [moment().startOf("year"), moment().endOf("year")],
        "Last Year": [moment().subtract("year", 1).startOf("year"), moment().subtract("year", 1).endOf("year")],
        "Last 12 months": [moment().subtract("days", 365), moment()]
      },
      buttonClasses: ["btn btn-sm"],
      applyClass: " blue",
      cancelClass: "default",
      format: "MM/DD/YYYY",
      separator: " to ",
      locale: {
        applyLabel: "Apply",
        fromLabel: "From",
        toLabel: "To",
        customRangeLabel: "Custom Range",
        daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
        monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        firstDay: 1
      }
    }, function (t, e) {
      $("#reportdaterange span").html(t.format("MMMM D, YYYY") + " - " + e.format("MMMM D, YYYY"))
    }),
    /* $("#reportdaterange span").html(moment().subtract("month",1).format('MMMM D, YYYY') + " - " + moment().format('MMMM D, YYYY')), */
    $("#reportdaterange span").html('<?php echo date("F d, Y", strtotime($request->session()->get('rfrom_date'))); ?>' + " - " + '<?php echo date("F d, Y", strtotime($request->session()->get('rto_date'))); ?>'),
    $("#reportdaterange").show())
  }

  initDashboardDaterange();

  $('#reportdaterange').on('apply.daterangepicker', function (ev, picker) {

    $('#from_date', '#filter').val(picker.startDate.format('YYYY-MM-DD'));
    $('#to_date', '#filter').val(picker.endDate.format('YYYY-MM-DD'));
    $('#filter').submit();
  });
  $('#reportdaterange').on('cancel.daterangepicker', function (ev, picker) {
    window.location = '<?php //echo site_url('dashboard/dashboard/resetFilter'); ?>';
  });
});
</script>
 @endsection