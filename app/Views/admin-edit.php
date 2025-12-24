<h3 align="center">Edit Admin</h1>
<form method="post" action="<?=base_url();?>admin/update">
<input value="<?=$admin['id']?>" type="hidden" name="id" id="id" required />
<table border="0px" cellspacing="0px" cellpadding="3px" align="center">
<tr>
    <td>Username</td><td><input value="<?=$admin['username']?>" class="txt" type="text" name="username" id="username" maxlength="50" required /></td>
</tr>
<tr>
    <td>Password</td><td><input value="<?=$admin['password']?>" class="txt" type="password" name="password" id="password" maxlength="30" required /></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Save" class="btn" /><input type="button" value="Back" onclick="history.back()" class="btn" /></td>
</tr>
</table>
</form>