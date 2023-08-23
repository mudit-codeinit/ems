<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Branches;
use Illuminate\Http\Request;
use App\Models\Bookings;
use Session;
use Mail;
use Carbon\Carbon;

class BookingController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/*  public function __construct()
    {
        $this->middleware('auth');
    } */

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create_booking(Request $request)
	{
		$ip = \Request::ip();
		$expt_utm_data = \request()->cookie('expt_track_utms') ? json_decode(\request()->cookie('expt_track_utms'), true) : NULL;
		$booking = Booking::insert([
			'year' => $request->y,
			'brand' => $request->brand_name,
			'model' => $request->model_name,
			'phone' => $request->phone,
			'date' => $request->date,
			'time' => $request->time,
			'branch' => $request->branch,
			'email' => $request->email,
			'utm_source' => $expt_utm_data['utm_source'] ?? NULL,
			'utm_medium' => $expt_utm_data['utm_medium'] ?? NULL,
			'utm_campaign' => $expt_utm_data['utm_campaign'] ?? NULL,
			'utm_term' => $expt_utm_data['utm_term'] ?? NULL,
			'utm_content' => $expt_utm_data['utm_content'] ?? NULL,
			'utm_data' => \request()->cookie('expt_track_utms'),
			'user_ip' => $ip,
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
		]);


		return response()->json(['success' => 1]);
	}
	public function index(Request $request)
	{
		$rfrom = $request->input('from_date') ? date('m/d/Y', strtotime($request->input('from_date'))) : date('m/d/Y', strtotime("-1 months"));
		$rto = $request->input('to_date') ? date('m/d/Y', strtotime($request->input('to_date'))) : date('m/d/Y');

		$request->session()->put('rfrom_date', $rfrom);
		$request->session()->put('rto_date', $rto);

		$rfrom_date = date('Y-m-d', strtotime($rfrom));
		$rto_date = date('Y-m-d', strtotime($rto));

		$brand = Booking::whereBetween('created_at', array($rfrom_date, $rto_date))->orderBy('id', 'desc')->get();
		return view('admin.booking.index')->with('booking', $brand);
	}
	public function approve($id)
	{
		Booking::where('id', $id)->update([
			'approve' => 1,
			'updated_at' => date("Y-m-d H:i:s")
		]);
		Session::flash('success', 'Booking Approved');
		return redirect('booking-approve');
	}
	public function disapprove($id)
	{
		Booking::where('id', $id)->update([
			'approve' => 0,
			'updated_at' => date("Y-m-d H:i:s")
		]);
		Session::flash('success', 'Booking DisApproved');
		return redirect('booking-approve');
	}
	public function step_1(Request $request)
	{
      	//echo  $request->year.",  ".$request->brand_name.",  ".$request->model_name.",  ".$request->number ;
        //die;
        // dd($request->all());
        $cdate = Carbon::now()->format('Y-m-d');
		$brand = Branches::get();
		$ip = $this->getRealIpAddr();
		$values = $request->all();
		$expt_utm_data = \request()->cookie('expt_track_utms') ? json_decode(\request()->cookie('expt_track_utms'), true) : NULL;
	
	    if(!empty($request->year) && !empty($request->brand_name) && !empty($request->model_name) && !empty($request->number) && !empty($ip)) {
	        
	       $bookingData = Booking::where('year',$request->year)->where('model', $request->model_name)->where('phone',$request->number)->where('user_ip', $ip)->where(\DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"),$cdate)->first();
	        
	       if($bookingData != NULL) {
	           $booking = Booking::find($bookingData->id);
	           $booking->year = $request->year;
	           $booking->brand = $request->brand_name;
	           $booking->model = $request->model_name;
	           $booking->phone = $request->number;
	           $booking->user_ip = $ip;
	           $booking->utm_source = $expt_utm_data['utm_source'] ?? NULL;
	           $booking->utm_medium = $expt_utm_data['utm_medium'] ?? NULL;
	           $booking->utm_campaign = $expt_utm_data['utm_campaign'] ?? NULL;
	           $booking->utm_term = $expt_utm_data['utm_term'] ?? NULL;
	           $booking->utm_content = $expt_utm_data['utm_content'] ?? NULL;
	           $booking->utm_data = \request()->cookie('expt_track_utms');
	           $booking->updated_at = date("Y-m-d H:i:s");
	           $booking->save();
	           $bookingId = $booking->id;
	       } else {
	            $booking = Booking::insertGetId([
    			'year' => $request->year,
    			'brand' => $request->brand_name,
    			'model' => $request->model_name,
    			'phone' => $request->number,
    			'user_ip' => $ip,
    			'utm_source' => $expt_utm_data['utm_source'] ?? NULL,
    			'utm_medium' => $expt_utm_data['utm_medium'] ?? NULL,
    			'utm_campaign' => $expt_utm_data['utm_campaign'] ?? NULL,
    			'utm_term' => $expt_utm_data['utm_term'] ?? NULL,
    			'utm_content' => $expt_utm_data['utm_content'] ?? NULL,
    			'utm_data' => \request()->cookie('expt_track_utms'),
    			'created_at' => date("Y-m-d H:i:s"),
    			'updated_at' => date("Y-m-d H:i:s"),
		    ]);
		    $bookingId = $booking;
	       }
	       // ------------- START CRM insertion ----------------//
	       //start get token f or zoho 
            	       
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.cec2d16472cb4fb2cda52742247a9b08.c7e897df70dddefa0c60e172e93b316d&client_id=1000.3BI41E4E28BG8AHYP85VE3EFZ2E1WG&client_secret=95dd5bfa9dc667880c6e05ec46044898ab80cf34c3&grant_type=refresh_token',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
            //   CURLOPT_HTTPHEADER => array(
            //     'Cookie: _zcsr_tmp=749a739a-432a-435d-a48d-0ab48c1fa1e7; b266a5bf57=57c7a14afabcac9a0b9dfc64b3542b70; iamcsr=749a739a-432a-435d-a48d-0ab48c1fa1e7'
            //   ),
            ));
            
            $ZohoTokenresponse = curl_exec($curl);
            $ZohoTokenresponse = json_decode($ZohoTokenresponse);
            curl_close($curl);
            // end zoho get token
	       // curl to insert data in zoho crm
    	    $curl_pointer = curl_init();
    	    if($ZohoTokenresponse->access_token!='' && $request !=''){
	            $curl_options = array();
                $url = "https://www.zohoapis.com/crm/v2/Leads";
                
                $curl_options[CURLOPT_URL] =$url;
                $curl_options[CURLOPT_RETURNTRANSFER] = true;
                $curl_options[CURLOPT_HEADER] = 1;
                $curl_options[CURLOPT_CUSTOMREQUEST] = "POST";
                $requestBody = array();
                $recordArray = array();
                $recordObject = array();
                $recordObject["Select_Year"]=$request->year;
                $recordObject["Last_Name"]=$request->model_name;
                $recordObject["Select_Make"]=$request->brand_name;
                $recordObject["Phone"]=$request->number;
                $recordObject["Lead_Status"]="New Lead";

                $recordArray[] = $recordObject;
                $requestBody["data"] =$recordArray;
                $curl_options[CURLOPT_POSTFIELDS]= json_encode($requestBody);
                $headersArray = array();
                
                $headersArray[] = "Authorization". ":" . "Zoho-oauthtoken " . $ZohoTokenresponse->access_token;
                
                $curl_options[CURLOPT_HTTPHEADER]=$headersArray;
                
                curl_setopt_array($curl_pointer, $curl_options);
                
                $result = curl_exec($curl_pointer);
                $responseInfo = curl_getinfo($curl_pointer);
                curl_close($curl_pointer);
                list ($headers, $content) = explode("\r\n\r\n", $result, 2);
                if(strpos($headers," 100 Continue")!==false){
                    list( $headers, $content) = explode( "\r\n\r\n", $content , 2);
                }
                $headerArray = (explode("\r\n", $headers, 50));
                $headerMap = array();
                foreach ($headerArray as $key) {
                    if (strpos($key, ":") != false) {
                        $firstHalf = substr($key, 0, strpos($key, ":"));
                        $secondHalf = substr($key, strpos($key, ":") + 1);
                        $headerMap[$firstHalf] = trim($secondHalf);
                    }
                }
                $jsonResponse = json_decode($content, true);
                if ($jsonResponse == null && $responseInfo['http_code'] != 204) {
                    list ($headers, $content) = explode("\r\n\r\n", $content, 2);
                    $jsonResponse = json_decode($content, true);
                }
                // var_dump($headerMap);
                // var_dump($jsonResponse);
                // var_dump($responseInfo['http_code']);
    	        $lead_id = $jsonResponse['data'][0]['details']['id'];
    	        $request->session()->put('lead_id',$lead_id);
    	       // echo $lead_id;
    	       //echo  '<script> 
    	       //localStorage.clear();</script>';
    	       //echo '<script>localStorage.setItem("lead_id", "'.$lead_id.'");</script>';
    	    }
    	    // ------------- END CRM insertion ----------------//

            $message = 'ExpatCarBuyers.com Booking Confirmed at Al-Asmawi Building (Ground Floor) Sheikh Zayed Road Dubai Location https://goo.gl/maps/ytU29m5AggL8sgJ98
            Tel: 043337876';
            $message = urlencode($message);
            // create a new cURL resource
            $ch = curl_init();
            
            $str = $request->number;
            function uaemobile($str)
            {
                $str = preg_replace("/[^0-9]/", "", $str);
                $true = null;
                $str = ltrim($str, '0');
                if (strlen($str) == 9 && ((substr($str, 0, 2) == "50") || (substr($str, 0, 2) == "52") || (substr($str, 0, 2) == "54") || (substr($str, 0, 2) == "55") || (substr($str, 0, 2) == "56") || (substr($str, 0, 2) == "58"))) {
                    $true = "971" . $str;
                }
                if (strlen($str) == 12 && (substr($str, 0, 3) == "971") && ((substr($str, 3, 2) == "50") || (substr($str, 3, 2) == "52") || (substr($str, 3, 2) == "54") || (substr($str, 3, 2) == "55") || (substr($str, 3, 2) == "56"))) {
                    $true = $str;
                }
                if (strlen($str) == 12 && (substr($str, 0, 3) == "971") && ((substr($str, 3, 2) == "50") || (substr($str, 3, 2) == "52") || (substr($str, 3, 2) == "54") || (substr($str, 3, 2) == "55") || (substr($str, 3, 2) == "56"))) {
                    $true = "971" . substr($str, 3, 9);
                }
                if (strlen($str) == 13 && substr($str, 3, 1) == "0" && substr($str, 0, 3) == "971" && (substr($str, 4, 2) == "50" || substr($str, 4, 2) == "52" || (substr($str, 4, 2) == "54") || substr($str, 4, 2) == "55" || substr($str, 4, 2) == "56")) {
                    $true = substrreplace($str, '', 3, 1);
                }
                
                return $true;
            }
    
            $sms_number=uaemobile($str);
            $senderid = urlencode('Expat Car');
            
            $api_link = "http://elitbuzz-me.com/sms/smsapi?api_key=C20019985c3b468a8627b7.94445551&type=text&contacts=$sms_number&senderid=$senderid&msg=" . $message;
            
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, $api_link);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // grab URL and pass it to the browser
            $response = curl_exec($ch);
            // close cURL resource, and free up system resources
            curl_close($ch);
    		return view('step2')->with('value', $values)->with('branches', $brand)->with('booking_id', $bookingId);
	    }
	    
	    return redirect('/');
    }
    
	public function step_2(Request $request)
	{
	   // dd($request->all());
		$id = $request->id;
		$ip = $this->getRealIpAddr();
		if(!empty($request->year) && !empty($request->brand_name) && !empty($request->model_name) && !empty($request->number) && !empty($ip)) {
    		$booking = Booking::where('id', $request->id)->update([
    			'year' => $request->year,
    			'brand' => $request->brand_name,
    			'model' => $request->model_name,
    			'phone' => $request->number,
    			'date' => $request->app_date,
    			'time' => $request->app_time,
    			'branch' => $request->branch,
    			'email' => $request->app_email,
    			'user_ip' => $ip,
    			'created_at' => date("Y-m-d H:i:s"),
    			'updated_at' => date("Y-m-d H:i:s")
    		]);
		}
		
		//start get token f or zoho 
            	       
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.cec2d16472cb4fb2cda52742247a9b08.c7e897df70dddefa0c60e172e93b316d&client_id=1000.3BI41E4E28BG8AHYP85VE3EFZ2E1WG&client_secret=95dd5bfa9dc667880c6e05ec46044898ab80cf34c3&grant_type=refresh_token',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
            //   CURLOPT_HTTPHEADER => array(
            //     'Cookie: _zcsr_tmp=749a739a-432a-435d-a48d-0ab48c1fa1e7; b266a5bf57=57c7a14afabcac9a0b9dfc64b3542b70; iamcsr=749a739a-432a-435d-a48d-0ab48c1fa1e7'
            //   ),
            ));
            
            $ZohoTokenresponse = curl_exec($curl);
            $ZohoTokenresponse = json_decode($ZohoTokenresponse);
            curl_close($curl);
             $lead_id = $request->session()->get('lead_id'); 
            //  echo 'lead id';
            // echo $lead_id;
            if($lead_id){
                // echo 'HERE';
		$curl_pointer = curl_init();
        $curl_options = array();
        $url = "https://www.zohoapis.com/crm/v2/Leads";
        $curl_options[CURLOPT_URL] =$url;
        $curl_options[CURLOPT_RETURNTRANSFER] = true;
        $curl_options[CURLOPT_HEADER] = 1;
        $curl_options[CURLOPT_CUSTOMREQUEST] = "PUT";
        $requestBody = array();
        $recordArray = array();
        $recordObject = array();
        $recordObject["Email"]=$request->app_email;
        $date_format = strtotime($request->app_date);
        $newformat_date = date('Y-m-d',$date_format);
        // echo $newformat_date;
        $recordObject["Select_Date"]=$newformat_date;
        $recordObject["Select_Time"]=$request->app_time;
        $recordObject["Select_Branch"]=$request->branch;
        $recordObject["Lead_Status"]="New Lead";
        $recordObject["id"]=$lead_id;

        $recordArray[] = $recordObject;
        $requestBody["data"] =$recordArray;
        $curl_options[CURLOPT_POSTFIELDS]= json_encode($requestBody);
        $headersArray = array();
        
        $headersArray[] = "Authorization". ":" . "Zoho-oauthtoken " . $ZohoTokenresponse->access_token;
        
        $curl_options[CURLOPT_HTTPHEADER]=$headersArray;
        
        curl_setopt_array($curl_pointer, $curl_options);
        
        $result = curl_exec($curl_pointer);
            } else{
                echo 'no id found';
            }
        $responseInfo = curl_getinfo($curl_pointer);
        curl_close($curl_pointer);
        list ($headers, $content) = explode("\r\n\r\n", $result, 2);
        if(strpos($headers," 100 Continue")!==false){
            list( $headers, $content) = explode( "\r\n\r\n", $content , 2);
        }
        $headerArray = (explode("\r\n", $headers, 50));
        $headerMap = array();
        foreach ($headerArray as $key) {
            if (strpos($key, ":") != false) {
                $firstHalf = substr($key, 0, strpos($key, ":"));
                $secondHalf = substr($key, strpos($key, ":") + 1);
                $headerMap[$firstHalf] = trim($secondHalf);
            }
        }
        $jsonResponse = json_decode($content, true);
        if ($jsonResponse == null && $responseInfo['http_code'] != 204) {
            list ($headers, $content) = explode("\r\n\r\n", $content, 2);
            $jsonResponse = json_decode($content, true);
        }
        
		$mil = Booking::where('id', $request->id)->first();
		$location = Branches::where('name', $request->branch)->first();
		
		Mail::send('emails.template', ['arr' => $mil, 'location' => $location], function ($message) use ($mil, $id) {
			$dev = Booking::where('id', $id)->first();
			$message->from('no-reply@expatcarbuyers.com');
			$message->to($dev->email)->subject("Expatcarbuyers");
		});
// 		Mail::send('emails.admintemplate', ['arr' => $mil, 'location' => $location], function ($message) use ($mil, $id) {
// 			$dev = Booking::where('id', $id)->first();
// 			$message->from('no-reply@expatcarbuyers.com');
// 			$message->to('no-reply@expatcarbuyers.com')->subject("User applied for booking");
// 		});

		$message = 'ExpatCarBuyers.com Booking Confirmed For 20.06.2019, 15:00 At Expat Car Buyers, Al Asmawi Building, (Ground Floor) Sheikh Zayed Road, Dubai Location https://bit.ly/2D9ml7U 
		Tel: 043337876';
		$message = urlencode($message);
		$datetime = date("Y-m-d H:i", strtotime($request->app_date . ' ' . $request->app_time));
		// create a new cURL resource
		$ch = curl_init();

		$str = $request->number;
		function uae_mobile($str)
		{
			$str = preg_replace("/[^0-9]/", "", $str);
			$true = null;
			$str = ltrim($str, '0');
			if (strlen($str) == 9 && ((substr($str, 0, 2) == "50") || (substr($str, 0, 2) == "52") || (substr($str, 0, 2) == "54") || (substr($str, 0, 2) == "55") || (substr($str, 0, 2) == "56") || (substr($str, 0, 2) == "58"))) {
				$true = "971" . $str;
			}
			if (strlen($str) == 12 && (substr($str, 0, 3) == "971") && ((substr($str, 3, 2) == "50") || (substr($str, 3, 2) == "52") || (substr($str, 3, 2) == "54") || (substr($str, 3, 2) == "55") || (substr($str, 3, 2) == "56"))) {
				$true = $str;
			}
			if (strlen($str) == 12 && (substr($str, 0, 3) == "971") && ((substr($str, 3, 2) == "50") || (substr($str, 3, 2) == "52") || (substr($str, 3, 2) == "54") || (substr($str, 3, 2) == "55") || (substr($str, 3, 2) == "56"))) {
				$true = "971" . substr($str, 3, 9);
			}
			if (strlen($str) == 13 && substr($str, 3, 1) == "0" && substr($str, 0, 3) == "971" && (substr($str, 4, 2) == "50" || substr($str, 4, 2) == "52" || (substr($str, 4, 2) == "54") || substr($str, 4, 2) == "55" || substr($str, 4, 2) == "56")) {

				$true = substr_replace($str, '', 3, 1);
			}

			return $true;
		}
        
        $sms_number=uae_mobile($str);

		$api_link = "http://elitbuzz-me.com/sms/smsapi?api_key=C20019985c3b468a8627b7.94445551&type=text&contacts={$sms_number}&senderid=Expat Car&msg={$message}&scheduledDateTime={$datetime}";

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, $api_link);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// grab URL and pass it to the browser
		$response = curl_exec($ch);
		// close cURL resource, and free up system resources
		curl_close($ch);

		$values = $request->all();
		return view('step3')->with('value', $values);
	}
	public function form_step_1(Request $request)
	{

		$brand = Branches::get();
		$values = $request->all();
		$ip = $_SERVER['REMOTE_ADDR'];

		$expt_utm_data = \request()->cookie('expt_track_utms') ? json_decode(\request()->cookie('expt_track_utms'), true) : NULL;
		if(!empty($request->year) && !empty($request->brand_name) && !empty($request->model_name) && !empty($request->number) && !empty($ip)) {
    		$booking = Booking::insertGetId([
    			'year' => $request->year,
    			'brand' => $request->brand_name,
    			'model' => $request->model_name,
    			'phone' => $request->number,
    			'user_ip' => $ip,
    			'utm_source' => $expt_utm_data['utm_source'] ?? NULL,
    			'utm_medium' => $expt_utm_data['utm_medium'] ?? NULL,
    			'utm_campaign' => $expt_utm_data['utm_campaign'] ?? NULL,
    			'utm_term' => $expt_utm_data['utm_term'] ?? NULL,
    			'utm_content' => $expt_utm_data['utm_content'] ?? NULL,
    			'utm_data' => \request()->cookie('expt_track_utms'),
    			'created_at' => date("Y-m-d H:i:s"),
    			'updated_at' => date("Y-m-d H:i:s")
    		]);
		}
		return view('formstep2')->with('value', $values)->with('branches', $brand)->with('booking_id', $booking);;
	}
	public function form_step_2(Request $request)
	{
		$id = $request->id;
		$ip = $_SERVER['REMOTE_ADDR'];
		if(!empty($request->year) && !empty($request->brand_name) && !empty($request->model_name) && !empty($request->number) && !empty($ip)) {
    		$booking = Booking::where('id', $request->id)->update([
    			'year' => $request->year,
    			'brand' => $request->brand_name,
    			'model' => $request->model_name,
    			'phone' => $request->number,
    			'date' => $request->app_date,
    			'time' => $request->app_time,
    			'branch' => $request->branch,
    			'email' => $request->app_email,
    			'user_ip' => $ip,
    			'created_at' => date("Y-m-d H:i:s"),
    			'updated_at' => date("Y-m-d H:i:s")
    		]);
		}
		$values = $request->all();
		$mil = Booking::where('id', $request->id)->first();

		Mail::send('emails.template', ['arr' => $mil], function ($message) use ($mil, $id) {
			$dev = Booking::where('id', $id)->first();
			$message->from('no-reply@expatcarbuyers.com');
			$message->to($dev->email)->subject("Expatcarbuyers");
		});
		Mail::send('emails.admintemplate', ['arr' => $mil], function ($message) use ($mil, $id) {
			$dev = Booking::where('id', $id)->first();
			$message->from('no-reply@expatcarbuyers.com');
			$message->to('no-reply@expatcarbuyers.com')->subject("User applied for booking");
		});
		return view('formstep3')->with('value', $values);
	}
	public function contactus(Request $request)
	{
		$mil = $request->all();
		Mail::send('emails.admincontact', ['arr' => $mil], function ($message) use ($mil) {
			$message->from('no-reply@expatcarbuyers.com');
			$message->to('contact@expatcarbuyers.com')->subject("User contact us");
		});

		$email = $request->email;
		Mail::send('emails.thankyou', ['arr' => $mil], function ($message) use ($mil, $email) {

			$message->from('no-reply@expatcarbuyers.com');
			$message->to($email)->subject("Expatcarbuyers");
		});
		$data['0'] = 1;
		return response()->json($data);
	}
	public   function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
}
