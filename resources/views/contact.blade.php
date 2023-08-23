@extends('layouts.header3')

@section('content')
<style>
/* The Modal (background) */
.modal-header
{
    justify-content:center;
}
.modal-dialog
{
    height: 100%;
    display: flex;
    align-items: center;
    margin: 0px auto;
}
.modal-content
{
    width:90%;
    margin: auto;
}
.modal 
{
    background: rgba(255, 255, 255, 0.7);
}
.modal-body {
    padding: 20px 20px 30px;
}
button.close
{
    position: absolute;
    right: -12px;
    background: #f24026;
    top: -12px;
    color: #fff;
    width: 25px;
    height: 25px;
    opacity: 1;
    font-size: 15px;
    border-radius: 25px;
    line-height: 25px;
}
button.close:hover
{
    color: #fff!important;
    opacity: 0.6;
}
.modal .btn
{
    color: #fff;
    background-color: #f24026;
    border-color: #f24026;
}
.modal .btn:hover
{
    opacity:0.7;
}
</style>
        <div class="container-fluid">
            <div class="row top_bg">
                <div class="col-md-12 text-center">
                    <h1 class="font-poiret font-white text-uppercase">Contact US</h1>
                </div>
            </div>
        </div>
        <section class="bg-grey abt-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="contact_area">
                            <i class="fa fa-map-marker"></i>
                            <h4>ADDRESS</h4>
                            <p style="margin-bottom: 0;">Expatcarbuyers - Office No. 17,</p>
                            <p style="margin-bottom: 0;">Sheikh Zayed Road, Umm Al Sheif, Dubai,</p>
                            <p style="margin-bottom: 0;">United Arab Emirate</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="contact_area">
                            <i class="fa fa-envelope"></i>
                            <h4>EMAIL</h4>
                            <p><a href="mailto:contact@expatcarbuyers.com">contact@expatcarbuyers.com</a></p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="contact_area">
                            <i class="fa fa-phone"></i>
                            <h4>PHONE</h4>
                            <p><a href="tel:+971561774555">+971 56 1774555</a></p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br><br>
            <div class="container">
                <div class="row">
                 <div class="col-md-6">
   <div class="message-box">
      <h3>Send Message Us</h3>
      <form  method="POST" class="contact-form myform">
          {{ csrf_field() }}
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"><input type="text" name="name" placeholder="Name" id="name" required="required" class="form-control" aria-label="Name">
                <span class="err_msg error_name" style="display:none;color:red;">This field is required<span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"><input type="email" name="email" placeholder="Email" id="email" required="required" class="form-control" aria-label="Email">
                    <span class="err_msg error_email" style="display:none;color:red;">Enter valid email<span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"><input type="text" name="phone" placeholder="Phone" id="phone" required="required" class="form-control" aria-label="Phone">
                 <span class="err_msg error_phone" style="display:none;color:red;">This field is required<span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"><input type="text" name="subject" placeholder="Subject" id="subject" required="required" class="form-control" aria-label="Subject"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group"><textarea name="message" placeholder="Message" rows="6" id="message" required="required" class="form-control" aria-label="message"></textarea></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group"><button class="btn btn-send btn-block font-weight-bold font-white" type="button" id="send">SEND</button></div>
               
            </div>
         </div>
      </form>
   </div>
</div>
                    <div class="col-md-6">
                        <div class="map">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal Success Popup -->

<div class="modal success-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="$('#myModal').hide();window.location.reload()"><span aria-hidden="true">×</span></button>
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Thank You !</h4>
      </div>
      <div class="modal-body text-center">
          <p class="lead">Contact form successfully submitted. Thank you, We will get back to you soon!</p>
          <a href="{{ url('/') }}" class="rd_more btn btn-default">Go to Home</a>
      </div>
      
    </div>
  </div>
</div>

@endsection
