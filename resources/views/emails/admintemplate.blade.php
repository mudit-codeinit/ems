@extends('emails.app')

@section('content')

   <h3>Hello Admin,</h3>
            <p>New User want "Expat Car Buyers" services!.<br>submitted enquiry details are as below:-<br></p>
        <table style="width:100%;border:1px solid #ddd;border-spacing:0px">
            <tbody><tr>
                <td colspan="2" style="background:#dddddd;padding:15px 15px 15px 15px;font-weight:600;font-size:18px">CAR DETAILS</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Enquiry ID:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['id'] }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Year:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['year'] }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Make:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['brand'] }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Model:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['model'] }}</td>
            </tr>
        </tbody></table><br>

        <table style="width:100%;border:1px solid #ddd;border-spacing:0px">
            <tbody><tr>
                <td colspan="2" style="background:#dddddd;padding:15px 15px 15px 15px;font-weight:600;font-size:18px">APPOINTMENT DETAILS</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Email:</td><td style="border:1px solid #ddd;padding:10px"><a href="mailto:{{ $arr['email'] }}" target="_blank">{{ $arr['email'] }}</a></td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Phone no:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['phone'] }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Appointment Date:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['date'] }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Appointment Time:</td><td style="border:1px solid #ddd;padding:10px">{{ $arr['time'] }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #ddd;padding:10px">Preferred Branch:</td><td style="border:1px solid #ddd;padding:10px">{{ isset($arr['branch'])?$arr['branch']: 'Branch A' }}</td>
            </tr>
        </tbody></table>

        <p></p>
    

    </td>


@stop