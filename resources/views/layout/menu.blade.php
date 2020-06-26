<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    @yield('title')
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
				<div class="p-4">
                    <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
                    <ul class="list-unstyled components mb-5">
                        <li class="active">
                            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-user mr-3"></span> About</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
                        </li>
                    </ul>

                    <div class="footer">
                        <p>
                            Copyright @Syarip_nur
                        </p>
                    </div>
	            </div>
            </nav>
            
            <div id="content" class="p-4 p-md-5 pt-5">
                <!--------------------------- content ---------------------->
                @yield('content')   
            </div>

		</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('javascript')
  </body>
</html>