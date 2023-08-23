<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Brand;
use App\Models\Branches;
use URL;
class AjaxController extends Controller
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
    public function homemodel($brand_id)
    {
        $model = CarModel::where('brand',$brand_id)->get();
        $top_model = CarModel::where('brand',$brand_id)->where('top','1')->get();
        //$branches = Branches::where('brand',$brand_id)->get();
    	$html = '';
    	$html1 = '';
    	$html_top = '';
    	$url = URL::to('/');
    	$i = 1;
    	$html.="<option  value='' selected disabled='disabled'>Select Model</option>";
    	foreach($top_model as $top_mode)
        {
    		if($i == 1)
            {
    			$html.= "<option  value='".$top_mode->name."'>".$top_mode->name."</option>";
    		}
            else
            {
    			$html.= "<option  value='".$top_mode->name."'>".$top_mode->name."</option>"; 
    		}
    		$i++;
    	}
    		$html.= "<option disabled='disabled'>-----------</option>";

    	foreach($model as $prod)
        {
    		if($i == 1)
            {
    			$html.= "<option  value='".$prod->name."'>".$prod->name."</option>";
    		}
            else
            {
    			$html.= "<option  value='".$prod->name."'>".$prod->name."</option>"; 
    		}
    		$i++;
    	}
    	
    	$html1="";
    	
        return response()->json(['success' => 1,'pro' => $html,'pro1' => $html1,'pro' => $html,'pro_top' => $html_top]);   
    }
}