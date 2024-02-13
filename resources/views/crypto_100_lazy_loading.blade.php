        <?php $count=0; $awd=1; ?>

        @foreach($crypto_100 as $ns)
        <?php if($count==0 || $count==14 || $count==28 || $count==42 || $count==56 || $count==70 || $count==84 || $count==100 ){ ?>
          <div class="col-md-12 text-center">
        <a href="https://blog.crypto.com/introducing-the-crypto-com-exchange-vip-program/?utm_source=Crypto100&utm_medium=banner&utm_campaign=Crypto100_WW-en_Sponsorship_ExchangeVIP_2021_Jan" >   
          <img src="{{asset('img/advertisement/crypto_100/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
             </a>
          </div>
        <?php $awd = $awd + 1; 
          //  echo $awd;

    } ?>
        <div class="col-md-6 card-bottom-space" >
            <div class=" crypto-100-winner-container">  
                <div class="crypto-100-title">
                    <div class="crypto-100-img">
                        <img src="{{$ns->head_url}}" class="crypto-100-card-image" />
                    </div>
                  
                    <div class="crypto-100-customer-details">
                        <div class="name crypto-text-color-blue">{{$ns->name}}</div> 
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
        <?php if($count==99 ){ ?>
          <div class="col-md-12 text-center">
          
            <a href="https://blog.crypto.com/introducing-the-crypto-com-exchange-vip-program/?utm_source=Crypto100&utm_medium=banner&utm_campaign=Crypto100_WW-en_Sponsorship_ExchangeVIP_2021_Jan">   
          <img src="{{asset('img/advertisement/crypto_100/'.$awd.'.gif')}}" class="advartise_image img-fluid"/>
             </a>
      
          </div>
        <?php //$awd = $awd + 1;
    
    } ?>
            <?php $count++; ?>

    @endforeach