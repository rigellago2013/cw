
<Style>
  td{  width: 10%;
    text-align: center;
}
</style>

@extends('layouts.cryptoapp')
@section('title')
Top Crypto Picks | Our Top List of Promising Cryptocurrency Projects  | CryptoWeekly

@stop
@section('description', 'With over 9,000 cryptocurrencies it can be tough to know what to buy. CryptoWeekly lists their favourite coins and offers a complete description of these investment assets

')
@section('keywords', 'Top cryptocurrencies, top altcoin projects, best altcoins, top ethereum projects, top dapps, best crypto projects, cryptoweekly, top cryptocurrency projects, altcoin picks for 2021, 2021 altcoin picks, best altcoins of 2021, the top cryptocurrencies of the year, top coins and what they do,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
@section('content')

<div class="container-fluid crypto-100-title-image title-img-color">

<img src="{{asset('img/header_img/CryptoPicks.png')}}" class="img-fluid" />


</div>

<div class="container">
    <div class="fpage-title-container">
    <h3 class="fpage-title">The Top Cryptocurrency Picks From The CryptoWeekly Team</h3>
    <p class="fpage-title-content">- We've reviewed hundreds of coins, and have put together a list of some of our favourite projects in the space -</p>
</div>



<?php 

$top_picks2=json_decode($top_picks);
    $collapse=false;  
?>

<div>
@foreach($top_picks2 as $ns)

<div class="accordion m-2 overflow-auto" id="accordionExample">

  <div class="card ">
    <div class="card-header" id="{{ html_entity_decode($database_data[$ns->id]['name'])}}  ">
      <h2 class="mb-0">
        <div class="<?php if($collapse) echo "collapsed"; else echo "collapsed"; ?>" type="button" data-toggle="collapse" data-target="#{{html_entity_decode($database_data[$ns->id]['name'])}}" aria-expanded="<?php if($collapse) echo "false"; else echo "false"; ?>" aria-controls="{{ html_entity_decode($database_data[$ns->id]['name'])}}">
          <table class="table " style="border:none">
            <tr class="text-center" style="border:none">
            <td class="text-left"><img src="{{$ns->image}}" height="30px"  />
            </td>
            <td><a href="{{ html_entity_decode($database_data[$ns->id]['website'])}}" target="_blank">{{$ns->name}}</a> 
            <h6 class="m-2" style="color:gray">Coin</h6>
            </td>
            <td><span  style="text-transform: uppercase;">{{$ns->symbol}} </span>
            <h6 class="m-2" style="color:gray">Ticker</h6>
             </td>
            <td>$<?php echo round($ns->current_price,2)?>  <h6 class="m-2" style="color:gray">Price</h6></td>
            <td><?php  if(round($ns->price_change_percentage_1h_in_currency , 2)<0){
                  echo '<span style="color:red">'.round($ns->price_change_percentage_1h_in_currency , 1).'%</span>';
            }else{
              echo '<span style="color:green">'.round($ns->price_change_percentage_1h_in_currency , 1).'%</span>';
            } ?>
             <h6 class="m-2" style="color:gray">1h Change</h6>
            </td>
            <td><?php
             if(round($ns->price_change_percentage_24h_in_currency , 2)<0){
              echo '<span style="color:red">'.round($ns->price_change_percentage_24h_in_currency , 1).'%</span>';
        }else{
          echo '<span style="color:green">'.round($ns->price_change_percentage_24h_in_currency , 1).'%</span>';
        } 
        ?>
         <h6 class="m-2" style="color:gray">24h Change</h6>
         </td>
            <td><?php
            
            if(round($ns->price_change_percentage_7d_in_currency , 2)<0){
              echo '<span style="color:red">'.round($ns->price_change_percentage_7d_in_currency , 1).'%</span>';
        }else{
          echo '<span style="color:green">'.round($ns->price_change_percentage_7d_in_currency , 1).'%</span>';
        }
            ?> 
             <h6 class="m-2" style="color:gray">7d Change</h6>
            </td>
            <td>$<?php echo number_format($ns->market_cap)?> 
           
              <h6 class="m-2" style="color:gray">Market Cap</h6>
            </td>
          
            </tr>
          </table>
        </div>
      </h2>
    </div>

    <div id="{{ html_entity_decode($database_data[$ns->id]['name'])}}" class=" <?php if($collapse) echo "collapse"; else echo "collapse";  ?> " aria-labelledby="{{ html_entity_decode($database_data[$ns->id]['name'])}}" data-parent="#accordionExample">
      <div class="card-body">
      <h6 class="font-weight-bolder">Description</h6>
      {{ html_entity_decode($database_data[$ns->id]['description'])}}
        <a href="{{ html_entity_decode($database_data[$ns->id]['website'])}}" target="_blank">{{ html_entity_decode($database_data[$ns->id]['website'])}}</a>
      <table class="table w-50 font-weight-bolder m-3"  > 
          <tr>
            <td>Market Cap Rank </td>
            <td>#{{$ns->market_cap_rank}}</td>
          </tr>
       
          <tr>
            <td>Trading Volume</td>
            <td> <?php echo number_format($ns->total_volume); ?> </td>
          </tr>
          <tr> 
            <td>All-Time High</td>
            <td> ${{$ns->ath}}</td>
          </tr>
          <tr>
            <td>All-Time Low</td>
            <td> ${{$ns->atl}}</td>
          </tr>
      </table>   
       
      </div>
    </div>
  </div>

  <?php $collapse=true; ?>
  </div>
@endforeach


{{$links->links()}}
</div>





@endsection

<script>
function open_news_letter(t){
      //  console.log(t);
       // console.log();
        window.open(t.getElementsByTagName("a")[0].href);
}
</script>