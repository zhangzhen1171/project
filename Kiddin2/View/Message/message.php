<?php
$db = new DB();
$info=$db->select('select * from message');
print_r($info);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>留言板</title>
</head>
<body>
  <h4>留言板</h4><hr>
  <a href='http://demo.message.com/Message.php?act=add'><input type='submit' value='写留言'></a><hr>
  <table width='100%' style='text-align: center;' border='1'>
  <tr>
  <th>编号</th>
  <th>标题</th>
  <th>时间</th>
  <th>内容</th>
  <th>操作</th>
  </tr>
  <?php foreach($findAll as $row) { ?>
  <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['title']; ?></td>
  <td><?php echo $row['time']; ?></td>
  <td><?php echo $row['text']; ?></td>
  <td>
    <a href='http://demo.message.com/Message.php?act=delete&&id=<?php echo $row['id'];?>'>删除</a>||
    <a href='http://demo.message.com/Message.php?act=update&&id=<?php echo $row['id'];?>'>修改</a>
  </td>
  </tr>
  <?php } ?>
</body>
</html>