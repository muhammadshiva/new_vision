@extends('layouts.app')
      
        
@section('jumbotron')     
    <div class="col-12">
        <div class="tm-main-bg tm-services-bg"></div>        
    </div>
@endsection      

@section('welcome')        
    <!-- Welcome section -->
  
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-header-floating">Our Digital Services</h2>         
            </div>
        </div>
        
        <div class="row tm-welcome-row tm-services">
            @foreach($services as $service)
            <div class="col-md-3 col-sm-6">
                <figure class="tm-services-img">
                    <img src="{{$service->image}}" alt="Image" class="img-fluid">        
                    <figcaption class="tm-service-description">{{$service->title}}</figcaption>
                </figure>     
            </div>
            @endforeach
        </div>
        
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small mb-5">Our unique approaches for you</h2>        
            </div>
        </div>
        <div class="row tm-approach-row">
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fab fa-4x fa-acquisitions-incorporated tm-service-icon"></i>
                        <div>
                            <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> Template is provided by TemplateMo website for 100% free of charge. You can use this CSS template for any purpose.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fas fa-4x fa-certificate tm-service-icon"></i>
                        <div>
                            <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fas fa-4x fa-chart-pie tm-service-icon"></i>
                        <div>
                            <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                        </div>
                    </div>         
                </div>
            </div>
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fas fa-4x fa-anchor tm-service-icon"></i>
                        <div>
                            <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    
@endsection

@section('featured')
    <!-- Featured -->
   
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small mb-3">Our Strategic Partners</h2>        
            </div>
        </div>
        
        <div class="tm-partners mx-auto">
            <div>
                <img src="img/partner-01.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-02.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-03.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-04.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-05.png" alt="Partner Image" class="img-fluid">    
            </div>
            
            <p class="tm-partner-text">Etiam et odio ut nibh suscipit eleifend. Sed facilisis, enim nec auctor vehicula, dolor odio venenatis turpis,
            eu vehicula ipsum ligula a nisi. Nam vel nulla sed enim imperdiet fermentum. Mauris venenatis imperdiet
            ex, quis rutrum orci vestibulum tristique. Ut gravida est ac risus dignissim sollicitudin. #999</p>
            
        </div>
  
@endsection
            