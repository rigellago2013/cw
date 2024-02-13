@extends('layouts.cryptoapp')

@section('title')
The Top 30 Best Crypto YouTube Channels To Watch In 2023 | CryptoWeekly
@stop
@section('description', 'Check out our top picks of the best cryptocurrency YouTube channels in 2023 that offer insight & expert opinion. Don’t waste time with bad crypto YouTubers. ')
@section('keywords', 'top cryptocurrency youtubers, crypto channels, crypto YouTubers, blockchain YouTube, crypto influencers, top crypto influencers, crypto vloggers, blockchain influencers,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')

<div class="container-fluid crypto-100-title-image text-center">
    <img src="{{asset('/img/header_img/Crypto YouTubers.png')}}"/>
</div>
<div class="container">
<div class="fpage-title-container">
<h3 class="fpage-title">THE TOP 30 CRYPTO YOUTUBERS IN 2023</h3>
<p class="fpage-title-content">- Meet the top YouTube Influencers of 2023 - </p>
</div>



</br>

<div class="container crypto-100-head-info-container">
    <div class="row"> 
        <div class="col-md-9">
        <div class="crypto-100-head-info-padding">
            <p class="crypto-text-color-blue font-weight-bold">The Badge</p>
            <p >Meet our top Youtuber Crypto influencers for 2023.  This list is composed of our favourite crypto champions from the tube, and we tune in daily to catch as much wisdom and insight from them as possible.  Count on these channels to bring you the most important and timely crypto news and ideas ongoing.  Many of these channels and personalities have continued through tough down markets to prevail in this upswing in crypto, and should be recognized for their valuable contribution to their respective communities, and commitment. 																
																
																
																																
																
																
																
                                                                </p>
        </div>
        </div>
        <div class="col-md-3">
        <img src="{{asset('/img/Crypto Youtube 20.png')}}"  width="68%" /> 
        </div>
    </div>
   
</div>

</br>
   <div class="container">
       <div class="row">
      
       <div class="col-md-8"> </div>
       <div class="col-md-4">
			<input type="search" class="form-control m-2" onkeyup="loadMoreData(this)" id="fsearch" placeholder="Search " />
		</div>
			</div>
    <div class="row" id="youtube_20_search">
        
        
    <?php $count=0; $awd=1;?>

   @foreach($youtube as $ns)
        <div class="col-md-6 card-bottom-space" >
            <div class=" crypto-100-winner-container"> 
                <div class="crypto-100-title">
                    <div class="crypto-100-img">
                        <img src="{{$ns->logo_url}}" class="crypto-100-card-image" />
                    </div>
                  
                    <div class="crypto-100-customer-details">
                        <div class="name crypto-text-color-blue"><a href="{{$ns->channel_url}}" target="_blank">{{$ns->channel}}</a></div> 
                        <div class="twitte crypto-text-color-blue">
                        
                        <button class="btn btn-sm btn-danger"><i class="fa fa-youtube-play" ></i> {{$ns->subscriber}}K</button>
                           
                           <a href="{{route('static.crypto_feeds')}}" type="button" class="btn btn-sm btn-primary"><i class="fa fa-youtube-play" ></i> Watch YouTube Content</a>
                        
                        </div>
                    </div>
                   
                    <div class="crypto-100-postion">
                  
                    </div>
                </div>

                <div class="crypto-100-description">
                  <p>{{$ns->description}} </p>
              
                </div>
            
            </div>

        </div>    

               
        @endforeach




        </div>









   
   <div>

    <div class="row"></div>
    </br>

    

    <div class="subscribe_componenet_alignment">
        @component('components.subscribe_box')

        @endcomponent
    </div>

    
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	

	function loadMoreData(a){
      
	  $.ajax(
	        {
	            url: '{{route("static.fetchYoutube20_ajax")}}',
	            type: "get",
                data: 
                {
                     search:a.value  ,
                     ajax:"add"
                },
	            beforeSend: function()
	            {
	               // $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == ""){
	             //  $('.ajax-load').html("");
                   // page=-1;
	                return;
	            }
	           // $('.ajax-load').hide();
	            $("#youtube_20_search").html(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	             // alert('server not responding...');  
                 //console.log(throwError)
	        });
	}

</script>