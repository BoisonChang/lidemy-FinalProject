<!DOCTYPE html>


<html>
<head>
  <meta charset="utf-8">
   <title> TripBook 雲端共享圖書館</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">	
</head>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<body>
  <nav class="navbar mb-5 navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.html">TripBook</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
	  <ul class="navbar-nav">
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          分類專區
	      </a>
	      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	        <a class="dropdown-item" href="#">文學</a>
	        <a class="dropdown-item" href="#">商業</a>
	        <a class="dropdown-item" href="#">程式語言</a>
	      </div>
	    </li class="nav-item">
		<form class="form-inline">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	  </ul>
	  </div>
	  <div>
	  	<a class="btn btn-info mr-2 clear-save-todo" href="login.php">登入</a>
	  </div>
  </nav>

  <div class="container-wrapper">
    <div class="container">
      <div class="edit-post">
        <form action="handle_edit.php?id=<?php echo $id ?>" method="POST">
          <div class="edit-post__title">
            發表文章：
          </div>
          <div class="edit-post__input-wrapper">
            <textarea  rows="1" class="edit-post__title-content" name="title"></textarea>
          </div>
          <div class="edit-post__input-wrapper">
            <textarea rows="20" class="edit-post__content" name="content"></textarea>
            <div class="edit-post__pic">
              <input type="file"  onchange="openFile(event)" class="edit-post__pic-input">
              <img id="output" class="edit-post__pic-content">
            </div>
          </div>
          <div class="edit-post__btn-wrapper">
            <input class="edit-post__btn" type='submit' value="送出" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>





<footer class="page-footer font-small blue">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" class="footer-content"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="./index.js"></script>
</html>