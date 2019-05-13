<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>master</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/master.css')}}">
	
</head>

<body>
	<!-- Admin Top bar -->
	
	<div class="main_panel">
		<div class="admin_top bg-dark">
			<div class="row">
				<div class="col-md-3">
					<div class="admin_title">
						  <h3>Admin</h3>
					</div>
				</div>
				<div class="col-md-6">
					

				</div>
				<div class="col-md-3 admin_profile">
					<ul>
						<li class="notification"><i class="fas fa-bell"><span class="badge badge-pill badge-danger">4</span></i></li>
						<li><img src="{{asset('image/admin.png')}}" alt="admin image" height="30" width="30">
							
						</li>
					</ul>
				</div>
			</div>
		</div>

		
		<hr>

		<!-- Admin Menus -->

		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-2 control_panel">
					
					<ul>
						<li>
							<form class="form-inline">
								<input class="form-control mr-sm-2  search_bar" type="search" placeholder="Search" aria-label="Search">
								<button><i class="fas fa-search"></i></button>
							</form>						
						</li>
						
						<li  class = "load_admin" data-url = "/users"><button class="btn btn-primary nav_buttons"><a href="#">USERS</a></button></li>
						<li  class = "load_admin" data-url = "/posts"><button class="btn btn-primary nav_buttons"><a href="#">POSTS</a></button></li>
						<!-- <li><button class="btn btn-primary nav_buttons"><a href="#">COMMENTS</a></button></li> -->
						<!-- <li><button class="btn btn-primary nav_buttons"><a href="#">ADD POST</a></button></li> -->
						<li class = "load_admin" data-url = "/category"><button class="btn btn-primary nav_buttons" ><a href="#">CATEGORY</a></button></li>
						<li class = "load_admin" data-url = "/history"><button class="btn btn-primary nav_buttons" ><a href="#">HISTORY</a></button></li>
						<li class = "load_admin" data-url = "/manage"><button class="btn btn-primary nav_buttons" ><a href="#">MANAGE</a></button></li>
					</ul>
				</div>

				<!-- Main Panel -->

				<div class="col-md-8 container admin_body">
					<div id="admin_content">
					
					</div>
				</div>

				<!-- Right side space for stuff maybe?? -->

				<div class="col-md-2 extra_options">
					<div class="container notify_field">
						<p>Notifications</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>

<script src="{{asset('js/master.js')}}"></script>
</html>