
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


