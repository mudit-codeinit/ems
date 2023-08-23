//@inject('request', 'Illuminate\Http\Request')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          @if(auth()->user()->role==1)
        <li>
          <a href="{{url('brand')}}">
            <i class="fa fa-calendar"></i> <span>Brands</span>
          </a>
        </li>
        <li>
          <a href="{{url('model')}}">
            <i class="fa fa-car"></i> <span>Models</span>
          </a>
        </li>
         <li>
          <a href="{{url('branches')}}">
            <i class="fa fa-location-arrow"></i> <span>Branches</span>
          </a>
        </li>
        <li>
          <a href="{{url('booking-approve')}}">
            <i class="fa fa-address-book-o"></i> <span>Booking</span>
          </a>
        </li>
        <li>
          <a href="{{url('users')}}">
            <i class="fa fa-user-o"></i> <span>User</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->role==1 || auth()->user()->role==2 )
         <li>
          <a href="{{url('admin-blog')}}">
            <i class="fa fa-address-book-o"></i> <span>Blogs</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin-blog-cat')}}">
            <i class="fa fa-address-book-o"></i> <span>Blogs Categories</span>
          </a>
        </li>
        
         <li>
          <a href="{{url('logout')}}">
            <i class="fa fa-arrow-right"></i> <span>Logout</span>
          </a>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>