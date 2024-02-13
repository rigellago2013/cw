@extends('layouts.cryptoapp')

@section('title')
Premium Crypto Domains For Sale | CryptoWeekly


@stop
@section('description', 'We’ve done the heavy lifting for you with Crypto Domains, our comprehensive, hand-researched list of quality domain names for sale across the crypto universe.')
@section('keywords', 'crypto domains, domains, blockchain domain marketplace, crypto domain marketplace, cryptocurrency domains, top crypto domains, cryptoweekly, crypto domains marketplace, buy crypto domains, sell crypto domains, cryptocurrency domain marketplace, best prices on crypto domains, unstoppable domains, crypto domain names, crypto domains for sale, buying blockchain domains, where to buy crypto domains, looking for cryptocurrency domains,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

@section('content')


<div class="container-fluid  text-center title-img-color">
<img src="{{asset('img/header_img/Crypto Domains.png')}}" class="img-fluid" />

</div>

<div class="container">
	<div class="fpage-title-container">
		<h3 class="fpage-title">CryptoWeekly Domain Marketplace </h3>
		<p class="fpage-title-content">The cryptocurrency space is evolving at warp speed, and everyone is looking to stake their claim on the digital real estate of the future. Part of that equation means buying the best domains for your new blockchain-based businesses. Our goal at CryptoWeekly is to be your one-stop-shop for all things crypto, so we created a marketplace where anyone can buy and sell cryptocurrency domains. Scroll through our list of over 100 available cryptocurrency domains. Purchase domains from reputable vendors using Ethereum or other cryptocurrencies and stake your claim on the top crypto domains before anyone else. </p>
	</div>

	<div class="row">
		<div class="col-md-9">
			<!-- Button trigger modal -->
			<button type="button" class="btn sell-your-domain-button" data-toggle="modal" data-target="#exampleModal">
				Sell your domain
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title text-center ml-auto" id="">Sell your domain</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

								<div class="form-group">
									<label for="">Customer Name :</label>
									<input type="text" class="form-control" id="customer_name" aria-describedby="" placeholder="Enter Name">
									</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Email Address</label>
									<input type="email" class="form-control" id="customer_email" aria-describedby="emailHelp" placeholder="Enter Email">
									</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Domain</label>
									<textarea type="text" class="form-control" id="customer_domain" placeholder="one domain per line">
									</textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Price  (USD or ETH)</label>
									<input type="number" class="form-control" id="price_in_usd" placeholder="Enter Price as USD or ETH">
								</div>
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn sell-your-domain-button mt-1" id="sell_your_domain_button">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="float:right">
			<input type="text" class="form-control m-2" onkeyup="loadMoreData()" id="fsearch" placeholder="Search Domains" />
		</div>


	</div>

	<div class="row">

	</div>
	<div class="row text-center m-2 domains_list">

		@include('domains_component')




	</div>
	{{$domains->links()}}

	@component('components.subscribe_box')

	@endcomponent

	@endsection
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script type="text/javascript">
		function loadMoreData() {

			$.ajax({
					url: '{{route("static.domains")}}',
					type: "get",
					data: {
						search: $("#fsearch").val(),
						ajax: "add"
					},
					beforeSend: function() {
						// $('.ajax-load').show();
					}
				})
				.done(function(data) {
					if (data.html == "") {
						//  $('.ajax-load').html("");
						// page=-1;
						return;
					}
					// $('.ajax-load').hide();
					$(".domains_list").html(data.html);
				})
				.fail(function(jqXHR, ajaxOptions, thrownError) {
					// alert('server not responding...');  
					//console.log(throwError)
				});
		}



			$(document).ready(function(){
			$("#sell_your_domain_button").click(function(){
				$("input").prop('required',true);
				$.post("{{route('static.send_domain_email')}}",
				{
					_token: "{{ csrf_token() }}",
				name: $("#customer_name").val() ,
				domain: $("#customer_domain").val() ,	
				email: $("#customer_email").val() ,
				price_in_usd: $("#price_in_usd").val() 

				},
				function(data,status){
				$(".modal-body").html("<h1>Thank You! We have received your request. Our team will get back to you within 1 business day.</h1>");
				$("#sell_your_domain_button").hide();
				
				});
			});
			});

	</script>