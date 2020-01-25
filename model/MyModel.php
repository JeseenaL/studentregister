<?php
	class MyModel
	{
		#STUDENT REGISTRATION
		
		function insertstudent($regno,$name,$mobile,$department,$course,$email,$semesterno,$year,$user,$pwd)
		{
			include '../config/connection.php';
			$sql="INSERT INTO student(RegisterNo,Name,Mobile,Department,Course,Email,SemesterNo,Year,Username,Password) VALUES ('".$regno."','".$name."','".$mobile."','".$department."','".$course."','".$email."','".$semesterno."','".$year."','".$user."','".$pwd."')";
			if(mysqli_query($conn,$sql))
			{
				#header('location:registerstudents.php');
			}
			else
			{
				echo 'error';
			}
		}
		
		#LOGIN FOR SUPERADMIN,ADMIN,STUDENT
		
		function logincheck($uname,$pwd)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM admin WHERE Username='".$uname."' AND Password='".$pwd."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					header('location:adminhome.php');
				}
			}
			else
			{
				$sql1="SELECT * FROM student WHERE Username='".$uname."' AND Password='".$pwd."'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>0)
				{
					echo 'hai';
					while($row1=mysqli_fetch_assoc($result1))
					{
						session_start();
						$_SESSION['id']=$row1['Sid'];
						header('location:studenthome.php');
					}
				}
				else
				{
					$sql2="SELECT * FROM superadmin WHERE Username='".$uname."' AND Password='".$pwd."'";
					$result2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($result2)>0)
					{
						echo 'hai';
						while($row1=mysqli_fetch_assoc($result2))
						{
							session_start();
							$_SESSION['id']=$row1['Sid'];
							header('location:superadmin.php');
						}
					}
					else
					{
						echo 'username or password incorrect';
					}
				}
			}
		}
		
		#CHANGE PASSWORD
		
		function changepwd($user,$email,$pwd)
		{
			include '../config/connection.php';
			$sql="UPDATE student SET Password='".$pwd."' WHERE Username='".$user."'  AND Email='".$email."'";
			if(mysqli_query($conn,$sql))
			{
				header('location:login.php');
			}
			else
			{
				echo 'error';
			}
		}	
		
		#ADD COURSE
		
		function addcourse(	$coursename,$deptname)
		{
			include '../config/connection.php';
			$sql="INSERT INTO course(Coursename,Deptname)values('".$coursename."','".$deptname."')";
			if(mysqli_query($conn,$sql))
			{
				header('location:addcourse.php');
			}
			else
			{
				echo 'error';
			}	
		}
		
		#ADD MARK
		
		function addmark($registerno,$sid,$course,$name,$subject,$result,$credits,$totalgpa)
		{
			include '../config/connection.php';
			$sql="INSERT INTO result(RegisterNo,Sid,Course,Name,Subject,Result,Credits,TotalGPA)values('".$registerno."','".$sid."','".$course."','".$name."','".$subject."','".$result."','".$credits."','".$totalgpa."')";
			if(mysqli_query($conn,$sql))
			{
				#header('location:addsubject.php');
			}
			else
			{
				echo 'error';
			}	
		}
		
		#ADD SUBJECT
		
		function addsubject($course,$dept,$subname,$subcode,$sem,$credits)
		{
			include '../config/connection.php';
			$sql="INSERT INTO subject(Course,Department,Subjectname,Subjectcode,Semester,Credits) VALUES ('".$course."','".$dept."','".$subname."','".$subcode."','".$sem."','".$credits."')";
			if(mysqli_query($conn,$sql))
			{
				#header('location:addsubject.php');
			}
			else
			{
				echo 'error';
			}	
		}
		
		#STUDENT PROFILE
		
		function studentprofile($id)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM student WHERE Sid='".$id."'";
			$result=(mysqli_query($conn,$sql));
			return $result;
		}
		function getdepartment($id)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM student WHERE Sid='".$id."'";
			$result=(mysqli_query($conn,$sql));
			return $result;
		}
		
		#STUDENT SUBJECT
		
		function studentsubject($dept)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM subject WHERE Department='".$dept."'";
			$result=(mysqli_query($conn,$sql));
			return $result;
		}
		
		#STUDENT RESULT
		
		function studentresult($id)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM result WHERE Sid='".$id."'";
			$result=(mysqli_query($conn,$sql));
			return $result;
		}
		
		#ADD ADMIN
		
		function addadmin($user,$pwd)
		{
			include '../config/connection.php';
			$sql="INSERT INTO admin(Username,Password) VALUES ('".$user."','".$pwd."')";
			if(mysqli_query($conn,$sql))
			{
				header('location:addadmin.php');
			}
			else
			{
				echo 'error';
			}	
		}
		
		#VIEW ADMIN
		
		function viewadmin()
		{
			include '../config/connection.php';
			$sql="SELECT * FROM admin";
			$result=(mysqli_query($conn,$sql));
			return $result;	
		}
		
		#REMOVE ADMIN
		
		function removeadmin($id)
		{
			include '../config/connection.php';
			$sql="DELETE FROM admin WHERE id=$id";
			if(mysqli_query($conn,$sql))
			{
				header('location:viewadmin.php');
			}
			else
			{
				echo 'error';
			}	
		}
		
		#REMOVE STUDENT
		
		function removestudent($id)
		{
			include '../config/connection.php';
			$sql="DELETE FROM student WHERE Sid=$id";
			if(mysqli_query($conn,$sql))
			{
				
			}
			else
			{
				echo 'error';
			}	
		}
		
		#ADD TIMETABLE
		
		function addtimetables($day,$dept,$h1,$h2,$h3,$h4,$adminid,$sem)
		{
			include '../config/connection.php';
			$sql="INSERT INTO timetable(Day,Department,Hour1,Hour2,Hour3,Hour4,Adminid,SemesterNo)values('".$day."','".$dept."','".$h1."','".$h2."','".$h3."','".$h4."','".$adminid."','".$sem."')";
			if(mysqli_query($conn,$sql))
			{
				#header('location:addtimetable.php');
			}
			else
			{
				echo 'error';
			}	
		}
		
		#VIEW TIMETABLE
		
		function studenttimetable($dept,$sem)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM timetable WHERE Department='".$dept."' AND SemesterNo='".$sem."'";
			$result=(mysqli_query($conn,$sql));
			return $result;
		}
	}
?>
					