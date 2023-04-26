<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">

	<title>KAAA Learning Management System</title>
</head>
<body>


		<!-- SIDEBAR -->
		<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx:laptop'></i>
			<span class="text">KAAA</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/index">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="/course">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Courses</span>
				</a>
			</li>
			<li>
				<a href="/schedule">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Schedule</span>
				</a>
			</li>
			<li>
				<a href="/students">
					<i class='bx bxs-group' ></i>
					<span class="text">Students</span>
				</a>
			</li>
			<li>
				<a href="/assignments>
					<i class='bx bxs-group' ></i>
					<span class="text">Assignments</span>
				</a>
			</li>
			<li>
				<a href="/attendance">
					<i class='bx bxs-group' ></i>
					<span class="text">attendace</span>
				</a>
			</li>
			<li>
				<a href="/materials>
					<i class='bx bxs-group' ></i>
					<span class="text">materials</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/profile">
					<i class='bx bxs-cog' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="form/adminpage.html" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Sign-out</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type
					="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class=""></span>
			</a>
			<a href="#" class="profile">
				<img src="img/arc.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
            <h1>Courses</h1>	
            <h3>My Courses</h3>
			<div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Course Name</h5>
                        <p class="card-text">Course Description</p>
                        <a href="#" class="btn btn-danger">Go to Course</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Course Name</h5>
                        <p class="card-text">Course Description</p>
                        <a href="#" class="btn btn-danger">Go to Course</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Course Name</h5>
                        <p class="card-text">Course Description</p>
                        <a href="#" class="btn btn-danger">Go to Course</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Course Name</h5>
                          <p class="card-text">Course Description</p>
                          <a href="#" class="btn btn-danger">Go to Course</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Course Name</h5>
                          <p class="card-text">Course Description</p>
                          <a href="#" class="btn btn-danger">Go to Course</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Course Name</h5>
                          <p class="card-text">Course Description</p>
                          <a href="#" class="btn btn-danger">Go to Course</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
			
	

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>