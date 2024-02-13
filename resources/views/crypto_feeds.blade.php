@extends('layouts.cryptoapp')
@section('title')
CryptoFeed | A Currated Steam Of Crypto YouTube Content From Top Crypto Influencers | CryptoWeekly
@stop
@section('description', 'The CryptoFeed is a stream of curated crypto YouTube content from the most influential people in crypto. Cut through the noise with the CryptoWeekly CryptoFeed.')
@section('keywords', 'Currated Crypto content, crypto Youtube content, currated crypto feed, youtube crypto, top youtubers, leaders in crypto, Bitcoin educators, blockchain, future of money, podcasts, crypto podcast, top coins video, best crypto youtube channels, top crypto youtube channels, steam top youtube content, crypto content steam, best steaming crypto service, top cryptocurrency podcasts, cryptocurrency influencers, youtube for crypto, crypto youtube, cryptocurrency youtube channels, biggest cryptocurrency channels, cryptocurrency youtube, youtube datadash bitcoin for beginners, crypto investor youtube, crypto news youtube, crypto coins youtube, top youtube steaming content, newest crypto news, top stories in crypto, cryptocurrency content steam, top cryptocurrency youtubers,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

<div class="containe-fluid ">
  <div class="row crypto_feed_search bg-dark p-2">
    <div class="col-md-4">
    <a href="{{route('static.crypto_feeds')}}"><img src="{{asset('img/CryptoFeed.png')}}" height="40px" /></a>
    </div>
      <div class="col-md-6">
        <input type="text" placeholder="Search a topic"  onkeyup="loadMoreData(this)" id="fsearch" class="form-control"/>
      </div>
      <div class="col-md-2"> 
      </div>
    </div>

</div>

<div class="container text-center crypto_feed_tags ">
  <div class="row ">
    <h5 class="p-2">It can be hard cutting through all the noise in the cryptocurrency space. That’s why we created CryptoFeed, a stream of curated crypto content for the top voices and most influential people in crypto.</h5>

    @foreach($tags as $t)
    <button class="btn crypto_feed_tag_button btn-sm" style="background-color:{{$t->bg_color}};color:{{$t->font_color}}" onclick="loadMoreData(this)" value="{{$t->tag}}" >{{$t->tag}}</button>
    @endforeach

  </div>
 
</div>

<div class="container-fluid">
<h5 class="home-page-widget-title crypto-text-color-blue">Recently added </h5>
  <div class="row crypto_feed_data">
   
   @include('crypto_feed_search')
  </div>
</br>
  {{$domains->links('pagination')}}
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	

	function loadMoreData(a){
      
	  $.ajax(
	        {
	            url: '{{route("static.crypto_feeds")}}',
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
	            $(".crypto_feed_data").html(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	             // alert('server not responding...');  
                 //console.log(throwError)
	        });
	}

</script>