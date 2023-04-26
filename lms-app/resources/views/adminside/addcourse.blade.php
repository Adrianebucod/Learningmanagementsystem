<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
				<a href="index.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li>
				<a href="Department.html">
					<i class="bx bxs-doughnut-chart" ></i>
					<span class="text">Department</span>
					
				</a>
			</li>
			<li class="active">
				<a href="Course.html">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Courses</span>
				</a>
			</li>
			<li>
				<a href="Teacher.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Teachers</span>
				</a>
			</li>
			<li>
				<a href="Schedule.html">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Schedule</span>
				</a>
			</li>
			<li>
				<a href="Students.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Students</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="Profile.html">
					<i class='bx bxs-cog' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="/form/logout.php" class="logout">
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
			<div class="container">
				<h2>Add Course</h2>
				<form>
					<div class="form-group">
						<label for="number-of-units">Course Code:</label>
						<input type="text" class="form-control" id="Course Title">
					  </div>
				  <div class="form-group">
					<label for="number-of-units">Course Title:</label>
					<input type="text" class="form-control" id="Course Title">
				  </div>
				  <div class="form-group">
					<label for="number-of-units">Number of Units:</label>
					<input type="text" class="form-control" id="number-of-units">
				  </div>
				  <div class="form-group">
					<label for="semester">Semester:</label>
					<select class="form-control" id="semester">
					  <option>1st Semester</option>
					  <option>2nd Semester</option>
					  <option>Summer Class</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="description">Description:</label>
					<textarea class="form-control" id="description" rows="5"></textarea>
				  </div>
				  <button type="submit" class="btn btn-danger">Save</button>
				  <a href="#" class="btn btn-secondary">Back</a>
				</form>
			  </div>
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>