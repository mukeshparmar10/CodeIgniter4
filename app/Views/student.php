<h3 align="center">List Student</h1>
<center><a href="<?=base_url();?>student/add">Add Student</a></center>
<table bgcolor="#fff" border="1px" cellspacing="0px" cellpadding="3px" align="center" width="80%">
<tr><th>ID</th><th>Name</th><th>Address</th><th>Action</th></tr>
<?php
foreach($student as $std)
{
?>
<tr>
<td align="center"><?=$std['id'];?></td>
<td><?=$std['full_name'];?></td>
<td><?=$std['address'];?></td>
<th><a href="<?=base_url();?>student/edit/<?=$std['id'];?>">Edit</a><a href="<?=base_url();?>student/delete/<?=$std['id'];?>">Delete</a></th>
</tr>
<?php
}
?>
</table>