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

	<a href="<?php echo site_url(); ?>"><img src="/pry/img/logo.png" alt="На главную"></a>
	<br>
	</div>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="span3">Левая колонка
			<br>
			<p>Рекламные блоки</p>
			</div>
			<div class="span8"><h1>Все последние новости из всех категорий:</h1>
				<?php foreach($news as $item):?>
				<p><a href="<?php echo site_url(); ?>/articles/<?=$item['id']?>"><?=$item['title']?></a></p>
				<?php endforeach;?>
				<hr>
				<?php echo $this->pagination->create_links();?> 


			</div>
			<div class="span3">Правая колонка
			<br>
			<p>Рекламные блоки</p>
			</div>
		</div>
	</div>
</body>
</html>