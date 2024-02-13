@extends('layouts.cryptoapp')

@section('title')
Crypto Funding Deals | Meet the Next Wave of Crypto Companies | CryptoWeekly

@stop
@section('description', 'Meet the teams building the next generation of crypto companies before anyone else. With Crypto Funding Deals, be the first to know where money is flowing in crypto. 


')
@section('keywords', 'crypto businesses, crypto business, crypto companies, top cryptocurrency companies, new crypto companies, low-cap crypto companies, cryptocurrency businesses, list of crypto companies, best bitcoin companies, cryptocurrency companies, top bitcoin companeis, crypto companies, businesses involved with cryptocurrency , digital currency companies, cryptocurrency companies, biggest bitcoin companies, crypto companies to invest in, funded crypto companies, blockchain companies to watch, crypto companies to invest in, cryptolist, crypto company list, crypto companies, crypto investors, new crypto companies, new blockchain companies, funded blockchain companies, newest cryptocurrency funding deals, most recent crypto funding deals, crypto company funding rounds, crunchbase for crypto, crypto crunchbase, top new crypto companies, crypto companies to watch, crypto currency companies to watch
')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')


@section('content')

<div class="container-fluid crypto-100-title-image text-center title-img-color	">
<img src="{{asset('img/header_img/Funding Deals.png')}}" class="img-fluid" />
</div>

<div class="container">
<div class="fpage-title-container">
<h3 class="fpage-title">Intelligence on Upcoming Crypto Funding Deals </h3>
<p class="fpage-title-content">Meet the teams Building the next generation of crypto companies before anyone else</p>
</div>

    <div class="col-md-12 ">
    <div class="col-md-3" style="float:right">
        <input type="text" class="form-control m-2" onkeyup="loadMoreData()" id="fsearch" placeholder="Search"/>
        </div>
    </div>
	<div class="overflow-x:auto;">
		

    <table class="table table-responsive-md table-responsive-sm" id="funding_deals">
	<thead class="thead-dark">
		<tr >
			<th>Logo</th>
			<th>Company</th>
			<th>Country </th>
			<th>Funding (USD)</th>
			<th>Funding Type</th>
			<th>Lead Investor</th>
			<th>Completion Date</th>
		</tr>
	</thead>
    <tbody>
	</div>
    @include('funding_deals_component')
    </tobdy>
    </table>

	<div>
	{{$fdeals->links()}}
    </div>
</div>

  


</div>

@component('components.home_page_investor_zopne')   

@endcomponent

</br>
<div class="subscribe_componenet_alignment">
        @component('components.subscribe_box')

        @endcomponent
    </div>

	</br>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	

	function loadMoreData(){
      
	  $.ajax(
	        {
	            url: '{{route("static.funding.deals")}}',
	            type: "get",
                data:
                {
                     search:$("#fsearch").val()  ,
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
	            $("#funding_deals > tbody").html(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	             // alert('server not responding...');  
                 //console.log(throwError)
	        });
	}

</script>
