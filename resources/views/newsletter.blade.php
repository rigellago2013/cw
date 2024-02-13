@extends('layouts.cryptoapp')

@section('title')
Cryptocurrency Newsletter | Crypto Newsletter Subscription | CryptoWeekly


@stop
@section('description', 'Subscribe to the CryptoWeekly Newsletter. Get the top crypto stories, funding deals, content,  technical analysis and more delivered to your inbox every week.')
@section('keywords', 'crypto newsletter, top crypto newsletter, crypto stories weekly, weekly crypto update, crypto technical anaylsis, top funding deals, weekly crypto newsletter, crypto inbox, crypto newsletter subscription, crypto newsletters, crypto capital newsletter, crypto investment newsletter, cryptocurrency newsletter, best crypto newsletter, cryptocurrency email newsletter, cryptoweekly newsletter, crypto weekly newsletter, the top newsletter in crypto, best blockchain newsletter, weekly blockchain newsletter, bitcoin newsletter,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

@section('content')

<div class="container-fluid text-center title-img-color">
    <img src="{{asset('img/header_img/Newsletter.png')}}" class="img-fluid" />
</div>

<div class="container">


 

    <div class="fpage-title-container">
        <h3 class="fpage-title">Stay Informed With The CryptoWeekly Newsletter </h3>
        <p class="fpage-title-content">Get the top stories, funding deals, technical analysis, cryptocurrency jobs and much more <br />delivered directly to your inbox, every Monday morning.</p>
     <div class="subscribe_componenet_alignment">
        @component('components.subscribe_box')

        @endcomponent
    </div>
    </div>



    <p class="fpage-title text-center home-page-widget-title crypto-text-color-blue">Check Out Our Recent Newsletters:</p>
    <br />
    <div class="container row">

        @foreach($newsletters as $ns)
        <div class="col-md-4 news-letter-outer-container" onclick="open_news_letter(this)">
            <div class="newsletter-container">

                <div class="newsletter-image-container">
                    <img src='{{asset("newsletters/$ns->image")}}' width="200px" />
                </div>
                <!-- <div class="news-letter-title"><p> {{$ns->header}}</p> </div> -->
                <a href="{{$ns->link}}" target="_blank">{{$ns->header}} </a>

            </div>
        </div>

        @endforeach

        <div>


</div>

</div>
<div class="row">{{$newsletters->links()}}</div>

</div>
      


            </br>

            <br/>
            <div class="container card shadow">
                <div class="row text-center">
                    <div class="col-md-12">
                        <br/> <br/> <br/>
                        <img src="{{ asset('img/CryptoWeekly-Logo.png.webp') }}" class="newsletter-popup-logo" height="auto" />
                        <br/> <br/> <br/>
                        <h4 class="newsletter-popup-header">Subscribe to the CryptoWeekly Newsletter</h4>

                        <div class="subscribe_componenet_alignment">
                          <!-- Begin Constant Contact Inline Form Code -->
<div class="ctct-inline-form" data-form-id="1b0ec776-776e-4315-a6cf-abe141cae893"></div>
<!-- End Constant Contact Inline Form Code -->
                        </div>

                        <p class="text-center ">
                            Get the top stories, funding deals, technical analysis, cryptocurrency jobs and much more delivered to your inbox, every Monday morning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        @component('components.home_page_investor_zopne')  
    
@endcomponent
        @endsection

        <script>
            function open_news_letter(t) {
                //  console.log(t);
                // console.log();
                window.open(t.getElementsByTagName("a")[0].href);
            }
        </script>