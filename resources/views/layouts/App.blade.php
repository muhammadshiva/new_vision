<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>New Vision HTML CSS Template</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="slick/slick.css" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="slick/slick-theme.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com -->
	<link href="css/templatemo-new-vision.css" rel="stylesheet" />
<!--

New Vision Template

https://templatemo.com/tm-542-new-vision

-->
</head>
<body>
    <!-- Page Header -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
            {{-- Navbar disini --}}
            @include('layouts.navbar')
            </div>
        </div>
        
        <div class="row">
            {{-- Jumbotron disini --}}
            @yield('jumbotron')
        </div>
        
        <!-- Main -->
        <main>
            <section class="tm-welcome">
                <!-- Welcome section -->
                <!-- {{-- Welcome Section --}} -->
                @yield('welcome')
            </section>
            
            <section class="tm-featured">
           
                @yield('featured')
            </section>
            
            <footer>
                Copyright &copy; 2020 New Vision 
                
                - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
            </footer>
            
        </main>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>