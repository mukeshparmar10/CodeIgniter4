<h3 align="center">List Admin</h1>
<center><a href="<?=base_url();?>admin/add">Add Admin</a></center>
<table bgcolor="#fff" border="1px" cellspacing="0px" cellpadding="3px" align="center" width="80%">
<tr><th>ID</th><th>Username</th><th>Passowrd</th><th>Action</th></tr>
<?php
foreach($admin as $ad)
{
?>
<tr>
<td><?=$ad['id'];?></td>
<td><?=$ad['username'];?></td>
<td><?=$ad['password'];?></td>
<th><a href="<?=base_url();?>admin/edit/<?=$ad['id'];?>">Edit</a><a href="<?=base_url();?>admin/delete/<?=$ad['id'];?>">Delete</a></th>
</tr>
<?php
}
?>
</table>