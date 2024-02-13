@extends('layouts.cryptoapp')

@section('title')
250 Cryptocurrency Companies To Watch in 2023 | CryptoWeekly


@stop
@section('description', 'Meet the 250 most exciting crypto companies to track in 2020. These cryptocurrency companies are leading the way in how people & businesses engage with crypto.')
@section('keywords', 'crypto 250, companies, crypto companies, blockchain, distributed ledger technology, defi, nft, top companies in crypto, crypto projects, crypto organizations, best crypto investments, crypto business, crypto businesses, crypto companies, top cryptocurrency companies, cryptocurrencies backed by companies, cryptocurrency businesses, crypto related businesses, lost of crypto companies, crypto companies list, crypto company list, cryptocurrency company list, best bitcoin companies, cryptocurrency companies list, crypto currency companies, crypto companies list,  crypto companies to invest in, bitcoin bitcoin companies, the crypto company, cryptocurrency companies, blockchain top companies, blockchain companies to watch, businesses involved with cryptocurrency, digital currency companies, cryptocurrency security companies, crypto NFT companies, defi companies, top defi companies, public bitcoin companies, publick crypto companies, crypto companies to invest in, top new cryptocurrency, reach out to cryptocurrency businesses,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container-fluid crypto-100-title-image text-center ">

    <img src="{{asset('img/header_img/Crypto250.png')}}" class="img-fluid"  />
    </div>
<div class="container">
    <div class="fpage-title-container">
        <h3 class="fpage-title">250 TOP COMPANIES TO WATCH IN 2023</h3>
        <p class="fpage-title-content">- Meet the companies building the most impressive project in crypto -</p>
    </div>
</div>
<div class="container crypto-100-head-info-container">
    <div class="row"> 
        <div class="col-md-9">
            <div class="crypto-100-head-info-padding">
                <p class="crypto-text-color-blue  font-weight-bold">Thank you to our Sponsor</p>
                <p >We want to give a special thanks to our sponsor,<span class="crypto-text-color-blue">Crypto.com</span>, who are doing amazing work with mass crypto adoption via their <span class="crypto-text-color-blue">easy-to-use mobile app</span>, Visa<span class="crypto-text-color-blue">cards</span>(with amazing rewards) and their <span class="crypto-text-color-blue">crypto exchange</span>for more advanced traders.</p>
            </div>
        </div>
        <div class="col-md-3 crytpo-title-head-info-img">
        <img src="{{asset('/img/page_assests/crypto_100/crypto_logo.png')}}"    width="68%"    />  
        </div>
    </div>
   
</div>
</br>
<div class="container crypto-100-head-info-container">
    <div class="row"> 
        <div class="col-md-9">
        <div class="crypto-100-head-info-padding">
            <p class="crypto-text-color-blue font-weight-bold">The Badge</p>
            <p >Every year at CryptoWeekly sort through our list of thousands of crypto companies and host lively debates over the Crypto250. This list is our interpretation of the top 250 companies in crypto. We would like to offer you our digital badge to recognize your tremendous achievements in building our collective, decentralized future. 																
																
																
																</p>
        </div>
        </div>
        <div class="col-md-3 crytpo-title-head-info-img">
        <img src="{{asset('img/Crypto 250 Badge.png')}}"  width="68%" /> 
        </div>
    </div>
   
</div>

</br>

   <div class="container">
    <div class="row">
    
    <?php $count=0; $awd=1;?>

            @foreach($crypto_250 as $ns)

        <?php if($count==0 || $count==28 || $count==56 || $count==84 || $count==112 || $count==140 || $count==168 || $count==196  || $count==224  || $count==250){ ?>
          <div class="col-md-12 text-center">

           <a href="https://blog.crypto.com/introducing-the-crypto-com-exchange-vip-program/?utm_source=Crypto100&utm_medium=banner&utm_campaign=Crypto100_WW-en_Sponsorship_ExchangeVIP_2021_Jan">   
            <img src="{{asset('img/advertisement/crypto_250/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
            </a>
          </div>
        <?php $awd++;} ?>
                    <div class="col-md-3 crypto_250_col_div">
                                <div class="flip-card">
                                <div class="flip-card-inner">
                                        <div class="flip-card-front investor_zone_front_side">
                                            <div class="crypto_250_company_image text-center">
                                            <img src="{{$ns->logo}}"  class="img-responsive " />
                                            </div>
                                            <h6 class="crypto_250_company_name">{{$ns->company_name}}</h6>
                                        </div>
                                        <div class="flip-card-back">
              
                                            <p>{{$ns->description}}</p>
                                           
                                        </div>
                                </div>

                                </div>

                    </div>
                

                    <?php if( $count==249){ ?>
                    <div class="col-md-12 text-center">

                     <a href="https://blog.crypto.com/introducing-the-crypto-com-exchange-vip-program/?utm_source=Crypto100&utm_medium=banner&utm_campaign=Crypto100_WW-en_Sponsorship_ExchangeVIP_2021_Jan"> 
                        <img src="{{asset('img/advertisement/crypto_250/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
                        </a>
                    </div>
                    <?php $awd++; } ?>
                    <?php $count++; ?>
            @endforeach
        </div>
        
    </div>
 
   
    </div>
    <div class="subscribe_componenet_alignment">
        @component('components.subscribe_box')

        @endcomponent
    </div>

</br>

@include('awards')

@endsection


