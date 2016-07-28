<html>
<body>  
<hr>
<?php foreach($comment as $row2):?>
<p><?=$row2['author']?></p>
<p><?=$row2['body']?></p>
<?php endforeach;?> 
<hr>
</body>   
</html>
