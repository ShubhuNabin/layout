<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>master</title>
	<link rel="stylesheet" href="{{asset('css/master.css')}}">
	
</head>
<body>
	
	<!-- Common header -->
	<nav class="my-6">
		
		<div class="row  bg-dark">
			<div class="col-md-5 my-6">
				<a href="/">Brand/Logo</a>
				<!-- <img src="{{asset('image/logo.png')}}" alt="logo"> -->
			</div>
			<div class="col-md-7">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/services">Services</a></li>
					<li><a href="/gallery">Gallery</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/about">About</a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End of header -->

	<!-- Body -->
	<div>
		<div class="wrapper">
			
			@yield('main-container')
		</div>

	</div>

	
	<!-- End of body -->

	<!-- Common footer -->
	
	<footer class="page-footer font-small blue">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3">© 2019 Copyright:
	    
	  </div>
	  <!-- Copyright -->

	</footer>
	
	<!-- End of footer -->

</body>
</html>