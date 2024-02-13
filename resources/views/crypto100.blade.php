@extends('layouts.cryptoapp')

@section('title')
Top 100 Cryptocurrency List Of Influential People In Crypto | CryptoWeekly

@stop
@section('description', 'Our top 100 cryptocurrency list is a curated list of the most influential people in bitcoin & other cryptocurrencies. This year’s list is as diverse as ever.')
@section('keywords', 'crypto 100, crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, most influential people in crypto,  best crypto advisors, cryptocurrency experts, crypto expert, biggest bitcoin investors, bitcoin experts, crypto advisors, best cryptocurrency advisor, crypto investors, crypto for the people, bitcoin people, bitcoin influencers, 100 bitcoin, top cryptocurrency investors, legends cryptocurrency, legends of bitcoin, crpyotcurrency experts, crypto influencers, crypto investors list, famous crypotcurrency, top crypto traders, famous bitcoin investors, bitcoin CEO, bitcoin expert, bitcoin team, crypto top 100, cryptocurrency advisors, blockchain CEO, crypto CEO, Crypo gurus, cryptocurrency analyst, top bitcoin holders, bitcoin names, bitcoin founders, top 100 cryptocurrency, cryptocurrency advisor, michael crypto, bitcoin analyst, cryptocurrency top 100, top 100 crypto coins, early bitcoin investors, peter smith blockchain bio, top 10 bitcoin best crypto 2023, 100 bitcoins, crypto world, crypto creators,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


<div class="container-fluid crypto-100-title-image text-center">

<img src="{{asset('img/header_img/Crypto100.png')}}" class="img-fluid" class="desktop_header_banner" />


</div>
<div class="container">
<div class="fpage-title-container">
<h3 class="fpage-title">THE 100 MOST INFLUENTIAL PEOPLE IN CRYPTO</h3>
<p class="fpage-title-content">- 2023 Edition -</p>
</div>

<br/>
<div class="container crypto-100-head-info-container">
    <div class="row"> 
        <div class="col-md-9">
            <div class="crypto-100-head-info-padding">
                <p class="crypto-text-color-blue  font-weight-bold">Thank you to our Sponsor</p>
                <p >We want to give a special thanks to our sponsor, <span class="crypto-text-color-blue">Crypto.com</span>, who are doing amazing work with mass crypto adoption via their <span class="crypto-text-color-blue"> easy-to-use mobile app</span>, Visa <span class="crypto-text-color-blue">cards</span> (with amazing rewards) and their <span class="crypto-text-color-blue"> crypto exchange</span> for more advanced traders.</p>
            </div>
        </div>
        <div class="col-md-3 crytpo-title-head-info-img">
        <img src="{{asset('/img/page_assests/crypto_100/crypto_logo.png')}}"    width="68%"    />  
        </div>
    </div>
   
</div>
<br/>
<div class="container crypto-100-head-info-container">
    <div class="row"> 
        <div class="col-md-9">
        <div class="crypto-100-head-info-padding">
            <p class="crypto-text-color-blue font-weight-bold">The Badge</p>
            <p >Every year at CryptoWeekly we sort through our list of the leaders in crypto to chose the Crypto100. This list is our interpretation of the top 100 most influential people in crypto. We offer this digital badge to all those who have made the list as recognition of thier tremendous achievements in building our collective, decentralized future. </p>
        </div>
        </div>
        <div class="col-md-3 crytpo-title-head-info-img">
        <img src="{{asset('img/Crypto 100 Badge.png')}}"  width="68%" /> 
        </div>
    </div>
   
</div>
<br/>
<div class="container">
    <p class="text-center">
            # of shares <button class="btn btn-primary btn-sm">Facebook</button> <button class="btn btn-primary btn-sm">Twitter</button>  <button class="btn btn-primary btn-sm">Email</button> 
    </p>
</div>

   <div class="container " id="crypto_100">
   <div class="row">        @include('crypto_100_lazy_loading')

        <div class="ajax-load text-center" style="display:none">
        <p><img src="{{asset('img/advertisement/crypto_100/banner-cryptoweekly-v5.gif')}}" height="40px"></p>
        </div>

    </div>


 

    
    
</div>
<div class="container m-t-5">
</br>
<div class="subscribe_componenet_alignment">
        @component('components.subscribe_box')

        @endcomponent
    </div>
</div>




@endsection

<script>
function open_news_letter(t){
      //  console.log(t);
       // console.log();
        window.open(t.getElementsByTagName("a")[0].href);
}
</script>


