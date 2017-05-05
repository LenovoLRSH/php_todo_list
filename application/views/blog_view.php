
<html>
<head>
    <title><?=$title?></title>
</head>
<body>

<h1><?=$heading?></h1>

<?=form_open('blog/thing_insert');?>

<p><textarea name="body" rows="5"></textarea></p>
<p><input type="submit" value="添加"></p>


<?php foreach ($query->result() as $row): ?>

    <h4><?=$row->body?></h4>

    <p><?=anchor('blog/delete/' .$row->id, '删除');?></p>

    <hr>

<?php endforeach; ?>



</body>
</html>