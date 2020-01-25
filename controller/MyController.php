<?php
	include '../config/connection.php';
	class MyController
	{
		
		function StudReg()
		{
			$regno=$_POST['regno'];
			$name=$_POST['name'];
			$mobile=$_POST['mobile'];
			$department=$_POST['department'];
			$course=$_POST['course'];
			$email=$_POST['email'];
			$semesterno=$_POST['semesterno'];
			$year=$_POST['year'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->insertstudent($regno,$name,$mobile,$department,$course,$email,$semesterno,$year,$username,$password);
		}
		
		function LoginAct()
		{
			$uname=$_POST['username'];
			$pwd=$_POST['password'];
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->logincheck($uname,$pwd);
		}
		function Loadfirst()
		{
			header('location:view/login.php');
		}
		function Update($user)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->Updateuser($user);
		}
		function PasswordChange($user,$email,$pwd)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->changepwd($user,$email,$pwd);
		}
		function Addcourse($coursename,$deptname)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addcourse($coursename,$deptname);
		}
		function sel()
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->selectusers();
			return $result;
		}
		function Addmark($registerno,$sid,$course,$name,$subject,$result,$credits,$totalgpa)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addmark($registerno,$sid,$course,$name,$subject,$result,$credits,$totalgpa);
		}
		function Addsubject($course,$dept,$subname,$subcode,$sem,$credits)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addsubject($course,$dept,$subname,$subcode,$sem,$credits);
		}
		function Studentprofile($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->studentprofile($id);
			return $result;
		}
		function Getdept($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->getdepartment($id);
			return $result;
		}
			
		function Studentsubject($dept)
		{
			#include '../model/MyModel.php';
			$m=new MyModel();
			$r=$m->studentsubject($dept);
			return $r;
		}	
		function Studentresult($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->studentresult($id);
			return $result;
		}	
		function Addadmin($user,$pwd)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addadmin($user,$pwd);
		}	
		function Viewadmin()
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->viewadmin();
			return $result;
		}
		function Removeadmin($id)
		{
			#include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->removeadmin($id);
		}	
		function Removestudent($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->removestudent($id);
		}	
		function Addtimetable($day,$dept,$h1,$h2,$h3,$h4,$adminid,$sem)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addtimetables($day,$dept,$h1,$h2,$h3,$h4,$adminid,$sem);
		}	
		function Studenttimetable($dept,$sem)
		{
			#include '../model/MyModel.php';
			$m=new MyModel();
			$r=$m->studenttimetable($dept,$sem);
			return $r;
		}	
		
	}
?>
				