<!doctype html>
 <html>
  <head>
      <title>student</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			
		</script>
  </head>
  <body>
	<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="studenthome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentprofile.php">
                <i class="fas fa-home"><p> Profile</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentresult.php">
                <i class="fas fa-home"><p> Result</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentsubject.php">
                <i class="fas fa-home"><p> Subject</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewtimetable.php">
                <i class="fas fa-home"><p> Timetable</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="login.php">
                <i class="fas fa-home"><p> Logout</p></i>
              </a>
            </li>

          </ul>

        </nav>
	</div>
	<div class="container bg-light col-5">
		<div class="form-hrizontal">
			<div class="form-group">
								
				<?php
					include '../controller/MyController.php';
					$obj=new MyController();
					session_start();
					$result=$obj->Studentprofile($_SESSION['id']);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				
				<!------------------STUDENT'S PROFLE VIEW----------------------------->
				
					<h1><?php echo $row['Name'];?></h1><br>
						<div class="form-group">
                        <label  class="col-sm-3 control-label">Sid</label>
                    <div class="col-sm-8">
                        <input type="text" id="sid" class="form-control" name="sid" value="<?php echo $row['Sid'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Register No</label>
                    <div class="col-sm-8">
                        <input type="text" id="registerno" class="form-control" name="registerno" value="<?php echo $row['RegisterNo'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" class="form-control" name="name" value="<?php echo $row['Name'];?>" readonly>
                       
                    </div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="text" id="mobile" class="form-control" name="mobile" value="<?php echo $row['Mobile'];?>" readonly>
                       
                    </div>
                </div>
				
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" value="<?php echo $row['Department'];?>" readonly>                    
					</div>
                </div>
				
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" value="<?php echo $row['Course'];?>" readonly>                    
					</div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['Email'];?>" readonly>                    
					</div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">SemesterNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="semesterno" class="form-control" name="semesterno" value="<?php echo $row['SemesterNo'];?>" readonly>                    
					</div>
                </div>
				
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="year" id="year" class="form-control" name="year" value="<?php echo $row['Year'];?>" readonly>                    
					</div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['Username'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $row['Password'];?>" readonly>
                    </div>
			
				<?php
					}
				?>
			</div>
		</div>
	</div>
  </body>
</html>