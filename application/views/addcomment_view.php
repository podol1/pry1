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
	<h2><?=anchor('news', 'Main page');?></h2>
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
				<p>Категория:<?=$item['category_id']?>&nbsp Статья была опубликована: <?=$item['creation_date']?></p>
				<p><img src="<?=$item['picture']?>"></p>
				<p><?=$item['body']?></p>
				<p>Всего просмотров: <?=$item['views']?>&nbsp Сейчас просматривают: <?=$item['views']?></p>
				<?php endforeach;?>
				<p><b>Теги:</b> Тут выводим теги записи</p>
				
				<p><b>Оставьте свой комментарий:</b></p>
				<?php echo form_open('addcomment'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Комментарий успешно добавлен!</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Ваш комментарий:'); ?> <?php echo form_error('body'); ?><br />
<?php echo form_textarea(array('id' => 'body', 'name' => 'body')); ?><br />
<?php echo form_submit(array('id' => 'submit', 'value' => 'submit')); ?>
<?php echo form_close(); ?><br/>


<hr>
<?php foreach($comment as $comment):?>
<p><b>Комментарий от <?=$comment['author']?></b>&nbsp<a href="/view/plus/<?=$comment['id']?>">+ Плюсануть</a>&nbsp <a href="/view/plus/<?=$comment['id']?>">- Минусануть</a></p>
<p><?=$comment['body']?></p>
<p><a href="/view/comment/<?=$comment['id']?>">Ответить на комментарий</a></p>
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