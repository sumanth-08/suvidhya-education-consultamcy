<?php
session_start();
error_reporting(0);
include('dbconnection.php');

if (strlen($_SESSION['admin_id']==0)) {
  header('location:logout.php');
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>User Dashboard</title>
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/dashboard.css">
  </head>
  <body>

<nav class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><span class="fa fa-pencil-square-o "></span>Suvidya Education Consultancy</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
    <div class="welcome-msg">
	    <h6 class="text-light">Welcome <?php echo $_SESSION['admin_name']; ?>..!</h6>
    </div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link font-weight-bold" href="adminlogin.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-4"style="background-color: #001a33">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="UserProfileEdit.php">
              <span data-feather="edit"></span>
              <font color="lavender">User Profile Edit </font>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="UserEnquery.php">
              <span data-feather="user"></span>
           <font color="lavender">Enquire </font>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="UserLogout.php">
              <span data-feather="log-out"></span>
           <font color="lavender">Logout </font>
            </a>
          </li>
        </ul>

       
      </div>
    </nav>