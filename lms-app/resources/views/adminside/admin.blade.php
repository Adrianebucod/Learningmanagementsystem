<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
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
			<li class="active">
				<a href="/admin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li>
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
				<a href="/student">
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
				<a href="/login" class="logout">
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
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>4 Courses</h3>
						<p>Courses</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>4 Students</h3>
						<p>Students</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>4 Courses</h3>
						<p>Teachers</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Assignments</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Deadline</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/john.jpg">
									<p>John Laput</p>
								</td>
								<td>03-10-2023</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/arc.png">
									<p>Arc anak ni Coco ni Martin </p>
								</td>
								<td>03-10-2023</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.jpg">
									<p>Kiyan crush ni Nicole</p>
								</td>
								<td>03-10-2023</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/bb.jpg">
									<p>Vice Baby Gandang Hari</p>
								</td>
								<td>03-10-2023</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/adi.jpg">
									<p>Adriane Onod Bucod </p>
								</td>
								<td>03-10-2023</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
                            <tr>
								<td>
									<img src="img/arnel the man.jpeg">
									<p>Arnel the man the myth the Ronnie Alonte</p>
								</td>
								<td>03-10-2023</td>
								<td><span class="status completed">Pending</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>