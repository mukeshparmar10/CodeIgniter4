<h3 align="center">List Teacher</h1>
<center><a href="<?=base_url();?>teacher/add">Add Teacher</a></center>
<table bgcolor="#fff" border="1px" cellspacing="0px" cellpadding="3px" align="center" width="80%">
<tr><th>ID</th><th>Name</th><th>Address</th><th>Action</th></tr>
<?php
foreach($teacher as $tea)
{
?>
<tr>
<td><?=$tea['id'];?></td>
<td><?=$tea['full_name'];?></td>
<td><?=$tea['address'];?></td>
<th><a href="<?=base_url();?>teacher/edit/<?=$tea['id'];?>">Edit</a><a href="<?=base_url();?>teacher/delete/<?=$tea['id'];?>">Delete</a></th>
</tr>
<?php
}
?>
</table>