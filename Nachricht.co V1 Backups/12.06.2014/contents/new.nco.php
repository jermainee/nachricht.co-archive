<?
$uri = $_SERVER['REQUEST_URI'];
if($uri !== '/' AND $uri !== '/new.html')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<div id="editor" class="shadow">
	<form action="/write.html" method="post" name="new">
		<textarea class="text" name="nachricht" maxlength="2000" placeholder="<? echo $placeholder; ?>"></textarea>
		<div class="smileys">
			<img src="/img/smileys/smile.gif" class="smiley" onclick="insert(':)');" />
			<img src="/img/smileys/wink.gif" class="smiley" onclick="insert(';)');" />
			<img src="/img/smileys/laugh.gif" class="smiley" onclick="insert(':D');" />
			<img src="/img/smileys/tongue.gif" class="smiley" onclick="insert(':P');" />
			<img src="/img/smileys/sad.gif" class="smiley" onclick="insert(':(');" />
			<img src="/img/smileys/fie.gif" class="smiley" onclick="insert(':fie:');" />
			<img src="/img/smileys/bomb.gif" class="smiley" onclick="insert(':bomb:');" />
		</div>
		<input type="submit" class="button" value="<? echo $btn1; ?>">
	</form>
</div>