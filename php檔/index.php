<?php
  session_start();
  require_once("conn.php");
  require_once("utils.php");
  $username = NULL;
  $user = NULL;
  if (!empty($_SESSION["username"])) {
	  $username = $_SESSION["username"];
	  $user = getUserFromSession($username);
  }
  
  /*
  $result = $conn->query("select * from Wozski_comments order by id desc");
  if (!$result) {
  	die ("Error:" . $conn->error);
  }
  */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <title> TripBook 雲端共享圖書館</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"
	
</head>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
	      <li>    	
	      </li>
	    </ul>
	  </div>
	  <div>
		<?php if (!empty($username)) {?>
		  <div style="font-size:15px">您好！<?php echo $user['nickname'] ?></div>
		  <a class="btn btn-info mr-2 clear-save-todo" href="handle_logout.php">登出</a>
		<?php }else {?>
		  <a class="btn btn-info mr-2 clear-save-todo" href="login.php">登入</a>
		<?php }?>
	  </div>
	</nav>
	<div class="container">
		<div class="card-group">
		  <div class="card">
		    <img src="1.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">零規則</h5>
		      <p class="card-text">讀《零規則》一書，這家公司的企業文化：印象很深刻的幾個點，寧願多出點錢聘創造力頂尖人才，一個頂尖人才勝過十個普通人才；不給績效獎金直接薪水開到市場行情，因為頂尖人才不管拿多少錢都會發揮最佳表現；只要發……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <img src="2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">哈佛寫作課</h5>
		      <p class="card-text">這本書有點像是新聞工作者的萬用寶典，除此之外記者在進行跟隨受訪者生活採取素材時必須保持距離，一開始就要告訴受訪者這點，在緊急情況發生時或許你的幫忙輕而易舉拯救他們，但這會破壞整個故事，忍耐住！除非你覺……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		  	<div class="card-image">
		      <img src="3.jpg" class="card-img-top" alt="...">
		    </div>
		    <div class="card-body">
		      <h5 class="card-title">尋找創意甜蜜點</h5>
		      <p class="card-text">天才，又或者創意，到底怎麼來的？在這之前我們可以先來定義什麼是創意，事實上創意是一種「社會現象」，只有社會認同的產出才會被稱之為創意，而進一步拆解創意的要素就更有趣了，要產出創意你必須先掌握某個領域的……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		  	<div class="card-image">
		      <img src="4.jpg" class="card-img-top" alt="..." >
		    </div>
		    <div class="card-body">
		      <h5 class="card-title">教練</h5>
		      <p class="card-text">這本書講述已過世傳奇教練比爾，他是矽谷現今最有影響力的幾間科技公司領導人的諮詢對象，賈柏斯願意聽取他的意見，而 Google 甚至認為是比爾，成就了現在 Google 的樣貌，數不盡的矽谷科技公司視他為教練，而跟他共事過的人無論……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
		<div class="card-group">
		  <div class="card">
		    <img src="1.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">零規則</h5>
		      <p class="card-text">讀《零規則》一書，這家公司的企業文化：印象很深刻的幾個點，寧願多出點錢聘創造力頂尖人才，一個頂尖人才勝過十個普通人才；不給績效獎金直接薪水開到市場行情，因為頂尖人才不管拿多少錢都會發揮最佳表現；只要發……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <img src="2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">哈佛寫作課</h5>
		      <p class="card-text">這本書有點像是新聞工作者的萬用寶典，除此之外記者在進行跟隨受訪者生活採取素材時必須保持距離，一開始就要告訴受訪者這點，在緊急情況發生時或許你的幫忙輕而易舉拯救他們，但這會破壞整個故事，忍耐住！除非你覺……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		  	<div class="card-image">
		      <img src="3.jpg" class="card-img-top" alt="...">
		    </div>
		    <div class="card-body">
		      <h5 class="card-title">尋找創意甜蜜點</h5>
		      <p class="card-text">天才，又或者創意，到底怎麼來的？在這之前我們可以先來定義什麼是創意，事實上創意是一種「社會現象」，只有社會認同的產出才會被稱之為創意，而進一步拆解創意的要素就更有趣了，要產出創意你必須先掌握某個領域的……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		  	<div class="card-image">
		      <img src="4.jpg" class="card-img-top" alt="..." >
		    </div>
		    <div class="card-body">
		      <h5 class="card-title">教練</h5>
		      <p class="card-text">這本書講述已過世傳奇教練比爾，他是矽谷現今最有影響力的幾間科技公司領導人的諮詢對象，賈柏斯願意聽取他的意見，而 Google 甚至認為是比爾，成就了現在 Google 的樣貌，數不盡的矽谷科技公司視他為教練，而跟他共事過的人無論……</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
	</div>
</body>
<nav aria-label="..." class="paginationv-top">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<footer class="page-footer font-small blue">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" class="footer-content"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</html>