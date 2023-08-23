<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Blogs;
use App\Models\Branches;
use App\Models\Booking;
use App\Models\Blogscat;
class SinglePageController extends Controller
{
    public function index()
    {


        $meta_description = 'Looking to Sell Your Car in Dubai? Evaluate and Sell Any Car in Dubai from Expat Car Buyers. Sell Car online in just 30 Minutes';
        $meta_title = 'Sell Any Car in Dubai | Sell My Car Online in Dubai - Expat Car Buyers';
        $meta_keywords = 'sell any car, Sell Your Car Online, Buy and Sell Cars in Dubai, Sell Your Car UAE, Sell Used Car, Sell My Car, Sell Car Dubai, Sell Your Car Dubai, Sell My Car Dubai, Sell Any Car Dubai, Sell Used Car Dubai, Sell My Car UAE';

 

        return view("first-page")->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);;
    }
    public function about($slug='about')
    {

        /*if($_SERVER['REMOTE_ADDR'] == '223.178.213.184'){
        $request->path();
          echo "here";
         exit;
        }*/
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;


        return view("about")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sellmycarsharjah($slug='sell-my-car-sharjah')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("sellmycarsharjah")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sellmycardubai($slug='sell-my-car-dubai')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("sellmycardubai")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sellmycarabudhabi($slug='sell-my-car-abudhabi')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("sellmycarabudhabi")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function carservice($slug='car-service')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("carservice")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function faqs($slug='faqs')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("faqs")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function contact($slug='contact')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("contact")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function blog()
    {
        $blogs = Blogs::orderBy('created_at', 'desc')->paginate(6);
        $recentblogs = Blogs::orderBy('created_at', 'desc')->take(10)->get();
        $blogscat = Blogscat::get();
        
        $meta_description = 'Expat Car Buyer provides expert advice and tips for expatriates looking to buy or sell cars';
        $meta_title = 'Expat Car Buyer - Your Guide to Buying and Selling Cars';
        $meta_keywords = '';

        return view("blog")->with('blog',$blogs)->with('cat',$blogscat)->with('recentblogs',$recentblogs)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    
    
    public function showPage($page = 1)
    {
        $blogs = Blogs::paginate(6, array('*'), 'page', $page);
        $recentblogs = Blogs::orderBy('created_at', 'desc')->take(10)->get();
        $blogscat = Blogscat::get();
        
        $meta_description = 'Expat Car Buyer provides expert advice and tips for expatriates looking to buy or sell cars';
        $meta_title = 'Expat Car Buyer - Your Guide to Buying and Selling Cars';
        $meta_keywords = '';
        
        return view("blog")->with('blog',$blogs)->with('cat',$blogscat)->with('recentblogs',$recentblogs)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    
    public function blogsingle($any)
    {
        $blogs = Blogs::where('slug',$any)->firstOrFail();
        $recentblogs = Blogs::orderBy('created_at', 'desc')->take(10)->get();
        $blogscat = Blogscat::get();
        $meta_description = $blogs->seo_dis;
        $meta_title = $blogs->seo_title;
        return view("blogsingle")->with('blog',$blogs)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('cat',$blogscat)->with('recentblogs',$recentblogs);
    }
    public function blogcategory($any)
    {
        $blogs = Blogs::paginate(6);
        $blogs1 = Blogs::paginate(6);
        $blogscat = Blogscat::get();
        $blogscat1 = Blogscat::where('slug',$any)->firstOrFail();
        $blkk = array();
        foreach($blogs1 as $v){
            $arr = json_decode($v->cat);
            if (in_array($blogscat1->id, $arr)) {
                $blkk[] = $v;
            }
        }
        $recentblogs = Blogs::orderBy('created_at', 'desc')->take(10)->get();

        $meta_description = $blogscat1->seo_dis;
        $meta_title = $blogscat1->seo_title;

        return view("cat-blog")->with('blog',$blogs)->with('cat',$blogscat)->with('recentblogs',$recentblogs)->with('get_blog',$blkk)->with('meta_description',$meta_description )->with('meta_title',$meta_title);
    }
    public function sellanycar($slug='sell-any-car')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("sellanycar")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function cashanycar($slug='we-cash-any-car')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("cashanycar")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function buyanycar($slug='we-buy-any-car')
    {
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;
        return view("buyanycar")->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function inner_pages($slug)
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->firstOrFail();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }


    /*-------------------- sell my car url -------------------*/

    public function sell_acura($slug='acura')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }


    public function sell_bugatti($slug='bugatti')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }



    public function sell_ferrari($slug='ferrari')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_infiniti($slug='infiniti')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_land_rover($slug='land-rover')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_mazda($slug='mazda')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_opel($slug='opel')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_subaru($slug='subaru')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_alfa_romeo($slug='alfa-romeo')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_fiat($slug='fiat')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_jaguar($slug='jaguar')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_lexus($slug='lexus')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        /*$meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell Your Lexus Car in Dubai, UAE | Sell Lexus Online ';
        $meta_description = 'Sell Any Lexus Car in Dubai or Anywhere in UAE. We Offer Free Car Valuation, Inspection. Guaranteed Purchase | Expat Car Buyers';
        $meta_keywords = 'Sell Lexus Car, Sell Your Lexus, Sell my Lexus';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }


    public function sell_mcLaren($slug='mcLaren')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_peugeot($slug='peugeot')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_suzuki($slug='suzuki')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_aston_martin($slug='aston-martin')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_cadillac($slug='cadillac')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_ford($slug='ford')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
       /* $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell your Ford in Dubai, UAE, Sell used ford online | Expat Car Buyers';
        $meta_description = 'Sell Your Ford Car in Dubai,UAE In just 30 Minutes. Get The Best Cash offer For your Ford Now. Book Your Appointment';
        $meta_keywords = 'Sell Ford Car, Sell Your Ford, Sell my Ford';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }


    public function sell_jeep($slug='jeep')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        /*$meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell Your Jeep In Dubai and Abu Dhabi | Expat Car Buyers';
        $meta_description = 'Sell Your Jeep Car in Dubai, Abu Dhabi UAE. We Buy any Jeep Car For Cash | Expat Car Buyers';
        $meta_keywords = 'Sell Jeep Car, Sell Your Jeep, Sell my Jeep';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_lincoln($slug='lincoln')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_mercedes_benz($slug='mercedes-benz')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }


    public function sell_tesla($slug='tesla')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_pontiac($slug='pontiac')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }



    public function sell_audi($slug='audi')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
      /*  $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell your Audi in Dubai, UAE | Evaluate and sell your Audi online | Expat Car Buyers';
        $meta_description = 'Sell Your Audi in Dubai. We Buy Any Audi Car and offer Free Car Evaluation And Instant Cash Payment | ExpatCarBuyers';
        $meta_keywords = 'Sell Audi Car, Sell Your Audi, Sell my Audi';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_chevrolet($slug='chevrolet')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        /*$meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell your Chevrolet Car Online in Dubai, UAE | Expat Car Buyers';
        $meta_description = 'Sell your Chevrolet car in Dubai, Abu Dhabi or anywhere in the UAE and Get Free online valuation, inspection & Cash payment in 20 Minutes. Book your appointment now';
        $meta_keywords = 'Sell Chevrolet Car, Sell Your Chevrolet, Sell my Chevrolet';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_gmc($slug='gmc')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }


    public function sell_kia($slug='kia')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_lotus($slug='lotus')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_mini($slug='mini')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_porsche($slug='porsche')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
       /* $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_description ='Sell Your Porsche online in Dubai, Abu Dhabi. Get Free Car Valuation and Inspection with Instant Cash Payment. Book  Your apppointment Now';
        $meta_title = 'Sell Porsche Car in Dubai & Abu Dhabi ,UAE | Sell your porsche online';
        $meta_keywords = 'Sell Porsche Car, Sell Your porsche, Sell my porsche';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_toyota($slug='toyota')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
      /*  $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell any Toyota car in Dubai and UAE | Sell your Toyota to Expat Car Buyers';
        $meta_description = 'Looking to sell your Toyota car in Dubai or Aywhere in UAE? Expat Car Buyers offers a hassle-free Car selling experience and a fair price for your Toyota. Book Your Appointment today!';
        $meta_keywords = 'Sell Toyota Car, Sell Your Toyota, Sell my Toyota';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }



    public function sell_bentley($slug='bentley')
    {
        // echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_chrysler($slug='chrysler')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_honda($slug='honda')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        /* $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords; */


        $meta_description = 'Looking to sell your Honda car in Dubai or UAE? We buy any Honda cars in any condition. Get a free quote and sell your car hassle-free.';
        $meta_title = 'Sell Your Honda Car in Dubai and Abu Dhabi';
        $meta_keywords = 'Sell Honda Car, Sell my honda, Sell your honda in dubai';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_maserati($slug='maserati')
    {
        //echo "hiii";exit();
        /*  $brands = Brand::where('slug',$slug)->first();
          $meta_description = $brands->seo_description;
          $meta_title = $brands->seo_title;
          $meta_keywords = $brands->seo_keywords; */


        $meta_description = 'Looking to sell your Honda car in Dubai or UAE? We buy any Honda cars in any condition. Get a free quote and sell your car hassle-free.';
        $meta_title = 'Sell Your Honda Car in Dubai and Abu Dhabi';
        $meta_keywords = 'Sell Honda Car, Sell my honda, Sell your honda in dubai';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_mitsubishi($slug='mitsubishi')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        /*$meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell Your Mitsubishi I Sell Used Mitsubishi Car in Dubai, UAE';
        $meta_description = 'Sell Your Mitsubishi Car in Dubai, Abu Dhabi, UAE. Get Free Car Valuation, Inspection Book Your Appointment Today';
        $meta_keywords = 'Sell Mitsubishi Car, Sell Your Mitsubishi, Sell my Mitsubishi';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_renault($slug='renault')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }

    public function sell_volkswagen($slug='volkswagen')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
       /* $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell Your Volkswagen For Highest price in Dubai, Abu Dhabi ';
        $meta_description = 'Sell Your Volkswagen Car in Dubai, UAE. We Buy Any Volkswagen Car. Free Valuation And Instant Cash From Expat Car Buyers';
        $meta_keywords = 'Sell Volkswagen Car, Sell Your Volkswagen, Sell my Volkswagen';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }




    public function sell_bmw($slug='bmw')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
       /* $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/
        //dd($brands);
        $meta_title = 'Sell your Bmw Car in Dubai, Abu Dhabi | Expat Car Buyers';
        $meta_description = 'Sell Your BMW Car in Dubai, Abu Dhabi and Get Highest Cash offer From Expat Car Buyers. Book Your Appointment Today!';
        $meta_keywords = 'Sell Bmw Car, Sell Your Bmw, Sell my Bmw';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_dodge($slug='dodge')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_hyundai($slug='hyundai')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_lamborghini($slug='lamborghini')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_maybach($slug='maybach')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_nissan($slug='nissan')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
       /* $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;*/

        $meta_title = 'Sell used Nissan in Dubai | Sell my Nissan Car for best price';
        $meta_description = 'Sell Your Nissan in Dubai, Abu Dhabi or anywhere In UAE and Get the Best Cash offer From Expat Car Buyers';
        $meta_keywords = 'Sell Nissan Car, Sell Your Nissan, Sell my Nissan';

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_rolls_royce($slug='rolls-royce')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    public function sell_volvo($slug='volvo')
    {
        //echo "hiii";exit();
        $brands = Brand::where('slug',$slug)->first();
        $meta_description = $brands->seo_description;
        $meta_title = $brands->seo_title;
        $meta_keywords = $brands->seo_keywords;

        return view("subpage.acura",compact('slug'))->with('brand',$brands)->with('meta_description',$meta_description )->with('meta_title',$meta_title)->with('meta_keywords',$meta_keywords);
    }
    /*----------------------sell my car url----------------------------*/




    public function search(Request $request)
    {
        $q = $request->input('q');
        if($q){
            $blogs = Blogs::where('title', 'LIKE', '%'.$q.'%');
            $recentblogs = Blogs::orderBy('created_at', 'desc')->take(10)->get();
            $blogscat = Blogscat::get();
            if($request->input('sort') == 'latest')
            {
                $blogs->orderBy('created_at','desc');
            }
            else
            {
                $blogs->orderBy('title', 'asc');
            }
            $blogs = $blogs->paginate(25);


            return view("blog")->with('blog',$blogs)->with('cat',$blogscat)->with('recentblogs',$recentblogs)->with('meta_description','blogs' )->with('meta_title','blogs');
        }else{
            return back();
        }

    }

    /* sell cars */
    public function sellCars() {
        $brand = Brand::where('slug','sell-cars')->firstOrFail();
        /*$meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;*/

        $meta_title = 'Sell Any Car in UAE | Sell Car Online| Sell Your Used Cars - Expat Car Buyers';
        $meta_description = 'Looking to sell any car in Dubai, UAE? Expat Car Buyers is the best place to sell your used car online. Sell Your Car with us and get instant payment in 30 minutes.';
        $meta_keywords = 'Sell Car Dubai, Sell my car, Sell any car, Sell car online, Sell your car, sell any car ';

        return view("third-page",compact('meta_title','meta_description','meta_keywords'));
        // return view("sell-cars",compact('meta_title','meta_description','meta_keywords'));
    }

    /* sell cars dubai */
    public function sellCarsDubai() {
        $brand = Brand::where('slug','sell-my-car-dubai')->firstOrFail();
        $meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;
        return view("sell-cars-dubai",compact('meta_title','meta_description','meta_keywords'));
    }

    /* sell cars sharjah */
    public function sellCarsSharjah() {
        $brand = Brand::where('slug','sell-my-car-sharjah')->firstOrFail();
        $meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;
        return view("sell-cars-sharjah",compact('meta_title','meta_description','meta_keywords'));
    }

    /* sell cars abu-dhabi */
    public function sellCarsAbuDhabi() {
        $brand = Brand::where('slug','sell-my-car-abudhabi')->firstOrFail();
        $meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;
        return view("sell-cars-abu-dhabi",compact('meta_title','meta_description','meta_keywords'));
    }

    /* sell cars evaluate your car */
    public function sellCarsEvaluateYourCar() {
        $brand = Brand::where('slug','sell-cars-evaluate-your-car')->firstOrFail();
        /*$meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;*/


        $meta_title = 'Used Car Valuation in Dubai, UAE | Evaluate and Sell Your Car Online';
        $meta_description = 'Looking to sell your car in Dubai, UAE? Get a free car valuation online with our Free car valuation tool. Evaluate the value of your car and sell it quickly For the best price.';
        $meta_keywords = 'Car valuation dubai, used car valuation, online car valuation, Evaluate your car, Sell any car';

        return view("second-page",compact('meta_title','meta_description','meta_keywords'));
    }

    /* privacy policy */
    public function privacyPolicy() {
        $brand = Brand::where('slug','privacy-policy')->firstOrFail();
        $meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;
        return view("privacy-policy",compact('meta_title','meta_description','meta_keywords'));
    }

    /* terms conditions */
    public function termsCondition() {
        $brand = Brand::where('slug','terms-conditions')->firstOrFail();
        $meta_title = $brand->seo_title;
        $meta_description = $brand->seo_description;
        $meta_keywords = $brand->seo_keywords;
        return view("terms-conditions",compact('meta_title','meta_description','meta_keywords'));
    }
    
    public function sellUsedCars() 
    {
        $meta_title = 'Sell Any Car in UAE | Sell Car Online| Sell Your Used Cars - Expat Car Buyers';
        $meta_description = 'Looking to sell any car in Dubai, UAE? Expat Car Buyers is the best place to sell your used car online. Sell Your Car with us and get instant payment in 30 minutes.';
        $meta_keywords = 'Sell Car Dubai, Sell my car, Sell any car, Sell car online, Sell your car, sell any car ';
        return view("sell-used-cars",compact('meta_title','meta_description','meta_keywords'));
    }
    
    public function scrapCarBuyers() 
    {
        $meta_title = 'Sell Any Car in UAE | Sell Car Online| Sell Your Used Cars - Expat Car Buyers';
        $meta_description = 'Looking to sell any car in Dubai, UAE? Expat Car Buyers is the best place to sell your used car online. Sell Your Car with us and get instant payment in 30 minutes.';
        $meta_keywords = 'Sell Car Dubai, Sell my car, Sell any car, Sell car online, Sell your car, sell any car ';
        return view("scrap-car-buyers",compact('meta_title','meta_description','meta_keywords')); 
    }

}
