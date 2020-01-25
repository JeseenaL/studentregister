<!doctype html>
 <html>
  <head>
      <title>Addmarks</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			
		</script>
  </head>
  <body>
  <!----------------------------------ADMIN-ADD MARKS---------------------------------->	
  <div>
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
              <a class="nav-link " href="adminhome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcourse.php">
                <i class="fas fa-home"><p>AddCourse</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="registerstudents.php">
                <i class="fas fa-home"><p>AddStudents</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addmarks.php">
                <i class="fas fa-home"><p>AddMarks</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addsubject.php">
                <i class="fas fa-home"><p>AddSubjects</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewstudents.php">
                <i class="fas fa-home"><p>ViewStudents</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addtimetable.php">
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
		<div>
		<div class="container bg-light col-5">
          <form class="form-horizontal" name="myform" role="form" method="post">
                <h3>Add Marks</h3>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">RegisterNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="registerno" class="form-control" name="registerno" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Student Id</label>
                    <div class="col-sm-8">
                        <input type="text" id="sid" class="form-control" name="sid" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" class="form-control" name="name" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Subject</label>
                    <div class="col-sm-8">
                        <input type="text" id="subject" class="form-control" name="subject" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Result</label>
                    <div class="col-sm-8">
                        <input type="text" id="result" class="form-control" name="result" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Credit</label>
                    <div class="col-sm-8">
                        <input type="text" id="credits" class="form-control" name="credits" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">TotalGPA</label>
                    <div class="col-sm-8">
                        <input type="text" id="totalgpa" class="form-control" name="totalgpa" required autofocus>
                    </div>
                </div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary ml-5" name="addmark">ADD</button>
				
                </div>
            </form>
			<?php
				
					if(isset($_POST['addmark']))
					{
						include'../controller/MyController.php';
						$obj=new MyController();
						$obj->Addmark($_POST['registerno'],$_POST['sid'],$_POST['course'],$_POST['name'],$_POST['subject'],$_POST['result'],$_POST['credits'],$_POST['totalgpa']);
					}
				?>
		</div> 
				 <!-- /.form-group -->
               
            </div>
               
			
            <!-- /form -->
 <!-- ./container -->
		
		</div>
	
	</div>
  </body>
</html>