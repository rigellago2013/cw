<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Crypto100People;
use App\CryptoYoutube;
use App\FundingDeals;
use Illuminate\Http\Request;
use DB;
use App\Crypto250Organizations;
use App\Crypto50DefiProjects;
use App\Crypto50Women;
use App\Crypto20Youtubers;

class StaticSiteController extends Controller
{
  //

  public  function top_pick_for_home_page(Request $request)
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=10&page=1&sparkline=false',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
  }


  public function send_domain_email(Request $request)
  {

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'Cc: <gauravkad8@gmail.com>' . "\r\n";
    $headers .= 'Cc: <mgrants@gmail.com>' . "\r\n";


    $subject = 'Sell Domain';
    $msg = "<table border='1px solid' style='width:500px;text-align:center;'>";

    $msg .= "<tr ><td colspan='2' style='text-align:center;font-weight:bold;background-color:lightgray;'>Sell Domain</td> </tr>";

    $msg .= "<tr>";
    $msg .= "<td>";
    $msg .= "Customer Name : ";
    $msg .= "</td>";

    $msg .= "<td>";
    $msg .= $request['name'];
    $msg .= "</td>";

    $msg .= "</tr>";

    $msg .= "<tr>";
    $msg .= "<td>";
    $msg .= "Email : ";
    $msg .= "</td>";

    $msg .= "<td>";
    $msg .= $request['email'];
    $msg .= "</td>";

    $msg .= "</tr>";


    $msg .= "<tr>";
    $msg .= "<td>";
    $msg .= "Domain : ";
    $msg .= "</td>";

    $msg .= "<td>";
    $msg .= $request['domain'];
    $msg .= "</td>";

    $msg .= "</tr>";

    $msg .= "<tr>";
    $msg .= "<td>";
    $msg .= "Price (in USD) ";
    $msg .= "</td>";

    $msg .= "<td>";
    $msg .= "USD $" . $request['price_in_usd'];
    $msg .= "</td>";

    $msg .= "</tr>";


    $msg .= "</table>";
    $to = "mike@cryptoweekly.co";
    mail($to, $subject, $msg, $headers);
    echo $msg;
    return;
  }
  //Fetch Funding deals
  public function add_funding_deals(Request $request)
  {
    $funding_deals = json_decode($request['message']);

    $funding_deals_batch = array();

    foreach ($funding_deals as $fd) {
      $sub_funding_deal = array();
      $sub_funding_deal["logo"] = $fd->Logo;
      $sub_funding_deal["company"] = $fd->Company;
      $sub_funding_deal["country"] = $fd->Country;
      $sub_funding_deal["funding"] = $fd->FundingUSD;
      $sub_funding_deal["funding_type"] = $fd->FundingType;
      $sub_funding_deal["lead_investor"] = $fd->LeadInvestor;
      $sub_funding_deal["completion_date"] = $fd->CompletionDate;
      $sub_funding_deal["rank"] = $fd->rank;
      $sub_funding_deal["status"] = $fd->status;
      //print_r($sub_funding_deal);
      array_push($funding_deals_batch, $sub_funding_deal);
    }

    DB::table('tblfundingdeals')->insert($funding_deals_batch);
    return json_encode($funding_deals_batch);
  }


  public function get_home_page_funding_deals(Request $request)
  {
    return DB::table('tblfundingdeals')->orderBy('rank', 'asc')->paginate(15);
  }

  public function get_home_page_domains(Request $request)
  {
    return DB::table('domains')->orderBy('sr_no', 'asc')->paginate(8);
  }

  public function get_home_page_newsletter(Request $request)
  {

    $fdeals = DB::table('tblnewsletter')->orderBy('rank', 'asc')->paginate(4);
    return $fdeals;
  }

  public function mobile_view(Request $request)
  {
    return view('mobile_view');
  }

  public function single_crypto_feeds(Request $request, $id)
  {
    $tags = DB::table('tags')->paginate(100);
    $fdeals = DB::table('crypto_feeds')->where('sr_no', $id)->paginate(20);
    return view('crypto_feeds', ["domains" => $fdeals, "tags" => $tags]);
  }

  public function crypto_feeds(Request $request)
  {
    if ($request['ajax']) {
      if (strlen($request['search'])) {

        $domains = DB::table('crypto_feeds')->orWhere('keywords', 'like', '%' . $request['search'] . '%')->orderBy('upload_date', 'desc')->paginate(20);
        $view = view('crypto_feed_search', compact('domains'))->render();
        return response()->json(['html' => $view]);
      } else {

        $domains = DB::table('crypto_feeds')->orderBy('upload_date', 'desc')->paginate(20);
        $view = view('crypto_feed_search', compact('domains'))->render();
        return response()->json(['html' => $view, "tags" => $tags]);
      }
    } else {
      $tags = DB::table('tags')->paginate(100);
      $fdeals = DB::table('crypto_feeds')->orderBy('upload_date', 'desc')->paginate(20);
      return view('crypto_feeds', ["domains" => $fdeals, "tags" => $tags]);
    }
  }


  public function fundingdealspage(Request $request)
  {
    // $fdeals=DB::table('tblfundingdeals')->orderBy('rank', 'asc')->paginate(5);
    //  return view('fundingdeals',["fundingdeals"=>$fdeals]);


    if ($request['ajax']) {
      if (strlen($request['search'])) {

        $fdeals = DB::table('tblfundingdeals')->orWhere('company', 'like', '%' . $request['search'] . '%')->orWhere('country', 'like', '%' . $request['search'] . '%')->orWhere('funding', 'like', '%' . $request['search'] . '%')->orWhere('funding_type', 'like', '%' . $request['search'] . '%')->orWhere('lead_investor', 'like', '%' . $request['search'] . '%')->orWhere('completion_date', 'like', '%' . $request['search'] . '%')->get();
        $view = view('funding_deals_component', compact('fdeals'))->render();
        return response()->json(['html' => $view]);
      } else {

        $fdeals = DB::table('tblfundingdeals')->orderBy('rank', 'desc')->paginate(50);
        $view = view('funding_deals_component', compact('fdeals'))->render();
        return response()->json(['html' => $view]);
      }
    } else {
      $fdeals = DB::table('tblfundingdeals')->orderBy('rank', 'desc')->paginate(50);

      return view('fundingdeals', ["fdeals" => $fdeals]);
    }
  }


  public function toppicks(Request $request)
  {

    $fdeals = DB::table('top_picks')->orderBy('sr_no', 'asc')->paginate(10);
    $top_picks = array();
    $top_list_array = array();
    foreach ($fdeals as $value) {
      //code to be executed;
      array_push($top_list_array, $value->id);
      $top_picks[$value->id]['name'] = $value->id;
      $top_picks[$value->id]['description'] = $value->description;
      $top_picks[$value->id]['website'] = $value->website;
    }
    //return print_r($fdeals);
    $search = implode(",", $top_list_array);

    // echo $search;
    //return;
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=' . $search . '&order=market_cap_desc&per_page=100&page=1&sparkline=false%0A&price_change_percentage=1h%2C24h%2C7d',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Cookie: __cfduid=d1f55d0782d41db31ac3f68e95ae4ad491612646478'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    //echo $response;
    // return;
    return view('toppicks', ["links" => $fdeals, "top_picks" => $response, "database_data" => $top_picks]);
  }


  //add newsletters
  public function add_newsletter(Request $request)
  {
    $newsletter = json_decode($request['message']);
    // return json_encode($newsletter);
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      $sub_newsletter = array();
      $sub_newsletter["news_letter_date"] = $fd->Date;
      $sub_newsletter["header"] = $fd->Header;
      $sub_newsletter["link"] = $fd->Link;
      $sub_newsletter["image"] = $fd->Image;
      $sub_newsletter["rank"] = $fd->Rank;

      //print_r($sub_funding_deal);
      array_push($newsletter_batch, $sub_newsletter);
    }

    DB::table('tblnewsletter')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }


  //add crypto 100
  public function add_crypto_100(Request $request)
  {
    $newsletter = json_decode($request['message']);
    //return $newsletter;
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      //  echo $fd->twitter;

      //  continue;

      $sub_newsletter = array();
      $sub_newsletter["position"] = $fd->Position;
      $sub_newsletter["head_url"] = $fd->head_url;
      $sub_newsletter["name"] = $fd->Name;
      //  $sub_newsletter["name"]=$fd->Name;
      $sub_newsletter["twitter_handle"] = $fd->twitter_handle;
      $sub_newsletter["twitter"] = $fd->twitter;
      $sub_newsletter["company"] = $fd->Company;
      $sub_newsletter["description"] = htmlentities($fd->Description);

      //print_r($sub_funding_deal);
      array_push($newsletter_batch, $sub_newsletter);
    }

    DB::table('crypto_100')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }

  //add crypto 100
  public function add_defi_50(Request $request)
  {
    $newsletter = json_decode($request['message']);
    //return $newsletter;
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      //  echo $fd->twitter;

      //  continue;

      $sub_newsletter = array();
      $sub_newsletter["position"] = $fd->Position;
      $sub_newsletter["head_url"] = $fd->head_url;
      $sub_newsletter["website"] = $fd->website;
      //  $sub_newsletter["name"]=$fd->Name;
      $sub_newsletter["twitter_handle"] = $fd->twitter_handle;
      $sub_newsletter["twitter"] = $fd->twitter;
      $sub_newsletter["company"] = $fd->Company;
      $sub_newsletter["description"] = htmlentities($fd->Description);

      //print_r($sub_funding_deal);
      array_push($newsletter_batch, $sub_newsletter);
    }

    DB::table('defi_50')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }
  //add female 50
  public function add_female_50(Request $request)
  {
    $newsletter = json_decode($request['message']);
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      $sub_newsletter = array();
      $sub_newsletter["position"] = $fd->Position;
      $sub_newsletter["head_url"] = $fd->head_url;
      $sub_newsletter["name"] = $fd->Name;
      $sub_newsletter["twitter"] = $fd->twitter;
      $sub_newsletter["twitter_handle"] = $fd->twitter_handle;
      $sub_newsletter["followers"] = $fd->followers;
      $sub_newsletter["company"] = $fd->Company;
      $sub_newsletter["description"] = htmlentities($fd->Description);
      array_push($newsletter_batch, $sub_newsletter);
    }

    DB::table('female_50')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }


  //add crypto 100
  public function add_youtube_50(Request $request)
  {
    $newsletter = json_decode($request['message']);
    //return $newsletter;
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      //  echo $fd->twitter;

      //  continue;

      $sub_newsletter = array();
      $sub_newsletter["position"] = $fd->position;

      $sub_newsletter["channel"] = $fd->channel;

      //print_r($sub_funding_deal);
      array_push($newsletter_batch, $sub_newsletter);
    }

    DB::table('youtube_20')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }


  public function add_crypto_250(Request $request)
  {
    $crypto = json_decode($request['message']);
    //   return $crypto;
    $crypto_batch = array();

    foreach ($crypto as $fd) {
      //  echo $fd->twitter;

      //  continue;

      $sub_newsletter = array();
      $sub_newsletter["position"] = $fd->position;

      $sub_newsletter["company_name"] = $fd->company_name;
      $sub_newsletter["tier"] = $fd->tier;
      $sub_newsletter["url"] = $fd->url;

      $sub_newsletter["description"] = htmlentities($fd->description);
      // $sub_newsletter["logo"]=$fd->logourl;

      //print_r($sub_funding_deal);
      array_push($crypto_batch, $sub_newsletter);
    }

    DB::table('crypto_250')->insert($crypto_batch);
    return json_encode($crypto_batch);
  }

  //add crypto 100
  public function add_toppicks(Request $request)
  {
    $newsletter = json_decode($request['message']);
    //return $newsletter;
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      $sub_newsletter = array();
      $sub_newsletter["id"] = $fd->id;
      $sub_newsletter["symbol"] = $fd->symbol;
      $sub_newsletter["website"] = $fd->website;
      $sub_newsletter["name"] = $fd->name;
      $sub_newsletter["description"] = htmlentities($fd->description);

      array_push($newsletter_batch, $sub_newsletter);
    }
    DB::table('top_picks')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }


  //add crypto 100
  public function add_domains(Request $request)
  {
    $newsletter = json_decode($request['message']);
    //return $newsletter;
    $newsletter_batch = array();

    foreach ($newsletter as $fd) {
      $sub_newsletter = array();

      $sub_newsletter["domain"] = $fd->domain;
      $sub_newsletter["url"] = $fd->url;
      $sub_newsletter["actual_cost"] = $fd->actual_cost;
      $sub_newsletter["sale_cost"] = $fd->sale_cost;
      $sub_newsletter["tags"] = $fd->tags;

      array_push($newsletter_batch, $sub_newsletter);
    }
    DB::table('domains')->insert($newsletter_batch);
    return json_encode($newsletter_batch);
  }

  public function female50(Request $request)
  {

    $fdeals = DB::table('female_50')->orderBy('position', 'asc')->paginate(100);
    return view('female50', ["crypto_100" => $fdeals]);
  }

  public function crypto100(Request $request)
  {

    $crypto_100 = DB::table('crypto_100')->orderBy('position', 'asc')->paginate(100);



    return view('crypto100', ["crypto_100" => $crypto_100]);
  }



  public function newsletter(Request $request)
  {

    $fdeals = DB::table('tblnewsletter')->orderBy('sr_no', 'desc')->paginate(21);
    return view('newsletter', ["newsletters" => $fdeals]);
  }


  public function defi50(Request $request)
  {

    $fdeals = DB::table('defi_50')->orderBy('position', 'asc')->paginate(100);
    return view('defi50', ["crypto_100" => $fdeals]);
  }



  public function crypto_250(Request $request)
  {

    $fdeals = DB::table('crypto_250')->orderBy('sr_no', 'asc')->paginate(250);
    //print_r($fdeals);
    return view('crypto_250', ["crypto_250" => $fdeals]);
  }




  public function domains(Request $request)
  {

    if ($request['ajax']) {
      if (strlen($request['search'])) {

        $domains = DB::table('domains')->orWhere('domain', 'like', '%' . $request['search'] . '%')->get();
        $view = view('domains_component', compact('domains'))->render();
        return response()->json(['html' => $view]);
      } else {

        $domains = DB::table('domains')->orderBy('sr_no', 'desc')->paginate(20);
        $view = view('domains_component', compact('domains'))->render();
        return response()->json(['html' => $view]);
      }
    } else {
      $domains = DB::table('domains')->orderBy('sr_no', 'desc')->paginate(20);

      return view('domains', ["domains" => $domains]);
    }

    $fdeals = DB::table('domains')->orderBy('sr_no', 'desc')->paginate(20);
    return view('domains', ["domains" => $domains]);
  }




  public function fetchYoutube20(Request $request)
  {

    $channel = DB::table('youtube_20')->orderBy('position', 'asc')->paginate(100);


    return view('youtube20', ["youtube" => $channel]);
  }


  public function fetchYoutube20_ajax(Request $request)
  {
    if ($request['ajax']) {
      if (strlen($request['search'])) {

        $youtube = DB::table('youtube_20')->orWhere('description', 'like', '%' . $request['search'] . '%')->paginate(20);
        $view = view('youtube_20_search_feed', compact('youtube'))->render();
        return response()->json(['html' => $view]);
      } else {


        $channel = DB::table('youtube_20')->orderBy('position', 'asc')->paginate(100);


        return view('youtube_20_search_feed', ["youtube" => $channel]);
      }
    } else {


      $channel = DB::table('youtube_20')->orderBy('position', 'asc')->paginate(100);


      return view('youtube_20_search_feed', ["youtube" => $channel]);
    }
  }

  public function cryptoHome(Request $request)
  {
    // $agent = new \Jenssegers\Agent\Agent;
    // $mobile = $agent->isMobile();
    //$tab = $agent->isTablet();
    //$desk = $agent->isDesktop();
    $page = $request->page;

        $news_highlight =  DB::table('blog')->where('status',1)->orderBy('published_on', 'DESC')->first();
        $funding_deals = DB::table('tblfundingdeals')->orderBy('rank', 'desc')->paginate(12);
        $blogs = Blog::with('categories')->orderBy('published_on', 'DESC')->paginate(50, ['*'], 'page', $page);
        $latest_news = Blog::with('user')->where('status', 1)->orderBy('published_on', 'desc')->limit(8)->get();
        $cryptoVideos = CryptoYoutube::orderBy('upload_date', 'DESC')->orderBy('sr_no', 'desc')->limit(4)->get();
        $press_releases = Blog::whereHas('categories', function ($query) {
          $query->where('name', 'Press Release');
        })->orderBy('published_on', 'DESC')->take(5)->get();

        return view('cryptohome',["latest_news"=>$latest_news,"funding_deals"=>$funding_deals,"cryptovideos"=>$cryptoVideos,"blogs"=>$blogs, 'newshighlight'=>$news_highlight, 'pressreleases' => $press_releases]);
  }

  public function cryptoNews()
  {
    //Select top 5
    $top5 = Blog::with('categories')->where('status', 1)->orderBy('published_on', 'DESC')->limit(4)->get();
    
    //select top 4 disctinct categories
    $top4 =  Blog::with('categories')
    ->where('status', 1)
    ->orderBy('published_on', 'DESC')
    ->distinct()
    ->take(4)
    ->get();

    //pagination mix categories order by date DESC
    $blogs = Blog::with('categories')->orderBy('published_on', 'desc')->paginate(15);
 
    return view('cryptonews', ['top5' => $top5, 'top4' => $top4, 'blogs' => $blogs]);
  }

  public function cryptoYoutube(Request $request)
  {
      if ($request->ajax()) {
          $page = $request->page;
          $cryptoyoutubes = CryptoYoutube::orderBy('upload_date', 'DESC')->paginate(4, ['*'], 'page', $page);
          return response()->json($cryptoyoutubes);
      }
  
      $top2 = CryptoYoutube::orderBy('upload_date', 'DESC')->take(2)->get();
      return view('cryptoyoutube', ['top2' => $top2]);
  }
  

  public function investorZone()
  {
    return view('investor-zone');
  }

  public function newsLetterV2()
  {
    return view('news-letter');
  }

  public function fundingDeals(Request $request)
  {
    $page = $request->page;
    $fundingdeals = FundingDeals::orderBy('rank','ASC')->paginate(25, ['*'], 'page', $page);
    return view('funding-deals',['fundingdeals'=> $fundingdeals]);
  }

  public function getCryptoNews($id, Request $request)
  {
    $page = $request->page;
    $blog = Blog::with('categories')->findOrFail($id);
    $press_releases = Blog::whereHas('categories', function ($query) {
      $query->where('name', 'Press Release');
    })->orderBy('published_on', 'DESC')->take(4)->get();
    $news = Blog::whereHas('categories', function ($query) {
      $query->where('name', 'News');
    })
    ->orderBy('published_on', 'DESC')
    ->take(6)
    ->get();
    $topnews = Blog::with('categories')->orderBy('published_on', 'DESC')->paginate(50, ['*'], 'page', $page);

    return view('get-crypto-news', ['blog' => $blog, 'press_releases' => $press_releases, 'newslist' => $news,  'topnews' => $topnews]);
  }

  public function top100People()
  {
    $top100 = Crypto100People::orderBy('position')->get();
    return view('top100-people', ['top100' => $top100]);
  }
  
  public function top250Organisations( )
  {
    $top250 = Crypto250Organizations::orderBy('position')->get();
    return view('top250-organisations', ['top250' => $top250]);
  }

  public function top50DefiProjects()
  {
    $top50 = Crypto50DefiProjects::orderBy('position')->get();
    return view('top50-defi-projects', ['top50' => $top50]);
  }

  public function top50Females()
  {
    $top50 = Crypto50Women::orderBy('position')->get();
    return view('top50-females', ['top50' => $top50]);
  }

  public function top20Youtubers()
  {
    $top20 = Crypto20Youtubers::take(20)->orderBy('position')->get();
    return view('top20-youtubers',['top20' => $top20]);
  }

  public function oldCryptoHome()
  {
    $agent = new \Jenssegers\Agent\Agent;
    $mobile = $agent->isMobile();
    $tab = $agent->isTablet();
    //dd($result);

    
    $desk = $agent->isDesktop();
  
   // exit();
    //createfundingdeals
    if($desk){
            $funding_deals=DB::table('tblfundingdeals')->orderBy('rank', 'desc')->paginate(12);
            $newsletter=DB::table('tblnewsletter')->orderBy('sr_no', 'desc')->paginate(6);
           // $domains= DB::table('domains')->orderBy('sr_no', 'desc')->paginate//(10);
             $domains= DB::table('blog')
            ->join('users', 'blog.blog_user', '=', 'users.id')->where('status', 1)->orderBy('published_on', 'desc')->paginate(6);
            $topstories= DB::table('crypto_feeds')->orderBy('upload_date', 'desc')->orderBy('sr_no', 'desc')->paginate(4);
        return view('old-cryptohome',["blogs"=>$domains,"funding_deals"=>$funding_deals,"topstories"=>$topstories,"newsletters"=>$newsletter]);
    }else{
        return view('mobile_view');
    }
  }
}

