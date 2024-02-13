@extends('layouts.cryptoapp')

@section('content')


<div class="container-fluid">
<a href="{{route('static.crypto_feeds')}}">
<h5 class="mobile_home_page_top_head">CRYPTO FEED	></h5>

    <img src="{{asset('img/header_img/Crypto-Feed Header.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head"> Stream currated videos from the top content creators in the cryptocurrency industry</h5>
    </a>
</div>
  
<div class="container-fluid">
<a href="{{route('blog.multiple_blog_view')}}">
<h5 class="mobile_home_page_top_head">CRYPTO BLOGS	></h5>

    <img src="{{asset('img/header_img/Crypto Blog.png
')}}" class="img-fluid" />
  <h5 class="mobile_home_page_bottom_head"> Hot off the press, our Crypto Blog is the best place to get find industry news you care about.</h5> 
    </a>
</div>


<div class="container-fluid ">
<a href="{{route('static.newsletter')}}">
<h5 class="mobile_home_page_top_head">NEWSLETTER					></h5>

    <img src="{{asset('img/header_img/Newsletter.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head"> Top stories, funding deals, analysis and picks delivered directly to your inbox every Monday morning 														
														</h5>
                                                        </a>
</div>

<div class="container-fluid  ">
<a href="{{route('static.funding.deals')}}">
<h5 class="mobile_home_page_top_head">FUNDING DEALS					
						></h5>

    <img src="{{asset('img/header_img/Funding Deals.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">  Meet the teams building the next wave of crypto companies before anyone else 														
														</h5> </a>
</div>
<div class="container-fluid  ">
                           <a href="mailto:sales@cryptoweekly.co">
                                <img src="{{ asset('img/banners/banner-cryptoweekly-v5.gif') }}" style="width:100%"/>
                                </a>
                            
                                
</div>
<div class="container-fluid  ">
<a href="{{route('static.investorzone')}}">
<h5 class="mobile_home_page_top_head">INVESTOR ZONE					
					></h5>

    <img src="{{asset('img/header_img/Investor Zone.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head"> Get exclusive access to CryptoWeekly databases, analysis and content</h5>
    </a>
</div>
<div class="container-fluid  ">
<a href="{{route('static.domains')}}">
<h5 class="mobile_home_page_top_head">CRYPTO DOMAINS					
						></h5>

    <img src="{{asset('img/header_img/Crypto Domains.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">  Buy & sell the hottest crypto specific domains 														
														</h5> </a>
</div>

<div class="container-fluid  ">
<a href="{{route('static.toppicks')}}">
<h5 class="mobile_home_page_top_head">CRYPTO PICKS				
					></h5>

    <img src="{{asset('img/header_img/CryptoPicks.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">  Track and analyze high potential projects in crypto 														
														</h5> </a>
</div>

<div class="container-fluid  ">

<a href="{{route('static.fetchYoutube20')}}">
<h5 class="mobile_home_page_top_head">CRYPTO YOUTUBERS					
						></h5>

    <img src="{{asset('img/header_img/Crypto YouTubers.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">  Our Top 20 Favourite YouTubers in Crypto 														
														</h5>
                                                        </a>
</div>


<div class="container-fluid  ">
<a href="{{route('static.defi50')}}">
<h5 class="mobile_home_page_top_head">DEFI 50			
								
						></h5>

    <img src="{{asset('img/header_img/Defi-50.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">  Our Picks For Top 50 Projects in DeFi 														
														 														
														</h5> </a>
</div>


<div class="container-fluid  ">
<a href="{{route('static.crypto100')}}">
<h5 class="mobile_home_page_top_head">CRYPTO 100	></h5>

    <img src="{{asset('img/header_img/Crypto100.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">   The Top 100 Most Influential People in Crypto 														
														 														
														</h5> </a>
</div>


<div class="container-fluid  ">
<a href="{{route('static.female50')}}">
<h5 class="mobile_home_page_top_head">FEMALE 50				
									
						></h5>

    <img src="{{asset('img/header_img/Female50.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">   The Top 50 Female Leaders in Crypto 														
																												
														</h5></a>
</div>


<div class="container-fluid  ">
<a href="{{route('static.crypto_250')}}">
<h5 class="mobile_home_page_top_head">CRYPTO 250				
								
									
						></h5>

    <img src="{{asset('img/header_img/Crypto250.png')}}" class="img-fluid" />
    <h5 class="mobile_home_page_bottom_head">  The Top 250 Organizations in Crypto 														
																												
																												
														</h5></a>
</div>
@endsection

