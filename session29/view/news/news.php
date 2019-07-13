<h1>News page here</h1>
<a href="index.php?action=add_news">Add News</a>
<?php echo $showNews;?>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Title</th>
    <th>Describe</th>
    <th>Date Submitted</th>
    <th>Image</th>
  </tr>
 <?php 
 if ($productList->num_rows > 0) {
 	while($row = $newsList->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['title']?></td>
      <td>
        <?php echo $row['describe']?>
      </td>
      <td><img src="uploads/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
       <td><?php echo $row['created']?></td>
      <td><a href="index.php?action=edit_news&id=<?php echo $id?>">Edit</a> | <a href="index.php?action=delete_edit&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co tin tuc nao</td>
  </tr>
  <?php }?>
</table>

<div id="news-more">
<?php echo $related;?>
</div>