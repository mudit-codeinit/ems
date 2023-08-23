<!doctype html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Google Tag Manager -->


    <script>!function (e, t, a, n, g) {
            e[n] = e[n] || [], e[n].push({"gtm.start": (new Date).getTime(), event: "gtm.js"});
            var m = t.getElementsByTagName(a)[0], r = t.createElement(a);
            r.async = !0, r.src = "https://www.googletagmanager.com/gtm.js?id=GTM-KWHZJRK", m.parentNode.insertBefore(r, m)
        }(window, document, "script", "dataLayer");</script>


    <!-- End Google Tag Manager -->

    <meta name="google-site-verification"
          content="ajS84qxMQU92TaxRVnA6KPlease enter a valid phone number.e.g ( +971561774555 / +971561774555 )m-JkHG_W5JZl8a__cusbw8">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />-->

    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta name="csrf-token" content="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    @if(isset($meta_title) )
    <title>{{ $meta_title }}</title>
    @else
    <title>Sell Any Car in Dubai | Sell My Car Online -Expat Car Buyers</title>
    @endif


    @if( isset($meta_description) )
    <meta name="description" content="{{ $meta_description }}">
    
    @else

    <meta name="description"
          content="Want to sell any Car in Dubai? Evaluate and sell your vehicle online from Expat Car Buyers. Sell Car online in just 30 Minutes">

    @endif
    
     @if( isset($meta_keywords) )
    
    <meta name="keywords"
          content="{{ $meta_keywords }}">
          
           @else
  
    <meta name="keywords"
          content="sell any car, sell your car, sell my car, Sell car online, Sell Used Car, free car valuation, sell car dubai, sell any car dubai, sell my Car dubai, i want to sell my car, Selling my car">
  @endif

    <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Plus%20Jakarta%20Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    
          

    <!-- Bootstrap CSS <link defer href="{{ asset('front/css/bootstrap.css?v=1') }}" rel="stylesheet" media="all"> -->

    <style>
    
    body {
        overflow-x: hidden; /* hide horizontal scrollbar */
    }

    .container {
      overflow-x: hidden; /* hide content that exceeds maximum width */
    }
    
        .how_does_work_section_row, .how_to_sell_row {
          display: flex;
          flex-wrap: wrap;
        }
        
        .how_does_work_section_row > [class*='col-'] , .how_to_sell_row > [class*='col-'] {
          display: flex;
          flex-direction: column;.
        }
        .
        .how_does_work_section_row > [class*='col-'] > * , .how_to_sell_row > [class*='col-'] > * {
          flex-grow: 1;
        }

    
    .fr-auto {
        display: grid !important;
        margin: 0;
        padding: 0;
        grid-gap: var(--item-gap);
        grid-template-columns: 1fr auto;
        align-items: center;
    }
    .auto-fr {
        display: grid !important;
        margin: 0;
        padding: 0;
        grid-gap: var(--item-gap);
        grid-template-columns: auto 1fr;
        align-items: center;
    }
        .btn.custom-rounded, .custom-rounded{
            border-radius: 30px!important;
        }
        .custom-rounded-15{
            border-radius: 15px!important;
        }
        
        .custom-rounded-bottom-0{
            border-bottom-left-radius: 0!important;
            border-bottom-right-radius: 0!important;
        }
        
        .card-head{
            min-height: 120px;
        }
        
        .selling_process .car-img {
            width: 50%;
            margin-right: 3rem !important;
        }
        
        .reviewBox{
            min-height: 106px!important;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 22px;
            color: #2D2E2E;
        }
        .footer {
            background: #FCF5F2;
        }
        .footer .footer-abt h6{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 22px;
            line-height: 27px;
            color: #000000;
        }
        .footer .footer-abt p, .footer .footer-abt span {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 32px;
            color: #626161;    
        }
        
        .userReview {
            background: #FFFFFF;
            box-shadow: 0px 2px 35px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }
        
        .userReview .userName h5 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 19px;
            color: #2D2E2E;
        }
        
        .userReview .userName .userDate {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 14.1043px;
            line-height: 19px;
            color: #2D2E2E;
            opacity: 0.5;
        }
        .userReview .userProfile img{
            object-fit:cover;
            border-radius:50%;
            height:62.59px;
            width:62.59px;
        }
        .carousel-arrow-div{
            position: relative;
            width: 105px;
            float: right;
            position: absolute;
            right: 30px;
            top: 55px;
        }
        .black-light{
            color: #000000a6;
        }
        .display-inline-block{
            display: inline-block!important;
        }
        .img-mh-130{
            max-height: 130px!important;
        }
        .bg-light-theme{
            background: #FFEEED;
            border-radius: 9.35737px;
        }
        .bg-light-theme-2{
            background: #FCF5F2;
            border-radius: 0px 40px 40px 0px;
        }
        
        .bg-light-theme-2 h5{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 28.7305px;
            line-height: 36px;
            text-transform: uppercase;
            color: #F24026;
        }
        
        .bg-light-theme-2 span{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16.6822px;
            line-height: 27px;
            color: #F24026;
        }
        .v-align-middle {
            vertical-align: middle!important;
        }
        .footer-abt.custom img {
            width: 60px;
            height: 60px;
        }
        .mainfaqsec  .accordion .card .card-head, .mainfaqsec  .accordion .card .card-body
        {
            background: #FCF5F2!important;
            border-radius: 9.35737px!important;
        }
            
        .mainfaqsec  .accordion .card .card-body .text p{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 17px;
            line-height: 39px;
            color: #868686;
        }
        .footer-abt.custom {
            height: 448px;
        }
        .carousel-arrow-div a svg{
            padding: 4px;
        }
        .slick-list, .slick-slider, .slick-track {
            position: relative;
            display: block
        }

        .slick-slider {
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .slick-list {
            overflow: hidden;
            margin: 0;
            padding: 0
        }

        .slick-list:focus {
            outline: 0
        }

        .slick-list.dragging {
            cursor: pointer;
        }

        .slick-slider .slick-list, .slick-slider .slick-track {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .slick-track {
            top: 0;
            left: 0;
            margin-left: auto;
            margin-right: auto
        }

        .slick-track:after, .slick-track:before {
            display: table;
            content: ''
        }

        .slick-track:after {
            clear: both
        }

        .slick-loading .slick-slide, .slick-loading .slick-track {
            visibility: hidden
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px
        }

        [dir=rtl] .slick-slide {
            float: right
        }

        .slick-initialized .slick-slide, .slick-slide img {
            display: block
        }

        .slick-arrow.slick-hidden, .slick-slide.slick-loading img {
            display: none
        }

        .slick-slide.dragging img {
            pointer-events: none
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent
        }

        .mb90, .mtb90 {
            margin-bottom: 90px
        }

        body .h2, body h2 {
            font-size: 36px
        }

        .font-42 {
            font-size: 42px
        }

        .font-23 {
            font-size: 23px
        }

        .prcincldbtmcnt h5, .semibold {
            font-weight: 600
        }

        .ptb90 {
            padding-top: 90px;
            padding-bottom: 90px
        }

        .mtb90 {
            margin-top: 90px
        }

        .lightgreybg {
            background: #f5f5f5
        }

        .bg.mainhmbnr {
            padding: 118px 0;
            height: auto
        }

        .mainhmbnr .banner-Text {
            transform: none
        }

        .hmbnrbtmsec h3, .hmbnrbtmsec p {
            font-weight: 600;
            font-size: 24px
        }

        .hmbnrbtmsec a {
            color: #fff;
            text-decoration: none
        }

        .hmbnrbtmsec a:hover {
            color: #fff
        }

        .abt-section a {
            color: #0056b3
        }

        body .header-section {
            padding: 20px 0
        }

        .header-section button.btn.btn-danger {
            height: 44px;
            width: 190px
        }

        .row.homebannersec p.h5 {
            font-weight: 600;
            color: #000;
            font-size: 20px
        }

        #custom-navbar {
            padding: 9px 0
        }

        .cmninrpgebnr .row .col-lg-5 {
            display: flex;
            align-items: flex-end
        }

        .ourgurantee_section .col-md-5 ul {
            margin: 48px 0 0
        }

        .ourgurantee_section .col-md-5 ul li {
            margin-bottom: 38px;
            font-size: 20px;
            display: flex;
            align-items: center
        }

        .ourgurantee_section .col-md-5 ul li svg {
            flex: 0 0 20px;
            margin-right: 25px
        }

        .how_does_work_section .work_box, .shadow_box {
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 12%);
            height: 100%
        }

        .how_does_work_section .work_box .wrkboxtitle {
            font-size: 19px;
            letter-spacing: .02em;
            font-weight: 600
        }

        .how_does_work_section p {
            color: #626161;
            font-size: 16px;
            line-height: 24px
        }

        .cmnprcincldbox {
            font-size: 20px;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 20px;
            padding-bottom: 20px
        }

        .leftprcincldcol {
            color: #495057
        }

        .cmnprcincldbox .leftprcincldcol svg {
            margin-right: 9px
        }

        .inrpriceincld_section {
            padding: 50px 40px 45px;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 12%)
        }

        .inrpriceincld_section .row {
            margin: 0 -30px
        }

        .inrpriceincld_section .row > .col-md-4 {
            padding: 0 30px
        }

        .cmnredbtn {
            background: #d32f2f;
            color: #fff;
            display: inline-block;
            font-size: 16px;
            font-family: Inter, sans-serif;
            border-radius: 3px;
            padding: 12px 30px
        }

        .cmnredbtn:hover {
            background: #666;
            color: #fff
        }

        .prcincldbtmcnt .cmnredbtn {
            display: block;
            max-width: 319px;
            margin: auto
        }

        .inrpriceincld_section h2 {
            font-size: 34px;
            font-weight: 600;
            letter-spacing: .03em
        }

        .inrclntrvwthmb {
            position: relative
        }

        .inrclntrvwthmb img {
            height: 90px;
            width: 90px;
            border-radius: 50%;
            overflow: hidden;
            margin: auto;
            object-fit: cover
        }

        .slick-slide.slick-current.slick-active .inrclntrvwthmb img {
            height: 110px;
            width: 110px
        }

        .slick-slide.slick-current.slick-active .inrclntrvwthmb::after {
            content: "";
            position: absolute;
            height: 120px;
            width: 120px;
            border: 1px solid #f24026;
            left: 0;
            right: 0;
            top: -5px;
            margin: auto;
            border-radius: 50%
        }

        .mainrvwslider {
            max-width: 600px;
            margin: auto
        }

        .cmnclntrvws_thumb .slick-list.draggable {
            padding: 10px 0 !important
        }

        .cmnclntrvwslide h4 {
            font-weight: 600;
            color: #000
        }

        .cmnclntrvwslide .rvwdesc {
            font-size: 24px;
            line-height: 36px;
            font-style: italic;
            color: #626161
        }

        h2 span.theme-color.font-weight-bold {
            font-weight: 600 !important
        }

        .cmnwhychoscol p:first-child {
            font-size: 18px;
            color: #d32f2f;
            font-weight: 600
        }

        .cmnwhychoscol p {
            font-size: 18px;
            line-height: 25px;
            color: #acacac
        }

        .whychoosesec h2 + p {
            font-size: 20px
        }

        .cmninrpgebnr .banner-form:before, .cmninrpgebnr.banner:before, .peopletrustsec .process-Title:before {
            display: none
        }

        .peopletrustsec .selling-process .col-md-5 {
            padding-left: 99px
        }

        .peopletrustsec .selling-process .col-md-5 img {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 60px
        }

        .peopletrustsec .selling-process .col-md-5 h3.process-Title {
            font-size: 26px
        }

        .peopletrustsec .selling-process .col-md-5 p {
            font-size: 18px;
            line-height: 26px;
            color: #626161;
            max-width: 300px
        }

        .peopletrustsec .selling-process.directionLeft:after {
            background: url(https://www.expatcarbuyers.com/front/images/dottedline-1.svg) center/contain no-repeat;
            left: 40%;
            transform: translateX(-50%);
            height: 82px;
            width: 315px
        }

        .peopletrustsec .selling-process.directionRight:after {
            background: url(https://www.expatcarbuyers.com/front/images/dottedline-2.svg) center/contain no-repeat;
            left: 55%;
            height: 82px;
            width: 334px;
            transform: translateX(-50%)
        }

        .inrwekeepcontentsec {
            padding: 40px 50px
        }

        .inrwekeepcontentwrap h2 {
            font-size: 28px;
            line-height: 40px
        }

        .inrwekeepcontentwrap {
            max-height: 410px;
            overflow-y: auto;
            padding-right: 40px
        }

        .inrwekeepcontentwrap::-webkit-scrollbar {
            width: 16px
        }

        .inrwekeepcontentwrap::-webkit-scrollbar-track {
            border-radius: 10px;
            background: #727272;
            border: 7px solid #f5f5f5
        }

        .inrwekeepcontentwrap::-webkit-scrollbar-thumb {
            background: #f24026;
            border-radius: 10px
        }

        .inrwekeepcontentwrap::-webkit-scrollbar-thumb:hover {
            background: #b30000
        }



        .reviewBox::-webkit-scrollbar {
            width: 4px
        }

        .reviewBox::-webkit-scrollbar-track {
            border-radius: 10px;
            background: #727272;
            border: 7px solid #f5f5f5
        }

        .reviewBox::-webkit-scrollbar-thumb {
            background: grey;
            border-radius: 4px
        }

        .reviewBox::-webkit-scrollbar-thumb:hover {
            background: grey
        }



        .mainfaqsec .accordion .card h5 {
            font-size: 18px;
            line-height: 24px;
            padding: 24px 0;
            font-weight: 400 !important;
            font-family: 'Open Sans'
        }

        .mainfaqsec .text p {
                font-size: 17px;
                color: #333;
                line-height: 2;
        }

        .mainfaqsec .accordion .card-body {
            padding-top: 10px
        }

        .accordion {
            display: flex
        }

        .devide-part {
            width: 50%
        }

        .sellingCarDetail {
            background: linear-gradient(0deg, #fff 50%, #f24026 50%)
        }

        .inner-padding {
            padding: 0 15px
        }

        .card {
            border-bottom: 1px solid #e8e8e8
        }

        .text {
            width: 100%;
            padding: 0;
            text-align: justify
        }

        .text p {
            font-size: 13px
        }

        .accordion .card {
            border: none;
            /*border-bottom: 1px solid #e8e8e8 !important*/
        }

        .accordion .card h4 {
            background: url(https://cdn0.iconfinder.com/data/icons/entypo/91/arrow56-512.png) calc(100% - 20px) center no-repeat;
            background-size: 14px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 21px;
            line-height: 24px;
            color: #515151;
        }

        .accordion .card h4.collapsed {
            background-image: url(https://cdn0.iconfinder.com/data/icons/arrows-android-l-lollipop-icon-pack/24/expand2-256.png);
            background-size: 14px
        }

        .accordion .card-body {
            padding-left: 0;
            padding-right: 0;
            color: #7d7d7d
        }

        .sellanycarcustom {
            margin-top: 25rem
        }

        br {
            display: block !important
        }

        @media only screen and (max-width: 600px) {
            
            .devide-part {
                width: 100%
            }
            .p-phn-0{
                padding: 0!important;
            }
            .carousel-arrow-div {
                top: 85px;
            }

            .sellanycarcustom {
                margin-top: -3rem
            }
        }

        body .header-main-2 {
            padding-bottom: 0
        }

        .banner.cmninrpgebnr {
            padding: 50px 0 45px
        }

        img.inrbnrlftimg {
            position: absolute;
            top: 50%;
            left: 0;
            width: 677px;
            transform: translateY(-50%)
        }

        body .btn-danger {
            color: #fff;
            background-color: #f24026;
            border-color: #f24026
        }

        .header-phone, .header-phone:hover {
            font-size: 16px
        }

        body .banner-form .form-group.bannr_frm_btn button, body .navigation_bar button {
            background: #f24026;
            font-size: 16px;
            font-family: Inter, sans-serif;
            font-weight: 500;
            line-height: 1
        }

        a.inrpgebnrphoneicon {
            width: 70px;
            height: 72px;
            background: #f24026;
            border-radius: 50%;
            display: none;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: -40px;
            bottom: -60px
        }

        a.homebnrcalbtn.inrpgebnrphoneicon {
            right: 0;
            bottom: -116px
        }

        .cmninrpgebnr .banner-form {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 12%);
            border: 1px solid #e0e0e0
        }

        .cmninrpgebnr .banner-form .form-group {
            margin-bottom: 18px
        }

        .cmninrpgebnr .banner-form h3 {
            color: #000;
            font-size: 23px;
            line-height: 30px
        }

        .cmninrpgebnr.banner:before {
            width: 38%
        }

        .how_does_work_section.pt_ninty h1 {
            font-size: 42px;
            color: #000
        }

        .how_does_work_section.pt_ninty p.h2 {
            font-size: 40px;
            line-height: 46px
        }

        .point-boxes .value-txt h5, .we-keep-top h4 {
            font-size: 32px
        }

        .we-keep-top h2 {
            font-size: 48px
        }

        .point-boxes {
            width: calc(100% - 160px)
        }

        .point-boxes p {
            font-size: 18px;
            margin-bottom: 0
        }

        .p-box {
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 12%)
        }

        .orangebg {
            background-image: url(https://www.expatcarbuyers.com/front/images/orangebg.jpg)
        }

        .orangebg .inrwekeepcontentwrap::-webkit-scrollbar {
            width: 16px
        }

        .orangebg .inrwekeepcontentwrap::-webkit-scrollbar-track {
            border-radius: 10px;
            background: #fff;
            border: 7px solid #ff4316
        }

        .orangebg .inrwekeepcontentwrap::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 10px
        }

        .inrwekeepcontentwrap p {
            font-size: 20px;
            line-height: 28px;
            font-weight: 400
        }

        .orangebg .inrwekeepcontentwrap h2 {
            font-size: 28px;
            line-height: 32px;
            max-width: 560px;
            margin: 0 auto 40px
        }

        @media (max-width: 1600px) {
            body .banner_left {
                padding: 17% 0
            }

            .banner.cmninrpgebnr {
                padding: 50px 0 65px
            }
        }

        @media (max-width: 1024px) {
            img.inrbnrlftimg {
                width: 560px
            }

            a.inrpgebnrphoneicon {
                right: 0
            }
        }

        @media (max-width: 991px) {
            .bg.mainhmbnr {
                padding: 0 0 170px
            }

            body .header-main {
                box-shadow: none
            }

            .header-main .header ul.nav.navbar {
                padding-top: 0;
                padding-bottom: 0
            }

            .header-main .header button.navbar-toggler {
                margin-right: 0
            }

            .peopletrustsec .container > .row .col-md-12 {
                padding: 0 35px !important
            }

            .peopletrustsec .selling-process.directionRight:after {
                left: 65%
            }

            .banner.cmninrpgebnr .row .col-lg-7, .header-main.header-main-2 a.float, .header-main.header-main-2 section#home-content, img.inrbnrlftimg {
                display: none
            }

            .header-main.header-main-2 .header {
                padding: 0
            }

            a.inrpgebnrphoneicon {
                width: 50px;
                height: 50px
            }

            a.inrpgebnrphoneicon svg {
                height: 27px
            }

            .header-main.header-main-2 {
                background: #f6f6f6
            }

            .banner.cmninrpgebnr {
                padding: 0 0 40px
            }

            .cmninrpgebnr a.inrpgebnrphoneicon {
                bottom: -70px;
                right: 0;
                width: 56px;
                height: 56px
            }

            .how_does_work_section .row .col-lg-3 {
                margin-bottom: 30px
            }
        }

        @media (max-width: 767px) {
            .cmninrpgecontent .ourgurantee_section .col-md-7 img, .float, .peopletrustsec .selling-process.directionLeft:after, .peopletrustsec .selling-process.directionRight:after {
                display: none
            }
            
            .show_desktop {
                display: none!important;
            }
            
            .selling_process .car-img {
                margin-right: 0 !important;
            }

            .peopletrustsec .selling-process .col-md-5 p {
                font-size: 15px;
                line-height: 26px;
                max-width: 100%
            }

            .peopletrustsec .selling-process .col-md-5 h4.process-Title {
                font-size: 22px;
                line-height: 30px
            }

            .peopletrustsec .selling-process .col-md-5 img {
                max-width: 50px
            }

            .peopletrustsec .selling-process .col-md-5 {
                padding-left: 72px
            }

            .inrwekeepcontentwrap p {
                font-size: 18px;
                line-height: 24px;
                font-weight: 400
            }

            .mainfaqsec h2 {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 48px;
                line-height: 42px;
                color: #000000;
            }

            .accordion .devide-part {
                width: 100%
            }

            .accordion {
                flex-wrap: wrap
            }

            .mainfaqsec .accordion .card h5 {
                font-size: 14px;
                line-height: 19px;
                padding: 24px 40px 24px 12px
            }
            

            .position-absolute {
                padding: initial !important
            }

            .how_does_work_section.pt_ninty p.h2 {
                margin-top: -6px !important
            }

            .cmninrpgecontent .how_does_work_section .work_box img {
                position: static
            }

            .how_does_work_section .work_box {
                box-shadow: none;
                border: none;
                padding: 0;
                height: auto;
                position: relative;
                text-align: center !important
            }

            .how_does_work_section .work_box .wrkboxtitle {
                padding: 0 !important;
                font-size: 18px
            }

            .how_does_work_section .work_box img {
                position: absolute;
                left: 0;
                top: 6px
            }

            body .container {
                padding: 0 35px
            }

            .clntrvw_section .container, .header-section .container {
                padding: 0 20px
            }

            .inrpriceincld_section {
                padding: 0;
                box-shadow: none;
                background: 0 0
            }

            body .h2, body h2 {
                font-size: 30px
            }

            .inrpriceincld_section h2 {
                font-size: 22px
            }

            #home-content, .cmninrpgecontent {
                display: flex;
                flex-direction: column
            }

            /*#home-content section.ourgurantee_section {*/
            /*    order: 3*/
            /*}*/

            /*#home-content section.how_does_work_section {*/
            /*    order: 1*/
            /*}*/

            /*#home-content section.clntrvw_section {*/
            /*    order: 7;*/
            /*    margin-top: 54px*/
            /*}*/

            /*#home-content section.priceincld_section {*/
            /*    order: 4*/
            /*}*/

            /*#home-content section.whychoosesec {*/
            /*    order: 5*/
            /*}*/

            /*#home-content section.peopletrustsec {*/
            /*    order: 6*/
            /*}*/

            /*#home-content section.wekeepcontentsec {*/
            /*    order: 2*/
            /*}*/

            #home-content section.mainfaqsec {
                order: 8;
                margin-bottom: 20px !important;
                padding-bottom: 0 !important
            }

            .inrclntrvwthmb img {
                height: 40px;
                width: 40px
            }

            .slick-slide.slick-current.slick-active .inrclntrvwthmb img {
                height: 50px;
                width: 50px
            }

            .slick-slide.slick-current.slick-active .inrclntrvwthmb::after {
                height: 56px;
                width: 56px;
                top: -3px
            }

            .cmnclntrvwslide h4 {
                font-size: 16px;
                margin: 0 0 10px !important
            }

            .cmnclntrvwslide svg.rvwrating {
                width: 107px
            }

            .cmnclntrvwslide .rvwdesc {
                font-size: 13px;
                line-height: 20px
            }

            .rvwdesc svg {
                width: 16px
            }

            .header-main .header ul.nav.navbar, .inrwekeepcontentwrap {
                padding-right: 20px
            }

            .how_does_work_section p {
                font-size: 15px;
                line-height: 20px
            }

            .cmnprcincldbox {
                font-size: 18px
            }

            section.priceincld_section.ptb90 {
                padding-bottom: 0
            }

            .ourgurantee_section h2 {
                text-align: center
            }

            .ourgurantee_section .col-md-5 ul li {
                font-size: 18px;
                margin-bottom: 32px
            }

            .ourgurantee_section .col-md-7 img {
                transform: scaleX(-1)
            }

            .cmnwhychoscol h6, .cmnwhychoscol p {
                font-size: 16px
            }

            .whychoosesec .row .col-md-3:not(:last-child) {
                margin-bottom: 19px
            }

            .cmninrpgecontent .ourgurantee_section h2, .peopletrustsec h2 {
                font-size: 24px
            }

            .cmninrpgecontent section.ourgurantee_section {
                background: #f6f6f6;
                padding: 40px 0;
                order: 2
            }

            .how_does_work_section .row .col-lg-3 {
                margin-bottom: 0
            }

            .point-boxes {
                width: calc(100% - 80px) !important
            }

            .inrwekeepcontentsec {
                padding: 40px 15px 40px 35px
            }

            .cmninrpgecontent section.how_does_work_section {
                order: 1
            }

            .cmninrpgecontent section.clntrvw_section {
                order: 3;
                margin-top: 54px
            }

            .cmninrpgecontent section.priceincld_section {
                order: 4;
                background: #f6f6f6;
                padding: 50px 0;
                margin: 60px 0 0
            }

            .cmninrpgecontent section.wekeepcontentsec {
                order: 5;
                margin: 0
            }

            .cmninrpgecontent .we-keep-sec {
                order: 6;
                background: #f6f6f6;
                margin: 0
            }

            .cmninrpgecontent section.mainfaqsec {
                order: 7;
                background: #f6f6f6;
                margin: 0 !important;
                padding: 40px 0 60px !important
            }

            .cmninrpgecontent .contact-us-section {
                order: 8
            }

            .p-box h5 {
                position: relative;
                top: 10px
            }

            #home-content .how_does_work_section .work_box {
                padding: 0 0 0 75px;
                text-align: left !important
            }

            .p-box {
                box-shadow: 0 2px 4px rgb(0 0 0 / 10%)
            }

            .cmninrpgecontent section.wekeepcontentsec .container, .wekeepcontentsec .container {
                padding: 0
            }
        }

        

        @media (max-width: 575px) {
            .point-boxes .p-box img {
                max-width: 60px
            }

            body .numbering2, body .numbering3 {
                padding-top: 140px
            }

            .we-keep-top h4 {
                font-size: 24px
            }

            .we-keep-top h2 {
                font-size: 30px;
                margin: 20px 0 0 !important
            }

            .mainfaqsec .inner-padding {
                padding: 0
            }

            a.inrpgebnrphoneicon {
                display: flex
            }

            #booking_form_step_1 + p, .mobhomebtmline {
                max-width: 317px;
                margin: auto
            }

            a.homebnrcalbtn.inrpgebnrphoneicon {
                right: -25px;
                bottom: auto;
                top: 30px
            }
        }

        @media (max-width: 425px) {
            body .numbering2, body .numbering3 {
                padding-top: 190px
            }

            .homebannersec form#booking_form_step_1 {
                margin-bottom: 40px !important
            }
        }

        h1, h2, h3, h4, h5, h6, ol, p, ul {
            margin-top: 0
        }

        address, ol, p, ul {
            margin-bottom: 1rem
        }

        img, svg {
            vertical-align: middle
        }

        body {
            text-align: left;

        }

        dd, h1, h2, h3, h4, h5, h6, label {
            margin-bottom: .5rem
        }

        footer, header, main, nav, section {
            display: block
        }

        address {
            line-height: inherit
        }

        label {
            display: inline-block
        }

        button, hr, input {
            overflow: visible
        }

        .form-control, .modal-content {
            background-clip: padding-box
        }

        .nav, .navbar-nav {
            list-style: none
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 568px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *, ::after, ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff
        }

        [tabindex="-1"]:focus {
            outline: 0 !important
        }

        .btn:not(:disabled):not(.disabled), .navbar-toggler:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        address {
            font-style: normal
        }

        ol ol, ol ul, ul ol, ul ul {
            margin-bottom: 0
        }

        dd {
            margin-left: 0
        }

        b, strong {
            font-weight: bolder
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline
        }

        a:not([href]):not([tabindex]), a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0
        }

        img {
            border-style: none
        }

        svg {
            overflow: hidden
        }

        button {
            border-radius: 0
        }

        button:focus {
            outline: dotted 0;
            outline: -webkit-focus-ring-color auto 0
        }

        button, input, select {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button, select {
            text-transform: none
        }

        [type=reset], [type=submit], button, html [type=button] {
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox], input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        input[type=date], input[type=datetime-local], input[type=month], input[type=time] {
            -webkit-appearance: listbox
        }

        .btn, .dropdown-header, .dropdown-item, .input-group-text, .navbar-brand {
            white-space: nowrap
        }

        [type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none
        }

        [type=search]::-webkit-search-cancel-button, [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        [hidden] {
            display: none !important
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        hr {
            margin-bottom: 1rem
        }

        .h1, h1 {
            font-size: 56px
        }

        .h2, h2 {
            font-size: 48px
        }

        .h3, h3 {
            font-size: 36px
        }

        .h4, h4 {
            font-size: 24px
        }

        .h5, h5 {
            font-size: 20px
        }

        .h6, h6 {
            font-size: 16px
        }

        .display-1, .display-2, .display-3, .display-4 {
            font-weight: 300;
            line-height: 1.2
        }

        .display-1 {
            font-size: 6rem
        }

        .display-2 {
            font-size: 5.5rem
        }

        .display-3 {
            font-size: 4.5rem
        }

        .display-4 {
            font-size: 3.5rem
        }

        hr {
            box-sizing: content-box;
            height: 0;
            margin-top: 1rem;
            border: 0;
            border-top: 1px solid #d6d3d3
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .list-inline, .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem
        }

        .container, .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            width: 100%
        }

        .btn, .btn-link, .dropdown-item {
            font-weight: 400
        }
        
        @media only screen and (max-width: 299.98px) {
          .container {
            max-width: 97%!important;
          }
        }
        
        @media only screen and (min-width : 300px) and (max-width: 499.98px) {
          .container {
            max-width: 95%!important;
          }
        }

        @media only screen and (min-width : 576px) and (max-width: 767.98px) {
            .container {
                max-width: 540px;
            }
        }
        
        @media only screen and (min-width : 768px) and (max-width: 991.98px) {
            .container {
                max-width: 720px;
            }
        }
        
        @media only screen and (min-width : 992px) and (max-width: 1199.98px) {
         .container {
                max-width: 960px;
            }   
        }
        
        @media only screen and (min-width : 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-0 {
            -ms-flex-order: 0;
            order: 0
        }

        .order-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-12 {
            -ms-flex-order: 12;
            order: 12
        }

        @media (min-width: 568px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-sm-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-sm-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-sm-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-sm-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-sm-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-sm-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-sm-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-sm-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-sm-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-sm-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-sm-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-sm-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-sm-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-md-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-md-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-md-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-md-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-md-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-md-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-md-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-md-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-md-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-md-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-md-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-md-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-md-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-md-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-lg-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-lg-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-lg-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-lg-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-lg-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-lg-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-lg-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-lg-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-lg-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-lg-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-lg-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-lg-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-lg-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-lg-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-xl-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-xl-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-xl-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-xl-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-xl-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-xl-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-xl-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-xl-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-xl-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-xl-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-xl-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-xl-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-xl-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        .modal-open {
            overflow: hidden
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.9rem + 2px);
            padding: .375rem .75rem;
            font-size: 13px;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            outline: 0
        }

        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:disabled, .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1
        }

        select.form-control:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .form-control-range {
            display: block;
            width: 100%
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5
        }

        .col-form-label-lg {
            padding-top: calc(.5rem + 1px);
            padding-bottom: calc(.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5
        }

        .col-form-label-sm {
            padding-top: calc(.25rem + 1px);
            padding-bottom: calc(.25rem + 1px);
            font-size: .875rem;
            line-height: 1.5
        }

        .custom-select.is-valid, .form-control.is-valid {
            border-color: #28a745
        }

        .form-control-sm {
            height: calc(1.8125rem + 2px);
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .form-control-lg {
            height: calc(2.875rem + 2px);
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        select.form-control[multiple], select.form-control[size] {
            height: auto
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-text {
            display: block;
            margin-top: .25rem
        }

        .form-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }

        .form-row > .col, .form-row > [class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }

        .custom-control-input.is-valid ~ .custom-control-label {
            color: #28a745
        }

        .custom-select.is-valid:focus, .form-control.is-valid:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .custom-control-input.is-valid ~ .custom-control-label::before {
            background-color: #71dd8a
        }

        .custom-control-input.is-valid:checked ~ .custom-control-label::before {
            background-color: #34ce57
        }

        .custom-control-input.is-valid:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .dropdown {
            position: relative
        }

        .form-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width: 568px) {
            .form-inline label {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-bottom: 0
            }

            .form-inline .form-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .custom-select, .form-inline .input-group {
                width: auto
            }

            .form-inline .custom-control {
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .form-inline .custom-control-label {
                margin-bottom: 0
            }
        }

        .btn-block, input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
            width: 100%
        }

        .btn {
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .btn {
                transition: none
            }
        }

        .btn:focus, .btn:hover {
            text-decoration: none
        }

        .btn:focus {
            outline: 0
        }

        .btn.disabled, .btn:disabled {
            opacity: .65
        }

        a.btn.disabled {
            pointer-events: none
        }

        .btn-success:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show > .btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34
        }

        .btn-success.disabled, .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430
        }

        .btn-danger:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-danger {
            color: #fff;
            background-color: #f24026;
            border-color: #f24026
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130
        }

        .btn-danger.disabled, .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active, .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d
        }

        .btn-light:focus, .btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show > .btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-light {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:hover {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5
        }

        .btn-light.disabled, .btn-light:disabled {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df
        }

        .btn-dark:focus, .btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-dark {
            color: #fff;
            background-color: #494949;
            border-color: #494949
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124
        }

        .btn-dark.disabled, .btn-dark:disabled {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d
        }

        .btn-outline-success:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-outline-success {
            color: #28a745;
            background-color: transparent;
            background-image: none;
            border-color: #28a745
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success.disabled, .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent
        }

        .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show > .btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-danger:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-outline-danger {
            color: #dc3545;
            background-color: transparent;
            background-image: none;
            border-color: #dc3545
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger.disabled, .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active, .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-light:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus, .btn-outline-light:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-outline-light {
            color: #f8f9fa;
            background-color: transparent;
            background-image: none;
            border-color: #f8f9fa
        }

        .btn-outline-light:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light.disabled, .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent
        }

        .btn-outline-light:not(:disabled):not(.disabled).active, .btn-outline-light:not(:disabled):not(.disabled):active, .show > .btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-dark:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-outline-dark {
            color: #343a40;
            background-color: transparent;
            background-image: none;
            border-color: #343a40
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark.disabled, .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active, .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-link, .btn-link:hover {
            background-color: transparent
        }

        .btn-link:focus, .btn-link:hover {
            text-decoration: underline;
            border-color: transparent
        }

        .btn-link {
            color: #007bff
        }

        .btn-link:hover {
            color: #0056b3
        }

        .btn-link:focus {
            box-shadow: none
        }

        .btn-link.disabled, .btn-link:disabled {
            color: #6c757d;
            pointer-events: none
        }

        .btn-group-lg > .btn, .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm > .btn, .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .btn-block {
            display: block
        }

        .btn-block + .btn-block {
            margin-top: .5rem
        }

        .dropdown-toggle::after {
            width: 0;
            height: 0;
            vertical-align: .255em;
            content: ""
        }

        .collapse:not(.show) {
            display: none
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .btn-group-toggle > .btn, .btn-group-toggle > .btn-group > .btn, .custom-control-label, .dropdown-header, .input-group-text, .nav {
            margin-bottom: 0
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            color: #212529;
            text-align: inherit;
            background-color: transparent;
            border: 0
        }

        .btn-group > .btn-group:not(:last-child) > .btn, .btn-group > .btn:not(:last-child):not(.dropdown-toggle), .input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group > .btn-group:not(:first-child) > .btn, .btn-group > .btn:not(:first-child), .input-group > .custom-select:not(:first-child), .input-group > .form-control:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-item:focus, .dropdown-item:hover {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa
        }

        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #007bff
        }

        .dropdown-item.disabled, .dropdown-item:disabled {
            color: #6c757d;
            background-color: transparent
        }

        .dropdown-header {
            display: block;
            padding: .5rem 1.5rem;
            font-size: .875rem;
            color: #6c757d
        }

        .dropdown-item-text {
            display: block;
            padding: .25rem 1.5rem;
            color: #212529
        }

        .btn-group {
            position: relative;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group > .btn {
            position: relative;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto
        }

        .btn-group > .btn.active, .btn-group > .btn:active, .btn-group > .btn:focus, .btn-group > .btn:hover {
            z-index: 1
        }

        .btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group {
            margin-left: -1px
        }

        .btn-group > .btn:first-child {
            margin-left: 0
        }

        .input-group > .custom-select + .custom-select, .input-group > .custom-select + .form-control, .input-group > .form-control + .custom-select, .input-group > .form-control + .form-control {
            margin-left: -1px
        }

        .btn-group-toggle > .btn input[type=checkbox], .btn-group-toggle > .btn input[type=radio], .btn-group-toggle > .btn-group > .btn input[type=checkbox], .btn-group-toggle > .btn-group > .btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%
        }

        .input-group > .custom-select, .input-group > .form-control {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0
        }

        .input-group > .custom-select:focus, .input-group > .form-control:focus {
            z-index: 3
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .25rem
        }

        .input-group-text input[type=checkbox], .input-group-text input[type=radio] {
            margin-top: 0
        }

        .input-group-lg > .form-control {
            height: calc(2.875rem + 2px);
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .input-group-sm > .form-control {
            height: calc(1.8125rem + 2px);
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem
        }

        .custom-control-inline {
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 1rem
        }

        .custom-control-input {
            position: absolute;
            z-index: -1;
            opacity: 0
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            background-color: #007bff
        }

        .custom-control-input:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-control-input:active ~ .custom-control-label::before {
            color: #fff;
            background-color: #b3d7ff
        }

        .custom-control-input:disabled ~ .custom-control-label {
            color: #6c757d
        }

        .custom-control-input:disabled ~ .custom-control-label::before {
            background-color: #e9ecef
        }

        .custom-control-label {
            position: relative
        }

        .custom-control-label::after, .custom-control-label::before {
            position: absolute;
            top: .25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: ""
        }

        .custom-control-label::before {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #dee2e6
        }

        .custom-control-label::after {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 50% 50%
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%
        }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::before {
            background-color: #007bff
        }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
        }

        .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, .5)
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center no-repeat #fff;
            background-size: 8px 10px;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-select-lg, .custom-select-sm {
            padding-top: .375rem;
            padding-bottom: .375rem
        }

        .custom-select:focus {
            border-color: #80bdff
        }

        .custom-select:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(128, 189, 255, .5)
        }

        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .custom-select:disabled {
            background-color: #e9ecef
        }

        .custom-select[multiple], .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: .75rem;
            background-image: none
        }

        .custom-select:disabled {
            color: #6c757d
        }

        .custom-select::-ms-expand {
            opacity: 0
        }

        .custom-select-sm {
            height: calc(1.8125rem + 2px);
            font-size: 75%
        }

        .custom-select-lg {
            height: calc(2.875rem + 2px);
            font-size: 125%
        }

        .nav, .navbar {
            display: -ms-flexbox;
            -ms-flex-wrap: wrap
        }

        .navbar-toggler-icon {
            content: ""
        }

        .custom-range {
            width: 100%;
            padding-left: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-range:focus {
            outline: 0
        }

        .custom-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-range::-moz-focus-outer {
            border: 0
        }

        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -.25rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            appearance: none
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .custom-range::-webkit-slider-thumb {
                transition: none
            }
        }

        .custom-range::-webkit-slider-thumb:active {
            background-color: #b3d7ff
        }

        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem
        }

        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -moz-appearance: none;
            appearance: none
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .custom-range::-moz-range-thumb {
                transition: none
            }
        }

        .custom-range::-moz-range-thumb:active {
            background-color: #b3d7ff
        }

        .custom-range::-moz-range-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem
        }

        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: .2rem;
            margin-left: .2rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            appearance: none
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .custom-range::-ms-thumb {
                transition: none
            }
        }

        .custom-range::-ms-thumb:active {
            background-color: #b3d7ff
        }

        .custom-range::-ms-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: .5rem
        }

        .custom-range::-ms-fill-lower {
            background-color: #dee2e6;
            border-radius: 1rem
        }

        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dee2e6;
            border-radius: 1rem
        }

        .custom-control-label::before, .custom-select {
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .custom-control-label::before, .custom-select {
                transition: none
            }
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0
        }

        .nav-link, .navbar {
            padding: .5rem 1rem
        }

        .nav-link {
            display: block
        }

        .nav-link:focus, .nav-link:hover {
            text-decoration: none
        }

        .nav-link.disabled {
            color: #6c757d
        }

        .nav-fill .nav-item {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center
        }

        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .navbar > .container, .navbar > .container-fluid {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .navbar-brand {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit
        }

        .card, .navbar-nav {
            display: -ms-flexbox
        }

        .navbar-brand:focus, .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-nav {
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-text {
            display: inline-block;
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-align: center;
            align-items: center
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .navbar-toggler:focus, .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background: center center no-repeat;
            background-size: 100% 100%
        }

        @media (max-width: 568px) {
            .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width: 568px) {
            .navbar-expand-sm {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-sm .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }
        }

        @media (max-width: 767.98px) {
            .navbar-expand-md > .container, .navbar-expand-md > .container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-md > .container, .navbar-expand-md > .container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-md .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }
        }

        @media (max-width: 991.98px) {
            .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-item {
                margin-left: 1.2rem;
                margin-right: 1.2rem
            }

            .navbar-expand-lg {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-lg .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        @media (max-width: 1199.98px) {
            .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-xl .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }
        }

        .navbar-expand {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand > .container, .navbar-expand > .container-fluid {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-expand .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand > .container, .navbar-expand > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-light .navbar-brand, .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
            color: #000
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, .3)
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1)
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-text a, .navbar-light .navbar-text a:focus, .navbar-light .navbar-text a:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-dark .navbar-brand, .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
            color: #fff
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, .75)
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, .25)
        }

        .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link {
            color: #fff
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, .5);
            border-color: rgba(255, 255, 255, .1)
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-text a, .navbar-dark .navbar-text a:focus, .navbar-dark .navbar-text a:hover {
            color: #fff
        }

        .card {
            position: relative;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0
        }

        .card > .list-group:first-child .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card > .list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .card-footer, .card-header {
            padding: .75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03)
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-header, .card-subtitle, .card-text:last-child {
            margin-bottom: 0
        }

        .card-subtitle {
            margin-top: -.375rem
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link + .card-link {
            margin-left: 1.25rem
        }

        .card-header-pills, .card-header-tabs {
            margin-right: -.625rem;
            margin-left: -.625rem
        }

        .card-header {
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-header + .list-group .list-group-item:first-child {
            border-top: 0
        }

        .card-footer {
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
        }

        .card-header-tabs {
            margin-bottom: -.75rem;
            border-bottom: 0
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem
        }

        .alert, .btn .badge, .page-link {
            position: relative
        }

        .card-img {
            width: 100%;
            border-radius: calc(.25rem - 1px)
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card-img-bottom {
            width: 100%;
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        .card-deck {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .card-deck .card {
            margin-bottom: 15px
        }

        @media (min-width: 568px) {
            .card-deck {
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px
            }

            .card-deck .card {
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px
            }
        }

        .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .card-group > .card {
            margin-bottom: 15px
        }

        @media (min-width: 568px) {
            .card-group {
                -ms-flex-flow: row wrap;
                flex-flow: row wrap
            }

            .card-group > .card {
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0
            }

            .card-group > .card:first-child {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group > .card:first-child .card-header, .card-group > .card:first-child .card-img-top {
                border-top-right-radius: 0
            }

            .card-group > .card:first-child .card-footer, .card-group > .card:first-child .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group > .card:last-child {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group > .card:last-child .card-header, .card-group > .card:last-child .card-img-top {
                border-top-left-radius: 0
            }

            .card-group > .card:last-child .card-footer, .card-group > .card:last-child .card-img-bottom {
                border-bottom-left-radius: 0
            }

            .card-group > .card:only-child {
                border-radius: .25rem
            }

            .card-group > .card:only-child .card-header, .card-group > .card:only-child .card-img-top {
                border-top-left-radius: .25rem;
                border-top-right-radius: .25rem
            }

            .card-group > .card:only-child .card-footer, .card-group > .card:only-child .card-img-bottom {
                border-bottom-right-radius: .25rem;
                border-bottom-left-radius: .25rem
            }

            .card-group > .card:not(:first-child):not(:last-child):not(:only-child), .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
                border-radius: 0
            }

            .card-columns {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1
            }

            .card-columns .card {
                display: inline-block;
                width: 100%
            }
        }

        .card-columns .card {
            margin-bottom: .75rem
        }

        .accordion .card:not(:first-of-type):not(:last-of-type) {
            border-bottom: 0;
            border-radius: 0
        }

        .accordion .card:not(:first-of-type) .card-header:first-child {
            border-radius: 0
        }

        .accordion .card:first-of-type {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .accordion .card:last-of-type {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .breadcrumb, .pagination {
            border-radius: .25rem;
            list-style: none
        }

        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: .75rem 1rem;
            margin-bottom: 1rem;
            background-color: #e9ecef
        }

        .breadcrumb-item + .breadcrumb-item {
            padding-left: .5rem
        }

        .breadcrumb-item + .breadcrumb-item::before {
            display: inline-block;
            padding-right: .5rem;
            color: #6c757d;
            content: "/"
        }

        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: none
        }

        .breadcrumb-item.active {
            color: #6c757d
        }

        .pagination {
            display: -ms-flexbox;
            display: flex;
            padding-left: 0
        }

        .page-link, .popover-body, .popover-header {
            padding: .5rem .75rem
        }

        .page-link {
            display: block;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6
        }

        .page-link:hover {
            z-index: 2;
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .page-link:focus {
            z-index: 2;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6
        }

        .pagination-lg .page-link {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem
        }

        .pagination-sm .page-link {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5
        }

        .badge, .close {
            font-weight: 700;
            line-height: 1
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: .2rem;
            border-bottom-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            text-align: center;
            border-radius: .25rem
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        .badge-primary[href]:focus, .badge-primary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #0062cc
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }

        .badge-secondary[href]:focus, .badge-secondary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #545b62
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        .badge-success[href]:focus, .badge-success[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1e7e34
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        .badge-info[href]:focus, .badge-info[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #117a8b
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }

        .badge-warning[href]:focus, .badge-warning[href]:hover {
            color: #212529;
            text-decoration: none;
            background-color: #d39e00
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        .badge-danger[href]:focus, .badge-danger[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #bd2130
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }

        .badge-light[href]:focus, .badge-light[href]:hover {
            color: #212529;
            text-decoration: none;
            background-color: #dae0e5
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        .badge-dark[href]:focus, .badge-dark[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1d2124
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem
        }

        @media (min-width: 568px) {
            .jumbotron {
                padding: 4rem 2rem
            }
        }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0
        }

        .alert {
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible {
            padding-right: 4rem
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: .75rem 1.25rem;
            color: inherit
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff
        }

        .alert-primary hr {
            border-top-color: #9fcdff
        }

        .alert-primary .alert-link {
            color: #002752
        }

        .alert-secondary {
            color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db
        }

        .alert-secondary hr {
            border-top-color: #c8cbcf
        }

        .alert-secondary .alert-link {
            color: #202326
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb
        }

        .alert-success hr {
            border-top-color: #b1dfbb
        }

        .alert-success .alert-link {
            color: #0b2e13
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb
        }

        .alert-info hr {
            border-top-color: #abdde5
        }

        .alert-info .alert-link {
            color: #062c33
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert-warning hr {
            border-top-color: #ffe8a1
        }

        .alert-warning .alert-link {
            color: #533f03
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb
        }

        .alert-danger hr {
            border-top-color: #f1b0b7
        }

        .alert-danger .alert-link {
            color: #491217
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe
        }

        .alert-light hr {
            border-top-color: #ececf6
        }

        .alert-light .alert-link {
            color: #686868
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca
        }

        .alert-dark hr {
            border-top-color: #b9bbbe
        }

        .alert-dark .alert-link {
            color: #040505
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }
            to {
                background-position: 0 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }
            to {
                background-position: 0 0
            }
        }

        .progress {
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            font-size: .75rem;
            background-color: #e9ecef;
            border-radius: .25rem
        }

        .progress-bar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            background-color: #007bff;
            transition: width .6s ease
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite
        }

        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .media-body {
            -ms-flex: 1;
            flex: 1
        }

        .list-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0
        }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit
        }

        .list-group-item-action:focus, .list-group-item-action:hover {
            color: #495057;
            text-decoration: none;
            background-color: #f8f9fa
        }

        .list-group-item-action:active {
            color: #212529;
            background-color: #e9ecef
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125)
        }

        .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .list-group-item:focus, .list-group-item:hover {
            z-index: 1;
            text-decoration: none
        }

        .list-group-item.disabled, .list-group-item:disabled {
            color: #6c757d;
            background-color: #fff
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .list-group-flush .list-group-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0
        }

        .list-group-flush:first-child .list-group-item:first-child {
            border-top: 0
        }

        .list-group-flush:last-child .list-group-item:last-child {
            border-bottom: 0
        }

        .list-group-item-primary {
            color: #004085;
            background-color: #b8daff
        }

        .list-group-item-primary.list-group-item-action:focus, .list-group-item-primary.list-group-item-action:hover {
            color: #004085;
            background-color: #9fcdff
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #004085;
            border-color: #004085
        }

        .list-group-item-secondary {
            color: #383d41;
            background-color: #d6d8db
        }

        .list-group-item-secondary.list-group-item-action:focus, .list-group-item-secondary.list-group-item-action:hover {
            color: #383d41;
            background-color: #c8cbcf
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #383d41;
            border-color: #383d41
        }

        .list-group-item-success {
            color: #155724;
            background-color: #c3e6cb
        }

        .list-group-item-success.list-group-item-action:focus, .list-group-item-success.list-group-item-action:hover {
            color: #155724;
            background-color: #b1dfbb
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #155724;
            border-color: #155724
        }

        .list-group-item-info {
            color: #0c5460;
            background-color: #bee5eb
        }

        .list-group-item-info.list-group-item-action:focus, .list-group-item-info.list-group-item-action:hover {
            color: #0c5460;
            background-color: #abdde5
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #0c5460;
            border-color: #0c5460
        }

        .list-group-item-warning {
            color: #856404;
            background-color: #ffeeba
        }

        .list-group-item-warning.list-group-item-action:focus, .list-group-item-warning.list-group-item-action:hover {
            color: #856404;
            background-color: #ffe8a1
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #856404;
            border-color: #856404
        }

        .list-group-item-danger {
            color: #721c24;
            background-color: #f5c6cb
        }

        .list-group-item-danger.list-group-item-action:focus, .list-group-item-danger.list-group-item-action:hover {
            color: #721c24;
            background-color: #f1b0b7
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #721c24;
            border-color: #721c24
        }

        .list-group-item-light {
            color: #818182;
            background-color: #fdfdfe
        }

        .list-group-item-light.list-group-item-action:focus, .list-group-item-light.list-group-item-action:hover {
            color: #818182;
            background-color: #ececf6
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #818182;
            border-color: #818182
        }

        .list-group-item-dark {
            color: #1b1e21;
            background-color: #c6c8ca
        }

        .list-group-item-dark.list-group-item-action:focus, .list-group-item-dark.list-group-item-action:hover {
            color: #1b1e21;
            background-color: #b9bbbe
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #1b1e21;
            border-color: #1b1e21
        }

        .close {
            float: right;
            font-size: 1.5rem;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5
        }

        .popover, .tooltip {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            text-decoration: none
        }

        .modal-title, .popover, .tooltip {
            line-height: 1.5
        }

        .popover, .text-hide, .tooltip {
            text-shadow: none
        }

        .close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover {
            color: #000;
            text-decoration: none;
            opacity: .75
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .modal-dialog-centered {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - (.5rem * 2))
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - (.5rem * 2))
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
            border-top-left-radius: .3rem;
            border-top-right-radius: .3rem
        }

        .modal-header .close {
            padding: 1rem;
            margin: -1rem -1rem -1rem auto
        }

        .modal-title {
            margin-bottom: 0
        }

        .modal-body {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem
        }

        .modal-footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 1rem;
            border-top: 1px solid #e9ecef
        }

        .popover, .popover .arrow, .popover .arrow::after, .popover .arrow::before, .tooltip, .tooltip .arrow {
            position: absolute;
            display: block
        }

        .modal-footer > :not(:first-child) {
            margin-left: .25rem
        }

        .modal-footer > :not(:last-child) {
            margin-right: .25rem
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media (min-width: 568px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-centered {
                min-height: calc(100% - (1.75rem * 2))
            }

            .modal-dialog-centered::before {
                height: calc(100vh - (1.75rem * 2))
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width: 992px) {
            .modal-lg {
                max-width: 800px
            }
        }

        .tooltip {
            z-index: 1070;
            margin: 0;
            text-align: left;
            text-align: start;
            opacity: 0
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .arrow {
            width: .8rem;
            height: .4rem
        }

        .tooltip .arrow::before {
            position: absolute;
            border-color: transparent;
            border-style: solid
        }

        .bs-tooltip-auto[x-placement^=top], .bs-tooltip-top {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow, .bs-tooltip-top .arrow {
            bottom: 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow::before, .bs-tooltip-top .arrow::before {
            top: 0;
            border-width: .4rem .4rem 0;
            border-top-color: #000
        }

        .bs-tooltip-auto[x-placement^=right], .bs-tooltip-right {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow, .bs-tooltip-right .arrow {
            left: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow::before, .bs-tooltip-right .arrow::before {
            right: 0;
            border-width: .4rem .4rem .4rem 0;
            border-right-color: #000
        }

        .bs-tooltip-auto[x-placement^=bottom], .bs-tooltip-bottom {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow, .bs-tooltip-bottom .arrow {
            top: 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow::before, .bs-tooltip-bottom .arrow::before {
            bottom: 0;
            border-width: 0 .4rem .4rem;
            border-bottom-color: #000
        }

        .bs-tooltip-auto[x-placement^=left], .bs-tooltip-left {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow, .bs-tooltip-left .arrow {
            right: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow::before, .bs-tooltip-left .arrow::before {
            left: 0;
            border-width: .4rem 0 .4rem .4rem;
            border-left-color: #000
        }

        .tooltip-inner {
            max-width: 200px;
            padding: .25rem .5rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: .25rem
        }

        .popover {
            top: 0;
            left: 0;
            z-index: 1060;
            max-width: 276px;
            text-align: left;
            text-align: start;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem
        }

        .popover .arrow {
            width: 1rem;
            height: .5rem;
            margin: 0 .3rem
        }

        .popover .arrow::after, .popover .arrow::before {
            border-color: transparent;
            border-style: solid
        }

        .bs-popover-auto[x-placement^=top], .bs-popover-top {
            margin-bottom: .5rem
        }

        .bs-popover-auto[x-placement^=top] .arrow, .bs-popover-top .arrow {
            bottom: calc((.5rem + 1px) * -1)
        }

        .bs-popover-auto[x-placement^=top] .arrow::after, .bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::after, .bs-popover-top .arrow::before {
            border-width: .5rem .5rem 0
        }

        .bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::before {
            bottom: 0;
            border-top-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=top] .arrow::after, .bs-popover-top .arrow::after {
            bottom: 1px;
            border-top-color: #fff
        }

        .bs-popover-auto[x-placement^=right], .bs-popover-right {
            margin-left: .5rem
        }

        .bs-popover-auto[x-placement^=right] .arrow, .bs-popover-right .arrow {
            left: calc((.5rem + 1px) * -1);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=right] .arrow::after, .bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::after, .bs-popover-right .arrow::before {
            border-width: .5rem .5rem .5rem 0
        }

        .bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::before {
            left: 0;
            border-right-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=right] .arrow::after, .bs-popover-right .arrow::after {
            left: 1px;
            border-right-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom], .bs-popover-bottom {
            margin-top: .5rem
        }

        .bs-popover-auto[x-placement^=bottom] .arrow, .bs-popover-bottom .arrow {
            top: calc((.5rem + 1px) * -1)
        }

        .bs-popover-auto[x-placement^=bottom] .arrow::after, .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::after, .bs-popover-bottom .arrow::before {
            border-width: 0 .5rem .5rem
        }

        .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::before {
            top: 0;
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=bottom] .arrow::after, .bs-popover-bottom .arrow::after {
            top: 1px;
            border-bottom-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom] .popover-header::before, .bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -.5rem;
            content: "";
            border-bottom: 1px solid #f7f7f7
        }

        .carousel, .carousel-inner, .carousel-item {
            position: relative
        }

        .arrow-prev-icon, .arrow-next-icon  {
            position: absolute;
            z-index: 1000;
        }


        .bs-popover-auto[x-placement^=left], .bs-popover-left {
            margin-right: .5rem
        }

        .bs-popover-auto[x-placement^=left] .arrow, .bs-popover-left .arrow {
            right: calc((.5rem + 1px) * -1);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=left] .arrow::after, .bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::after, .bs-popover-left .arrow::before {
            border-width: .5rem 0 .5rem .5rem
        }

        .bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::before {
            right: 0;
            border-left-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=left] .arrow::after, .bs-popover-left .arrow::after {
            right: 1px;
            border-left-color: #fff
        }

        .popover-header {
            margin-bottom: 0;
            font-size: 1rem;
            color: inherit;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }
.
        .popover-header:empty {
            display: none
        }

        .popover-body {
            color: #212529
        }

        .carousel-inner {
            width: 100%;
            overflow: hidden
        }

        .carousel-item {
            display: none;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px
        }

        .carousel-item-next, .carousel-item-prev, .carousel-item.active {
            display: block;
            transition: -webkit-transform .6s ease;
            transition: transform .6s ease;
            transition: transform .6s ease, -webkit-transform .6s ease
        }

        @media screen and (prefers-reduced-motion: reduce) {
            .carousel-item-next, .carousel-item-prev, .carousel-item.active {
                transition: none
            }
        }

        .carousel-item-next, .carousel-item-prev {
            position: absolute;
            top: 0
        }

        .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .active.carousel-item-right, .carousel-item-next {
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .active.carousel-item-right, .carousel-item-next {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        .active.carousel-item-left, .carousel-item-prev {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .active.carousel-item-left, .carousel-item-prev {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-duration: .6s;
            transition-property: opacity
        }

        .carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
            opacity: 1
        }

        .carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
            opacity: 0
        }

        .carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-prev, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item.active {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-prev, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .carousel-control-next, .carousel-control-prev {
            position: absolute;
            top: -50px;
            bottom: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            transform: scale(1.2);
            opacity: .9
        }

        .carousel-control-prev {
            left: -15px
        }

        .carousel-control-next {
            right: -15px
        }

        .carousel-control-next-icon, .carousel-control-prev-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: center center no-repeat;
            background-size: 100% 100%
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 10px;
            left: 0;
            z-index: 15;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none
        }

        .carousel-indicators li {
            position: relative;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: rgba(255, 255, 255, .5)
        }

        .carousel-indicators li::after, .carousel-indicators li::before {
            left: 0;
            display: inline-block;
            height: 10px;
            position: absolute;
            content: "";
            width: 100%
        }

        .carousel-indicators li::before {
            top: -10px
        }

        .carousel-indicators li::after {
            bottom: -10px
        }

        .carousel-indicators .active {
            background-color: #fff
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .bg-primary {
            background-color: #007bff !important
        }

        a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover {
            background-color: #0062cc !important
        }

        .bg-secondary {
            background-color: #6c757d !important
        }

        a.bg-secondary:focus, a.bg-secondary:hover, button.bg-secondary:focus, button.bg-secondary:hover {
            background-color: #545b62 !important
        }

        .bg-success {
            background-color: #28a745 !important
        }

        a.bg-success:focus, a.bg-success:hover, button.bg-success:focus, button.bg-success:hover {
            background-color: #1e7e34 !important
        }

        .bg-info {
            background-color: #17a2b8 !important
        }

        a.bg-info:focus, a.bg-info:hover, button.bg-info:focus, button.bg-info:hover {
            background-color: #117a8b !important
        }

        .bg-warning {
            background-color: #ffc107 !important
        }

        a.bg-warning:focus, a.bg-warning:hover, button.bg-warning:focus, button.bg-warning:hover {
            background-color: #d39e00 !important
        }

        .bg-danger {
            background-color: #dc3545 !important
        }

        a.bg-danger:focus, a.bg-danger:hover, button.bg-danger:focus, button.bg-danger:hover {
            background-color: #bd2130 !important
        }

        .bg-light {
            background-color: #f8f9fa !important
        }

        a.bg-light:focus, a.bg-light:hover, button.bg-light:focus, button.bg-light:hover {
            background-color: #dae0e5 !important
        }

        .bg-dark {
            background-color: #343a40 !important
        }

        a.bg-dark:focus, a.bg-dark:hover, button.bg-dark:focus, button.bg-dark:hover {
            background-color: #1d2124 !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .border {
            border: 1px solid #dee2e6 !important
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important
        }

        .border-right {
            border-right: 1px solid #dee2e6 !important
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important
        }

        .border-left {
            border-left: 1px solid #dee2e6 !important
        }

        .border-0 {
            border: 0 !important
        }

        .rounded-right, .rounded-top {
            border-top-right-radius: .25rem !important
        }

        .rounded-bottom, .rounded-right {
            border-bottom-right-radius: .25rem !important
        }

        .rounded-left, .rounded-top {
            border-top-left-radius: .25rem !important
        }

        .rounded-bottom, .rounded-left {
            border-bottom-left-radius: .25rem !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-right-0 {
            border-right: 0 !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-left-0 {
            border-left: 0 !important
        }

        .border-primary {
            border-color: #007bff !important
        }

        .border-secondary {
            border-color: #6c757d !important
        }

        .border-success {
            border-color: #28a745 !important
        }

        .border-info {
            border-color: #17a2b8 !important
        }

        .border-warning {
            border-color: #ffc107 !important
        }

        .border-danger {
            border-color: #dc3545 !important
        }

        .border-light {
            border-color: #f8f9fa !important
        }

        .border-dark {
            border-color: #343a40 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .rounded {
            border-radius: .25rem !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-corners {
            border-radius: 50px
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .d-none {
            display: none !important
        }

        .d-inline {
            display: inline !important
        }


        .d-block {
            display: block !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }

        @media (min-width: 568px) {
            .d-sm-none {
                display: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-sm-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width: 768px) {
            .d-md-none {
                display: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-md-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-lg-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width: 1200px) {
            .d-xl-none {
                display: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-xl-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media print {
            .d-print-none {
                display: none !important
            }

            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-print-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden
        }

        .embed-responsive::before {
            display: block;
            content: ""
        }

        .embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .embed-responsive-21by9::before {
            padding-top: 42.857143%
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%
        }

        .embed-responsive-4by3::before {
            padding-top: 75%
        }

        .embed-responsive-1by1::before {
            padding-top: 100%
        }

        .flex-row {
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-column {
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-row-reverse {
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .flex-fill {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important
        }

        .flex-grow-0 {
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important
        }

        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important
        }

        .fixed-bottom, .fixed-top {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-top {
            top: 0
        }

        .fixed-bottom {
            bottom: 0
        }

        @supports ((position:-webkit-sticky) or (position:sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .sr-only-focusable:active, .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
        }

        .shadow {
            box-shadow: 0 .2rem 1rem rgba(0, 0, 0, .15) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0, .my-0 {
            margin-top: 0 !important
        }

        .mr-0, .mx-0 {
            margin-right: 0 !important
        }

        .mb-0, .my-0 {
            margin-bottom: 0 !important
        }

        .ml-0, .mx-0 {
            margin-left: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1, .my-1 {
            margin-top: .25rem !important
        }

        .mr-1, .mx-1 {
            margin-right: .25rem !important
        }

        .mb-1, .my-1 {
            margin-bottom: .25rem !important
        }

        .ml-1, .mx-1 {
            margin-left: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2, .my-2 {
            margin-top: .5rem !important
        }

        .mr-2, .mx-2 {
            margin-right: .5rem !important
        }

        .mb-2, .my-2 {
            margin-bottom: .5rem !important
        }

        .ml-2, .mx-2 {
            margin-left: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3, .my-3 {
            margin-top: 1rem !important
        }

        .mr-3, .mx-3 {
            margin-right: 1rem !important
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3, .mx-3 {
            margin-left: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4, .my-4 {
            margin-top: 1.5rem !important
        }

        .mr-4, .mx-4 {
            margin-right: 1.5rem !important
        }

        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4, .mx-4 {
            margin-left: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5, .my-5 {
            margin-top: 3rem !important
        }

        .mr-5, .mx-5 {
            margin-right: 3rem !important
        }

        .mb-5, .my-5 {
            margin-bottom: 3rem !important
        }

        .ml-5, .mx-5 {
            margin-left: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0, .py-0 {
            padding-top: 0 !important
        }

        .pr-0, .px-0 {
            padding-right: 0 !important
        }

        .pb-0, .py-0 {
            padding-bottom: 0 !important
        }

        .pl-0, .px-0 {
            padding-left: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1, .py-1 {
            padding-top: .25rem !important
        }

        .pr-1, .px-1 {
            padding-right: .25rem !important
        }

        .pb-1, .py-1 {
            padding-bottom: .25rem !important
        }

        .pl-1, .px-1 {
            padding-left: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2, .py-2 {
            padding-top: .5rem !important
        }

        .pr-2, .px-2 {
            padding-right: .5rem !important
        }

        .pb-2, .py-2 {
            padding-bottom: .5rem !important
        }

        .pl-2, .px-2 {
            padding-left: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3, .py-3 {
            padding-top: 1rem !important
        }

        .pr-3, .px-3 {
            padding-right: 1rem !important
        }

        .pb-3, .py-3 {
            padding-bottom: 1rem !important
        }

        .pl-3, .px-3 {
            padding-left: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4, .py-4 {
            padding-top: 1.5rem !important
        }

        .pr-4, .px-4 {
            padding-right: 1.5rem !important
        }

        .pb-4, .py-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4, .px-4 {
            padding-left: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5, .py-5 {
            padding-top: 3rem !important
        }

        .pr-5, .px-5 {
            padding-right: 3rem !important
        }

        .pb-5, .py-5 {
            padding-bottom: 3rem !important
        }

        .pl-5, .px-5 {
            padding-left: 3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mt-auto, .my-auto {
            margin-top: auto !important
        }

        .mr-auto, .mx-auto {
            margin-right: auto !important
        }

        .mb-auto, .my-auto {
            margin-bottom: auto !important
        }

        .ml-auto, .mx-auto {
            margin-left: auto !important
        }

        .text-justify {
            text-align: justify !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .text-left {
            text-align: left !important
        }

        .text-right {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        @media (min-width: 568px) {
            .flex-sm-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-sm-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-sm-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-sm-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-sm-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-sm-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-sm-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-sm-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-sm-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-sm-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .float-sm-left {
                float: left !important
            }

            .float-sm-right {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }

            .m-sm-0 {
                margin: 0 !important
            }

            .mt-sm-0, .my-sm-0 {
                margin-top: 0 !important
            }

            .mr-sm-0, .mx-sm-0 {
                margin-right: 0 !important
            }

            .mb-sm-0, .my-sm-0 {
                margin-bottom: 0 !important
            }

            .ml-sm-0, .mx-sm-0 {
                margin-left: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .mt-sm-1, .my-sm-1 {
                margin-top: .25rem !important
            }

            .mr-sm-1, .mx-sm-1 {
                margin-right: .25rem !important
            }

            .mb-sm-1, .my-sm-1 {
                margin-bottom: .25rem !important
            }

            .ml-sm-1, .mx-sm-1 {
                margin-left: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .mt-sm-2, .my-sm-2 {
                margin-top: .5rem !important
            }

            .mr-sm-2, .mx-sm-2 {
                margin-right: .5rem !important
            }

            .mb-sm-2, .my-sm-2 {
                margin-bottom: .5rem !important
            }

            .ml-sm-2, .mx-sm-2 {
                margin-left: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .mt-sm-3, .my-sm-3 {
                margin-top: 1rem !important
            }

            .mr-sm-3, .mx-sm-3 {
                margin-right: 1rem !important
            }

            .mb-sm-3, .my-sm-3 {
                margin-bottom: 1rem !important
            }

            .ml-sm-3, .mx-sm-3 {
                margin-left: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .mt-sm-4, .my-sm-4 {
                margin-top: 1.5rem !important
            }

            .mr-sm-4, .mx-sm-4 {
                margin-right: 1.5rem !important
            }

            .mb-sm-4, .my-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-sm-4, .mx-sm-4 {
                margin-left: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .mt-sm-5, .my-sm-5 {
                margin-top: 3rem !important
            }

            .mr-sm-5, .mx-sm-5 {
                margin-right: 3rem !important
            }

            .mb-sm-5, .my-sm-5 {
                margin-bottom: 3rem !important
            }

            .ml-sm-5, .mx-sm-5 {
                margin-left: 3rem !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .pt-sm-0, .py-sm-0 {
                padding-top: 0 !important
            }

            .pr-sm-0, .px-sm-0 {
                padding-right: 0 !important
            }

            .pb-sm-0, .py-sm-0 {
                padding-bottom: 0 !important
            }

            .pl-sm-0, .px-sm-0 {
                padding-left: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .pt-sm-1, .py-sm-1 {
                padding-top: .25rem !important
            }

            .pr-sm-1, .px-sm-1 {
                padding-right: .25rem !important
            }

            .pb-sm-1, .py-sm-1 {
                padding-bottom: .25rem !important
            }

            .pl-sm-1, .px-sm-1 {
                padding-left: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .pt-sm-2, .py-sm-2 {
                padding-top: .5rem !important
            }

            .pr-sm-2, .px-sm-2 {
                padding-right: .5rem !important
            }

            .pb-sm-2, .py-sm-2 {
                padding-bottom: .5rem !important
            }

            .pl-sm-2, .px-sm-2 {
                padding-left: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .pt-sm-3, .py-sm-3 {
                padding-top: 1rem !important
            }

            .pr-sm-3, .px-sm-3 {
                padding-right: 1rem !important
            }

            .pb-sm-3, .py-sm-3 {
                padding-bottom: 1rem !important
            }

            .pl-sm-3, .px-sm-3 {
                padding-left: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .pt-sm-4, .py-sm-4 {
                padding-top: 1.5rem !important
            }

            .pr-sm-4, .px-sm-4 {
                padding-right: 1.5rem !important
            }

            .pb-sm-4, .py-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-sm-4, .px-sm-4 {
                padding-left: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .pt-sm-5, .py-sm-5 {
                padding-top: 3rem !important
            }

            .pr-sm-5, .px-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-5, .py-sm-5 {
                padding-bottom: 3rem !important
            }

            .pl-sm-5, .px-sm-5 {
                padding-left: 3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mt-sm-auto, .my-sm-auto {
                margin-top: auto !important
            }

            .mr-sm-auto, .mx-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-auto, .my-sm-auto {
                margin-bottom: auto !important
            }

            .ml-sm-auto, .mx-sm-auto {
                margin-left: auto !important
            }

            .text-sm-left {
                text-align: left !important
            }

            .text-sm-right {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width: 768px) {
            .flex-md-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-md-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-md-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-md-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-md-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-md-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-md-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-md-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-md-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-md-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-md-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .float-md-left {
                float: left !important
            }

            .float-md-right {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }

            .m-md-0 {
                margin: 0 !important
            }

            .mt-md-0, .my-md-0 {
                margin-top: 0 !important
            }

            .mr-md-0, .mx-md-0 {
                margin-right: 0 !important
            }

            .mb-md-0, .my-md-0 {
                margin-bottom: 0 !important
            }

            .ml-md-0, .mx-md-0 {
                margin-left: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .mt-md-1, .my-md-1 {
                margin-top: .25rem !important
            }

            .mr-md-1, .mx-md-1 {
                margin-right: .25rem !important
            }

            .mb-md-1, .my-md-1 {
                margin-bottom: .25rem !important
            }

            .ml-md-1, .mx-md-1 {
                margin-left: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .mt-md-2, .my-md-2 {
                margin-top: .5rem !important
            }

            .mr-md-2, .mx-md-2 {
                margin-right: .5rem !important
            }

            .mb-md-2, .my-md-2 {
                margin-bottom: .5rem !important
            }

            .ml-md-2, .mx-md-2 {
                margin-left: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .mt-md-3, .my-md-3 {
                margin-top: 1rem !important
            }

            .mr-md-3, .mx-md-3 {
                margin-right: 1rem !important
            }

            .mb-md-3, .my-md-3 {
                margin-bottom: 1rem !important
            }

            .ml-md-3, .mx-md-3 {
                margin-left: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .mt-md-4, .my-md-4 {
                margin-top: 1.5rem !important
            }

            .mr-md-4, .mx-md-4 {
                margin-right: 1.5rem !important
            }

            .mb-md-4, .my-md-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-md-4, .mx-md-4 {
                margin-left: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .mt-md-5, .my-md-5 {
                margin-top: 3rem !important
            }

            .mr-md-5, .mx-md-5 {
                margin-right: 3rem !important
            }

            .mb-md-5, .my-md-5 {
                margin-bottom: 3rem !important
            }

            .ml-md-5, .mx-md-5 {
                margin-left: 3rem !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .pt-md-0, .py-md-0 {
                padding-top: 0 !important
            }

            .pr-md-0, .px-md-0 {
                padding-right: 0 !important
            }

            .pb-md-0, .py-md-0 {
                padding-bottom: 0 !important
            }

            .pl-md-0, .px-md-0 {
                padding-left: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .pt-md-1, .py-md-1 {
                padding-top: .25rem !important
            }

            .pr-md-1, .px-md-1 {
                padding-right: .25rem !important
            }

            .pb-md-1, .py-md-1 {
                padding-bottom: .25rem !important
            }

            .pl-md-1, .px-md-1 {
                padding-left: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .pt-md-2, .py-md-2 {
                padding-top: .5rem !important
            }

            .pr-md-2, .px-md-2 {
                padding-right: .5rem !important
            }

            .pb-md-2, .py-md-2 {
                padding-bottom: .5rem !important
            }

            .pl-md-2, .px-md-2 {
                padding-left: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .pt-md-3, .py-md-3 {
                padding-top: 1rem !important
            }

            .pr-md-3, .px-md-3 {
                padding-right: 1rem !important
            }

            .pb-md-3, .py-md-3 {
                padding-bottom: 1rem !important
            }

            .pl-md-3, .px-md-3 {
                padding-left: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .pt-md-4, .py-md-4 {
                padding-top: 1.5rem !important
            }

            .pr-md-4, .px-md-4 {
                padding-right: 1.5rem !important
            }

            .pb-md-4, .py-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-md-4, .px-md-4 {
                padding-left: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .pt-md-5, .py-md-5 {
                padding-top: 3rem !important
            }

            .pr-md-5, .px-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-5, .py-md-5 {
                padding-bottom: 3rem !important
            }

            .pl-md-5, .px-md-5 {
                padding-left: 3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mt-md-auto, .my-md-auto {
                margin-top: auto !important
            }

            .mr-md-auto, .mx-md-auto {
                margin-right: auto !important
            }

            .mb-md-auto, .my-md-auto {
                margin-bottom: auto !important
            }

            .ml-md-auto, .mx-md-auto {
                margin-left: auto !important
            }

            .text-md-left {
                text-align: left !important
            }

            .text-md-right {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width: 992px) {
            .flex-lg-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-lg-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-lg-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-lg-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-lg-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-lg-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-lg-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-lg-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-lg-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-lg-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .float-lg-left {
                float: left !important
            }

            .float-lg-right {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }

            .m-lg-0 {
                margin: 0 !important
            }

            .mt-lg-0, .my-lg-0 {
                margin-top: 0 !important
            }

            .mr-lg-0, .mx-lg-0 {
                margin-right: 0 !important
            }

            .mb-lg-0, .my-lg-0 {
                margin-bottom: 0 !important
            }

            .ml-lg-0, .mx-lg-0 {
                margin-left: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .mt-lg-1, .my-lg-1 {
                margin-top: .25rem !important
            }

            .mr-lg-1, .mx-lg-1 {
                margin-right: .25rem !important
            }

            .mb-lg-1, .my-lg-1 {
                margin-bottom: .25rem !important
            }

            .ml-lg-1, .mx-lg-1 {
                margin-left: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .mt-lg-2, .my-lg-2 {
                margin-top: .5rem !important
            }

            .mr-lg-2, .mx-lg-2 {
                margin-right: .5rem !important
            }

            .mb-lg-2, .my-lg-2 {
                margin-bottom: .5rem !important
            }

            .ml-lg-2, .mx-lg-2 {
                margin-left: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .mt-lg-3, .my-lg-3 {
                margin-top: 1rem !important
            }

            .mr-lg-3, .mx-lg-3 {
                margin-right: 1rem !important
            }

            .mb-lg-3, .my-lg-3 {
                margin-bottom: 1rem !important
            }

            .ml-lg-3, .mx-lg-3 {
                margin-left: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .mt-lg-4, .my-lg-4 {
                margin-top: 1.5rem !important
            }

            .mr-lg-4, .mx-lg-4 {
                margin-right: 1.5rem !important
            }

            .mb-lg-4, .my-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-lg-4, .mx-lg-4 {
                margin-left: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .mt-lg-5, .my-lg-5 {
                margin-top: 3rem !important
            }

            .mr-lg-5, .mx-lg-5 {
                margin-right: 3rem !important
            }

            .mb-lg-5, .my-lg-5 {
                margin-bottom: 3rem !important
            }

            .ml-lg-5, .mx-lg-5 {
                margin-left: 3rem !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .pt-lg-0, .py-lg-0 {
                padding-top: 0 !important
            }

            .pr-lg-0, .px-lg-0 {
                padding-right: 0 !important
            }

            .pb-lg-0, .py-lg-0 {
                padding-bottom: 0 !important
            }

            .pl-lg-0, .px-lg-0 {
                padding-left: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .pt-lg-1, .py-lg-1 {
                padding-top: .25rem !important
            }

            .pr-lg-1, .px-lg-1 {
                padding-right: .25rem !important
            }

            .pb-lg-1, .py-lg-1 {
                padding-bottom: .25rem !important
            }

            .pl-lg-1, .px-lg-1 {
                padding-left: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .pt-lg-2, .py-lg-2 {
                padding-top: .5rem !important
            }

            .pr-lg-2, .px-lg-2 {
                padding-right: .5rem !important
            }

            .pb-lg-2, .py-lg-2 {
                padding-bottom: .5rem !important
            }

            .pl-lg-2, .px-lg-2 {
                padding-left: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .pt-lg-3, .py-lg-3 {
                padding-top: 1rem !important
            }

            .pr-lg-3, .px-lg-3 {
                padding-right: 1rem !important
            }

            .pb-lg-3, .py-lg-3 {
                padding-bottom: 1rem !important
            }

            .pl-lg-3, .px-lg-3 {
                padding-left: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .pt-lg-4, .py-lg-4 {
                padding-top: 1.5rem !important
            }

            .pr-lg-4, .px-lg-4 {
                padding-right: 1.5rem !important
            }

            .pb-lg-4, .py-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-lg-4, .px-lg-4 {
                padding-left: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .pt-lg-5, .py-lg-5 {
                padding-top: 3rem !important
            }

            .pr-lg-5, .px-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-5, .py-lg-5 {
                padding-bottom: 3rem !important
            }

            .pl-lg-5, .px-lg-5 {
                padding-left: 3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mt-lg-auto, .my-lg-auto {
                margin-top: auto !important
            }

            .mr-lg-auto, .mx-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-auto, .my-lg-auto {
                margin-bottom: auto !important
            }

            .ml-lg-auto, .mx-lg-auto {
                margin-left: auto !important
            }

            .text-lg-left {
                text-align: left !important
            }

            .text-lg-right {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width: 1200px) {
            .flex-xl-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-xl-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-xl-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-xl-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-xl-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-xl-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-xl-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-xl-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-xl-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-xl-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .float-xl-left {
                float: left !important
            }

            .float-xl-right {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }

            .m-xl-0 {
                margin: 0 !important
            }

            .mt-xl-0, .my-xl-0 {
                margin-top: 0 !important
            }

            .mr-xl-0, .mx-xl-0 {
                margin-right: 0 !important
            }

            .mb-xl-0, .my-xl-0 {
                margin-bottom: 0 !important
            }

            .ml-xl-0, .mx-xl-0 {
                margin-left: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .mt-xl-1, .my-xl-1 {
                margin-top: .25rem !important
            }

            .mr-xl-1, .mx-xl-1 {
                margin-right: .25rem !important
            }

            .mb-xl-1, .my-xl-1 {
                margin-bottom: .25rem !important
            }

            .ml-xl-1, .mx-xl-1 {
                margin-left: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .mt-xl-2, .my-xl-2 {
                margin-top: .5rem !important
            }

            .mr-xl-2, .mx-xl-2 {
                margin-right: .5rem !important
            }

            .mb-xl-2, .my-xl-2 {
                margin-bottom: .5rem !important
            }

            .ml-xl-2, .mx-xl-2 {
                margin-left: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .mt-xl-3, .my-xl-3 {
                margin-top: 1rem !important
            }

            .mr-xl-3, .mx-xl-3 {
                margin-right: 1rem !important
            }

            .mb-xl-3, .my-xl-3 {
                margin-bottom: 1rem !important
            }

            .ml-xl-3, .mx-xl-3 {
                margin-left: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .mt-xl-4, .my-xl-4 {
                margin-top: 1.5rem !important
            }

            .mr-xl-4, .mx-xl-4 {
                margin-right: 1.5rem !important
            }

            .mb-xl-4, .my-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-xl-4, .mx-xl-4 {
                margin-left: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .mt-xl-5, .my-xl-5 {
                margin-top: 3rem !important
            }

            .mr-xl-5, .mx-xl-5 {
                margin-right: 3rem !important
            }

            .mb-xl-5, .my-xl-5 {
                margin-bottom: 3rem !important
            }

            .ml-xl-5, .mx-xl-5 {
                margin-left: 3rem !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .pt-xl-0, .py-xl-0 {
                padding-top: 0 !important
            }

            .pr-xl-0, .px-xl-0 {
                padding-right: 0 !important
            }

            .pb-xl-0, .py-xl-0 {
                padding-bottom: 0 !important
            }

            .pl-xl-0, .px-xl-0 {
                padding-left: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .pt-xl-1, .py-xl-1 {
                padding-top: .25rem !important
            }

            .pr-xl-1, .px-xl-1 {
                padding-right: .25rem !important
            }

            .pb-xl-1, .py-xl-1 {
                padding-bottom: .25rem !important
            }

            .pl-xl-1, .px-xl-1 {
                padding-left: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .pt-xl-2, .py-xl-2 {
                padding-top: .5rem !important
            }

            .pr-xl-2, .px-xl-2 {
                padding-right: .5rem !important
            }

            .pb-xl-2, .py-xl-2 {
                padding-bottom: .5rem !important
            }

            .pl-xl-2, .px-xl-2 {
                padding-left: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .pt-xl-3, .py-xl-3 {
                padding-top: 1rem !important
            }

            .pr-xl-3, .px-xl-3 {
                padding-right: 1rem !important
            }

            .pb-xl-3, .py-xl-3 {
                padding-bottom: 1rem !important
            }

            .pl-xl-3, .px-xl-3 {
                padding-left: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .pt-xl-4, .py-xl-4 {
                padding-top: 1.5rem !important
            }

            .pr-xl-4, .px-xl-4 {
                padding-right: 1.5rem !important
            }

            .pb-xl-4, .py-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-xl-4, .px-xl-4 {
                padding-left: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .pt-xl-5, .py-xl-5 {
                padding-top: 3rem !important
            }

            .pr-xl-5, .px-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-5, .py-xl-5 {
                padding-bottom: 3rem !important
            }

            .pl-xl-5, .px-xl-5 {
                padding-left: 3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mt-xl-auto, .my-xl-auto {
                margin-top: auto !important
            }

            .mr-xl-auto, .mx-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-auto, .my-xl-auto {
                margin-bottom: auto !important
            }

            .ml-xl-auto, .mx-xl-auto {
                margin-left: auto !important
            }

            .text-xl-left {
                text-align: left !important
            }

            .text-xl-right {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .font-weight-light {
            font-weight: 300 !important
        }

        .font-weight-normal {
            font-weight: 400 !important
        }

        .font-weight-bold {
            font-weight: 700 !important
        }

        .font-italic {
            font-style: italic !important
        }

        .text-white {
            color: #fff !important
        }

        .text-primary {
            color: #007bff !important
        }

        a.text-primary:focus, a.text-primary:hover {
            color: #0062cc !important
        }

        .text-secondary {
            color: #6c757d !important
        }

        a.text-secondary:focus, a.text-secondary:hover {
            color: #545b62 !important
        }

        .text-success {
            color: #28a745 !important
        }

        a.text-success:focus, a.text-success:hover {
            color: #1e7e34 !important
        }

        .text-info {
            color: #17a2b8 !important
        }

        a.text-info:focus, a.text-info:hover {
            color: #117a8b !important
        }

        .text-warning {
            color: #ffc107 !important
        }

        a.text-warning:focus, a.text-warning:hover {
            color: #d39e00 !important
        }

        .text-danger {
            color: #dc3545 !important
        }

        a.text-danger:focus, a.text-danger:hover {
            color: #bd2130 !important
        }

        .text-light {
            color: #f8f9fa !important
        }

        a.text-light:focus, a.text-light:hover {
            color: #dae0e5 !important
        }

        .text-dark {
            color: #343a40 !important
        }

        a.text-dark:focus, a.text-dark:hover {
            color: #1d2124 !important
        }

        .text-body {
            color: #212529 !important
        }

        .text-muted {
            color: #6c757d !important
        }

        .text-black-50 {
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            color: rgba(255, 255, 255, .5) !important
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            background-color: transparent;
            border: 0
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media print {
            blockquote, img, pre, tr {
                page-break-inside: avoid
            }

            *, ::after, ::before {
                text-shadow: none !important;
                box-shadow: none !important
            }

            a:not(.btn) {
                text-decoration: underline
            }

            abbr[title]::after {
                content: " (" attr(title) ")"
            }

            h2, h3, p {
                orphans: 3;
                widows: 3
            }

            h2, h3 {
                page-break-after: avoid
            }

            @page {
                size: a3
            }

            .container, body {
                min-width: 992px !important
            }

            .navbar {
                display: none
            }
        }









        .custom-nav-button {
            display: none !important;
        }

        #custom-navbar a {
            color: #fff !important;
        }

        #custom-navbar i {
            margin-left: 5px !important;
            margin-right: 5px !important;
            font-size: 17px !important;
        }

        #custom-navbar .sub-menu {
            z-index: 1000 !important;
            top: 98% !important;
            min-width: 10rem !important;
            padding: 0.5rem 0 !important;
            margin: 0.125rem 0 0 !important;
            font-size: 1rem !important;
            list-style: none !important;
            background-clip: padding-box !important;
            border: 1px solid rgba(0, 0, 0, 0.15) !important;
            border-radius: 0.25rem !important;
            background: #fff !important;
        }

        #custom-navbar .sub-menu a {
            color: #000 !important;
        }

        #custom-navbar .sub-menu a:hover {
            color: #f24026 !important;
            background: transparent !important;
        }

        #custom-navbar .dropdown-item:active {
            background: transparent !important;
        }








        @media only screen and (max-width : 991.5px) and (min-width: 375px) {
            .custom-nav-button {
                margin: 5px !important;
            }
        }

        @media only screen and (max-width : 991.5px) {
            
            .bg-custom {
                    margin-right: initial!important;
            }
            #custom-navbar .navbar-collapse {
                background-color: #f24026 !important;
                border-color: #f24026 !important;
            }

            .custom-nav-button {
                display: block !important;
                color: rgba(0,0,0,.5) !important;
                border-color: rgba(0,0,0,.1) !important;
                background: transparent !important;
                float: right;
            }

            .custom-nav-button .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }

            #custom-navbar .nav-item {
                margin-left: 20px !important;
                margin-right: 20px !important;
            }

            #custom-navbar .nav-item .open-sub-menu i {
                float: right !important;
            }
        }

        @media (min-width: 992px) {
            #custom-navbar {
                background-color: #f24026 !important;
                border-color: #f24026 !important;
            }

            #custom-navbar .nav-item {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            #custom-navbar .sub-menu {
                position: absolute !important;
            }
        }












    </style>
    <!--
      <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="preload" as="style">
      <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="preload" as="style">
   -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


    <!--  <link defer href="{{ asset('front/css/style.css?v=1') }}" rel="stylesheet" media="all"> -->
    <style>
        /* https://www.expatcarbuyers.com/front/css/style.css?v=1 */
        a, body {
            color: #000
        }

        .bg, .header-main, .navigation_bar.navbar-nav li a.nav-link {
            position: relative
        }

        .freepik, a, a:hover {
            text-decoration: none
        }

        a, a.go-to-top {
            cursor: pointer
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body, html {
            width: 100%;
            height: 100%
        }

        a {
            outline: 0
        }

        p {
            font-size: 15px;
            line-height: 1.6
        }

        .font-18 {
            font-size: 18px
        }

        .blog-row .blog-box .image img {
            width: 100%;
        }

        .blog-row .blog-box .bottom-blog {
            padding: 20px;
        }

        .help-block-error {
            color: red;
        }

        .blog-categories ul li a {
            background: #F84429;
            color: #fff;
            padding: 10px 20px;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
            text-transform: capitalize;
            border-radius: 4px;
            font-size: 12px;
        }

        .ajax-loader {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 11;
        }

        .blog-categories ul {
            list-style: none;
        }

        .ajax-loader {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 11;
        }

        .blog-thumb-link {
            width: 100%;
            height: 100%;
            display: inline-block;
        }

        .post-column-thumb .blog-meta ul li.blog-date {
            padding-right: 5px;
        }

        .post-column-thumb .blog-meta ul li.blog-author {
            padding-left: 2px;
        }

        .blog-search-box {
            position: relative;
        }

        .blog-search-box button {
            position: absolute;
            right: 0px;
            top: 0px;
            height: 100%;
            width: 50px;
            border: 1px solid #cecece;
            font-size: 17px;
            color: #828282;
        }

        .sidebar-recent-blog-box .post-column-thumb:last-child {
            border-bottom: 0px;
        }

        .sidebar-recent-blog-box .post-column-thumb .post-text h4 a:hover {
            color: #F84429;
        }

        .blog-slider-content a {
            color: #fff;
        }

        .sidebar-recent-blog-box .post-column-thumb .thumb img {
            width: 90px;
        }

        .sidebar-recent-blog-box .post-column-thumb .thumb {
            max-width: 90px;
            margin-right: 10px;
        }

        .sidebar-recent-blog-box .post-column-thumb {
            display: flex;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }

        .blog-row .blog-box .blog-box-inner .blog-category a {
            color: #fff;
        }

        .blog-row .blog-box .blog-box-inner .image {
            height: 245px;
            background-size: cover;
            background-position: center;
        }

        .blog-row .blog-box .blog-box-inner .blog-category {
            background: #F84429;
            position: absolute;
            padding: 5px 20px;
            color: #fff;
            text-transform: capitalize;
        }

        .sidebar-recent-blog-box .post-column-thumb .post-text h4 {
            font-size: 16px;
            line-height: 125%;
            margin-bottom: 4px;
        }

        .sidebar-recent-blog-box .post-column-thumb .blog-meta {
            line-height: 100%;
        }

        .sidebar-recent-blog-box .post-column-thumb .blog-meta li {
            font-size: 9px;
        }

        .blog-carousel .carousel-control-div {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .blog-categories ul li a:hover {
            background: #222222;
        }

        .blog-categories ul li {
            display: inline-block;
        }

        .blog-slider-content {
            position: absolute;
            bottom: 0px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 20px;
            width: 100%;
        }

        .blog-slider-content h4 {
            color: #fff;
            margin-bottom: 15px;
        }

        .blog-slider-content p {
            color: #fff;
            font-size: 13px;
        }

        .blog-carousel .carousel-indicators li {
            background-color: #595959;
            width: 10px;
            height: 10px;
            border-radius: 10px;
        }

        .blog-section-row {
            padding: 60px 0px 30px;
        }

        .blog-carousel .carousel-indicators .active {
            background-color: #9b9b9b
        }

        .carousel {
            overflow: hidden;
        }

        .blog-newsletter-box {
            background: #eee;
            margin-top: 30px;
            padding: 30px 20px 40px;
        }

        .blog-newsletter-box h3 {
            margin-bottom: 30px !important;
        }

        .blog-search-box input {
            width: 100%;
            border: 1px solid #cecece;
            padding: 14px;
            outline: none;
        }

        .page-link:focus {
            box-shadow: 0px 0px;
        }

        .blog-slider-box {
            min-height: 385px;
            background-size: cover;
            background-position: center;
        }

        .blog-meta ul {
            list-style: none;
        }

        .blog-pegination .pagination {
            justify-content: center;
            padding: 40px 0px 0px;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #F84429;
            border-color: #F84429;
        }

        .page-link {
            color: #F84429;
        }

        .blog-box-single-inner .blog-meta {
            margin-bottom: 30px;
        }

        .blog-box-single-inner .img-responsive {
            width: 100%;
        }

        .single-content-row h1, .single-content-row h2, .single-content-row h3, .single-content-row h4, .single-content-row h5, .single-content-row h6 {
            margin: 20px 0px;
        }

        .page-link:hover {
            color: #fff;
            background-color: #F84429;
            border-color: #F84429;
        }

        .blog-read-more a {
            color: #F84429;
        }

        .blog-read-more a span.read-more-icon {
            padding-left: 8px;
            color: #F84429;
        }

        .blog-meta ul li {
            display: inline-block;
            color: #747474;
            font-size: 11px;
            line-height: 100%;
            font-weight: 600;
        }

        .blog-meta ul li.blog-date {
            border-right: 1px solid #000;
            padding-right: 10px;
        }

        .blog-meta ul li.blog-author {
            padding-left: 10px;
            font-style: italic;
        }

        .blog-row .blog-box .title h3 a {
            color: #222222;
        }

        .blog-row .blog-box {
            padding-bottom: 30px;
        }

        .blog-row .blog-box .blog-box-inner {
            height: 100%;
            border: 1px solid #e5e5e5;
        }

        .blog-row .blog-box .title h3 a:hover {
            color: #f24026;
        }

        .single-img {
            margin-bottom: 20px;
        }

        .single-img img {
            width: 100%;
        }

        .blog-row .blog-box .title h3 {
            font-size: 23px;
            margin-bottom: 20px;
            letter-spacing: 0px;
            line-height: 140%;
        }

        .blog-section {
            padding: 0px 0px 60px;
        }

        .blog-section-single {
            padding: 60px 0px;
        }

        .blog-section-single .blog-newsletter-box {
            margin-top: 0px;
        }

        .form-inline {
            align-items: flex-start;
        }

        .blog-row .blog-box .base-text {
            font-size: 14px;
            line-height: 28px;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
        }

        .header-phone, .header-phone:hover {
            color: #fff
        }

        .btn-theme {
            padding: 11px 69px
        }

        .footer-social-global ul {
            list-style: none
        }

        .footer-social-global ul li {
            display: inline-block;
            margin-right: 5px
        }

        .footer-social-global ul li a {
            background: #F24026;
            height: 35px;
            width: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 35px;
            line-height: 35px
        }

        .footer-social-global ul li a img {
            width: 15px
        }

        .footer-social-global ul li a:hover {
            background: #F84429
        }

        .theme-bg {
            background: #f24026
        }

        body {
            font-family: 'Open Sans', sans-serif
        }

        button.navbar-toggler {
            padding: 5px;
            font-size: 15px
        }

        .navbar-toggler-icon {
            width: 30px;
            height: 20px
        }

        .font-mons {
            font-family: Montserrat, sans-serif
        }

        .banner-form select.modl-year {
            background-image: url(https://www.expatcarbuyers.com/front/images/calendar.svg)
        }

        .banner-form input, .banner-form select {
            
            background: #FFFFFF;
            border: 0.919841px solid #E5E5E5;
            
            border-radius: 10px;
            background-size: 32px 25px;
            background-position: 3px 9px;
            background-repeat: no-repeat;
            padding-left: 44px;
            background-image: url(https://www.expatcarbuyers.com/front/images/taxi.svg);
            -webkit-appearance: none;
            -moz-appearance: none
        }

        .banner-form select.modl-model {
            background-image: url(https://www.expatcarbuyers.com/front/images/slider-tool.svg)
        }

        .banner-form .car_call input {
            background-image: url(https://www.expatcarbuyers.com/front/images/phone-call.svg);
            background-position: 10px 12px
        }

        .second-easy-steps .banner-form .car_call input {
            background-image: none
        }

        .err_msg.error_email, .err_msg.error_name, .err_msg.error_phone, .help-block-error {
            color: red;
            text-align: left;
            font-size: 12px;
            line-height: 130%;
            width: 100%;
            display: inline-block;
            margin-top: 3px;
            padding-left: 10px;
        }

        .logo {
            width: 238px
        }

        .f-18 {
            font-size: 18px
        }

        .f-medium {
            font-weight: 500
        }

        .header-main {
            z-index: 1;
            box-shadow: 0 .2rem 1rem rgba(0, 0, 0, .15)
        }

        .book-button {
            width: 180px;
            padding: .7rem 0
        }

        .bg-custom {
            background: url(https://www.expatcarbuyers.com/front/images/X6.png) left no-repeat #fff;
            background-size: 56%;
        }

        .freepik {
            position: fixed;
            top: 10px;
            right: 10px;
            color: rgba(0, 0, 0, .5)
        }

        .navigation_bar.navbar-nav li.active a.nav-link, .theme-color {
            color: #f24026
        }
        
        .theme-color-border {
            border-color: #f24026!important;
        }

        .car {
            position: relative;
            height: 120px;
            width: 329px
        }

        .circle1, .circle2 {
            width: 53.74px;
            height: 53.74px
        }

        .bottom-line {
            position: absolute;
            bottom: 0;
            left: 0
        }

        #moving-type-left {
            position: absolute;
            top: 66px;
            left: 60px
        }

        .circle1 {
            position: relative;
            top: 0;
            background: url(https://www.expatcarbuyers.com/front/images/left.svg) no-repeat
        }

        #moving-type-right {
            position: absolute;
            top: 66px;
            left: 260px
        }

        .circle2 {
            position: relative;
            top: 0;
            background: url(https://www.expatcarbuyers.com/front/images/right.svg) no-repeat
        }

        .navigation_bar.navbar-nav li a.nav-link:hover:before, .navigation_bar.navbar-nav li.active a.nav-link:before {
            position: absolute;
            background: #f24026;
            content: "";
            height: 4px;
            width: 100%;
            top: -8px;
            left: 0
        }

        .subpage-bg-section {
            background: url(/images/get-back.jpg) no-repeat;
            background-size: cover
        }

        .car {
            bottom: 0;
            left: 20px
        }

        .car img {
            width: 262px
        }

        .banner-Text {
            top: 50%;
            transform: translateY(-50%)
        }

        .basic-color {
            color: #606568
        }

        .basic-color1 {
            color: #676e76
        }

        .banner-form ul.dropdown-menu.show {
            width: 100%;
            padding-left: 15px
        }

        ul.dropdown-menu li a {
            color: rgba(37, 36, 37, .5)
        }

        .sellanycar .list-inline-item:not(:last-child) {
            margin-right: 0
        }

        .banner-form .dropdown-toggle::after {
            right: 15px;
            position: absolute;
            top: 22px
        }

        .banner-form .dropdown .dropdown-toggle {
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 14px;
            background-color: #fff;
            background-position: 18px 15px;
            background-repeat: no-repeat;
            padding: 13px 20px 13px 50px;
            color: rgba(37, 36, 37, .5);
            text-align: left;
            background-size: 18px
        }

        .plus, .process-Title:before, .userProfile, a.go-to-top {
            text-align: center
        }

        .banner-form .car_date .dropdown-toggle, .banner-form .dropdown.car_year .dropdown-toggle {
            background-image: url(https://www.expatcarbuyers.com/front/images/calendar.svg)
        }

        .banner-form .dropdown.selectmake .dropdown-toggle {
            background-image: url(https://www.expatcarbuyers.com/front/images/taxi.svg);
            background-size: 20px
        }

        .banner-form .dropdown.car_modal .dropdown-toggle {
            background-image: url(https://www.expatcarbuyers.com/front/images/slider-tool.svg)
        }

        .width-24 {
            width: 24px
        }

        #testCarousel .carousel-indicators li {
            background: #a3a3a3;
            border-radius: 50%;
            width: 10px;
            height: 10px
        }

        #testCarousel {
            overflow: visible;
        }

        .userProfile h4 {
            position:relative;
        }

        .google_icon {
            width: 23px;
            height:23px;
            background-image: url(https://cdn.trustindex.io/assets/platform/Google/icon.svg);
            background-color:#fff;
            background-size: 20px 20px;
            background-repeat:no-repeat;
            background-position:center;
            position:absolute;
            bottom:-12px;
            right:5px;
            border-radius:50%;
        }
        
        .review_google_icon{
                width: 40px;
                height: 40px;
                background-image: url(https://cdn.trustindex.io/assets/platform/Google/icon.svg);
                background-color: #fff0;
                background-size: 40px 40px;
                background-repeat: no-repeat;
                background-position: center;
                /* border: solid 1px black; */
                /* position: absolute; */
                bottom: -12px;
                right: 5px;
                border-radius: 50%;
        }


        .userProfile {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: left;
            margin: 0 !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .carousel-control-div {
            display: inline-block;
            width: 100%;
            text-align: center;
            padding-top: 50px
        }

        .displayNone1024, a.go-to-top {
            display: none
        }

        .carousel-indicators {
            position: relative;
            right: 0;
            bottom: 0
        }

        .carousel-control-div a.carousel-control {
            font-size: 25px;
            margin: 0 15px
        }

        #testCarousel .carousel-indicators .active {
            background: #707070
        }

        .banner-form {
            Padding: 37px 42px 50px 42px;
            background: #FFFFFF;
            border: 0.919841px solid #E0E0E0;
            box-shadow: 0px 3.67936px 7.35873px rgba(0, 0, 0, 0.12);
            border-radius: 17.4246px;
        }
        
        .banner-form h5{
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-size: 25.7057px;
            line-height: 31px;
            text-align: left;
            color: #F24026;
        }
        .banner-form h4{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 30.8468px;
            line-height: 49px;
            text-align: left;
            color: #000000;
        }
        .banner-form label {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 10.2823px;
            line-height: 15px;
            text-align: left;
            justify-content: left;
            text-transform: uppercase;
            margin-bottom: 12px;
            color: #263238;
        }
        .banner-form p{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-size: 13.7097px;
            line-height: 16px;
            text-align: left;
            color: #313131;
        }
        .banner-form-btn {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 14.7175px;
            line-height: 15px;
            /* identical to box height, or 100% */
            text-align: center;
            color: #FFFFFF;
            
            padding: 13.7976px 0 13.7976px 0;
            background: #F24026;
            border-radius: 871.232px;
        }
        
        .banner-form .dropdown, .banner-form .col-12{
            padding-left: 0;
            padding-right: 0;
        }
        

        .supportMail {
            background: #25262B;
        }
        .supportMail h4{
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 32px;
            color: #FFFFFF;
        }
        
        .how_does_work_section h2{
            font-style: normal;
            font-weight: 700;
            font-size: 33.7785px;
            line-height: 42px;
            color: #000000;
            text-align: center;
        }

        .how_does_work_section img {
            width: 40px
        }
        
        .how_does_work_section_item {
            background: #FFFFFF;
            box-shadow: 0px 1.50943px 26.4151px rgba(0, 0, 0, 0.08);
            border-radius: 15.0943px;
        }
        
        .how_does_work_section_item .img-section{
            background: #FFEEED;
            border-radius: 15.0943px 15.0943px 0px 0px;
            min-height: 130px!important;
        }
        
        .how_does_work_section_item h6{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
        }
        
        .how_does_work_section_item p{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 25px;
            color: rgba(0, 0, 0, 0.5);
        }

        .how_does_work_section p {
            color: rgba(0, 0, 0, .5)
        }
        
        .how_does_it_work_video h2{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 30.012px;
            line-height: 35px;
            text-transform: uppercase;
            color: rgba(0, 0, 0, 0.5);

        }
        .how_to_sell .col-lg-12 div{
            background: #FCF5F2;
            border-radius: 20px;
        }
        
        .how_to_sell .col-lg-12 div h2{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 27.4403px;
            line-height: 45px;
            text-transform: uppercase;
            color: #F24026;
        }
        
        .how_to_sell .col-lg-12 div p{
        
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            color: #F24026;
            
        }

        .how_to_sell .col-lg-6 div
        {
            background: #FFFFFF;
            box-shadow: 0px 1px 44px rgba(0, 0, 0, 0.06);
            border-radius: 23.3714px;
        }
        .how_to_sell .col-lg-6 div h4
        {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 27.4403px;
            line-height: 45px;
            color: #000000;
        }
        
        .how_to_sell .col-lg-6 div p{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 15.9885px;
            line-height: 23px;
            color: #000000;
            opacity: 0.7;
        }
        .ourgurantee_section h2 {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 33.5489px;
            line-height: 42px;
            color: #000000;
        }
        .ourgurantee_section li{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 20.0804px;
            line-height: 30px;
            color: #000000;
        }
        
        .selling_process h2{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 33.5489px;
            line-height: 42px;
            text-transform: capitalize;
            color: #000000;
        }
        
        .selling_process .shadow_box{
            background: #FFFFFF;
            box-shadow: 0px 5.25209px 22.509px rgba(0, 0, 0, 0.1)!important;
        }
        
        .selling_process .shadow_box h4{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-size: 20.2581px;
            line-height: 27px;
            color: #000000;
        }
        
        .selling_process .shadow_box p{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 11.2545px;
            line-height: 19px;
            color: #000000;
        }
        
        .selling_issues .col-12{
            background: #FFFFFF;
            border: 2px solid #FFD0C9;
            border-radius: 22.3659px;
        }
        .selling_issues h2{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 39.8763px;
            line-height: 49px;
            text-align: center;
            text-transform: uppercase;
            color: #000000;
        }
        .selling_issues p{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 13.5429px;
            line-height: 22px;
            color: #000000;
        }
        .selling_issues p span{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 18.0572px;
            line-height: 29px;
            color: #F24026;
        }
        .selling_issues h4{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 21.8191px;
            line-height: 27px;
            text-align: center;
            text-transform: uppercase;
            color: #000000;
        }
        .selling_issues a{
            left: calc(50% - 273.81px/2 - 0px);
            top: calc(50% - 41.2px/2 + 213.75px);
            background: #F24026;
            border-radius: 42.58px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 17.88px;
            line-height: 21px;
            color: #FFFFFF;
        }
        
        .what-people-say h2{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 33.5489px;
            line-height: 42px;
            color: #000000;
        }
        
        .scrap_car .col-lg-12{
            background: #FFFFFF;
            border: 2px solid #FFD0C9;
            border-radius: 22.3659px;

        }
        .scrap_car h2{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 600;
            font-size: 26.49px;
            line-height: 41px;
            text-transform: capitalize;
            color: #000000;
        }
        .scrap_car p{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 16.7811px;
            line-height: 22px;
            color: #000000;
        }

        .sellingCarDetail {
            margin-top: -75px;
            background: #f24026;
            height: 400px
        }

        .sellanycar {
            margin-top: 16rem
        }

        .sellcarlist li {
            color: #626161;
            width: 49%;
            vertical-align: top
        }

        .simpleFastProfitable {
            background: #f7f7f7
        }

        .process-Title:before {
            width: 30px;
            height: 30px;
            border: 2px solid #f24026;
            border-radius: 50px;
            position: absolute;
            left: 12px;
            font-size: 13px;
            font-weight: 600;
            color: #f24026;
            line-height: 1.9
        }

        .process1:before {
            content: '1'
        }

        .process2:before {
            content: '2'
        }

        .process3:before {
            content: '3'
        }

        .process4:before {
            content: '4'
        }

        .userProfile {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            color: #fff;
            /*padding-top: 17px*/
        }

        .Profile-alpha-o {
            background: #30336b
        }

        .Profile-alpha-a {
            background: #eb4d4b
        }

        .selling-process.directionLeft:after {
            background: url(https://www.expatcarbuyers.com/front/images/Path-arrow.svg) center no-repeat;
            right: 47px;
            height: 130px;
            width: 100%;
            top: 100%
        }

        .selling-process {
            position: relative;
            width: 100%
        }

        .selling-process.directionRight:after {
            position: absolute;
            content: '';
            background: url(https://www.expatcarbuyers.com/front/images/Line2.svg) center no-repeat;
            left: 48px;
            height: 130px;
            width: 100%;
            top: 100%
        }

        .subscribeNewsletter {
            height: 495px
        }

        .sign-up {
            width: 407px
        }

        .signButton {
            color: #fff;
            width: 189px;
            height: 50px;
            line-height: normal
        }

        .iframe-map {
            top: 0;
            width: 50%;
            right: 0
        }

        .brand-list li {
            margin-bottom: 10px
        }

        .brand-list li a {
            color: #626161;
            font-size: 13px
        }

        .brands {
            background: #f7f7f7
        }

        .footer h6 {
            color: #222f3e
        }

        .footer a:hover {
            color: #F84429
        }

        .footer li, .footer li a, .footer p {
            color: #626161;
            font-size: 14px;
            line-height: 1.8
        }

        .footer-bottom a {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 19.6902px;
            line-height: 30px;
            color: #000000;
        }
        .footer-bottom .copyright{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            color: #626161;
        }

        .footer img {
            width: 20px
        }

        .footer-abt img {
            width: 15px
        }

        .carousel-inner {
            overflow: visible
        }

        a.go-to-top {
            position: fixed;
            right: 20px;
            bottom: 20px;
            width: 70px;
            height: 70px;
            background: #F84429;
            color: #fff !important;
            font-size: 11px;
            padding-top: 20px;
            border-radius: 50px;
            line-height: normal;
            font-weight: 700
        }

        a.go-to-top:not([href]):not([tabindex]) {
            color: #fff
        }

        .go-to-top img {
            display: block;
            margin: -5px auto 2px
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }


        .Profile-alpha-i {
            top:0;
            left:50%;
            transform:translate(-50%, -50%);
            overflow:visible;
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(20px);
                transform: translateX(20px)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(20px);
                -ms-transform: translateX(20px);
                transform: translateX(20px)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-20px);
                transform: translateX(-20px)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                transform: translateX(-20px)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }

        .bg-custom {
            min-height: 610px
        }

        .bg-light-gray {
            background-color: #f6f6f6
        }

        .dots {
            position: absolute;
            left: 100%;
            top: 30%;
            width: 100%;
            transform: translate(-50%, -30%)
        }

        .dot {
            height: 12px;
            width: 12px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: inline-block
        }

        .dots.active .dot {
            background-color: #64c03d
        }

        .hw-64 {
            height: 64px;
            width: 64px
        }

        .hw-32 {
            height: 32px;
            width: 32px
        }

        .go-back {
            border-bottom: 2px solid #ccc
        }

        .banner-form .select-time .dropdown-toggle {
            background-image: url(https://www.expatcarbuyers.com/front/images/clockwise.svg)
        }

        .banner-form .preferred-branch .dropdown-toggle {
            background-image: url(https://www.expatcarbuyers.com/front/images/chair.svg);
            background-position: 18px 11px
        }

        .banner-form .add-mail .dropdown-toggle {
            background-image: url(https://www.expatcarbuyers.com/front/images/email.svg);
            background-position: 10px 16px;
            background-size: 22px
        }

        @media only screen and (min-width: 768px) {
            .bg-custom {
                min-height: 610px
            }
        }

        @media only screen and (min-width: 980px) {
            .bg-custom {
                min-height: 610px
            }
        }

        @media only screen and (min-width: 1200px) {
            .bg-custom {
                min-height: 610px
            }
        }

        @media only screen and (min-width: 1800px) {
            .bg-custom {
                min-height: 650px;
                background-size: 45%;
            }
        }

        @media only screen and (max-width: 1024px) {
            .sellanycar {
                margin-top: 20rem
            }
        }

        @media only screen and (min-width: 980px) and (max-width: 1179px) {
            .book-button {
                width: 150px
            }
        }

        @media only screen and (max-width: 980px) {
            .navigation_bar.navbar-nav li a.nav-link:hover:before, .navigation_bar.navbar-nav li.active a.nav-link:before {
                display: none
            }

            .what-people-say .h-100 {
                height: auto !important
            }
            .what-people-say .userReview {

            }

            .what-people-say {
                overflow: hidden
            }

            .carousel-indicators li {
                display: block;
                width: 10px;
                height: 10px;
                background: #a3a3a3;
                border-radius: 50px;
                bottom: 0
            }

            .carousel-indicators li.active {
                background: #000
            }

            .btn-phone {
                width: 200px
            }

            .dropdown.mr-3:nth-child(even) {
                margin-right: 0 !important
            }

            .banner-Text h1 {
                font-size: 1.5rem
            }

            .banner-Text h4 {
                font-size: 20px
            }

            .bookNow {
                margin: 0 auto
            }

            .sellingCarDetail {
                height: 610px
            }

            .footer br {
                display: none
            }

            .sign-up {
                width: auto
            }

            .logo {
                width: 240px
            }

            .header-main {
                box-shadow: none
            }
        }

        @media only screen and (max-width: 767px) {
            .subscribeNewsletter .h-100 {
                height: auto !important
            }

            .bg-custom {
                min-height: auto
            }

            .position-absolute {
                position: static !important;
                padding: 120px 0px;
            }

            .sellcarlist li, .sign-up {
                width: 100%
            }

            #moving-type-left {
                top: 50px;
                left: 50px
            }

            .car {
                position: relative;
                height: 93px;
                width: 250px
            }

            .circle1, .circle2 {
                width: 42px;
                height: 42px
            }

            #moving-type-right {
                top: 52px;
                left: 203px
            }

            .selling-process.directionLeft:after {
                position: absolute;
                content: '';
                background: url(https://www.expatcarbuyers.com/front/images/Line2.svg) center no-repeat;
                left: 48px;
                height: 110px;
                width: 100%;
                top: 100%
            }

            .selling-process.directionRight:after {
                height: 110px
            }

            .iframe-map {
                width: 100%;
                top: 40%
            }

            .subscribeNewsletter {
                height: 825px
            }

            br {
                display: none
            }

            h2 {
                font-size: 30px
            }

            .navbar-collapse {
                background-color: #f24026
            }

            .banner-Text {
                top: 10%;
                transform: translateY(0)
            }

            .navigation_bar.navbar-nav li a.nav-link {
                color: #fff;
                text-align: center;
                border-bottom: 4px solid transparent
            }

            .navigation_bar.navbar-nav li.active a.nav-link {
                color: #fff;
                border-color: #fff
            }
        }

        #mainvideo, .plus {
            position: absolute;
            right: 0
        }

        @media only screen and (max-width: 568px) {
            .selling-process h4 {
                font-size: 22px
            }

            .sellingCarDetail {
                background: 0 0;
                height: auto
            }

            .dropdown.mr-3 {
                margin-right: 0 !important
            }

            .sellanycar {
                margin-top: 0
            }

            .simpleFastProfitable {
                overflow-x: hidden
            }

            .process-Title:before {
                left: 40px
            }

            .selling-process .ml-5 {
                margin-left: 4rem !important
            }

            .simpleFastProfitable .selling-process:after {
                height: 100px
            }
        }

        @media only screen and (max-width: 567px) {
            .simpleFastProfitable .selling-process:after {
                display: none
            }
        }

        .plus:after, .plus:before {
            font-size: 26px;
            color: #000;
            display: inline-block;
            vertical-align: middle
        }

        @media only screen and (max-width: 360px) {
            .logocompany {
                max-width: 90%
            }
            .banner-form {
                Padding: 37px 15px 50px 15px;
            }
            .banner-form-btn {
                font-size: 10.7175px;
            }
            .bg-light-theme-2 h5{
                font-size: 17.7305px;
                line-height: 19px;
            }
            .bg-light-theme-2 span, .footer-abt p, .footer .footer-abt span, .footer-bottom .copyright{
                font-size: 11.6822px;
                line-height: 22px;
            }
            .reviewBox{
                font-size: 13px;
                line-height: 18px;
            }
            .userReview {
                padding: 15px!important;
            }
            .userReview .userProfile img {
                width: 45px;
                height: 45px;
            }
            .userReview .userName h5 {
                font-size: 13px;
                line-height: 17px;
            }
            .userReview .userName {
                margin-left: 0!important;
            }
            
            .userReview .userName .userDate {
                font-size: 11px;
                line-height: 15px;
            }
            .review_google_icon {
                width: 24px;
                height: 24px;
                background-size: 24px 24px;
            }
            
            .footer-abt .ml-5 {
                    margin-left: 1rem!important;
            }
            
        }

        .plus {
            top: 0;
            width: 40px;
            height: 100%
        }

        .plus:before {
            width: 10px;
            content: "+"
        }

        .plus:after {
            width: 50px;
            content: "-"
        }

        [data-toggle=collapse] .plus:before {
            display: none
        }

        .collapsed[data-toggle=collapse] .plus:before {
            display: inline-block
        }

        .collapsed[data-toggle=collapse] .plus:after {
            display: none
        }

        #mainvideo {
            bottom: 0;
            min-width: 100%;
            min-height: 100%
        }

        .evaluate-container p {
            font-size: 18px;
        }

        .color-li li b {
            color: #f24026;
            font-size: 24px;
        }
    </style>

    <!-- <link defer href="{{ asset('front/css/mob_res25.css?v=1.1') }}" rel="stylesheet" media="all">-->

    <style>

        .bottom-section img {
            width: 100%
        }

        @media only screen and (max-width: 767px) {
            .subscribeNewsletter {
                height: initial
            }

            .iframe-map {
                top: 0
            }
        }

        @media only screen and (max-width: 767px) {
            .position-absolute {
                padding: 120px 0 !important
            }
        }

        @media only screen and (max-width: 736px) {
            .position-absolute {
                padding: 120px 0 !important
            }

            .subscribeNewsletter {
                height: initial !important
            }

            .iframe-map {
                top: 0
            }
        }

        @media only screen and (max-width: 667px) {
            .position-absolute {
                padding: 120px 0 !important
            }

            .subscribeNewsletter {
                height: initial !important
            }

            .iframe-map {
                top: 0
            }
            
            .carousel-arrow-div {
                top: 135px;
            }
            
        }

        @media only screen and (max-width: 568px) {
            .position-absolute {
                padding: 120px 0 !important
            }

            .subscribeNewsletter {
                height: initial !important
            }

            .iframe-map {
                top: 0
            }
        }

        .float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 80px;
            left: 20px;
            background-color: #06c;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
            z-index: 99999
        }

        .float i {
            line-height: 50px;
            font-size: 24px;
            color: #fff
        }

        .show-ph {
            display: none !important
        }

        .show-dsk {
            display: block !important
        }

        @media only screen and (max-width: 425px) {
            .show-ph {
                display: block !important
            }

            .show-dsk {
                display: none !important
            }

            .position-absolute {
                padding: 50px 0 120px !important
            }

            .view-phn {
                margin-top: 20px
            }
        }

        @media only screen and (max-width: 425px) {
            a.float.d-md-none {
                display: none
            }
        }

        .header-section {
            padding: 0.5rem 1rem;
        }

        .opsty-0 {
            opacity: 0 !important;
        }

    </style>
    

    <!--<link defer href="{{ asset('front/css/icon-list.css') }}" rel="stylesheet" media="all">-->

    <?php if (Request::segment(1)) { ?>

        <link rel="canonical" href="<?php echo URL::current(); ?>">

    <?php } else { ?>


        <link rel="canonical" href="https://www.expatcarbuyers.com/">

    <?php } ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124061654-1"></script>
    <script>
        function gtag() {
            dataLayer.push(arguments)
        }

        window.dataLayer = window.dataLayer || [], gtag("js", new Date), gtag("config", "UA-124061654-1");
    </script>

    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Expat Car Buyers",
            "logo": "https://expatcarbuyers.com/front/images/logo.png",
            "description": "Sell any car in Dubai with trusted and reliable used car dealers Expat Car Buyers. We buy any car in UAE & offer the best price for your car with instant Cash, cheque",
            "url": "https://expatcarbuyers.com",
            "image": "https://expatcarbuyers.com/front/images/taxi.svg",
            "telephone": "+971561774555",
            "email": "",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Near FAB Metrostation, Al Asmawi Building, Sheikh Zayed Road ",
                "addressLocality": "office No. G17",
                "addressRegion": "Dubai",
                "addressCountry": "United Arab Emirates"
            },
            "sameAs": [
                "https://www.facebook.com/ExpatCarBuyers/",
                "https://twitter.com/expatcarbuyers",
                "https://www.instagram.com/expatcarbuyers/"
            ]
        }</script>

    <script type="application/ld+json">{
            "@context": "https://schema.org",
            "@type": "Place",
            "name": "Expat Car Buyers",
            "url": "https://expatcarbuyers.com/",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "25.126084",
                "longitude": "55.205169"
            }
        }</script>


    <?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('front/js/slick.min.js') }}" defer></script>
    <?php } else { ?>
        <script>
            /*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
            !function (e, t) {
                "use strict";
                "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) {
                    if (!e.document) throw new Error("jQuery requires a window with a document");
                    return t(e)
                } : t(e)
            }("undefined" != typeof window ? window : this, function (e, t) {
                "use strict";
                var n = [], r = e.document, i = Object.getPrototypeOf, o = n.slice, a = n.concat, s = n.push,
                    u = n.indexOf, l = {}, c = l.toString, f = l.hasOwnProperty, p = f.toString, d = p.call(Object),
                    h = {}, g = function e(t) {
                        return "function" == typeof t && "number" != typeof t.nodeType
                    }, y = function e(t) {
                        return null != t && t === t.window
                    }, v = {type: !0, src: !0, noModule: !0};

                function m(e, t, n) {
                    var i, o = (t = t || r).createElement("script");
                    if (o.text = e, n) for (i in v) n[i] && (o[i] = n[i]);
                    t.head.appendChild(o).parentNode.removeChild(o)
                }

                function x(e) {
                    return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e
                }

                var b = "3.3.1", w = function (e, t) {
                    return new w.fn.init(e, t)
                }, T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                w.fn = w.prototype = {
                    jquery: "3.3.1", constructor: w, length: 0, toArray: function () {
                        return o.call(this)
                    }, get: function (e) {
                        return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e]
                    }, pushStack: function (e) {
                        var t = w.merge(this.constructor(), e);
                        return t.prevObject = this, t
                    }, each: function (e) {
                        return w.each(this, e)
                    }, map: function (e) {
                        return this.pushStack(w.map(this, function (t, n) {
                            return e.call(t, n, t)
                        }))
                    }, slice: function () {
                        return this.pushStack(o.apply(this, arguments))
                    }, first: function () {
                        return this.eq(0)
                    }, last: function () {
                        return this.eq(-1)
                    }, eq: function (e) {
                        var t = this.length, n = +e + (e < 0 ? t : 0);
                        return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
                    }, end: function () {
                        return this.prevObject || this.constructor()
                    }, push: s, sort: n.sort, splice: n.splice
                }, w.extend = w.fn.extend = function () {
                    var e, t, n, r, i, o, a = arguments[0] || {}, s = 1, u = arguments.length, l = !1;
                    for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++) if (null != (e = arguments[s])) for (t in e) n = a[t], a !== (r = e[t]) && (l && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && w.isPlainObject(n) ? n : {}, a[t] = w.extend(l, o, r)) : void 0 !== r && (a[t] = r));
                    return a
                }, w.extend({
                    expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) {
                        throw new Error(e)
                    }, noop: function () {
                    }, isPlainObject: function (e) {
                        var t, n;
                        return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || "function" == typeof (n = f.call(t, "constructor") && t.constructor) && p.call(n) === d)
                    }, isEmptyObject: function (e) {
                        var t;
                        for (t in e) return !1;
                        return !0
                    }, globalEval: function (e) {
                        m(e)
                    }, each: function (e, t) {
                        var n, r = 0;
                        if (C(e)) {
                            for (n = e.length; r < n; r++) if (!1 === t.call(e[r], r, e[r])) break
                        } else for (r in e) if (!1 === t.call(e[r], r, e[r])) break;
                        return e
                    }, trim: function (e) {
                        return null == e ? "" : (e + "").replace(T, "")
                    }, makeArray: function (e, t) {
                        var n = t || [];
                        return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n
                    }, inArray: function (e, t, n) {
                        return null == t ? -1 : u.call(t, e, n)
                    }, merge: function (e, t) {
                        for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
                        return e.length = i, e
                    }, grep: function (e, t, n) {
                        for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++) (r = !t(e[o], o)) !== s && i.push(e[o]);
                        return i
                    }, map: function (e, t, n) {
                        var r, i, o = 0, s = [];
                        if (C(e)) for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && s.push(i); else for (o in e) null != (i = t(e[o], o, n)) && s.push(i);
                        return a.apply([], s)
                    }, guid: 1, support: h
                }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
                    l["[object " + t + "]"] = t.toLowerCase()
                });

                function C(e) {
                    var t = !!e && "length" in e && e.length, n = x(e);
                    return !g(e) && !y(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
                }

                var E = function (e) {
                    var t, n, r, i, o, a, s, u, l, c, f, p, d, h, g, y, v, m, x, b = "sizzle" + 1 * new Date,
                        w = e.document, T = 0, C = 0, E = ae(), k = ae(), S = ae(), D = function (e, t) {
                            return e === t && (f = !0), 0
                        }, N = {}.hasOwnProperty, A = [], j = A.pop, q = A.push, L = A.push, H = A.slice,
                        O = function (e, t) {
                            for (var n = 0, r = e.length; n < r; n++) if (e[n] === t) return n;
                            return -1
                        },
                        P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                        M = "[\\x20\\t\\r\\n\\f]", R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                        I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]",
                        W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
                        $ = new RegExp(M + "+", "g"),
                        B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
                        F = new RegExp("^" + M + "*," + M + "*"),
                        _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
                        z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"), X = new RegExp(W),
                        U = new RegExp("^" + R + "$"), V = {
                            ID: new RegExp("^#(" + R + ")"),
                            CLASS: new RegExp("^\\.(" + R + ")"),
                            TAG: new RegExp("^(" + R + "|[*])"),
                            ATTR: new RegExp("^" + I),
                            PSEUDO: new RegExp("^" + W),
                            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                            bool: new RegExp("^(?:" + P + ")$", "i"),
                            needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
                        }, G = /^(?:input|select|textarea|button)$/i, Y = /^h\d$/i, Q = /^[^{]+\{\s*\[native \w/,
                        J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, K = /[+~]/,
                        Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"), ee = function (e, t, n) {
                            var r = "0x" + t - 65536;
                            return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
                        }, te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, ne = function (e, t) {
                            return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                        }, re = function () {
                            p()
                        }, ie = me(function (e) {
                            return !0 === e.disabled && ("form" in e || "label" in e)
                        }, {dir: "parentNode", next: "legend"});
                    try {
                        L.apply(A = H.call(w.childNodes), w.childNodes), A[w.childNodes.length].nodeType
                    } catch (e) {
                        L = {
                            apply: A.length ? function (e, t) {
                                q.apply(e, H.call(t))
                            } : function (e, t) {
                                var n = e.length, r = 0;
                                while (e[n++] = t[r++]) ;
                                e.length = n - 1
                            }
                        }
                    }

                    function oe(e, t, r, i) {
                        var o, s, l, c, f, h, v, m = t && t.ownerDocument, T = t ? t.nodeType : 9;
                        if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r;
                        if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), t = t || d, g)) {
                            if (11 !== T && (f = J.exec(e))) if (o = f[1]) {
                                if (9 === T) {
                                    if (!(l = t.getElementById(o))) return r;
                                    if (l.id === o) return r.push(l), r
                                } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r
                            } else {
                                if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r;
                                if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r
                            }
                            if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
                                if (1 !== T) m = t, v = e; else if ("object" !== t.nodeName.toLowerCase()) {
                                    (c = t.getAttribute("id")) ? c = c.replace(te, ne) : t.setAttribute("id", c = b), s = (h = a(e)).length;
                                    while (s--) h[s] = "#" + c + " " + ve(h[s]);
                                    v = h.join(","), m = K.test(e) && ge(t.parentNode) || t
                                }
                                if (v) try {
                                    return L.apply(r, m.querySelectorAll(v)), r
                                } catch (e) {
                                } finally {
                                    c === b && t.removeAttribute("id")
                                }
                            }
                        }
                        return u(e.replace(B, "$1"), t, r, i)
                    }

                    function ae() {
                        var e = [];

                        function t(n, i) {
                            return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i
                        }

                        return t
                    }

                    function se(e) {
                        return e[b] = !0, e
                    }

                    function ue(e) {
                        var t = d.createElement("fieldset");
                        try {
                            return !!e(t)
                        } catch (e) {
                            return !1
                        } finally {
                            t.parentNode && t.parentNode.removeChild(t), t = null
                        }
                    }

                    function le(e, t) {
                        var n = e.split("|"), i = n.length;
                        while (i--) r.attrHandle[n[i]] = t
                    }

                    function ce(e, t) {
                        var n = t && e, r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                        if (r) return r;
                        if (n) while (n = n.nextSibling) if (n === t) return -1;
                        return e ? 1 : -1
                    }

                    function fe(e) {
                        return function (t) {
                            return "input" === t.nodeName.toLowerCase() && t.type === e
                        }
                    }

                    function pe(e) {
                        return function (t) {
                            var n = t.nodeName.toLowerCase();
                            return ("input" === n || "button" === n) && t.type === e
                        }
                    }

                    function de(e) {
                        return function (t) {
                            return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ie(t) === e : t.disabled === e : "label" in t && t.disabled === e
                        }
                    }

                    function he(e) {
                        return se(function (t) {
                            return t = +t, se(function (n, r) {
                                var i, o = e([], n.length, t), a = o.length;
                                while (a--) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                            })
                        })
                    }

                    function ge(e) {
                        return e && "undefined" != typeof e.getElementsByTagName && e
                    }

                    n = oe.support = {}, o = oe.isXML = function (e) {
                        var t = e && (e.ownerDocument || e).documentElement;
                        return !!t && "HTML" !== t.nodeName
                    }, p = oe.setDocument = function (e) {
                        var t, i, a = e ? e.ownerDocument || e : w;
                        return a !== d && 9 === a.nodeType && a.documentElement ? (d = a, h = d.documentElement, g = !o(d), w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)), n.attributes = ue(function (e) {
                            return e.className = "i", !e.getAttribute("className")
                        }), n.getElementsByTagName = ue(function (e) {
                            return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length
                        }), n.getElementsByClassName = Q.test(d.getElementsByClassName), n.getById = ue(function (e) {
                            return h.appendChild(e).id = b, !d.getElementsByName || !d.getElementsByName(b).length
                        }), n.getById ? (r.filter.ID = function (e) {
                            var t = e.replace(Z, ee);
                            return function (e) {
                                return e.getAttribute("id") === t
                            }
                        }, r.find.ID = function (e, t) {
                            if ("undefined" != typeof t.getElementById && g) {
                                var n = t.getElementById(e);
                                return n ? [n] : []
                            }
                        }) : (r.filter.ID = function (e) {
                            var t = e.replace(Z, ee);
                            return function (e) {
                                var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                                return n && n.value === t
                            }
                        }, r.find.ID = function (e, t) {
                            if ("undefined" != typeof t.getElementById && g) {
                                var n, r, i, o = t.getElementById(e);
                                if (o) {
                                    if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                                    i = t.getElementsByName(e), r = 0;
                                    while (o = i[r++]) if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                                }
                                return []
                            }
                        }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
                            return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0
                        } : function (e, t) {
                            var n, r = [], i = 0, o = t.getElementsByTagName(e);
                            if ("*" === e) {
                                while (n = o[i++]) 1 === n.nodeType && r.push(n);
                                return r
                            }
                            return o
                        }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
                            if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e)
                        }, v = [], y = [], (n.qsa = Q.test(d.querySelectorAll)) && (ue(function (e) {
                            h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="), e.querySelectorAll(":checked").length || y.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]")
                        }), ue(function (e) {
                            e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var t = d.createElement("input");
                            t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), y.push(",.*:")
                        })), (n.matchesSelector = Q.test(m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ue(function (e) {
                            n.disconnectedMatch = m.call(e, "*"), m.call(e, "[s!='']:x"), v.push("!=", W)
                        }), y = y.length && new RegExp(y.join("|")), v = v.length && new RegExp(v.join("|")), t = Q.test(h.compareDocumentPosition), x = t || Q.test(h.contains) ? function (e, t) {
                            var n = 9 === e.nodeType ? e.documentElement : e, r = t && t.parentNode;
                            return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                        } : function (e, t) {
                            if (t) while (t = t.parentNode) if (t === e) return !0;
                            return !1
                        }, D = t ? function (e, t) {
                            if (e === t) return f = !0, 0;
                            var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                            return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === d || e.ownerDocument === w && x(w, e) ? -1 : t === d || t.ownerDocument === w && x(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1)
                        } : function (e, t) {
                            if (e === t) return f = !0, 0;
                            var n, r = 0, i = e.parentNode, o = t.parentNode, a = [e], s = [t];
                            if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0;
                            if (i === o) return ce(e, t);
                            n = e;
                            while (n = n.parentNode) a.unshift(n);
                            n = t;
                            while (n = n.parentNode) s.unshift(n);
                            while (a[r] === s[r]) r++;
                            return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0
                        }, d) : d
                    }, oe.matches = function (e, t) {
                        return oe(e, null, null, t)
                    }, oe.matchesSelector = function (e, t) {
                        if ((e.ownerDocument || e) !== d && p(e), t = t.replace(z, "='$1']"), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))) try {
                            var r = m.call(e, t);
                            if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
                        } catch (e) {
                        }
                        return oe(t, d, null, [e]).length > 0
                    }, oe.contains = function (e, t) {
                        return (e.ownerDocument || e) !== d && p(e), x(e, t)
                    }, oe.attr = function (e, t) {
                        (e.ownerDocument || e) !== d && p(e);
                        var i = r.attrHandle[t.toLowerCase()],
                            o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
                        return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null
                    }, oe.escape = function (e) {
                        return (e + "").replace(te, ne)
                    }, oe.error = function (e) {
                        throw new Error("Syntax error, unrecognized expression: " + e)
                    }, oe.uniqueSort = function (e) {
                        var t, r = [], i = 0, o = 0;
                        if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(D), f) {
                            while (t = e[o++]) t === e[o] && (i = r.push(o));
                            while (i--) e.splice(r[i], 1)
                        }
                        return c = null, e
                    }, i = oe.getText = function (e) {
                        var t, n = "", r = 0, o = e.nodeType;
                        if (o) {
                            if (1 === o || 9 === o || 11 === o) {
                                if ("string" == typeof e.textContent) return e.textContent;
                                for (e = e.firstChild; e; e = e.nextSibling) n += i(e)
                            } else if (3 === o || 4 === o) return e.nodeValue
                        } else while (t = e[r++]) n += i(t);
                        return n
                    }, (r = oe.selectors = {
                        cacheLength: 50,
                        createPseudo: se,
                        match: V,
                        attrHandle: {},
                        find: {},
                        relative: {
                            ">": {dir: "parentNode", first: !0},
                            " ": {dir: "parentNode"},
                            "+": {dir: "previousSibling", first: !0},
                            "~": {dir: "previousSibling"}
                        },
                        preFilter: {
                            ATTR: function (e) {
                                return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                            }, CHILD: function (e) {
                                return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e
                            }, PSEUDO: function (e) {
                                var t, n = !e[6] && e[2];
                                return V.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function (e) {
                                var t = e.replace(Z, ee).toLowerCase();
                                return "*" === e ? function () {
                                    return !0
                                } : function (e) {
                                    return e.nodeName && e.nodeName.toLowerCase() === t
                                }
                            }, CLASS: function (e) {
                                var t = E[e + " "];
                                return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && E(e, function (e) {
                                    return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                                })
                            }, ATTR: function (e, t, n) {
                                return function (r) {
                                    var i = oe.attr(r, e);
                                    return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i.replace($, " ") + " ").indexOf(n) > -1 : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"))
                                }
                            }, CHILD: function (e, t, n, r, i) {
                                var o = "nth" !== e.slice(0, 3), a = "last" !== e.slice(-4), s = "of-type" === t;
                                return 1 === r && 0 === i ? function (e) {
                                    return !!e.parentNode
                                } : function (t, n, u) {
                                    var l, c, f, p, d, h, g = o !== a ? "nextSibling" : "previousSibling",
                                        y = t.parentNode, v = s && t.nodeName.toLowerCase(), m = !u && !s, x = !1;
                                    if (y) {
                                        if (o) {
                                            while (g) {
                                                p = t;
                                                while (p = p[g]) if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                                                h = g = "only" === e && !h && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (h = [a ? y.firstChild : y.lastChild], a && m) {
                                            x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], p = d && y.childNodes[d];
                                            while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) if (1 === p.nodeType && ++x && p === t) {
                                                c[e] = [T, d, x];
                                                break
                                            }
                                        } else if (m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x) while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break;
                                        return (x -= i) === r || x % r == 0 && x / r >= 0
                                    }
                                }
                            }, PSEUDO: function (e, t) {
                                var n,
                                    i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e);
                                return i[b] ? i(t) : i.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? se(function (e, n) {
                                    var r, o = i(e, t), a = o.length;
                                    while (a--) e[r = O(e, o[a])] = !(n[r] = o[a])
                                }) : function (e) {
                                    return i(e, 0, n)
                                }) : i
                            }
                        },
                        pseudos: {
                            not: se(function (e) {
                                var t = [], n = [], r = s(e.replace(B, "$1"));
                                return r[b] ? se(function (e, t, n, i) {
                                    var o, a = r(e, null, i, []), s = e.length;
                                    while (s--) (o = a[s]) && (e[s] = !(t[s] = o))
                                }) : function (e, i, o) {
                                    return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop()
                                }
                            }), has: se(function (e) {
                                return function (t) {
                                    return oe(e, t).length > 0
                                }
                            }), contains: se(function (e) {
                                return e = e.replace(Z, ee), function (t) {
                                    return (t.textContent || t.innerText || i(t)).indexOf(e) > -1
                                }
                            }), lang: se(function (e) {
                                return U.test(e || "") || oe.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(), function (t) {
                                    var n;
                                    do {
                                        if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                                    } while ((t = t.parentNode) && 1 === t.nodeType);
                                    return !1
                                }
                            }), target: function (t) {
                                var n = e.location && e.location.hash;
                                return n && n.slice(1) === t.id
                            }, root: function (e) {
                                return e === h
                            }, focus: function (e) {
                                return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                            }, enabled: de(!1), disabled: de(!0), checked: function (e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && !!e.checked || "option" === t && !!e.selected
                            }, selected: function (e) {
                                return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                            }, empty: function (e) {
                                for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;
                                return !0
                            }, parent: function (e) {
                                return !r.pseudos.empty(e)
                            }, header: function (e) {
                                return Y.test(e.nodeName)
                            }, input: function (e) {
                                return G.test(e.nodeName)
                            }, button: function (e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && "button" === e.type || "button" === t
                            }, text: function (e) {
                                var t;
                                return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                            }, first: he(function () {
                                return [0]
                            }), last: he(function (e, t) {
                                return [t - 1]
                            }), eq: he(function (e, t, n) {
                                return [n < 0 ? n + t : n]
                            }), even: he(function (e, t) {
                                for (var n = 0; n < t; n += 2) e.push(n);
                                return e
                            }), odd: he(function (e, t) {
                                for (var n = 1; n < t; n += 2) e.push(n);
                                return e
                            }), lt: he(function (e, t, n) {
                                for (var r = n < 0 ? n + t : n; --r >= 0;) e.push(r);
                                return e
                            }), gt: he(function (e, t, n) {
                                for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                                return e
                            })
                        }
                    }).pseudos.nth = r.pseudos.eq;
                    for (t in {radio: !0, checkbox: !0, file: !0, password: !0, image: !0}) r.pseudos[t] = fe(t);
                    for (t in {submit: !0, reset: !0}) r.pseudos[t] = pe(t);

                    function ye() {
                    }

                    ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = oe.tokenize = function (e, t) {
                        var n, i, o, a, s, u, l, c = k[e + " "];
                        if (c) return t ? 0 : c.slice(0);
                        s = e, u = [], l = r.preFilter;
                        while (s) {
                            n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({
                                value: n,
                                type: i[0].replace(B, " ")
                            }), s = s.slice(n.length));
                            for (a in r.filter) !(i = V[a].exec(s)) || l[a] && !(i = l[a](i)) || (n = i.shift(), o.push({
                                value: n,
                                type: a,
                                matches: i
                            }), s = s.slice(n.length));
                            if (!n) break
                        }
                        return t ? s.length : s ? oe.error(e) : k(e, u).slice(0)
                    };

                    function ve(e) {
                        for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
                        return r
                    }

                    function me(e, t, n) {
                        var r = t.dir, i = t.next, o = i || r, a = n && "parentNode" === o, s = C++;
                        return t.first ? function (t, n, i) {
                            while (t = t[r]) if (1 === t.nodeType || a) return e(t, n, i);
                            return !1
                        } : function (t, n, u) {
                            var l, c, f, p = [T, s];
                            if (u) {
                                while (t = t[r]) if ((1 === t.nodeType || a) && e(t, n, u)) return !0
                            } else while (t = t[r]) if (1 === t.nodeType || a) if (f = t[b] || (t[b] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t; else {
                                if ((l = c[o]) && l[0] === T && l[1] === s) return p[2] = l[2];
                                if (c[o] = p, p[2] = e(t, n, u)) return !0
                            }
                            return !1
                        }
                    }

                    function xe(e) {
                        return e.length > 1 ? function (t, n, r) {
                            var i = e.length;
                            while (i--) if (!e[i](t, n, r)) return !1;
                            return !0
                        } : e[0]
                    }

                    function be(e, t, n) {
                        for (var r = 0, i = t.length; r < i; r++) oe(e, t[r], n);
                        return n
                    }

                    function we(e, t, n, r, i) {
                        for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++) (o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
                        return a
                    }

                    function Te(e, t, n, r, i, o) {
                        return r && !r[b] && (r = Te(r)), i && !i[b] && (i = Te(i, o)), se(function (o, a, s, u) {
                            var l, c, f, p = [], d = [], h = a.length, g = o || be(t || "*", s.nodeType ? [s] : s, []),
                                y = !e || !o && t ? g : we(g, p, e, s, u), v = n ? i || (o ? e : h || r) ? [] : a : y;
                            if (n && n(y, v, s, u), r) {
                                l = we(v, d), r(l, [], s, u), c = l.length;
                                while (c--) (f = l[c]) && (v[d[c]] = !(y[d[c]] = f))
                            }
                            if (o) {
                                if (i || e) {
                                    if (i) {
                                        l = [], c = v.length;
                                        while (c--) (f = v[c]) && l.push(y[c] = f);
                                        i(null, v = [], l, u)
                                    }
                                    c = v.length;
                                    while (c--) (f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f))
                                }
                            } else v = we(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, u) : L.apply(a, v)
                        })
                    }

                    function Ce(e) {
                        for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = me(function (e) {
                            return e === t
                        }, s, !0), f = me(function (e) {
                            return O(t, e) > -1
                        }, s, !0), p = [function (e, n, r) {
                            var i = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
                            return t = null, i
                        }]; u < o; u++) if (n = r.relative[e[u].type]) p = [me(xe(p), n)]; else {
                            if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
                                for (i = ++u; i < o; i++) if (r.relative[e[i].type]) break;
                                return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({value: " " === e[u - 2].type ? "*" : ""})).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce(e = e.slice(i)), i < o && ve(e))
                            }
                            p.push(n)
                        }
                        return xe(p)
                    }

                    function Ee(e, t) {
                        var n = t.length > 0, i = e.length > 0, o = function (o, a, s, u, c) {
                            var f, h, y, v = 0, m = "0", x = o && [], b = [], w = l, C = o || i && r.find.TAG("*", c),
                                E = T += null == w ? 1 : Math.random() || .1, k = C.length;
                            for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) {
                                if (i && f) {
                                    h = 0, a || f.ownerDocument === d || (p(f), s = !g);
                                    while (y = e[h++]) if (y(f, a || d, s)) {
                                        u.push(f);
                                        break
                                    }
                                    c && (T = E)
                                }
                                n && ((f = !y && f) && v--, o && x.push(f))
                            }
                            if (v += m, n && m !== v) {
                                h = 0;
                                while (y = t[h++]) y(x, b, a, s);
                                if (o) {
                                    if (v > 0) while (m--) x[m] || b[m] || (b[m] = j.call(u));
                                    b = we(b)
                                }
                                L.apply(u, b), c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u)
                            }
                            return c && (T = E, l = w), x
                        };
                        return n ? se(o) : o
                    }

                    return s = oe.compile = function (e, t) {
                        var n, r = [], i = [], o = S[e + " "];
                        if (!o) {
                            t || (t = a(e)), n = t.length;
                            while (n--) (o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
                            (o = S(e, Ee(i, r))).selector = e
                        }
                        return o
                    }, u = oe.select = function (e, t, n, i) {
                        var o, u, l, c, f, p = "function" == typeof e && e, d = !i && a(e = p.selector || e);
                        if (n = n || [], 1 === d.length) {
                            if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
                                if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n;
                                p && (t = t.parentNode), e = e.slice(u.shift().value.length)
                            }
                            o = V.needsContext.test(e) ? 0 : u.length;
                            while (o--) {
                                if (l = u[o], r.relative[c = l.type]) break;
                                if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), K.test(u[0].type) && ge(t.parentNode) || t))) {
                                    if (u.splice(o, 1), !(e = i.length && ve(u))) return L.apply(n, i), n;
                                    break
                                }
                            }
                        }
                        return (p || s(e, d))(i, t, !g, n, !t || K.test(e) && ge(t.parentNode) || t), n
                    }, n.sortStable = b.split("").sort(D).join("") === b, n.detectDuplicates = !!f, p(), n.sortDetached = ue(function (e) {
                        return 1 & e.compareDocumentPosition(d.createElement("fieldset"))
                    }), ue(function (e) {
                        return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
                    }) || le("type|href|height|width", function (e, t, n) {
                        if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                    }), n.attributes && ue(function (e) {
                        return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
                    }) || le("value", function (e, t, n) {
                        if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
                    }), ue(function (e) {
                        return null == e.getAttribute("disabled")
                    }) || le(P, function (e, t, n) {
                        var r;
                        if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                    }), oe
                }(e);
                w.find = E, w.expr = E.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = E.uniqueSort, w.text = E.getText, w.isXMLDoc = E.isXML, w.contains = E.contains, w.escapeSelector = E.escape;
                var k = function (e, t, n) {
                    var r = [], i = void 0 !== n;
                    while ((e = e[t]) && 9 !== e.nodeType) if (1 === e.nodeType) {
                        if (i && w(e).is(n)) break;
                        r.push(e)
                    }
                    return r
                }, S = function (e, t) {
                    for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
                    return n
                }, D = w.expr.match.needsContext;

                function N(e, t) {
                    return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
                }

                var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

                function j(e, t, n) {
                    return g(t) ? w.grep(e, function (e, r) {
                        return !!t.call(e, r, e) !== n
                    }) : t.nodeType ? w.grep(e, function (e) {
                        return e === t !== n
                    }) : "string" != typeof t ? w.grep(e, function (e) {
                        return u.call(t, e) > -1 !== n
                    }) : w.filter(t, e, n)
                }

                w.filter = function (e, t, n) {
                    var r = t[0];
                    return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) {
                        return 1 === e.nodeType
                    }))
                }, w.fn.extend({
                    find: function (e) {
                        var t, n, r = this.length, i = this;
                        if ("string" != typeof e) return this.pushStack(w(e).filter(function () {
                            for (t = 0; t < r; t++) if (w.contains(i[t], this)) return !0
                        }));
                        for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
                        return r > 1 ? w.uniqueSort(n) : n
                    }, filter: function (e) {
                        return this.pushStack(j(this, e || [], !1))
                    }, not: function (e) {
                        return this.pushStack(j(this, e || [], !0))
                    }, is: function (e) {
                        return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length
                    }
                });
                var q, L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
                (w.fn.init = function (e, t, n) {
                    var i, o;
                    if (!e) return this;
                    if (n = n || q, "string" == typeof e) {
                        if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                        if (i[1]) {
                            if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t)) for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
                            return this
                        }
                        return (o = r.getElementById(i[2])) && (this[0] = o, this.length = 1), this
                    }
                    return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
                }).prototype = w.fn, q = w(r);
                var H = /^(?:parents|prev(?:Until|All))/, O = {children: !0, contents: !0, next: !0, prev: !0};
                w.fn.extend({
                    has: function (e) {
                        var t = w(e, this), n = t.length;
                        return this.filter(function () {
                            for (var e = 0; e < n; e++) if (w.contains(this, t[e])) return !0
                        })
                    }, closest: function (e, t) {
                        var n, r = 0, i = this.length, o = [], a = "string" != typeof e && w(e);
                        if (!D.test(e)) for (; r < i; r++) for (n = this[r]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
                            o.push(n);
                            break
                        }
                        return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o)
                    }, index: function (e) {
                        return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                    }, add: function (e, t) {
                        return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))))
                    }, addBack: function (e) {
                        return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
                    }
                });

                function P(e, t) {
                    while ((e = e[t]) && 1 !== e.nodeType) ;
                    return e
                }

                w.each({
                    parent: function (e) {
                        var t = e.parentNode;
                        return t && 11 !== t.nodeType ? t : null
                    }, parents: function (e) {
                        return k(e, "parentNode")
                    }, parentsUntil: function (e, t, n) {
                        return k(e, "parentNode", n)
                    }, next: function (e) {
                        return P(e, "nextSibling")
                    }, prev: function (e) {
                        return P(e, "previousSibling")
                    }, nextAll: function (e) {
                        return k(e, "nextSibling")
                    }, prevAll: function (e) {
                        return k(e, "previousSibling")
                    }, nextUntil: function (e, t, n) {
                        return k(e, "nextSibling", n)
                    }, prevUntil: function (e, t, n) {
                        return k(e, "previousSibling", n)
                    }, siblings: function (e) {
                        return S((e.parentNode || {}).firstChild, e)
                    }, children: function (e) {
                        return S(e.firstChild)
                    }, contents: function (e) {
                        return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes))
                    }
                }, function (e, t) {
                    w.fn[e] = function (n, r) {
                        var i = w.map(this, t, n);
                        return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i)
                    }
                });
                var M = /[^\x20\t\r\n\f]+/g;

                function R(e) {
                    var t = {};
                    return w.each(e.match(M) || [], function (e, n) {
                        t[n] = !0
                    }), t
                }

                w.Callbacks = function (e) {
                    e = "string" == typeof e ? R(e) : w.extend({}, e);
                    var t, n, r, i, o = [], a = [], s = -1, u = function () {
                        for (i = i || e.once, r = t = !0; a.length; s = -1) {
                            n = a.shift();
                            while (++s < o.length) !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length, n = !1)
                        }
                        e.memory || (n = !1), t = !1, i && (o = n ? [] : "")
                    }, l = {
                        add: function () {
                            return o && (n && !t && (s = o.length - 1, a.push(n)), function t(n) {
                                w.each(n, function (n, r) {
                                    g(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== x(r) && t(r)
                                })
                            }(arguments), n && !t && u()), this
                        }, remove: function () {
                            return w.each(arguments, function (e, t) {
                                var n;
                                while ((n = w.inArray(t, o, n)) > -1) o.splice(n, 1), n <= s && s--
                            }), this
                        }, has: function (e) {
                            return e ? w.inArray(e, o) > -1 : o.length > 0
                        }, empty: function () {
                            return o && (o = []), this
                        }, disable: function () {
                            return i = a = [], o = n = "", this
                        }, disabled: function () {
                            return !o
                        }, lock: function () {
                            return i = a = [], n || t || (o = n = ""), this
                        }, locked: function () {
                            return !!i
                        }, fireWith: function (e, n) {
                            return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || u()), this
                        }, fire: function () {
                            return l.fireWith(this, arguments), this
                        }, fired: function () {
                            return !!r
                        }
                    };
                    return l
                };

                function I(e) {
                    return e
                }

                function W(e) {
                    throw e
                }

                function $(e, t, n, r) {
                    var i;
                    try {
                        e && g(i = e.promise) ? i.call(e).done(t).fail(n) : e && g(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
                    } catch (e) {
                        n.apply(void 0, [e])
                    }
                }

                w.extend({
                    Deferred: function (t) {
                        var n = [["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2], ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]],
                            r = "pending", i = {
                                state: function () {
                                    return r
                                }, always: function () {
                                    return o.done(arguments).fail(arguments), this
                                }, "catch": function (e) {
                                    return i.then(null, e)
                                }, pipe: function () {
                                    var e = arguments;
                                    return w.Deferred(function (t) {
                                        w.each(n, function (n, r) {
                                            var i = g(e[r[4]]) && e[r[4]];
                                            o[r[1]](function () {
                                                var e = i && i.apply(this, arguments);
                                                e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                                            })
                                        }), e = null
                                    }).promise()
                                }, then: function (t, r, i) {
                                    var o = 0;

                                    function a(t, n, r, i) {
                                        return function () {
                                            var s = this, u = arguments, l = function () {
                                                var e, l;
                                                if (!(t < o)) {
                                                    if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                                    l = e && ("object" == typeof e || "function" == typeof e) && e.then, g(l) ? i ? l.call(e, a(o, n, I, i), a(o, n, W, i)) : (o++, l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith))) : (r !== I && (s = void 0, u = [e]), (i || n.resolveWith)(s, u))
                                                }
                                            }, c = i ? l : function () {
                                                try {
                                                    l()
                                                } catch (e) {
                                                    w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && (s = void 0, u = [e]), n.rejectWith(s, u))
                                                }
                                            };
                                            t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
                                        }
                                    }

                                    return w.Deferred(function (e) {
                                        n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W))
                                    }).promise()
                                }, promise: function (e) {
                                    return null != e ? w.extend(e, i) : i
                                }
                            }, o = {};
                        return w.each(n, function (e, t) {
                            var a = t[2], s = t[5];
                            i[t[1]] = a.add, s && a.add(function () {
                                r = s
                            }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () {
                                return o[t[0] + "With"](this === o ? void 0 : this, arguments), this
                            }, o[t[0] + "With"] = a.fireWith
                        }), i.promise(o), t && t.call(o, o), o
                    }, when: function (e) {
                        var t = arguments.length, n = t, r = Array(n), i = o.call(arguments), a = w.Deferred(),
                            s = function (e) {
                                return function (n) {
                                    r[e] = this, i[e] = arguments.length > 1 ? o.call(arguments) : n, --t || a.resolveWith(r, i)
                                }
                            };
                        if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then();
                        while (n--) $(i[n], s(n), a.reject);
                        return a.promise()
                    }
                });
                var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
                w.Deferred.exceptionHook = function (t, n) {
                    e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
                }, w.readyException = function (t) {
                    e.setTimeout(function () {
                        throw t
                    })
                };
                var F = w.Deferred();
                w.fn.ready = function (e) {
                    return F.then(e)["catch"](function (e) {
                        w.readyException(e)
                    }), this
                }, w.extend({
                    isReady: !1, readyWait: 1, ready: function (e) {
                        (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== e && --w.readyWait > 0 || F.resolveWith(r, [w]))
                    }
                }), w.ready.then = F.then;

                function _() {
                    r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready()
                }

                "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _));
                var z = function (e, t, n, r, i, o, a) {
                    var s = 0, u = e.length, l = null == n;
                    if ("object" === x(n)) {
                        i = !0;
                        for (s in n) z(e, t, s, n[s], !0, o, a)
                    } else if (void 0 !== r && (i = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function (e, t, n) {
                        return l.call(w(e), n)
                    })), t)) for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
                    return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
                }, X = /^-ms-/, U = /-([a-z])/g;

                function V(e, t) {
                    return t.toUpperCase()
                }

                function G(e) {
                    return e.replace(X, "ms-").replace(U, V)
                }

                var Y = function (e) {
                    return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
                };

                function Q() {
                    this.expando = w.expando + Q.uid++
                }

                Q.uid = 1, Q.prototype = {
                    cache: function (e) {
                        var t = e[this.expando];
                        return t || (t = {}, Y(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                            value: t,
                            configurable: !0
                        }))), t
                    }, set: function (e, t, n) {
                        var r, i = this.cache(e);
                        if ("string" == typeof t) i[G(t)] = n; else for (r in t) i[G(r)] = t[r];
                        return i
                    }, get: function (e, t) {
                        return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)]
                    }, access: function (e, t, n) {
                        return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
                    }, remove: function (e, t) {
                        var n, r = e[this.expando];
                        if (void 0 !== r) {
                            if (void 0 !== t) {
                                n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length;
                                while (n--) delete r[t[n]]
                            }
                            (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                        }
                    }, hasData: function (e) {
                        var t = e[this.expando];
                        return void 0 !== t && !w.isEmptyObject(t)
                    }
                };
                var J = new Q, K = new Q, Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, ee = /[A-Z]/g;

                function te(e) {
                    return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e)
                }

                function ne(e, t, n) {
                    var r;
                    if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(ee, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) {
                        try {
                            n = te(n)
                        } catch (e) {
                        }
                        K.set(e, t, n)
                    } else n = void 0;
                    return n
                }

                w.extend({
                    hasData: function (e) {
                        return K.hasData(e) || J.hasData(e)
                    }, data: function (e, t, n) {
                        return K.access(e, t, n)
                    }, removeData: function (e, t) {
                        K.remove(e, t)
                    }, _data: function (e, t, n) {
                        return J.access(e, t, n)
                    }, _removeData: function (e, t) {
                        J.remove(e, t)
                    }
                }), w.fn.extend({
                    data: function (e, t) {
                        var n, r, i, o = this[0], a = o && o.attributes;
                        if (void 0 === e) {
                            if (this.length && (i = K.get(o), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) {
                                n = a.length;
                                while (n--) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = G(r.slice(5)), ne(o, r, i[r]));
                                J.set(o, "hasDataAttrs", !0)
                            }
                            return i
                        }
                        return "object" == typeof e ? this.each(function () {
                            K.set(this, e)
                        }) : z(this, function (t) {
                            var n;
                            if (o && void 0 === t) {
                                if (void 0 !== (n = K.get(o, e))) return n;
                                if (void 0 !== (n = ne(o, e))) return n
                            } else this.each(function () {
                                K.set(this, e, t)
                            })
                        }, null, t, arguments.length > 1, null, !0)
                    }, removeData: function (e) {
                        return this.each(function () {
                            K.remove(this, e)
                        })
                    }
                }), w.extend({
                    queue: function (e, t, n) {
                        var r;
                        if (e) return t = (t || "fx") + "queue", r = J.get(e, t), n && (!r || Array.isArray(n) ? r = J.access(e, t, w.makeArray(n)) : r.push(n)), r || []
                    }, dequeue: function (e, t) {
                        t = t || "fx";
                        var n = w.queue(e, t), r = n.length, i = n.shift(), o = w._queueHooks(e, t), a = function () {
                            w.dequeue(e, t)
                        };
                        "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire()
                    }, _queueHooks: function (e, t) {
                        var n = t + "queueHooks";
                        return J.get(e, n) || J.access(e, n, {
                            empty: w.Callbacks("once memory").add(function () {
                                J.remove(e, [t + "queue", n])
                            })
                        })
                    }
                }), w.fn.extend({
                    queue: function (e, t) {
                        var n = 2;
                        return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () {
                            var n = w.queue(this, e, t);
                            w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
                        })
                    }, dequeue: function (e) {
                        return this.each(function () {
                            w.dequeue(this, e)
                        })
                    }, clearQueue: function (e) {
                        return this.queue(e || "fx", [])
                    }, promise: function (e, t) {
                        var n, r = 1, i = w.Deferred(), o = this, a = this.length, s = function () {
                            --r || i.resolveWith(o, [o])
                        };
                        "string" != typeof e && (t = e, e = void 0), e = e || "fx";
                        while (a--) (n = J.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
                        return s(), i.promise(t)
                    }
                });
                var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
                    ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
                    oe = ["Top", "Right", "Bottom", "Left"], ae = function (e, t) {
                        return "none" === (e = t || e).style.display || "" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display")
                    }, se = function (e, t, n, r) {
                        var i, o, a = {};
                        for (o in t) a[o] = e.style[o], e.style[o] = t[o];
                        i = n.apply(e, r || []);
                        for (o in t) e.style[o] = a[o];
                        return i
                    };

                function ue(e, t, n, r) {
                    var i, o, a = 20, s = r ? function () {
                            return r.cur()
                        } : function () {
                            return w.css(e, t, "")
                        }, u = s(), l = n && n[3] || (w.cssNumber[t] ? "" : "px"),
                        c = (w.cssNumber[t] || "px" !== l && +u) && ie.exec(w.css(e, t));
                    if (c && c[3] !== l) {
                        u /= 2, l = l || c[3], c = +u || 1;
                        while (a--) w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
                        c *= 2, w.style(e, t, c + l), n = n || []
                    }
                    return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
                }

                var le = {};

                function ce(e) {
                    var t, n = e.ownerDocument, r = e.nodeName, i = le[r];
                    return i || (t = n.body.appendChild(n.createElement(r)), i = w.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), le[r] = i, i)
                }

                function fe(e, t) {
                    for (var n, r, i = [], o = 0, a = e.length; o < a; o++) (r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = J.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && (i[o] = "none", J.set(r, "display", n)));
                    for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]);
                    return e
                }

                w.fn.extend({
                    show: function () {
                        return fe(this, !0)
                    }, hide: function () {
                        return fe(this)
                    }, toggle: function (e) {
                        return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
                            ae(this) ? w(this).show() : w(this).hide()
                        })
                    }
                });
                var pe = /^(?:checkbox|radio)$/i, de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
                    he = /^$|^module$|\/(?:java|ecma)script/i, ge = {
                        option: [1, "<select multiple='multiple'>", "</select>"],
                        thead: [1, "<table>", "</table>"],
                        col: [2, "<table><colgroup>", "</colgroup></table>"],
                        tr: [2, "<table><tbody>", "</tbody></table>"],
                        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                        _default: [0, "", ""]
                    };
                ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td;

                function ye(e, t) {
                    var n;
                    return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && N(e, t) ? w.merge([e], n) : n
                }

                function ve(e, t) {
                    for (var n = 0, r = e.length; n < r; n++) J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval"))
                }

                var me = /<|&#?\w+;/;

                function xe(e, t, n, r, i) {
                    for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++) if ((o = e[d]) || 0 === o) if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o); else if (me.test(o)) {
                        a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2], c = u[0];
                        while (c--) a = a.lastChild;
                        w.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
                    } else p.push(t.createTextNode(o));
                    f.textContent = "", d = 0;
                    while (o = p[d++]) if (r && w.inArray(o, r) > -1) i && i.push(o); else if (l = w.contains(o.ownerDocument, o), a = ye(f.appendChild(o), "script"), l && ve(a), n) {
                        c = 0;
                        while (o = a[c++]) he.test(o.type || "") && n.push(o)
                    }
                    return f
                }

                !function () {
                    var e = r.createDocumentFragment().appendChild(r.createElement("div")),
                        t = r.createElement("input");
                    t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
                }();
                var be = r.documentElement, we = /^key/, Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
                    Ce = /^([^.]*)(?:\.(.+)|)/;

                function Ee() {
                    return !0
                }

                function ke() {
                    return !1
                }

                function Se() {
                    try {
                        return r.activeElement
                    } catch (e) {
                    }
                }

                function De(e, t, n, r, i, o) {
                    var a, s;
                    if ("object" == typeof t) {
                        "string" != typeof n && (r = r || n, n = void 0);
                        for (s in t) De(e, s, n, r, t[s], o);
                        return e
                    }
                    if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke; else if (!i) return e;
                    return 1 === o && (a = i, (i = function (e) {
                        return w().off(e), a.apply(this, arguments)
                    }).guid = a.guid || (a.guid = w.guid++)), e.each(function () {
                        w.event.add(this, t, i, r, n)
                    })
                }

                w.event = {
                    global: {}, add: function (e, t, n, r, i) {
                        var o, a, s, u, l, c, f, p, d, h, g, y = J.get(e);
                        if (y) {
                            n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(be, i), n.guid || (n.guid = w.guid++), (u = y.events) || (u = y.events = {}), (a = y.handle) || (a = y.handle = function (t) {
                                return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0
                            }), l = (t = (t || "").match(M) || [""]).length;
                            while (l--) d = g = (s = Ce.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = w.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = w.event.special[d] || {}, c = w.extend({
                                type: d,
                                origType: g,
                                data: r,
                                handler: n,
                                guid: n.guid,
                                selector: i,
                                needsContext: i && w.expr.match.needsContext.test(i),
                                namespace: h.join(".")
                            }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), w.event.global[d] = !0)
                        }
                    }, remove: function (e, t, n, r, i) {
                        var o, a, s, u, l, c, f, p, d, h, g, y = J.hasData(e) && J.get(e);
                        if (y && (u = y.events)) {
                            l = (t = (t || "").match(M) || [""]).length;
                            while (l--) if (s = Ce.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
                                f = w.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
                                while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                                a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, y.handle) || w.removeEvent(e, d, y.handle), delete u[d])
                            } else for (d in u) w.event.remove(e, d + t[l], n, r, !0);
                            w.isEmptyObject(u) && J.remove(e, "handle events")
                        }
                    }, dispatch: function (e) {
                        var t = w.event.fix(e), n, r, i, o, a, s, u = new Array(arguments.length),
                            l = (J.get(this, "events") || {})[t.type] || [], c = w.event.special[t.type] || {};
                        for (u[0] = t, n = 1; n < arguments.length; n++) u[n] = arguments[n];
                        if (t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) {
                            s = w.event.handlers.call(this, t, l), n = 0;
                            while ((o = s[n++]) && !t.isPropagationStopped()) {
                                t.currentTarget = o.elem, r = 0;
                                while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped()) t.rnamespace && !t.rnamespace.test(a.namespace) || (t.handleObj = a, t.data = a.data, void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation()))
                            }
                            return c.postDispatch && c.postDispatch.call(this, t), t.result
                        }
                    }, handlers: function (e, t) {
                        var n, r, i, o, a, s = [], u = t.delegateCount, l = e.target;
                        if (u && l.nodeType && !("click" === e.type && e.button >= 1)) for (; l !== this; l = l.parentNode || this) if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                            for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r);
                            o.length && s.push({elem: l, handlers: o})
                        }
                        return l = this, u < t.length && s.push({elem: l, handlers: t.slice(u)}), s
                    }, addProp: function (e, t) {
                        Object.defineProperty(w.Event.prototype, e, {
                            enumerable: !0,
                            configurable: !0,
                            get: g(t) ? function () {
                                if (this.originalEvent) return t(this.originalEvent)
                            } : function () {
                                if (this.originalEvent) return this.originalEvent[e]
                            },
                            set: function (t) {
                                Object.defineProperty(this, e, {
                                    enumerable: !0,
                                    configurable: !0,
                                    writable: !0,
                                    value: t
                                })
                            }
                        })
                    }, fix: function (e) {
                        return e[w.expando] ? e : new w.Event(e)
                    }, special: {
                        load: {noBubble: !0}, focus: {
                            trigger: function () {
                                if (this !== Se() && this.focus) return this.focus(), !1
                            }, delegateType: "focusin"
                        }, blur: {
                            trigger: function () {
                                if (this === Se() && this.blur) return this.blur(), !1
                            }, delegateType: "focusout"
                        }, click: {
                            trigger: function () {
                                if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1
                            }, _default: function (e) {
                                return N(e.target, "a")
                            }
                        }, beforeunload: {
                            postDispatch: function (e) {
                                void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                            }
                        }
                    }
                }, w.removeEvent = function (e, t, n) {
                    e.removeEventListener && e.removeEventListener(t, n)
                }, w.Event = function (e, t) {
                    if (!(this instanceof w.Event)) return new w.Event(e, t);
                    e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
                }, w.Event.prototype = {
                    constructor: w.Event,
                    isDefaultPrevented: ke,
                    isPropagationStopped: ke,
                    isImmediatePropagationStopped: ke,
                    isSimulated: !1,
                    preventDefault: function () {
                        var e = this.originalEvent;
                        this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault()
                    },
                    stopPropagation: function () {
                        var e = this.originalEvent;
                        this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation()
                    },
                    stopImmediatePropagation: function () {
                        var e = this.originalEvent;
                        this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
                    }
                }, w.each({
                    altKey: !0,
                    bubbles: !0,
                    cancelable: !0,
                    changedTouches: !0,
                    ctrlKey: !0,
                    detail: !0,
                    eventPhase: !0,
                    metaKey: !0,
                    pageX: !0,
                    pageY: !0,
                    shiftKey: !0,
                    view: !0,
                    "char": !0,
                    charCode: !0,
                    key: !0,
                    keyCode: !0,
                    button: !0,
                    buttons: !0,
                    clientX: !0,
                    clientY: !0,
                    offsetX: !0,
                    offsetY: !0,
                    pointerId: !0,
                    pointerType: !0,
                    screenX: !0,
                    screenY: !0,
                    targetTouches: !0,
                    toElement: !0,
                    touches: !0,
                    which: function (e) {
                        var t = e.button;
                        return null == e.which && we.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
                    }
                }, w.event.addProp), w.each({
                    mouseenter: "mouseover",
                    mouseleave: "mouseout",
                    pointerenter: "pointerover",
                    pointerleave: "pointerout"
                }, function (e, t) {
                    w.event.special[e] = {
                        delegateType: t, bindType: t, handle: function (e) {
                            var n, r = this, i = e.relatedTarget, o = e.handleObj;
                            return i && (i === r || w.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
                        }
                    }
                }), w.fn.extend({
                    on: function (e, t, n, r) {
                        return De(this, e, t, n, r)
                    }, one: function (e, t, n, r) {
                        return De(this, e, t, n, r, 1)
                    }, off: function (e, t, n) {
                        var r, i;
                        if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                        if ("object" == typeof e) {
                            for (i in e) this.off(i, t, e[i]);
                            return this
                        }
                        return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () {
                            w.event.remove(this, e, n, t)
                        })
                    }
                });
                var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
                    Ae = /<script|<style|<link/i, je = /checked\s*(?:[^=]|=\s*.checked.)/i,
                    qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

                function Le(e, t) {
                    return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e
                }

                function He(e) {
                    return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
                }

                function Oe(e) {
                    return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
                }

                function Pe(e, t) {
                    var n, r, i, o, a, s, u, l;
                    if (1 === t.nodeType) {
                        if (J.hasData(e) && (o = J.access(e), a = J.set(t, o), l = o.events)) {
                            delete a.handle, a.events = {};
                            for (i in l) for (n = 0, r = l[i].length; n < r; n++) w.event.add(t, i, l[i][n])
                        }
                        K.hasData(e) && (s = K.access(e), u = w.extend({}, s), K.set(t, u))
                    }
                }

                function Me(e, t) {
                    var n = t.nodeName.toLowerCase();
                    "input" === n && pe.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
                }

                function Re(e, t, n, r) {
                    t = a.apply([], t);
                    var i, o, s, u, l, c, f = 0, p = e.length, d = p - 1, y = t[0], v = g(y);
                    if (v || p > 1 && "string" == typeof y && !h.checkClone && je.test(y)) return e.each(function (i) {
                        var o = e.eq(i);
                        v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r)
                    });
                    if (p && (i = xe(t, e[0].ownerDocument, !1, e, r), o = i.firstChild, 1 === i.childNodes.length && (i = o), o || r)) {
                        for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++) l = i, f !== d && (l = w.clone(l, !0, !0), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f);
                        if (u) for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++) l = s[f], he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l))
                    }
                    return e
                }

                function Ie(e, t, n) {
                    for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r));
                    return e
                }

                w.extend({
                    htmlPrefilter: function (e) {
                        return e.replace(Ne, "<$1></$2>")
                    }, clone: function (e, t, n) {
                        var r, i, o, a, s = e.cloneNode(!0), u = w.contains(e.ownerDocument, e);
                        if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e))) for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++) Me(o[r], a[r]);
                        if (t) if (n) for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++) Pe(o[r], a[r]); else Pe(e, s);
                        return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s
                    }, cleanData: function (e) {
                        for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++) if (Y(n)) {
                            if (t = n[J.expando]) {
                                if (t.events) for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
                                n[J.expando] = void 0
                            }
                            n[K.expando] && (n[K.expando] = void 0)
                        }
                    }
                }), w.fn.extend({
                    detach: function (e) {
                        return Ie(this, e, !0)
                    }, remove: function (e) {
                        return Ie(this, e)
                    }, text: function (e) {
                        return z(this, function (e) {
                            return void 0 === e ? w.text(this) : this.empty().each(function () {
                                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                            })
                        }, null, e, arguments.length)
                    }, append: function () {
                        return Re(this, arguments, function (e) {
                            1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Le(this, e).appendChild(e)
                        })
                    }, prepend: function () {
                        return Re(this, arguments, function (e) {
                            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                var t = Le(this, e);
                                t.insertBefore(e, t.firstChild)
                            }
                        })
                    }, before: function () {
                        return Re(this, arguments, function (e) {
                            this.parentNode && this.parentNode.insertBefore(e, this)
                        })
                    }, after: function () {
                        return Re(this, arguments, function (e) {
                            this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                        })
                    }, empty: function () {
                        for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ye(e, !1)), e.textContent = "");
                        return this
                    }, clone: function (e, t) {
                        return e = null != e && e, t = null == t ? e : t, this.map(function () {
                            return w.clone(this, e, t)
                        })
                    }, html: function (e) {
                        return z(this, function (e) {
                            var t = this[0] || {}, n = 0, r = this.length;
                            if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                            if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                                e = w.htmlPrefilter(e);
                                try {
                                    for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), t.innerHTML = e);
                                    t = 0
                                } catch (e) {
                                }
                            }
                            t && this.empty().append(e)
                        }, null, e, arguments.length)
                    }, replaceWith: function () {
                        var e = [];
                        return Re(this, arguments, function (t) {
                            var n = this.parentNode;
                            w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this))
                        }, e)
                    }
                }), w.each({
                    appendTo: "append",
                    prependTo: "prepend",
                    insertBefore: "before",
                    insertAfter: "after",
                    replaceAll: "replaceWith"
                }, function (e, t) {
                    w.fn[e] = function (e) {
                        for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++) n = a === o ? this : this.clone(!0), w(i[a])[t](n), s.apply(r, n.get());
                        return this.pushStack(r)
                    }
                });
                var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"), $e = function (t) {
                    var n = t.ownerDocument.defaultView;
                    return n && n.opener || (n = e), n.getComputedStyle(t)
                }, Be = new RegExp(oe.join("|"), "i");
                !function () {
                    function t() {
                        if (c) {
                            l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", be.appendChild(l).appendChild(c);
                            var t = e.getComputedStyle(c);
                            i = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", be.removeChild(l), c = null
                        }
                    }

                    function n(e) {
                        return Math.round(parseFloat(e))
                    }

                    var i, o, a, s, u, l = r.createElement("div"), c = r.createElement("div");
                    c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, {
                        boxSizingReliable: function () {
                            return t(), o
                        }, pixelBoxStyles: function () {
                            return t(), s
                        }, pixelPosition: function () {
                            return t(), i
                        }, reliableMarginLeft: function () {
                            return t(), u
                        }, scrollboxSize: function () {
                            return t(), a
                        }
                    }))
                }();

                function Fe(e, t, n) {
                    var r, i, o, a, s = e.style;
                    return (n = n || $e(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)), !h.pixelBoxStyles() && We.test(a) && Be.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
                }

                function _e(e, t) {
                    return {
                        get: function () {
                            if (!e()) return (this.get = t).apply(this, arguments);
                            delete this.get
                        }
                    }
                }

                var ze = /^(none|table(?!-c[ea]).+)/, Xe = /^--/,
                    Ue = {position: "absolute", visibility: "hidden", display: "block"},
                    Ve = {letterSpacing: "0", fontWeight: "400"}, Ge = ["Webkit", "Moz", "ms"],
                    Ye = r.createElement("div").style;

                function Qe(e) {
                    if (e in Ye) return e;
                    var t = e[0].toUpperCase() + e.slice(1), n = Ge.length;
                    while (n--) if ((e = Ge[n] + t) in Ye) return e
                }

                function Je(e) {
                    var t = w.cssProps[e];
                    return t || (t = w.cssProps[e] = Qe(e) || e), t
                }

                function Ke(e, t, n) {
                    var r = ie.exec(t);
                    return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
                }

                function Ze(e, t, n, r, i, o) {
                    var a = "width" === t ? 1 : 0, s = 0, u = 0;
                    if (n === (r ? "border" : "content")) return 0;
                    for (; a < 4; a += 2) "margin" === n && (u += w.css(e, n + oe[a], !0, i)), r ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i))) : (u += w.css(e, "padding" + oe[a], !0, i), "padding" !== n ? u += w.css(e, "border" + oe[a] + "Width", !0, i) : s += w.css(e, "border" + oe[a] + "Width", !0, i));
                    return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5))), u
                }

                function et(e, t, n) {
                    var r = $e(e), i = Fe(e, t, r), o = "border-box" === w.css(e, "boxSizing", !1, r), a = o;
                    if (We.test(i)) {
                        if (!n) return i;
                        i = "auto"
                    }
                    return a = a && (h.boxSizingReliable() || i === e.style[t]), ("auto" === i || !parseFloat(i) && "inline" === w.css(e, "display", !1, r)) && (i = e["offset" + t[0].toUpperCase() + t.slice(1)], a = !0), (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px"
                }

                w.extend({
                    cssHooks: {
                        opacity: {
                            get: function (e, t) {
                                if (t) {
                                    var n = Fe(e, "opacity");
                                    return "" === n ? "1" : n
                                }
                            }
                        }
                    },
                    cssNumber: {
                        animationIterationCount: !0,
                        columnCount: !0,
                        fillOpacity: !0,
                        flexGrow: !0,
                        flexShrink: !0,
                        fontWeight: !0,
                        lineHeight: !0,
                        opacity: !0,
                        order: !0,
                        orphans: !0,
                        widows: !0,
                        zIndex: !0,
                        zoom: !0
                    },
                    cssProps: {},
                    style: function (e, t, n, r) {
                        if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                            var i, o, a, s = G(t), u = Xe.test(t), l = e.style;
                            if (u || (t = Je(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                            "string" == (o = typeof n) && (i = ie.exec(n)) && i[1] && (n = ue(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
                        }
                    },
                    css: function (e, t, n, r) {
                        var i, o, a, s = G(t);
                        return Xe.test(t) || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Fe(e, t, r)), "normal" === i && t in Ve && (i = Ve[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
                    }
                }), w.each(["height", "width"], function (e, t) {
                    w.cssHooks[t] = {
                        get: function (e, n, r) {
                            if (n) return !ze.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? et(e, t, r) : se(e, Ue, function () {
                                return et(e, t, r)
                            })
                        }, set: function (e, n, r) {
                            var i, o = $e(e), a = "border-box" === w.css(e, "boxSizing", !1, o),
                                s = r && Ze(e, t, r, a, o);
                            return a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - .5)), s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ke(e, n, s)
                        }
                    }
                }), w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) {
                    if (t) return (parseFloat(Fe(e, "marginLeft")) || e.getBoundingClientRect().left - se(e, {marginLeft: 0}, function () {
                        return e.getBoundingClientRect().left
                    })) + "px"
                }), w.each({margin: "", padding: "", border: "Width"}, function (e, t) {
                    w.cssHooks[e + t] = {
                        expand: function (n) {
                            for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + oe[r] + t] = o[r] || o[r - 2] || o[0];
                            return i
                        }
                    }, "margin" !== e && (w.cssHooks[e + t].set = Ke)
                }), w.fn.extend({
                    css: function (e, t) {
                        return z(this, function (e, t, n) {
                            var r, i, o = {}, a = 0;
                            if (Array.isArray(t)) {
                                for (r = $e(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r);
                                return o
                            }
                            return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
                        }, e, t, arguments.length > 1)
                    }
                });

                function tt(e, t, n, r, i) {
                    return new tt.prototype.init(e, t, n, r, i)
                }

                w.Tween = tt, tt.prototype = {
                    constructor: tt, init: function (e, t, n, r, i, o) {
                        this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px")
                    }, cur: function () {
                        var e = tt.propHooks[this.prop];
                        return e && e.get ? e.get(this) : tt.propHooks._default.get(this)
                    }, run: function (e) {
                        var t, n = tt.propHooks[this.prop];
                        return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : tt.propHooks._default.set(this), this
                    }
                }, tt.prototype.init.prototype = tt.prototype, tt.propHooks = {
                    _default: {
                        get: function (e) {
                            var t;
                            return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                        }, set: function (e) {
                            w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit)
                        }
                    }
                }, tt.propHooks.scrollTop = tt.propHooks.scrollLeft = {
                    set: function (e) {
                        e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
                    }
                }, w.easing = {
                    linear: function (e) {
                        return e
                    }, swing: function (e) {
                        return .5 - Math.cos(e * Math.PI) / 2
                    }, _default: "swing"
                }, w.fx = tt.prototype.init, w.fx.step = {};
                var nt, rt, it = /^(?:toggle|show|hide)$/, ot = /queueHooks$/;

                function at() {
                    rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick())
                }

                function st() {
                    return e.setTimeout(function () {
                        nt = void 0
                    }), nt = Date.now()
                }

                function ut(e, t) {
                    var n, r = 0, i = {height: e};
                    for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = oe[r])] = i["padding" + n] = e;
                    return t && (i.opacity = i.width = e), i
                }

                function lt(e, t, n) {
                    for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++) if (r = i[o].call(n, t, e)) return r
                }

                function ct(e, t, n) {
                    var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t, p = this, d = {}, h = e.style,
                        g = e.nodeType && ae(e), y = J.get(e, "fxshow");
                    n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () {
                        a.unqueued || s()
                    }), a.unqueued++, p.always(function () {
                        p.always(function () {
                            a.unqueued--, w.queue(e, "fx").length || a.empty.fire()
                        })
                    }));
                    for (r in t) if (i = t[r], it.test(i)) {
                        if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                            if ("show" !== i || !y || void 0 === y[r]) continue;
                            g = !0
                        }
                        d[r] = y && y[r] || w.style(e, r)
                    }
                    if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) {
                        f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = y && y.display) && (l = J.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (p.done(function () {
                            h.display = l
                        }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () {
                            h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                        })), u = !1;
                        for (r in d) u || (y ? "hidden" in y && (g = y.hidden) : y = J.access(e, "fxshow", {display: l}), o && (y.hidden = !g), g && fe([e], !0), p.done(function () {
                            g || fe([e]), J.remove(e, "fxshow");
                            for (r in d) w.style(e, r, d[r])
                        })), u = lt(g ? y[r] : 0, r, p), r in y || (y[r] = u.start, g && (u.end = u.start, u.start = 0))
                    }
                }

                function ft(e, t) {
                    var n, r, i, o, a;
                    for (n in e) if (r = G(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) {
                        o = a.expand(o), delete e[r];
                        for (n in o) n in e || (e[n] = o[n], t[n] = i)
                    } else t[r] = i
                }

                function pt(e, t, n) {
                    var r, i, o = 0, a = pt.prefilters.length, s = w.Deferred().always(function () {
                        delete u.elem
                    }), u = function () {
                        if (i) return !1;
                        for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) l.tweens[o].run(r);
                        return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1)
                    }, l = s.promise({
                        elem: e,
                        props: w.extend({}, t),
                        opts: w.extend(!0, {specialEasing: {}, easing: w.easing._default}, n),
                        originalProperties: t,
                        originalOptions: n,
                        startTime: nt || st(),
                        duration: n.duration,
                        tweens: [],
                        createTween: function (t, n) {
                            var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                            return l.tweens.push(r), r
                        },
                        stop: function (t) {
                            var n = 0, r = t ? l.tweens.length : 0;
                            if (i) return this;
                            for (i = !0; n < r; n++) l.tweens[n].run(1);
                            return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this
                        }
                    }), c = l.props;
                    for (ft(c, l.opts.specialEasing); o < a; o++) if (r = pt.prefilters[o].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
                    return w.map(c, lt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, {
                        elem: e,
                        anim: l,
                        queue: l.opts.queue
                    })), l
                }

                w.Animation = w.extend(pt, {
                    tweeners: {
                        "*": [function (e, t) {
                            var n = this.createTween(e, t);
                            return ue(n.elem, e, ie.exec(t), n), n
                        }]
                    }, tweener: function (e, t) {
                        g(e) ? (t = e, e = ["*"]) : e = e.match(M);
                        for (var n, r = 0, i = e.length; r < i; r++) n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t)
                    }, prefilters: [ct], prefilter: function (e, t) {
                        t ? pt.prefilters.unshift(e) : pt.prefilters.push(e)
                    }
                }), w.speed = function (e, t, n) {
                    var r = e && "object" == typeof e ? w.extend({}, e) : {
                        complete: n || !n && t || g(e) && e,
                        duration: e,
                        easing: n && t || t && !g(t) && t
                    };
                    return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () {
                        g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue)
                    }, r
                }, w.fn.extend({
                    fadeTo: function (e, t, n, r) {
                        return this.filter(ae).css("opacity", 0).show().end().animate({opacity: t}, e, n, r)
                    }, animate: function (e, t, n, r) {
                        var i = w.isEmptyObject(e), o = w.speed(t, n, r), a = function () {
                            var t = pt(this, w.extend({}, e), o);
                            (i || J.get(this, "finish")) && t.stop(!0)
                        };
                        return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
                    }, stop: function (e, t, n) {
                        var r = function (e) {
                            var t = e.stop;
                            delete e.stop, t(n)
                        };
                        return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () {
                            var t = !0, i = null != e && e + "queueHooks", o = w.timers, a = J.get(this);
                            if (i) a[i] && a[i].stop && r(a[i]); else for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]);
                            for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
                            !t && n || w.dequeue(this, e)
                        })
                    }, finish: function (e) {
                        return !1 !== e && (e = e || "fx"), this.each(function () {
                            var t, n = J.get(this), r = n[e + "queue"], i = n[e + "queueHooks"], o = w.timers,
                                a = r ? r.length : 0;
                            for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                            for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                            delete n.finish
                        })
                    }
                }), w.each(["toggle", "show", "hide"], function (e, t) {
                    var n = w.fn[t];
                    w.fn[t] = function (e, r, i) {
                        return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i)
                    }
                }), w.each({
                    slideDown: ut("show"),
                    slideUp: ut("hide"),
                    slideToggle: ut("toggle"),
                    fadeIn: {opacity: "show"},
                    fadeOut: {opacity: "hide"},
                    fadeToggle: {opacity: "toggle"}
                }, function (e, t) {
                    w.fn[e] = function (e, n, r) {
                        return this.animate(t, e, n, r)
                    }
                }), w.timers = [], w.fx.tick = function () {
                    var e, t = 0, n = w.timers;
                    for (nt = Date.now(); t < n.length; t++) (e = n[t])() || n[t] !== e || n.splice(t--, 1);
                    n.length || w.fx.stop(), nt = void 0
                }, w.fx.timer = function (e) {
                    w.timers.push(e), w.fx.start()
                }, w.fx.interval = 13, w.fx.start = function () {
                    rt || (rt = !0, at())
                }, w.fx.stop = function () {
                    rt = null
                }, w.fx.speeds = {slow: 600, fast: 200, _default: 400}, w.fn.delay = function (t, n) {
                    return t = w.fx ? w.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, r) {
                        var i = e.setTimeout(n, t);
                        r.stop = function () {
                            e.clearTimeout(i)
                        }
                    })
                }, function () {
                    var e = r.createElement("input"),
                        t = r.createElement("select").appendChild(r.createElement("option"));
                    e.type = "checkbox", h.checkOn = "" !== e.value, h.optSelected = t.selected, (e = r.createElement("input")).value = "t", e.type = "radio", h.radioValue = "t" === e.value
                }();
                var dt, ht = w.expr.attrHandle;
                w.fn.extend({
                    attr: function (e, t) {
                        return z(this, w.attr, e, t, arguments.length > 1)
                    }, removeAttr: function (e) {
                        return this.each(function () {
                            w.removeAttr(this, e)
                        })
                    }
                }), w.extend({
                    attr: function (e, t, n) {
                        var r, i, o = e.nodeType;
                        if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r)
                    }, attrHooks: {
                        type: {
                            set: function (e, t) {
                                if (!h.radioValue && "radio" === t && N(e, "input")) {
                                    var n = e.value;
                                    return e.setAttribute("type", t), n && (e.value = n), t
                                }
                            }
                        }
                    }, removeAttr: function (e, t) {
                        var n, r = 0, i = t && t.match(M);
                        if (i && 1 === e.nodeType) while (n = i[r++]) e.removeAttribute(n)
                    }
                }), dt = {
                    set: function (e, t, n) {
                        return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n
                    }
                }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
                    var n = ht[t] || w.find.attr;
                    ht[t] = function (e, t, r) {
                        var i, o, a = t.toLowerCase();
                        return r || (o = ht[a], ht[a] = i, i = null != n(e, t, r) ? a : null, ht[a] = o), i
                    }
                });
                var gt = /^(?:input|select|textarea|button)$/i, yt = /^(?:a|area)$/i;
                w.fn.extend({
                    prop: function (e, t) {
                        return z(this, w.prop, e, t, arguments.length > 1)
                    }, removeProp: function (e) {
                        return this.each(function () {
                            delete this[w.propFix[e] || e]
                        })
                    }
                }), w.extend({
                    prop: function (e, t, n) {
                        var r, i, o = e.nodeType;
                        if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
                    }, propHooks: {
                        tabIndex: {
                            get: function (e) {
                                var t = w.find.attr(e, "tabindex");
                                return t ? parseInt(t, 10) : gt.test(e.nodeName) || yt.test(e.nodeName) && e.href ? 0 : -1
                            }
                        }
                    }, propFix: {"for": "htmlFor", "class": "className"}
                }), h.optSelected || (w.propHooks.selected = {
                    get: function (e) {
                        var t = e.parentNode;
                        return t && t.parentNode && t.parentNode.selectedIndex, null
                    }, set: function (e) {
                        var t = e.parentNode;
                        t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
                    }
                }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
                    w.propFix[this.toLowerCase()] = this
                });

                function vt(e) {
                    return (e.match(M) || []).join(" ")
                }

                function mt(e) {
                    return e.getAttribute && e.getAttribute("class") || ""
                }

                function xt(e) {
                    return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : []
                }

                w.fn.extend({
                    addClass: function (e) {
                        var t, n, r, i, o, a, s, u = 0;
                        if (g(e)) return this.each(function (t) {
                            w(this).addClass(e.call(this, t, mt(this)))
                        });
                        if ((t = xt(e)).length) while (n = this[u++]) if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
                            a = 0;
                            while (o = t[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                            i !== (s = vt(r)) && n.setAttribute("class", s)
                        }
                        return this
                    }, removeClass: function (e) {
                        var t, n, r, i, o, a, s, u = 0;
                        if (g(e)) return this.each(function (t) {
                            w(this).removeClass(e.call(this, t, mt(this)))
                        });
                        if (!arguments.length) return this.attr("class", "");
                        if ((t = xt(e)).length) while (n = this[u++]) if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
                            a = 0;
                            while (o = t[a++]) while (r.indexOf(" " + o + " ") > -1) r = r.replace(" " + o + " ", " ");
                            i !== (s = vt(r)) && n.setAttribute("class", s)
                        }
                        return this
                    }, toggleClass: function (e, t) {
                        var n = typeof e, r = "string" === n || Array.isArray(e);
                        return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) {
                            w(this).toggleClass(e.call(this, n, mt(this), t), t)
                        }) : this.each(function () {
                            var t, i, o, a;
                            if (r) {
                                i = 0, o = w(this), a = xt(e);
                                while (t = a[i++]) o.hasClass(t) ? o.removeClass(t) : o.addClass(t)
                            } else void 0 !== e && "boolean" !== n || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""))
                        })
                    }, hasClass: function (e) {
                        var t, n, r = 0;
                        t = " " + e + " ";
                        while (n = this[r++]) if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0;
                        return !1
                    }
                });
                var bt = /\r/g;
                w.fn.extend({
                    val: function (e) {
                        var t, n, r, i = this[0];
                        {
                            if (arguments.length) return r = g(e), this.each(function (n) {
                                var i;
                                1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, function (e) {
                                    return null == e ? "" : e + ""
                                })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                            });
                            if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n
                        }
                    }
                }), w.extend({
                    valHooks: {
                        option: {
                            get: function (e) {
                                var t = w.find.attr(e, "value");
                                return null != t ? t : vt(w.text(e))
                            }
                        }, select: {
                            get: function (e) {
                                var t, n, r, i = e.options, o = e.selectedIndex, a = "select-one" === e.type,
                                    s = a ? null : [], u = a ? o + 1 : i.length;
                                for (r = o < 0 ? u : a ? o : 0; r < u; r++) if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
                                    if (t = w(n).val(), a) return t;
                                    s.push(t)
                                }
                                return s
                            }, set: function (e, t) {
                                var n, r, i = e.options, o = w.makeArray(t), a = i.length;
                                while (a--) ((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
                                return n || (e.selectedIndex = -1), o
                            }
                        }
                    }
                }), w.each(["radio", "checkbox"], function () {
                    w.valHooks[this] = {
                        set: function (e, t) {
                            if (Array.isArray(t)) return e.checked = w.inArray(w(e).val(), t) > -1
                        }
                    }, h.checkOn || (w.valHooks[this].get = function (e) {
                        return null === e.getAttribute("value") ? "on" : e.value
                    })
                }), h.focusin = "onfocusin" in e;
                var wt = /^(?:focusinfocus|focusoutblur)$/, Tt = function (e) {
                    e.stopPropagation()
                };
                w.extend(w.event, {
                    trigger: function (t, n, i, o) {
                        var a, s, u, l, c, p, d, h, v = [i || r], m = f.call(t, "type") ? t.type : t,
                            x = f.call(t, "namespace") ? t.namespace.split(".") : [];
                        if (s = h = u = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !wt.test(m + w.event.triggered) && (m.indexOf(".") > -1 && (m = (x = m.split(".")).shift(), x.sort()), c = m.indexOf(":") < 0 && "on" + m, t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = x.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : w.makeArray(n, [t]), d = w.event.special[m] || {}, o || !d.trigger || !1 !== d.trigger.apply(i, n))) {
                            if (!o && !d.noBubble && !y(i)) {
                                for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode) v.push(s), u = s;
                                u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e)
                            }
                            a = 0;
                            while ((s = v[a++]) && !t.isPropagationStopped()) h = s, t.type = a > 1 ? l : d.bindType || m, (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n), (p = c && s[c]) && p.apply && Y(s) && (t.result = p.apply(s, n), !1 === t.result && t.preventDefault());
                            return t.type = m, o || t.isDefaultPrevented() || d._default && !1 !== d._default.apply(v.pop(), n) || !Y(i) || c && g(i[m]) && !y(i) && ((u = i[c]) && (i[c] = null), w.event.triggered = m, t.isPropagationStopped() && h.addEventListener(m, Tt), i[m](), t.isPropagationStopped() && h.removeEventListener(m, Tt), w.event.triggered = void 0, u && (i[c] = u)), t.result
                        }
                    }, simulate: function (e, t, n) {
                        var r = w.extend(new w.Event, n, {type: e, isSimulated: !0});
                        w.event.trigger(r, null, t)
                    }
                }), w.fn.extend({
                    trigger: function (e, t) {
                        return this.each(function () {
                            w.event.trigger(e, t, this)
                        })
                    }, triggerHandler: function (e, t) {
                        var n = this[0];
                        if (n) return w.event.trigger(e, t, n, !0)
                    }
                }), h.focusin || w.each({focus: "focusin", blur: "focusout"}, function (e, t) {
                    var n = function (e) {
                        w.event.simulate(t, e.target, w.event.fix(e))
                    };
                    w.event.special[t] = {
                        setup: function () {
                            var r = this.ownerDocument || this, i = J.access(r, t);
                            i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1)
                        }, teardown: function () {
                            var r = this.ownerDocument || this, i = J.access(r, t) - 1;
                            i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t))
                        }
                    }
                });
                var Ct = e.location, Et = Date.now(), kt = /\?/;
                w.parseXML = function (t) {
                    var n;
                    if (!t || "string" != typeof t) return null;
                    try {
                        n = (new e.DOMParser).parseFromString(t, "text/xml")
                    } catch (e) {
                        n = void 0
                    }
                    return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n
                };
                var St = /\[\]$/, Dt = /\r?\n/g, Nt = /^(?:submit|button|image|reset|file)$/i,
                    At = /^(?:input|select|textarea|keygen)/i;

                function jt(e, t, n, r) {
                    var i;
                    if (Array.isArray(t)) w.each(t, function (t, i) {
                        n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
                    }); else if (n || "object" !== x(t)) r(e, t); else for (i in t) jt(e + "[" + i + "]", t[i], n, r)
                }

                w.param = function (e, t) {
                    var n, r = [], i = function (e, t) {
                        var n = g(t) ? t() : t;
                        r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
                    };
                    if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () {
                        i(this.name, this.value)
                    }); else for (n in e) jt(n, e[n], t, i);
                    return r.join("&")
                }, w.fn.extend({
                    serialize: function () {
                        return w.param(this.serializeArray())
                    }, serializeArray: function () {
                        return this.map(function () {
                            var e = w.prop(this, "elements");
                            return e ? w.makeArray(e) : this
                        }).filter(function () {
                            var e = this.type;
                            return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e))
                        }).map(function (e, t) {
                            var n = w(this).val();
                            return null == n ? null : Array.isArray(n) ? w.map(n, function (e) {
                                return {name: t.name, value: e.replace(Dt, "\r\n")}
                            }) : {name: t.name, value: n.replace(Dt, "\r\n")}
                        }).get()
                    }
                });
                var qt = /%20/g, Lt = /#.*$/, Ht = /([?&])_=[^&]*/, Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
                    Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Mt = /^(?:GET|HEAD)$/,
                    Rt = /^\/\//, It = {}, Wt = {}, $t = "*/".concat("*"), Bt = r.createElement("a");
                Bt.href = Ct.href;

                function Ft(e) {
                    return function (t, n) {
                        "string" != typeof t && (n = t, t = "*");
                        var r, i = 0, o = t.toLowerCase().match(M) || [];
                        if (g(n)) while (r = o[i++]) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
                    }
                }

                function _t(e, t, n, r) {
                    var i = {}, o = e === Wt;

                    function a(s) {
                        var u;
                        return i[s] = !0, w.each(e[s] || [], function (e, s) {
                            var l = s(t, n, r);
                            return "string" != typeof l || o || i[l] ? o ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1)
                        }), u
                    }

                    return a(t.dataTypes[0]) || !i["*"] && a("*")
                }

                function zt(e, t) {
                    var n, r, i = w.ajaxSettings.flatOptions || {};
                    for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
                    return r && w.extend(!0, e, r), e
                }

                function Xt(e, t, n) {
                    var r, i, o, a, s = e.contents, u = e.dataTypes;
                    while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                    if (r) for (i in s) if (s[i] && s[i].test(r)) {
                        u.unshift(i);
                        break
                    }
                    if (u[0] in n) o = u[0]; else {
                        for (i in n) {
                            if (!u[0] || e.converters[i + " " + u[0]]) {
                                o = i;
                                break
                            }
                            a || (a = i)
                        }
                        o = o || a
                    }
                    if (o) return o !== u[0] && u.unshift(o), n[o]
                }

                function Ut(e, t, n, r) {
                    var i, o, a, s, u, l = {}, c = e.dataTypes.slice();
                    if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
                    o = c.shift();
                    while (o) if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift()) if ("*" === o) o = u; else if ("*" !== u && u !== o) {
                        if (!(a = l[u + " " + o] || l["* " + o])) for (i in l) if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                            !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
                            break
                        }
                        if (!0 !== a) if (a && e["throws"]) t = a(t); else try {
                            t = a(t)
                        } catch (e) {
                            return {state: "parsererror", error: a ? e : "No conversion from " + u + " to " + o}
                        }
                    }
                    return {state: "success", data: t}
                }

                w.extend({
                    active: 0,
                    lastModified: {},
                    etag: {},
                    ajaxSettings: {
                        url: Ct.href,
                        type: "GET",
                        isLocal: Pt.test(Ct.protocol),
                        global: !0,
                        processData: !0,
                        async: !0,
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        accepts: {
                            "*": $t,
                            text: "text/plain",
                            html: "text/html",
                            xml: "application/xml, text/xml",
                            json: "application/json, text/javascript"
                        },
                        contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
                        responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
                        converters: {
                            "* text": String,
                            "text html": !0,
                            "text json": JSON.parse,
                            "text xml": w.parseXML
                        },
                        flatOptions: {url: !0, context: !0}
                    },
                    ajaxSetup: function (e, t) {
                        return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e)
                    },
                    ajaxPrefilter: Ft(It),
                    ajaxTransport: Ft(Wt),
                    ajax: function (t, n) {
                        "object" == typeof t && (n = t, t = void 0), n = n || {};
                        var i, o, a, s, u, l, c, f, p, d, h = w.ajaxSetup({}, n), g = h.context || h,
                            y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event, v = w.Deferred(),
                            m = w.Callbacks("once memory"), x = h.statusCode || {}, b = {}, T = {}, C = "canceled",
                            E = {
                                readyState: 0, getResponseHeader: function (e) {
                                    var t;
                                    if (c) {
                                        if (!s) {
                                            s = {};
                                            while (t = Ot.exec(a)) s[t[1].toLowerCase()] = t[2]
                                        }
                                        t = s[e.toLowerCase()]
                                    }
                                    return null == t ? null : t
                                }, getAllResponseHeaders: function () {
                                    return c ? a : null
                                }, setRequestHeader: function (e, t) {
                                    return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, b[e] = t), this
                                }, overrideMimeType: function (e) {
                                    return null == c && (h.mimeType = e), this
                                }, statusCode: function (e) {
                                    var t;
                                    if (e) if (c) E.always(e[E.status]); else for (t in e) x[t] = [x[t], e[t]];
                                    return this
                                }, abort: function (e) {
                                    var t = e || C;
                                    return i && i.abort(t), k(0, t), this
                                }
                            };
                        if (v.promise(E), h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""], null == h.crossDomain) {
                            l = r.createElement("a");
                            try {
                                l.href = h.url, l.href = l.href, h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host
                            } catch (e) {
                                h.crossDomain = !0
                            }
                        }
                        if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c) return E;
                        (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Mt.test(h.type), o = h.url.replace(Lt, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (d = h.url.slice(o.length), h.data && (h.processData || "string" == typeof h.data) && (o += (kt.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(Ht, "$1"), d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d), h.url = o + d), h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && E.setRequestHeader("Content-Type", h.contentType), E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]);
                        for (p in h.headers) E.setRequestHeader(p, h.headers[p]);
                        if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort();
                        if (C = "abort", m.add(h.complete), E.done(h.success), E.fail(h.error), i = _t(Wt, h, n, E)) {
                            if (E.readyState = 1, f && y.trigger("ajaxSend", [E, h]), c) return E;
                            h.async && h.timeout > 0 && (u = e.setTimeout(function () {
                                E.abort("timeout")
                            }, h.timeout));
                            try {
                                c = !1, i.send(b, k)
                            } catch (e) {
                                if (c) throw e;
                                k(-1, e)
                            }
                        } else k(-1, "No Transport");

                        function k(t, n, r, s) {
                            var l, p, d, b, T, C = n;
                            c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", E.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = Xt(h, E, r)), b = Ut(h, b, E, l), l ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = b.state, p = b.data, l = !(d = b.error))) : (d = C, !t && C || (C = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (n || C) + "", l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]), E.statusCode(x), x = void 0, f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]), m.fireWith(g, [E, C]), f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop")))
                        }

                        return E
                    },
                    getJSON: function (e, t, n) {
                        return w.get(e, t, n, "json")
                    },
                    getScript: function (e, t) {
                        return w.get(e, void 0, t, "script")
                    }
                }), w.each(["get", "post"], function (e, t) {
                    w[t] = function (e, n, r, i) {
                        return g(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({
                            url: e,
                            type: t,
                            dataType: i,
                            data: n,
                            success: r
                        }, w.isPlainObject(e) && e))
                    }
                }), w._evalUrl = function (e) {
                    return w.ajax({
                        url: e,
                        type: "GET",
                        dataType: "script",
                        cache: !0,
                        async: !1,
                        global: !1,
                        "throws": !0
                    })
                }, w.fn.extend({
                    wrapAll: function (e) {
                        var t;
                        return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
                            var e = this;
                            while (e.firstElementChild) e = e.firstElementChild;
                            return e
                        }).append(this)), this
                    }, wrapInner: function (e) {
                        return g(e) ? this.each(function (t) {
                            w(this).wrapInner(e.call(this, t))
                        }) : this.each(function () {
                            var t = w(this), n = t.contents();
                            n.length ? n.wrapAll(e) : t.append(e)
                        })
                    }, wrap: function (e) {
                        var t = g(e);
                        return this.each(function (n) {
                            w(this).wrapAll(t ? e.call(this, n) : e)
                        })
                    }, unwrap: function (e) {
                        return this.parent(e).not("body").each(function () {
                            w(this).replaceWith(this.childNodes)
                        }), this
                    }
                }), w.expr.pseudos.hidden = function (e) {
                    return !w.expr.pseudos.visible(e)
                }, w.expr.pseudos.visible = function (e) {
                    return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
                }, w.ajaxSettings.xhr = function () {
                    try {
                        return new e.XMLHttpRequest
                    } catch (e) {
                    }
                };
                var Vt = {0: 200, 1223: 204}, Gt = w.ajaxSettings.xhr();
                h.cors = !!Gt && "withCredentials" in Gt, h.ajax = Gt = !!Gt, w.ajaxTransport(function (t) {
                    var n, r;
                    if (h.cors || Gt && !t.crossDomain) return {
                        send: function (i, o) {
                            var a, s = t.xhr();
                            if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) s[a] = t.xhrFields[a];
                            t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
                            for (a in i) s.setRequestHeader(a, i[a]);
                            n = function (e) {
                                return function () {
                                    n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {binary: s.response} : {text: s.responseText}, s.getAllResponseHeaders()))
                                }
                            }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
                                4 === s.readyState && e.setTimeout(function () {
                                    n && r()
                                })
                            }, n = n("abort");
                            try {
                                s.send(t.hasContent && t.data || null)
                            } catch (e) {
                                if (n) throw e
                            }
                        }, abort: function () {
                            n && n()
                        }
                    }
                }), w.ajaxPrefilter(function (e) {
                    e.crossDomain && (e.contents.script = !1)
                }), w.ajaxSetup({
                    accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
                    contents: {script: /\b(?:java|ecma)script\b/},
                    converters: {
                        "text script": function (e) {
                            return w.globalEval(e), e
                        }
                    }
                }), w.ajaxPrefilter("script", function (e) {
                    void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
                }), w.ajaxTransport("script", function (e) {
                    if (e.crossDomain) {
                        var t, n;
                        return {
                            send: function (i, o) {
                                t = w("<script>").prop({
                                    charset: e.scriptCharset,
                                    src: e.url
                                }).on("load error", n = function (e) {
                                    t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type)
                                }), r.head.appendChild(t[0])
                            }, abort: function () {
                                n && n()
                            }
                        }
                    }
                });
                var Yt = [], Qt = /(=)\?(?=&|$)|\?\?/;
                w.ajaxSetup({
                    jsonp: "callback", jsonpCallback: function () {
                        var e = Yt.pop() || w.expando + "_" + Et++;
                        return this[e] = !0, e
                    }
                }), w.ajaxPrefilter("json jsonp", function (t, n, r) {
                    var i, o, a,
                        s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data");
                    if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Qt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () {
                        return a || w.error(i + " was not called"), a[0]
                    }, t.dataTypes[0] = "json", o = e[i], e[i] = function () {
                        a = arguments
                    }, r.always(function () {
                        void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Yt.push(i)), a && g(o) && o(a[0]), a = o = void 0
                    }), "script"
                }), h.createHTMLDocument = function () {
                    var e = r.implementation.createHTMLDocument("").body;
                    return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length
                }(), w.parseHTML = function (e, t, n) {
                    if ("string" != typeof e) return [];
                    "boolean" == typeof t && (n = t, t = !1);
                    var i, o, a;
                    return t || (h.createHTMLDocument ? ((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(i)) : t = r), o = A.exec(e), a = !n && [], o ? [t.createElement(o[1])] : (o = xe([e], t, a), a && a.length && w(a).remove(), w.merge([], o.childNodes))
                }, w.fn.load = function (e, t, n) {
                    var r, i, o, a = this, s = e.indexOf(" ");
                    return s > -1 && (r = vt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), a.length > 0 && w.ajax({
                        url: e,
                        type: i || "GET",
                        dataType: "html",
                        data: t
                    }).done(function (e) {
                        o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e)
                    }).always(n && function (e, t) {
                        a.each(function () {
                            n.apply(this, o || [e.responseText, t, e])
                        })
                    }), this
                }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
                    w.fn[t] = function (e) {
                        return this.on(t, e)
                    }
                }), w.expr.pseudos.animated = function (e) {
                    return w.grep(w.timers, function (t) {
                        return e === t.elem
                    }).length
                }, w.offset = {
                    setOffset: function (e, t, n) {
                        var r, i, o, a, s, u, l, c = w.css(e, "position"), f = w(e), p = {};
                        "static" === c && (e.style.position = "relative"), s = f.offset(), o = w.css(e, "top"), u = w.css(e, "left"), (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? (a = (r = f.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (p.top = t.top - s.top + a), null != t.left && (p.left = t.left - s.left + i), "using" in t ? t.using.call(e, p) : f.css(p)
                    }
                }, w.fn.extend({
                    offset: function (e) {
                        if (arguments.length) return void 0 === e ? this : this.each(function (t) {
                            w.offset.setOffset(this, e, t)
                        });
                        var t, n, r = this[0];
                        if (r) return r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                            top: t.top + n.pageYOffset,
                            left: t.left + n.pageXOffset
                        }) : {top: 0, left: 0}
                    }, position: function () {
                        if (this[0]) {
                            var e, t, n, r = this[0], i = {top: 0, left: 0};
                            if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect(); else {
                                t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
                                while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) e = e.parentNode;
                                e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0))
                            }
                            return {
                                top: t.top - i.top - w.css(r, "marginTop", !0),
                                left: t.left - i.left - w.css(r, "marginLeft", !0)
                            }
                        }
                    }, offsetParent: function () {
                        return this.map(function () {
                            var e = this.offsetParent;
                            while (e && "static" === w.css(e, "position")) e = e.offsetParent;
                            return e || be
                        })
                    }
                }), w.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (e, t) {
                    var n = "pageYOffset" === t;
                    w.fn[e] = function (r) {
                        return z(this, function (e, r, i) {
                            var o;
                            if (y(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
                            o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
                        }, e, r, arguments.length)
                    }
                }), w.each(["top", "left"], function (e, t) {
                    w.cssHooks[t] = _e(h.pixelPosition, function (e, n) {
                        if (n) return n = Fe(e, t), We.test(n) ? w(e).position()[t] + "px" : n
                    })
                }), w.each({Height: "height", Width: "width"}, function (e, t) {
                    w.each({padding: "inner" + e, content: t, "": "outer" + e}, function (n, r) {
                        w.fn[r] = function (i, o) {
                            var a = arguments.length && (n || "boolean" != typeof i),
                                s = n || (!0 === i || !0 === o ? "margin" : "border");
                            return z(this, function (t, n, i) {
                                var o;
                                return y(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s)
                            }, t, a ? i : void 0, a)
                        }
                    })
                }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
                    w.fn[t] = function (e, n) {
                        return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
                    }
                }), w.fn.extend({
                    hover: function (e, t) {
                        return this.mouseenter(e).mouseleave(t || e)
                    }
                }), w.fn.extend({
                    bind: function (e, t, n) {
                        return this.on(e, null, t, n)
                    }, unbind: function (e, t) {
                        return this.off(e, null, t)
                    }, delegate: function (e, t, n, r) {
                        return this.on(t, e, n, r)
                    }, undelegate: function (e, t, n) {
                        return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
                    }
                }), w.proxy = function (e, t) {
                    var n, r, i;
                    if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = o.call(arguments, 2), i = function () {
                        return e.apply(t || this, r.concat(o.call(arguments)))
                    }, i.guid = e.guid = e.guid || w.guid++, i
                }, w.holdReady = function (e) {
                    e ? w.readyWait++ : w.ready(!0)
                }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = N, w.isFunction = g, w.isWindow = y, w.camelCase = G, w.type = x, w.now = Date.now, w.isNumeric = function (e) {
                    var t = w.type(e);
                    return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
                }, "function" == typeof define && define.amd && define("jquery", [], function () {
                    return w
                });
                var Jt = e.jQuery, Kt = e.$;
                return w.noConflict = function (t) {
                    return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w
                }, t || (e.jQuery = e.$ = w), w
            });
        </script>
        <script src="{{ asset('front/js/slick.min.js') }}" defer></script>
    <?php } ?>


    <!-- <link defer href="{{ asset('css/theme.css?v=1.0') }}" rel="stylesheet" media="all"> -->

    <!-- critical css -->

    <style>

        .show-ph {
            display: none !important
        }

        .show-dsk {
            display: block !important
        }

        @media only screen and (max-width: 425px) {
            .show-ph {
                display: block !important
            }

            .show-dsk {
                display: none !important
            }

            .position-absolute {
                padding: 50px 0 120px !important
            }

            .view-phn {
                margin-top: 20px
            }
        }

        @media only screen and (max-width: 425px) {
            a.float.d-md-none {
                display: none
            }
        }

    </style>


    <style>
        
        .d-inline-block {
            display: inline-block !important
        }
    </style>
</head>

<body>


<noscript>
    <iframe loading="lazy" src="https://www.googletagmanager.com/ns.html?id=GTM-KWHZJRK"

            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- End Google Tag Manager (noscript) -->

<div id="app">

    <div class="header-main bg-white d-block position-relative">

        <div class="header">

            <div class="header-section">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-3 col-9">

                            <a href="/" class="d-inline-block logo">

                                <img src="{{ asset('front/images/logo.webp') }}" alt="expatcarbuyers"
                                     class="img-fluid logocompany"
                                     onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'">

                                <!--<img src="{{ asset('front/images/logo.png') }}" alt="expatcarbuyers" class="img-fluid logocompany">-->

                            </a>

                        </div>

                        <div class="col-lg-9 col-3 text-right">

                            <div class="btn btn-danger custom-rounded ml-3 px-3 py-2 btn-phone d-none d-lg-inline-block"><a
                                    href="tel:++971561774555" class="header-phone">

                                    <img src="{{ asset('front/images/phone.webp') }}" alt="phone" class="mr-2"
                                         onerror="this.onerror=null; this.src='{{ asset('front/images/phone.png') }}'">

                                    <!--<img src="{{ asset('front/images/phone.png') }}" alt="phone" class="mr-2" />-->
                                    +971 56 1774555</a></div>

                            <button class="custom-nav-button navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">

                                <span class="navbar-toggler-icon"></span>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            @include('partials.menu')

        </div>

    </div>


    <a href="tel:++971561774555" class="float d-md-none">

        <i class="fa fa-phone my-float"></i>

    </a>


    <div class="d-block">
        <div class="bg-custom w-100 pt-5">

            <div class="container">

                <div class="row">

                    <div class="col-md-5 text-center ml-auto">

                        <div class="d-flex justify-content-center custom-Height-form flex-column w-100 banner-form w-100 shadow mb-4">


                            <h5 class="mb-3 theme-color">UAE's No. 1</h5>
                            <h4>Car Valuation Website</h4>
                            <p>People trust us because we provide Fast, easy and honest service.</p>

                            <div class="d-inline-block align-items-center w-100">

                                <form id="booking_form_step_1" method="Post" action="{{ url('step-2') }}"
                                      class="form-inline">

                                    @csrf


                                        <div class="row m-0">

                                            <div class="dropdown selectmake col-12 mb-3">

                                                @php

                                                $brands = \App\Models\Brand::where('top','<','2')->get();

                                                $top_brands = \App\Models\Brand::where('top','1')->get();

                                                @endphp
                                                <!--<label>Enter car company name</label>-->
                                                <select class="form-control custom-rounded" style="width: 100%;" id="brand_val"
                                                        name="brand_name" aria-label="brand">

                                                    <option value="" selected disabled="disabled" style="padding: 0px;">
                                                        Select Make
                                                    </option>


                                                    @foreach($top_brands as $brandss)

                                                    <option value="{{ $brandss->name }}" style="padding: 0px;">{{
                                                        $brandss->name }}
                                                    </option>

                                                    @endforeach

                                                    <option disabled="disabled">-------------------</option>

                                                    @foreach($brands as $brand)

                                                    <option value="{{ $brand->name }}" style="padding: 0px;">{{
                                                        $brand->name }}
                                                    </option>

                                                    @endforeach

                                                </select>

                                                <span class="err_msg error_brand" style="display:none;color:red;">This field is required</span>

                                                <!---->

                                            </div>
                                            
                                            <div class="dropdown car_modal col-lg-6 col-md-6 col-12 mb-3">
<!--<label>Car model</label>-->
                                                <select class="modl-model form-control custom-rounded" id="fetched_model"
                                                        style="width: 100%;" name="model_name" aria-label="model">

                                                    <option value="" selected disabled="disabled">Select Model</option>

                                                </select>

                                                <span class="err_msg error_model" style="display:none;color:red;">This field is required</span>

                                                <!---->

                                            </div>
                                            
                                            <div class="dropdown car_year col-lg-6 col-md-6 col-12 mb-3">
                                                <!--<label>year of manufacturing</label>-->
                                                <select class="modl-year form-control custom-rounded" style="width: 100%;" id="year"
                                                        name="year" aria-label="year">

                                                    <option value="" disabled="disabled" selected style="padding: 0px;">
                                                        Select Year
                                                    </option>

                                                    <option value="2023" style="padding: 0px;">2023</option>
                                                    <option value="2022" style="padding: 0px;">2022</option>

                                                    <option value="2021" style="padding: 0px;">2021</option>

                                                    <option value="2020" style="padding: 0px;">2020</option>

                                                    <option value="2019" style="padding: 0px;">2019</option>

                                                    <option value="2018" style="padding: 0px;">2018</option>

                                                    <option value="2017" style="padding: 0px;">2017</option>

                                                    <option value="2016" style="padding: 0px;">2016</option>

                                                    <option value="2015" style="padding: 0px;">2015</option>

                                                    <option value="2014" style="padding: 0px;">2014</option>

                                                    <option value="2013" style="padding: 0px;">2013</option>

                                                    <option value="2012" style="padding: 0px;">2012</option>

                                                    <option value="2011" style="padding: 0px;">2011</option>

                                                    <option value="2010" style="padding: 0px;">2010</option>

                                                    <option value="2009" style="padding: 0px;">2009</option>

                                                    <option value="2008" style="padding: 0px;">2008</option>

                                                    <option value="2007" style="padding: 0px;">2007</option>

                                                    <option value="2006" style="padding: 0px;">2006</option>

                                                    <option value="2005" style="padding: 0px;">2005</option>

                                                    <option value="2004" style="padding: 0px;">2004</option>

                                                    <option value="2003" style="padding: 0px;">2003</option>

                                                    <option value="2002" style="padding: 0px;">2002</option>

                                                    <option value="2001" style="padding: 0px;">2001</option>

                                                    <option value="2000" style="padding: 0px;">2000</option>

                                                    <option value="1999" style="padding: 0px;">1999</option>

                                                    <option value="1998" style="padding: 0px;">1998</option>

                                                    <option value="1997" style="padding: 0px;">1997</option>

                                                    <option value="1996" style="padding: 0px;">1996</option>

                                                    <option value="1995" style="padding: 0px;">1995</option>

                                                    <option value="1994" style="padding: 0px;">1994</option>

                                                    <option value="1993" style="padding: 0px;">1993</option>

                                                    <option value="1992" style="padding: 0px;">1992</option>

                                                    <option value="1991" style="padding: 0px;">1991</option>

                                                    <option value="1990" style="padding: 0px;">1990</option>

                                                    <option value="1989" style="padding: 0px;">1989</option>

                                                    <option value="1988" style="padding: 0px;">1988</option>

                                                    <option value="1987" style="padding: 0px;">1987</option>

                                                    <option value="1986" style="padding: 0px;">1986</option>

                                                    <option value="1985" style="padding: 0px;">1985</option>

                                                    <option value="1984" style="padding: 0px;">1984</option>

                                                    <option value="1983" style="padding: 0px;">1983</option>

                                                    <option value="1982" style="padding: 0px;">1982</option>

                                                    <option value="1981" style="padding: 0px;">1981</option>

                                                    <option value="1980" style="padding: 0px;">1980</option>

                                                </select>
                                                <!---->

                                                <span class="err_msg error_date" style="display:none;color:red;">This field is required</span>

                                            </div>


                                            

                                            <div class="dropdown  car_call col-12 mb-3">
<!--<label>Contact Number</label>-->
                                                <input type="tel" name="number" placeholder="Phone Number"
                                                       class="numberinput w-100 form-control custom-rounded" aria-label="Phone Number"
                                                       pattern="[0-9]*"> <!---->

                                                <span class="err_msg error_phone" style="display:none;color:red;">Please enter a valid phone number.e.g ( 05xxxxxxxx / +9715xxxxxxxx )</span>

                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-danger w-100 text-capitalize myform banner-form-btn"
                                                        id="book_appon">EVALUATE YOUR CAR
                                                </button>
                                            </div>
                                        
                                        </div>
                                        

                                </form>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

        <div class="ajax-loader"
             style="display:none;position: absolute;width: 100%;height: 100%;z-index: 11;background: rgba(238, 238, 238, 0.4);top:0px;left:0px;">
            <div class="loader-inner"
                 style="display: flex;align-items: center;position: relative;height: 100%;justify-content: center;">

                <!--<img src="{{ asset('front/images/front-loader.svg') }}" alt="loader" style="width:35px;">-->

                <img src="{{ asset('front/images/front-loader.webp') }}" alt="loader" style="width:35px;"
                     onerror="this.onerror=null; this.src='{{ asset('front/images/front-loader.svg') }}'"></div>

        </div>

    </div>

    <div id="home-content">

        @yield('content')

    </div>
    
    <section class="mt-5">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6 bg-light-theme-2">

                    <div class="d-md-flex flex-md-column p-4">
                        
                        <div class="footer-abt ml-x-5">
                        

                        <ul class="list-unstyled">

                            <li class="mb-4 d-flex">

                                    <span>
                                        
                                        <svg width="20" height="25" viewBox="0 0 29 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.2428 4.22264C21.6291 1.60433 18.0815 0.133301 14.3821 0.133301C10.6824 0.133301 7.13505 1.60433 4.52117 4.22264C2.00104 6.75657 0.483395 10.1174 0.248729 13.6835C0.127619 15.6369 0.414115 17.5937 1.08973 19.4301C1.75622 21.2543 2.83891 22.9782 4.31281 24.5441L13.7742 34.6214C13.9315 34.7899 14.1513 34.8863 14.3821 34.8879C14.6134 34.8902 14.835 34.7933 14.9903 34.6214L24.4511 24.5441C25.925 22.9782 27.0077 21.2543 27.6742 19.4301C28.3582 17.596 28.6449 15.6372 28.5155 13.6835C28.279 10.1179 26.7616 6.75761 24.2428 4.22264ZM26.1 18.8556C25.5088 20.4711 24.5428 22.0039 23.2268 23.4028L14.3821 32.8308L5.52885 23.4028C4.21305 22.0039 3.24704 20.4711 2.65556 18.8556C2.0547 17.2387 1.80232 15.5132 1.91457 13.7919C2.12059 10.6274 3.4666 7.64471 5.70387 5.39675C8.00444 3.09359 11.1265 1.79888 14.3821 1.79888C17.6377 1.79888 20.7595 3.09359 23.0603 5.39675C25.2973 7.64471 26.6439 10.6274 26.8496 13.7919C26.9554 15.5134 26.7001 17.2384 26.1 18.8556Z" fill="#F24026"/>
                                            <path d="M14.3819 6.9292C10.8007 6.9292 7.88574 9.91032 7.88574 13.5749C7.88574 17.2394 10.8007 20.2211 14.3819 20.2211C17.9631 20.2211 20.8781 17.2394 20.8781 13.5749C20.8781 9.91032 17.9631 6.9292 14.3819 6.9292ZM14.3819 18.5555C11.7167 18.5555 9.55133 16.3234 9.55133 13.5749C9.55133 10.8266 11.7167 8.59478 14.3819 8.59478C17.0471 8.59478 19.2125 10.8266 19.2125 13.5749C19.2125 16.3234 17.0471 18.5555 14.3819 18.5555Z" fill="#F24026"/>
                                        </svg>

                                        
                                    </span>
    
    
                                    <div class="ml-5">
                                        <h5 class="theme-color mb-2">Keep in touch</h5>
                                        <span class="theme-color">Near FAB Metrostation, <br>Al Asmawi Building, Sheikh Zayed Road,<br> office No. G17 - Dubai - United Arab Emirates</span>
                                    </div>

                            </li>

                            <li class="mb-4  d-flex">

                                <span>
        
                                    <svg width="22" height="28" viewBox="0 0 33 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.0273 9.63242H15.3761V8.62019C15.3699 7.17272 14.2023 5.99812 12.7546 5.98319H8.42518V1.55197C8.42518 1.07192 8.03609 0.683105 7.55631 0.683105C7.07626 0.683105 6.68745 1.07192 6.68745 1.55197V6.02554C5.35591 6.16103 4.34259 7.28214 4.34151 8.62019V9.63242H2.98391C1.54648 9.63242 0.344727 10.8122 0.344727 12.2496V29.202C0.344727 30.6394 1.54648 31.7885 2.98391 31.7885H4.34151V32.8311C4.33879 34.268 5.50199 35.4353 6.93887 35.4377H12.7546C14.1963 35.4372 15.3671 34.2729 15.3761 32.8311V31.7885H30.0273C31.4648 31.7885 32.6665 30.6394 32.6665 29.202V12.2496C32.6665 10.8122 31.4648 9.63242 30.0273 9.63242ZM2.98391 30.0508C2.50467 30.0508 2.08246 29.6812 2.08246 29.202V12.2496C2.09739 11.7617 2.49571 11.3731 2.98391 11.3702H4.34151V30.0508H2.98391ZM13.6384 32.8311C13.6384 33.3112 13.2493 33.7 12.7695 33.7H6.9481C6.46806 33.7 6.07924 33.3112 6.07924 32.8311V8.58978C6.07924 8.10973 6.46806 7.72092 6.9481 7.72092H12.7695C13.2493 7.72092 13.6384 8.10973 13.6384 8.58978V32.8311ZM30.9288 29.202C30.9288 29.6812 30.5066 30.0508 30.0273 30.0508H15.3761V11.3702H30.0273C30.5153 11.3731 30.9139 11.7617 30.9288 12.2496V29.202Z" fill="#F24026"/>
                                        <path d="M28.4087 14.759C28.4087 14.279 28.0196 13.8901 27.5398 13.8901H18.5036C18.0236 13.8901 17.6348 14.279 17.6348 14.759V18.4082C17.6348 18.8883 18.0236 19.2771 18.5036 19.2771H27.5398C28.0196 19.2771 28.4087 18.8883 28.4087 18.4082V14.759ZM26.7579 17.5394H19.3725V15.6279H26.7579V17.5394Z" fill="white"/>
                                        <path d="M27.6036 21.8835H18.5407C18.0607 21.8835 17.6719 22.2724 17.6719 22.7524C17.6719 23.2325 18.0607 23.6213 18.5407 23.6213H27.6036C28.0836 23.6213 28.4724 23.2325 28.4724 22.7524C28.4724 22.2724 28.0836 21.8835 27.6036 21.8835Z" fill="white"/>
                                        <path d="M27.6036 25.446H18.5407C18.0607 25.446 17.6719 25.8349 17.6719 26.3149C17.6719 26.795 18.0607 27.1838 18.5407 27.1838H27.6036C28.0836 27.1838 28.4724 26.795 28.4724 26.3149C28.4724 25.8349 28.0836 25.446 27.6036 25.446Z" fill="white"/>
                                    </svg>

        
                                </span>

                                <div class="ml-5">
                                    <h5 class="theme-color mb-2">Service Helpline</h5>
                                    <span class="theme-color">+971 56 1774555</span>
                                </div>

                            </li>

                            <li class="mb-4 d-flex">

                                <span>
        
                                    <svg width="25" height="18" viewBox="0 0 35 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.7812 0.081543H4.30152C2.01687 0.0823188 0.165097 1.93435 0.164062 4.219V19.668C0.165097 21.9526 2.01687 23.8049 4.30152 23.8055H30.7812C33.0659 23.8049 34.9177 21.9526 34.9187 19.668V4.219C34.9177 1.93435 33.0659 0.0823188 30.7812 0.081543ZM4.30152 1.73652H30.7812C31.9731 1.73963 32.9958 2.58548 33.2223 3.75534L17.5414 12.4939L1.86042 3.75534C2.08694 2.58548 3.10967 1.73963 4.30152 1.73652ZM30.7812 22.1425H4.30152C2.93228 22.1383 1.82292 21.0292 1.81904 19.66V5.62573L17.1359 14.1652C17.26 14.2334 17.3994 14.2707 17.5414 14.273C17.6839 14.2746 17.8238 14.2373 17.9468 14.1652L33.2637 5.62573V19.66C33.2627 21.0305 32.1518 22.1412 30.7812 22.1425Z" fill="#F24026"/>
                                    </svg>
        
        
                                </span>

                                <div class="ml-5">
                                    <h5 class="theme-color mb-2">For Support Mail Us</h5>
                                    <span class="theme-color">contact@expatcarbuyers.com</span>
                                </div>

                            </li>

                        </ul>
                        
                        </div>

                    </div>

                </div>

                <div class="col-md-5">
                    <img class="w-100" src="{{ asset('front/images/map.png') }}" alt="map-marker">
                </div>

            </div>

        </div>

    </section>

    <section class="container-fluid footer pt-5 mt-5">

            <div class="row d-flex">

                <div class="col-lg-6 col-md-12 mb-lg-0 mb-3">

                    <div class="footer-abt p-4">

                        <h6 class="mb-3">About Us</h6>

                        <p>Many people would just call us a car buying company, but that’s just half of the story. Expat
                            Car Buyers was

                            formed to make it easier for car sellers to sell used cars...

                            without traditional setbacks.

                        </p>

                    </div>

                    <div class="footer-social-global  p-4">

                        <ul>

                            <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank" rel="noopener">

                                    <img src="{{ asset('images/facebook.webp') }}" alt="facebook"
                                         onerror="this.onerror=null; this.src='{{ asset('images/facebook.svg') }}'">

                                </a></li>

                            <li><a href="https://twitter.com/expatcarbuyers" target="_blank" rel="noopener">

                                    <img src="{{ asset('images/twitter.webp') }}" alt="twitter"
                                         onerror="this.onerror=null; this.src='{{ asset('images/twitter.svg') }}'">

                                </a></li>

                            <li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank" rel="noopener">

                                    <img src="{{ asset('images/instagram.webp') }}" alt="instagram"
                                         onerror="this.onerror=null; this.src='{{ asset('images/instagram.svg') }}'">

                                </a></li>

                        </ul>

                    </div>

                </div>


                <div class="col-lg-6 col-md-12 mb-lg-0 mb-3">

                    <div class="footer-abt p-4">

                        <h6 class="mb-3">Keep in touch</h6>

                        <ul class="list-unstyled">

                            <li class="mb-2 d-flex">

                                <span>
        
                                    <img class="mr-2" src="{{ asset('front/images/map-marker-outline.svg') }}" alt="map-marker">
        
                                </span>
    
                                    <span>Near FAB Metrostation, <br>Al Asmawi Building, Sheikh Zayed Road,<br> office No. G17 - Dubai - United Arab Emirates
    
                                </span>

                            </li>

                            <li class="mb-2  d-flex">

                        <span>

                            <img class="mr-2" src="{{ asset('front/images/phone.svg') }}" alt="phone">

                        </span>

                                <span>+971 56 1774555</span>

                            </li>

                            <li class="mb-2  d-flex">

                        <span>

                            <img class="mr-2" src="{{ asset('front/images/email-outline.svg') }}" alt="email outline">

                        </span>

                                <span>contact@expatcarbuyers.com</span>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="row py-3 m-0 footer-bottom">

                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0 copyright">
    
                    © Copyright {{ date('Y') }} expatcarbuyers
    
                </div>
    
                <div class="col-md-6 text-center text-md-right">
    
                    <a href="{{ url('privacy-policy') }}">Privacy Policy </a>|<a href="{{ url('terms-conditions') }}">
                        Terms & Conditions</a> | <a href="{{ url('contact') }}">Contact Us</a>
    
                </div>
    
            </div>

    </section>

</div>

<script>


    var x = document.images.length;

    for (i = 0; i < x; i++) {

        document.getElementsByTagName("img")[i].setAttribute("loading", "lazy");

    }

</script>

<script> var baseUrl = "{{ url('/') }}"; </script>

<!--<script defer src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>

<script async>

// WebFont.load({google:{families:["Montserrat:300,400,500,600,700","Open+Sans:300,400,600,700"]}});

 </script>-->


<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
    ?>
    <script defer src="{{ asset('front/js/jquery.validate.js?v=1') }}"></script>
    <script defer src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script defer src="{{ asset('front/js/wow.js') }}"></script>
    <script defer src="{{ asset('front/js/animate.js?v=1.5') }}"></script>
    <script defer src="{{ asset('front/js/track_utms.js') }}?v={{uniqid()}}"></script>
    <script defer src="{{ asset('js/theme.js?v=1.7') }}"></script>
    <script defer src="{{ asset('js/menu.js') }}"></script>

    <script>
        //$(document).ready(function(){
        $('.clntrvwsldr_main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.cmnclntrvws_thumb'
        });
        $('.cmnclntrvws_thumb').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.clntrvwsldr_main',
            dots: false,
            arrows: false,
            centerMode: true,
            centerPadding: 0,
            focusOnSelect: true
        });
        //});
    </script>

<?php } else { ?>
    <script defer src="{{ asset('front/js/jquery.validate.js?v=1') }}"></script>
    <script defer src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script defer src="{{ asset('front/js/wow.js') }}"></script>
    <script defer src="{{ asset('front/js/animate.js?v=1.5') }}"></script>
    <script defer src="{{ asset('front/js/track_utms.js') }}?v={{uniqid()}}"></script>
    <script defer src="{{ asset('js/theme.js?v=1.7') }}"></script>
    <script defer src="{{ asset('js/menu.js') }}"></script>
    <script>
        //$(document).ready(function(){
        $('.clntrvwsldr_main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.cmnclntrvws_thumb'
        });
        $('.cmnclntrvws_thumb').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.clntrvwsldr_main',
            dots: false,
            arrows: false,
            centerMode: true,
            centerPadding: 0,
            focusOnSelect: true
        });
        //});
    </script>

<?php } ?>

</body>

</html>

