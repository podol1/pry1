<!DOCTYPE html>
<html>
<head>
<title>Главная страница</title>
<link href="/pry/css/bootstrap.min.css" rel="stylesheet">
 </head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<div class="row">
	<div class="span12">
	<h2 class="navbar-brand brand-name">
           <a href="<?php base_url();?>"><img src="/pry/img/logo.png" alt="На главную"></a>
       </h2>
	      
	<br>
	</div>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="span3">Левая колонка
			<br>
			<p>Рекламные блоки</p>
			</div>
			
			<div class="span8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php foreach($slider as $slide):?>
	<div class="item active">
      <a href="index.php/article/view/<?=$slide['id']?>"><img src="<?=$slide['picture']?>" alt="Еще"></a>
	  <h4><a href="index.php/article/view/<?=$slide['id']?>"><?=$slide['title']?></a></h4>
	<?php endforeach;?>
    </div>	
	<?php foreach($slider2 as $slide2):?>
    <div class="item">
      <a href="index.php/article/view/<?=$slide['id']?>"><img src="<?=$slide2['picture']?>"  alt="Еще"></a>
	  <h4><a href="index.php/article/view/<?=$slide2['id']?>"><?=$slide2['title']?></a></h4>
    </div>
	<?php endforeach;?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>
			
			
			
			
			<h1>Все самые актуальные новости:</h1>
				<h3><?=anchor('news/category/1', 'Наука');?></h3>
				<?php foreach($news1 as $item1):?>
				<p><a href="index.php/article/view/<?=$item1['id']?>"><?=$item1['title']?></a></p>
				<?php endforeach;?>
				<hr>
				<h2>Общество:</h2>
				<?php foreach($news2 as $item2):?>
				<p><a href="index.php/article/view/<?=$item2['id']?>"><?=$item2['title']?></a></p>
				<?php endforeach;?>
				<hr>
					<h2>Бизнес:</h2>
				<?php foreach($news3 as $item3):?>
				<p><a href="index.php/article/view/<?=$item3['id']?>"><?=$item3['title']?></a></p>
				<?php endforeach;?>
				<hr>
					<h2>Финансы:</h2>
				<?php foreach($news4 as $item4):?>
				<p><a href="index.php/article/view/<?=$item4['id']?>"><?=$item4['title']?></a></p>
				<?php endforeach;?>
				<hr>
					<h2>Политика:</h2>
				<?php foreach($news5 as $item5):?>
				<p><a href="index.php/article/view/<?=$item5['id']?>"><?=$item5['title']?></a></p>
				<?php endforeach;?>
				<hr>
				
					<h2>Технологии:</h2>
				<?php foreach($news6 as $item6):?>
				<p><a href="index.php/article/view/<?=$item6['id']?>"><?=$item6['title']?></a></p>
				<?php endforeach;?>
				<hr>
				<h2>ТОП 3 комментатора:</h2>
				<?php foreach($user as $topuser):?>
				<p><a href="index.php/article/users/<?=$topuser['author_id']?>"><?=$topuser['author']?></a></p>
				<?php endforeach;?>
				<hr>

			</div>
			<div class="span3">Правая колонка
			<br>
			<p>Рекламные блоки</p>
			</div>
		</div>
	</div>
</body>
</html>