@extends('layouts.cryptoapp')

@section('title')
Crypto DeFi 50 | A List of the Top 50 Companies and Projects in DeFi | CryptoWeekly
@stop
@section('description', '')
@section('keywords', 'crypto defi companies, top companies in defi, crypto defi companies, top defi companies, best defi projects, top defi projects 2023, the best defi projects of 2023, top cryptocurrency projects, decentalized finance, top defi companies list, defi competition, defi pulse, crypto companies, crypto companies, blockchain, distributed ledger technology, defi, top companies in crypto, crypto projects, crypto organizations, defi industry leaders, leaders of defi, most value locked in defi, top defi pulse companies,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

@section('content')
<div class="container-fluid crypto-100-title-image">
    <img class="img-fluid" src="{{asset('/img/header_img/Defi-50.png')}}" />
</div>

<div class="container">
    <div class="fpage-title-container">
        <h3 class="fpage-title">THE TOP 50 MOST INTERESTING PROJECTS IN DEFI</h3>
        <p class="fpage-title-content">- 2023 Edition -</p>
    </div>


    <br />
    <div class="container crypto-100-head-info-container">
        <div class="row">
            <div class="col-md-9">
                <div class="crypto-100-head-info-padding">
                    <p class="crypto-text-color-blue font-weight-bold">The Badge</p>
                    <p>One of the biggest stories coming out of the cryptocurrency space right now, is the emergence of the decentralized finance industry (Defi). We felt it would be helpful to list some of our favourite projects in the space. There were a number of criteria that went into deciding who made this list. Some of which include: market capitalization, community support, useful innovation and impact on the world.



                    </p>
                </div>
            </div>
            <div class="col-md-3 crytpo-title-head-info-img">
                <img src="{{asset('/img/DEFI-50-Badge_V01.gif')}}" width="68%" />
            </div>
        </div>

    </div>

    <br />

    <div class="container">
        <p class="text-center">
            # of shares <button class="btn btn-primary btn-sm">Facebook</button> <button class="btn btn-primary btn-sm">Twitter</button> <button class="btn btn-primary btn-sm">Email</button>
        </p>
    </div>

    <div class="container">
        <div class="row">
        <?php $count=0; $awd=1; ?>
          
          @foreach($crypto_100 as $ns)
       
       
              <?php if($count==0 || $count==8 || $count==16 || $count==24 || $count==32 || $count==40 || $count==50 ){ ?>
              <div class="col-md-12 text-center">
              <a href="https://secure.verifiedlink.net/aff_c?offer_id=1347&aff_id=1970&url_id=5674">
              <img src="{{asset('img/advertisement/defi_50/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
                 </a>
              </div>
              <?php $awd = $awd + 1; } ?>
              
                <div class="col-md-6 card-bottom-space">
            <div class=" crypto-100-winner-container">
                    <div class="crypto-100-title">
                        <div class="crypto-100-img">
                            <img src="{{$ns->head_url}}" class="crypto-100-card-image" />
                        </div>

                        <div class="crypto-100-customer-details">
                            <div class="name crypto-text-color-blue"><a href="{{$ns->website}}">{{$ns->company}}</a></div>
                            <div class="twitte crypto-text-color-blue"><a href="{{$ns->twitter}}">{{$ns->twitter_handle}}</a></div>
                        </div>

                        <div class="crypto-100-postion">
                            {{$ns->position}}
                        </div>
                    </div>

                    <div class="crypto-100-description">
                        <p> <?php echo html_entity_decode($ns->description) ?></p>
                    </div>

                </div>

            </div>
            
            <?php if( $count==49 ){ ?>
              <div class="col-md-12 text-center">
  
                    <a href="https://secure.verifiedlink.net/aff_c?offer_id=1347&aff_id=1970&url_id=5674">
              <img src="{{asset('img/advertisement/defi_50/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
                 </a>
  
              </div>
              <?php $awd = $awd + 1;} ?>
            <?php $count++; ?>
            @endforeach
        </div>

        {{$crypto_100->links()}}

        <div>

            <div class="row"></div>
            </br>

            <div class="subscribe_componenet_alignment">
        @component('components.subscribe_box')

        @endcomponent
    </div>

        </div>
        
        @endsection
        <script>
            function open_news_letter(t) {
                //  console.log(t);
                // console.log();
                window.open(t.getElementsByTagName("a")[0].href);
            }
        </script>