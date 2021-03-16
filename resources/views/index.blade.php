@extends('layouts.app')   

@section('jumbotron')
    <div class="col-12">
        <div class="tm-main-bg"></div>        
    </div>
@endsection

@section('welcome')
    <!-- Welcome section -->

        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-header-floating">Welcome to New Vision</h2>         
            </div>
        </div>
        
        <div class="row tm-welcome-row">
            @foreach($posts as $post)
            <article class="col-lg-6 tm-media">
                <img src="{{$post->image}}" alt="Welcome image" class="img-fluid tm-media-img" />
                <div class="tm-media-body">
                    <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">{{$post->title}}</h3></a>
                    <p>{{$post->content}}</p>
                </div>
            </article>
            @endforeach
        </div>
        
        <div class="row tm-welcome-row-2">
            <div class="col-lg-4 tm-dotted-box-container">
                <article class="tm-dotted-box">
                    <i class="fas fa-3x fa-binoculars tm-article-icon"></i>
                    <h3 class="tm-article-title">Template Usage</h3>
                    <p class="tm-article-text">You can feel free to edit and use New Vision template for your commercial websites. Title color is #333</p>
                    <a class="tm-btn tm-btn-rounded tm-article-link" href="#">More Details</a>
                </article>    
            </div>
            <div class="col-lg-4 tm-dotted-box-container">
                <article class="tm-dotted-box">
                    <i class="fas fa-3x fa-microscope tm-article-icon"></i>
                    <h3 class="tm-article-title">New Vision</h3>
                    <p class="tm-article-text"><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> comes with 4 different HTML pages and provided free of charge by TemplateMo. You can add more pages if you need. Text color is #666</p>
                </article>    
            </div>
            <div class="col-lg-4 tm-dotted-box-container">
                <article class="tm-dotted-box">
                    <i class="fas fa-3x fa-glasses tm-article-icon"></i>
                    <h3 class="tm-article-title">Download Sites</h3>
                    <p class="tm-article-text">Do not re-distribute our template ZIP file on your website. Or contact us first. Button color is #C99</p>
                    <a class="tm-btn tm-article-link" href="#">Read More...</a>
                </article>
            </div>
        </div>
@endsection

@section('featured')
    
    <!-- Featured -->
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small">Featured Carousel Items</h2>        
            </div>
        </div>
        
        <!-- Carousel -->
        <div class="grid tm-carousel">
            @foreach($homecrs as $homecrs)
            <figure class="effect-honey">
                <img src="{{$homecrs->image}}" alt="Featured Item">             
                <figcaption>
                    <h4><i>{!!$homecrs->title!!}</i></h4>
                </figcaption>
            </figure>
            @endforeach
        </div>
@endsection
