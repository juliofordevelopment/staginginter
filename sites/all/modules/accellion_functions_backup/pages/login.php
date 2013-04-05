<h4>New Visitor? <a href="<?=url('signup', array('query' => 'node='.$_GET['node']))?>">Register Here &raquo;</a></h4>
<hr />
<p style="width:400px;">If you have previously registered to view Accellion content you can simply log in with your e-mail address to view all available whitepapers, case studies, webcasts and demos.</p>
<form action="?node=<?=$_GET['node']?>" method="post">
<label for="username">Email Address:</label>
<input type="text" id="username" name="username" />
<input type="submit" id="submit" name="submit" value="Log In" />
</form>