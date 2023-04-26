<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
				<a href="/admin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li class="active">
				<a href="/department">
					<i class="bx bxs-doughnut-chart" ></i>
					<span class="text">Department</span>
					
				</a>
			</li>
			<li>
				<a href="/course">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Courses</span>
				</a>
			</li>
			<li>
				<a href="/teacher">
					<i class='bx bxs-group' ></i>
					<span class="text">Teachers</span>
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
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/profile">
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
				<div class="row">
				  <div class="col-md-12">			
					<h3>Add Department</h3>
					<br>
					<br>

					@if($errors->any())
      <div class="col-12">
          @foreach($errors->all() as $error)
            <div class="alert alert-danger ">{{$error}}</div>
          @endforeach
      </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    </div>
    <form action="{{route('department.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
    @csrf
					<form>
					  <div class="form-group">
						<label for="department-name">Department Name:</label>
						<input name="departmentname" type="text" class="form-control" id="department-name" placeholder="Enter department name">
					  </div>
					  <div class="form-group">
						<label for="person-in-charge">Person in Charge:</label>
						<input name="personincharge" type="text" class="form-control" id="person-in-charge" placeholder="Enter person in charge">
					  </div>
					  <button type="submit" class="btn btn-danger">Add Department</button>
					  <a href="/admin" class="btn btn-secondary">Back</a>

					  <br>
					  <br>
					  <br>
					  <h3>Department List</h3>
					</form>
</form>

					<table class="table">
					  <thead>
						<tr>
						  <td>Department</td>
						  <td>Person in Charge</td>
						  <td>Actions</td>
						</tr>
						@foreach ($department as $dep)
						<tr>
							<td>{{$dep['departmentname']}}</td>
							<td>{{$dep['personincharge']}}</td>
							<td>
							<button type="submit" class="btn btn-success">Edit</button>
							<a href="/click_delete/{{ $dep->id }}" class="btn btn-danger">Delete </a>
							</td>
						</tr>
						@endforeach 
					  </thead>
					  <tbody>
					
	
						<!-- Add more departments here as needed -->
					  </tbody>
					</table>
					<a href="#" class="btn btn-secondary">Back</a>
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