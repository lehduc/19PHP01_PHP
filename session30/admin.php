<?php session_start(); ?>
<h1>Admin page</h1>
<a href="admin.php?controller=home&action=index">Home</a>
 | <a href="admin.php?controller=user&action=add_user">Add user</a>
  | <a href="admin.php?controller=user&action=list_user">List user</a>
  | <a href="admin.php?controller=user&action=login">Login</a>
   | <a href="admin.php?controller=user&action=register">Register</a>
<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>