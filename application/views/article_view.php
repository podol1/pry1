<!DOCTYPE html>
<html>
<head>
<title><?=title?></title>
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
<div class="span8">
<?php foreach($article as $item):?>
				<h1><?=$item['title']?></h1>
				<p>Категория:<?=$item['category_name']?>&nbsp Статья была опубликована: <?=$item['creation_date']?></p>
				<p><img src="<?=$item['picture']?>"></p>
				<p><?=$item['body']?></p>
				<p>Всего просмотров: <?=$item['views']?>&nbsp Сейчас просматривают: <?=$item['current_views']?></p>
				<?php endforeach;?>
				<p><b>Теги:</b> Тут выводим теги записи</p>
				
				<p><b>Оставьте свой комментарий:</b></p>
			<?php echo form_open('article/commentadd');
			echo form_hidden('news_id', $this->uri->segment(3));?>
<div><textarea name="body" id="body" rows="3" cols="240"></textarea></div>
<input type="submit" value="Отправить комментарий" class="btn btn-info" />
<?php echo form_close();?>


<hr>
<?php foreach($comment as $comment):?>
<p><b>Комментарий от <?=$comment['author']?></b>&nbsp Рейтинг комментария: <?=$comment['rating']?> &nbsp <a href="<?php echo base_url(); ?>index.php/article/plus/<?=$comment['id']?>">+ Плюсануть</a>&nbsp <a href="<?php echo base_url(); ?>index.php/article/minus/<?=$comment['id']?>"> - Минусануть</a></p>
<p><?=$comment['body']?></p>
<p><?=$comment['creation_date']?>&nbsp <a href="/view/reply/<?=$comment['id']?>">Ответить на комментарий</a></p>
<hr>
<?php endforeach;?> 
</div>

<div class="span3">Правая колонка
			<br>
			<p>Рекламные блоки</p>
			</div>
		</div>
	</div>
</body>
</html>