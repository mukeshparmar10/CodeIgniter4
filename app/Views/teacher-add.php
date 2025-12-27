<h3 align="center">Add Teacher</h1>
<form method="post" action="<?=base_url();?>teacher/save">
<table border="0px" cellspacing="0px" cellpadding="3px" align="center">
<tr>
    <td>Name</td><td><input class="txt" type="text" name="name" id="name" maxlength="50" required /></td>
</tr>
<tr>
    <td>Address</td><td><input class="txt" type="text" name="address" id="address" maxlength="100" required /></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Save" class="btn" /><input type="button" value="Back" onclick="history.back()" class="btn" /></td>
</tr>
</table>
</form>