<?php
if(!defined('myheader')){
  header('location:index.php');
}

?>
<html>
<head>
      <title>  Hostel Management System</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="simple-sidebar.css" rel="stylesheet">
</head>
<body>
<style>
  img{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 40%;
    }
  p.p1{
      padding: 5px;
}
</style>
<header>
  
</header>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Hostel Management System</a>
  <button id = "togg" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span id = "toggbtn" class="navbar-toggler-icon"></span>
  </button>
  <span  id="menu-toggle"  class="navbar-toggler-icon" style="display:none;"></span>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" id="alloc" href="student_form.php" style="display: none">Allocation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="realloc" href="realloc.php" style="display: none">Reallocation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="expand" name="expand" href="expand.php" style="display:none;">ExpandHostel</a>
        </li>
        <li id="drop" class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="login.php">Admin Login</a>
              <a class="dropdown-item" href="student_login_form.php">Student Login</a>
            </div>
        </li>
        <li id="manage" class="nav-item dropdown" style="display:none;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="addEmployee.php">Add Employees</a>
              <a class="dropdown-item" href="employee_list.php">View Employess</a>
            </div>
        </li> -->
    </ul>  
        <form class="form-inline my-2 my-lg-0 " action="login_configure.php" method="post">
          <button class="btn btn-danger pull-right" type="submit" value="logout" name="logout" id="logout" style="float:right;display:none">LogOut</button>
        </form>
        <form class="form-inline my-2 my-lg-0 " action="student_login_configure.php" method="post">
          <button class="btn btn-danger pull-right" type="submit" value="logout" name="logout_s" id="logout_s" style="display:none">LogOut</button>
        </form>
  </div>
</nav>
<div class="d-flex" id="wrapper">
      <div class="bg-light border-right" id="sidebar-wrapper" style="margin-top:-7px;">
          <div class="sidebar-heading"><?php echo "Welcome Admin"?></div>
          <div class="list-group list-group-flush">
            <a href="student_form.php" class="list-group-item list-group-item-action bg-light" id="alloc" href="student_form.php">Allocate Student</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Reallocate Student</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Manage Building</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Manage Employee</a>
            <a href="student_profile.php" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Setting</a>
          </div>
      </div>
      <div id="page-content-wrapper">
          <div class="container-fluid">
              <img src="admin.png" >
 </div>
      </div>
    </div>

      <center>
     <p id="pmessage" style="color:red;display:none;">User Already Exist</p>  
     </center>
</body>
</html>              
