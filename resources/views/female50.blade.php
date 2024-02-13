@extends('layouts.cryptoapp')

@section('title')
Crypto Female 50 | The Top 50 Most Influential Women In Crypto | CryptoWeekly

@stop
@section('description', 'Women are taking center stage in the blockchain industry. The Female 50, presented by CryptoWeekly looks at the top 50 most influential women in crypto. 
')
@section('keywords', 'most influential females in crypto, women in crypto, female leaders in crypto, blockchain, women in blockchain, female leaders, cryptocurrency female leaders,  women leaders in the cryptocurrency industry, crypto woman, top female leaders, crypto industry leaders, female crypto influencers, top women of influence, cryptocurrency female leaders, top blockchain females, best female leaders in crypto, women in crypto 2023, top women in crypto 2023, female crypto 2023, female 50, female 50 2023')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

@section('content')

<div class="container-fluid crypto-100-title-image title-img-color">
    <img class="img-fluid" src="{{asset('/img/header_img/Female50.png')}}"/>
</div>

<div class="container">
<div class="fpage-title-container">
<h3 class="fpage-title">THE TOP 50 MOST INFLUENTIAL FEMALES IN CRYPTO</h3>
<p class="fpage-title-content">- 2023 Edition -</p>
</div>



<br/>
    <div class="container crypto-100-head-info-container">
        <div class="row"> 
            <div class="col-md-9">
                <div class="crypto-100-head-info-padding">
                    <p class="crypto-text-color-blue font-weight-bold">The Badge</p>
                    <p >In 2022 Cointelegraph found out that the number of female crypto users grew by 160% on the majority of top crypto exchanges. To celebrate the massive surge of women into the cryptocurrency space, we wanted to recognize some of the fearless women who are leading the way. Our list consists of CEO's, Founders, Reporters, Chair Women and more. Stand with us in celebrating these amazing women for their incredible contributions to the space. 																
                                                                        </p>
                </div>
            </div>
            <div class="col-md-3 crytpo-title-head-info-img">
            <img src="{{asset('/img/Crypto-Female-50.png')}}"  width="68%" /> 
            </div>
        </div>
   
    </div>

    <br/>

<div class="container">
    <p class="text-center">
            # of shares <button class="btn btn-primary btn-sm">Facebook</button> <button class="btn btn-primary btn-sm">Twitter</button>  <button class="btn btn-primary btn-sm">Email</button> 
    </p>
</div>

   <div class="container">

    <div class="row">
    <?php $count=0; $awd=1; ?>
          
        @foreach($crypto_100 as $ns)
     
     
            <?php if($count==0 || $count==8 || $count==16 || $count==24 || $count==32 || $count==40 || $count==50 ){ ?>
            <div class="col-md-12 text-center">
      <a href="mailto:sales@cryptoweekly.co?subject=Cryptoweekly Advertisement Inquiry">
                <img src="{{asset('img/advertisement/female_50/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
                 </a>
         

            </div>
            <?php $awd++; } ?>
            
            <div class="col-md-6 card-bottom-space"  >
                <div class=" crypto-100-winner-container"> 
                    <div class="crypto-100-title">
                        <div class="crypto-100-img">
                            <img src="{{$ns->head_url}}" class="crypto-100-card-image" />
                        </div>
                    
                        <div class="crypto-100-customer-details">
                            <div class="name  crypto-text-color-blue">{{$ns->name}}</div> 
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

             <a href="mailto:sales@cryptoweekly.co?subject=Cryptoweekly Advertisement Inquiry">
                <img src="{{asset('img/advertisement/female_50/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
                 </a>

            </div>
            <?php $awd++; } ?>
     
            <?php $count++; ?>








    @endforeach

    {{$crypto_100->links()}}
   </div>
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
function open_news_letter(t){
      //  console.log(t);
       // console.log();
        window.open(t.getElementsByTagName("a")[0].href);
}
</script>