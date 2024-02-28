@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid px-10 bg-white">
    <div class="row mt-5 mb-4">
        <div class="col-lg-3 d-flex flex-column">
            <div class="col-lg-12 cw-bg-card  px-0 mb-2 flex-fill h-100">
                <div class="rounded p-3">
                    <h2 class="cryptohome-header-text ml-2">Top News</h2>
                    <hr>
                    <div class="cw-landing-scrollable-content cw-scrollbar" id="infinite-scroll">
                    <div class="scrolling-pagination">
                    @foreach($newsletters as $newsletter)
                        <div class="pl-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <img src="{{ asset('img/png/cw-icon.png') }}" alt="cw-icon"> {{ $newsletter->news_letter_date }}
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-n-10">
                                <div class="col-md-12">
                                    <div class="mb-3 ml-2 pl-3 pt-0 border-left border-info border-1">
                                       <!-- put data here -->
                                      {{ $newsletter->header }} 
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $newsletters->links() }}
                        </div>
                    </div>
                    
                </div>
                <a href="#" class="read-more-link font-weight-bold ml-3">Read more latest news <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-12 mt-auto px-0 flex-fill">
                <div class="card border-0 bg-blue text-white h-100">
                    <img class="card-img-top" src="https://miro.medium.com/v2/resize:fit:900/1*wnYZ2svg4x1OE7CrtZ1rWA.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">SPONSORED</h6>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100">
            <div class="cw-landing-main-card-bg">
                <div class="mask-center-big">
                <div class="mask-center-small ">   
                    <img class="object-fit-cover h-100" src="{{ $newshighlight->title_img }}" alt="">    
                </div>
                </div>
            </div>
                <div class="card-body cw-landing-main-card-bg">
                    <h3 class="card-title cryptohome-header-text news-highlight">News Highlight</h3>
                    <h2 class="cryptohome-header-text mt-4 news-highlight-blog-title">{{ $newshighlight->blog_title }}</h2>
                    <p class="card-text">{{ Str::limit(strip_tags($newshighlight->blog), 400) }}</p>
                    <a href="">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="col-lg-12 px-0 h-100">
                <div class="cw-bg-card rounded p-3 flex-fill h-100">
                    <h2 class="cryptohome-header-text mb-3">Funding Deals</h2>
                    <div class="d-block d-flex flex-column">
                        <div class="row">
                            <div class="col" id="fundingDealCollapse">
                            @foreach($funding_deals as $index => $deal)
                            <div style="@if($index > 0) margin-top: 5px; @endif">
                            <div class="d-flex py-2 px-3 rounded bg-white text-primary">
                                <a type="button" >
                                    <img src="{{ $deal->logo }}" alt="funding-deal-icon" style="width: 25px; height: 25px;" class="mr-2">{{ $deal->company }}
                                </a>
                                <div class="ml-auto text-dark">
                                    {{ $deal->funding}}
                                    <a data-toggle="collapse" data-target="#collapseDeal{{ $index }}" aria-expanded="false" aria-controls="collapseDeal{{ $index }}"> <i class="fa fa-angle-down"></i> </a>
                                </div>
                            </div>                                       
                            <div id="collapseDeal{{ $index }}" class="collapse" data-parent="#fundingDealCollapse">
                                <div class="card card-body border-left-0 border-right-0 border-bottom-0 rounded-0">                             
                                    <div class="d-flex border-bottom border-bottom-gray ">
                                        <div>
                                            Country: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->country}}
                                        </div>
                                    </div>          
                                    <div class="d-flex border-bottom border-bottom-gray ">
                                        <div>
                                            Funding Type: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->funding_type}}
                                        </div>
                                    </div>   
                                    <div class="d-flex border-bottom border-bottom-gray ">
                                        <div>
                                            Lead Investor: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->lead_investor }}
                                        </div>
                                    </div> 
                                    <div class="d-flex">
                                        <div>
                                            Completion Date: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->completion_date }}
                                        </div>
                                    </div>               
                                </div>
                            </div>
                            </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="mr-3 font-weight-bold mt-2">See Full List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advertise Here -->
    <div class="row mx-auto">
        <div class="col-lg-12 bg-blue text-white rounded d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
            </div>
            <div class="mt-2 ml-3">
                <h1> >>>>> Advertise Here </h1>
            </div>
        </div>
    </div>
     <!-- End Advertise Here -->
    <!-- Border -->
    <div class="mt-4 mb-4 mx-auto row border border-secondary border-top-3">
    </div>
    <!-- End Border -->
    <!--LATEST NEWS SECTION -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h1 class="cryptohome-header-text">Latest News</h1>
        </div>
        @foreach($blogs as $blog)
        <div class="col-lg-3 ">
            <div class="card cw-bg-card border-0 flex-fill h-100">
                <div class="px-2 ">
                    <img  class="w-100 cw-landing-latest-news-image" src="{{ $blog->title_img }}" class="card-img-top rounded" alt="...">
                </div>
                <div class="card-body pb-0">
                    <h5 class="font-weight-bold">{{ $blog->blog_title }}</h5>
                </div>
                <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                    <!-- <p>13 hours ago </p> -->
                    <p>{{ $blog->published_on }}</p>
                    <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right rotate-n45" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-lg-12 text-center mt-5">
        <a href="{{ route('cryptonews') }}" class=" mx-auto"> <img src="{{  asset('img/svg/read-all-btn.svg') }}" alt=""> </a>
        </div>
    </div>
     <!--END LATEST NEWS SECTION -->

    <!-- <div class="row mt-4 mb-4">
        <div class="col-lg-12">
            <img src="{{ asset('img/svg/banner.svg') }}" style="width: 100%;">
        </div>
    </div> -->

    
    <div class="row mt-5 mb-5">
        <div class="col-lg-12">
            <div class="cta-box position-relative p-4 rounded-lg d-flex align-items-center">
                <div class="cta-box__info">
                    <h2 class="font-weight-bold">Instant Network Expansion: Thousands of Industry Contacts, Just a Click Away.</h2>
                    <p>Get our entire database of over 7,500 hand-researched companies, investors & communities in crypto!</p>
                    <div class="cta-box__info-inner d-flex justify-content-between">
                        <div class="pricing">
                            <h4 class="actual-price align-items-center d-flex"><strong class="mr-2">Actual Price</strong> <s style="color: #828282;">$249</s></h4>
                            <h3 class="offer-price mb-4 align-items-center d-flex font-weight-bold"><span class="mr-2" style="#3297F8">Offer Price</span> <span style="color: #1662FF; font-size: 48px;">$149</span></h3>
                            <div class="pricing__buttons d-flex">
                                <a href="" class="blue-outline-btn">Learn More</a>
                                <a href="" class="blue-outline-light-bg-btn">Buy Now</a>
                            </div>
                        </div>
                        <div class="features">
                            <h4 class="font-weight-bold">Get Full Access To These Databases</h4>
                            <ul class="m-0 p-0" style="columns: 2; list-style: none;">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Companies</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Investors</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Media Outlets</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Exchanges</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Journalists</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <img class="acc-img position-absolute" src="{{ asset('img/svg/computer.png') }}">
            </div>
        </div>
    </div>

    <!--CRYPTO VIDEOS SECTION -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h1 class="cryptohome-header-text">Crypto Videos</h1>
        </div>
        @foreach ($cryptovideos as $video)
        <div class="col-lg-3 pb-2">
            <div class="cw-bg-card rounded flex-fill h-100">
                <div class="pb-1">
                    <div class="px-2 embed-responsive embed-responsive-1by1 rounded">
                       {!! $video->video !!}
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mt-3 px-3">{{ $video->channel_name }}</h5>
                    </div>
                    <div class="text-bold px-3">
                        <h4> <strong> {{ $video->title }} </strong></h4>
                    </div>
                  
                </div>
              
            </div>
            <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right rotate-n45" aria-hidden="true"></i> </a>
            </div>
        </div>   
        @endforeach

     

        <div class="col-lg-12 text-center mt-5">
        <a href="{{ route('cryptoyoutube') }}" class=" mx-auto"> <img src="{{  asset('img/svg/view-all-btn.svg') }}" alt=""> </a>
        </div>
    </div>
    <!--END CRYPTO VIDEOS SECTION -->
    <!--PRESS RELEASE SECTION -->
    <div class="row mb-2 mx-auto">
        <div class="col-lg-12 p-0 mb-4">
            <h1 class="cryptohome-header-text">Press Releases</h1>
        </div>
        <div class="col-lg-6 cw-bg-card rounded">
            <div class="px-3 pt-4">
                <div>
                    <img class="rounded img-fluid" src="{{ $pressreleases[0]['title_img'] }}" alt="Image">
                </div>
                <div class="mt-3 pb-3">
                    <h2 class="font-weight-bold">{{ $pressreleases[0]['blog_title'] }}</h2>
                    <p>{{ $pressreleases[0]['published_on'] }} </p>
                    <p>{{ Str::limit(strip_tags($pressreleases[0]['blog']), 350) }} <a href="{{ url('/cryptonews/'.$pressreleases[0]['blog_id']) }}">Read more</a></p>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
        <div class="row">
            @php
                $index = 0;
            @endphp
            @foreach($pressreleases as $pressrelease)
                @if($index > 0)
                    <div class="col-md-6 d-flex @if($index > 2) mt-3 @endif flex-fill h-100">
                        <div class="cw-bg-card rounded w-100">
                            <div class="px-2 pb-1">
                                <div>
                                    <img class="rounded img-fluid" src="{{ $pressrelease->title_img }}" alt="Image">
                                </div>
                                <div class="mt-3">
                                    <h4 class="font-weight-bold">{{ $pressrelease->blog_title }}</h4>
                                </div>
                                <div class="d-flex flex-row card-footer border-0 cw-bg-card p-0">
                                    <p>{{$pressrelease->published_on }}</p>                           
                                </div>                              
                            </div>
                            <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                            <a href="{{ url('/cryptonews/'.$pressrelease->blog_id) }}" class="ml-auto"> <i class="fa fa-arrow-right rotate-n45" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                @endif
                @php
                    $index++;
                @endphp
            @endforeach
        </div>
        </div>
        <div class="col-lg-12 text-center mt-5 mb-3">
        <a href="https://google.com" class=" mx-auto"> <img src="{{  asset('img/svg/read-all-btn.svg') }}" alt=""> </a>
        </div>
    </div>
    <!--END PRESS RELEASE SECTION -->
    <!-- Advertise Here -->
    <div class="row mx-auto mt-4">
        <div class="col-lg-12 bg-blue text-white rounded d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
            </div>
            <div class="mt-2 ml-3">
                <h1> >>>>> Advertise Here </h1>
            </div>
        </div>
    </div>
     <!-- End Advertise Here -->
    <div class="mt-4 mb-4 row border border-secondary border-top-3 mx-auto">
    </div>
    <div class="row flex-column align-items-center pb-5 mt-5">
        <h1 class="cryptohome-header-text">Industry Awards</h1>
        <p>Top crypto figures</p>
        <div class="d-flex flex-wrap justify-content-center award-container">
            <div class="award-item">
                <img src="{{ asset('img/svg/100mostinfluential.svg') }}" alt="100 Most Influential People In Crypto">
            </div>
            <div class="award-item">
                <img src="{{ asset('img/svg/250toporganizations.svg') }}" alt="250 Top Organisations In Crypto">
            </div>
            <div class="award-item">
                <img src="{{ asset('img/svg/50mostinfluentialwomen.svg') }}" alt="50 Most Influential Women In Crypto">
            </div>
            <div class="award-item">
                <img src="{{ asset('img/svg/50topprojectsofdefi.svg') }}" alt="50 Project Of DeFi In Crypto">
            </div>
            <div class="award-item">
                <img src="{{ asset('img/svg/20topyoutubers.svg') }}" alt="20 Top Youtubers In Crypto">
            </div>
        </div>
    </div>
</div>
<div class="bg-blue py-6 text-center align-items-center text-white">
        <h1 class="font-weight-bold news-letter-font">Join Our Newsletter</h1>
        <p>Get the latest trends and updates on our crypto community.</p>
        <form action="#" method="post" class="mb-4">
            <div class="d-flex justify-content-center">
                <div>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="ml-2">
                    <button type="submit" class="btn btn-subscribe">Subscribe Now</button>
                    <div class="pointer-icon">
                        <svg width="34" height="45" viewBox="0 0 34 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 18.1941V16.1941H30V14.1941H26V12.1941H20V10.1941H16V2.19409H14V0.194092H10V2.19409H8V20.1941H6V18.1941H0V26.1941H2V30.1941H4V34.1941H6V38.1941H8V44.1941H30V36.1941H32V30.1941H30V36.1941H28V42.1941H10V38.1941H8V34.1941H6V30.1941H4V26.1941H2V20.1941H6V22.1941H8V28.1941H10V2.19409H14V20.1941H16V12.1941H20V20.1941H22V14.1941H26V22.1941H28V16.1941H30V18.1941H32V30.1941H34V18.1941H32Z" fill="white" />
                        </svg>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script>
  jQuery(document).ready(function($) {
    // Your jScroll initialization code here
    $('ul.pagination').hide();
    $('#infinite-scroll').jscroll({
    debug: true,
      autoTrigger: true,
      padding: 0,
      nextSelector: '.pagination li.active + li a',
      contentSelector: 'div.scrolling-pagination',
      callback: function() {
        $('ul.pagination').hide();
      }
    });
  });
</script>