<div id="editor" class="shadow">
	<form action="/write.html" method="post" name="new">
		<textarea class="text" name="nachricht" maxlength="2000" placeholder="<? echo $text2; ?>"></textarea>
		<div class="smileys">
			<img src="/img/smileys/smile.gif" class="smiley" onclick="insert(':)');" />
			<img src="/img/smileys/wink.gif" class="smiley" onclick="insert(';)');" />
			<img src="/img/smileys/grin.gif" class="smiley" onclick="insert(':D');" />
			<img src="/img/smileys/razz.gif" class="smiley" onclick="insert(':P');" />
			<img src="/img/smileys/cool.gif" class="smiley" onclick="insert('8)');" />
			<img src="/img/smileys/confused.gif" class="smiley" onclick="insert(':S');" />
			<img src="/img/smileys/sad.gif" class="smiley" onclick="insert(':(');" />
			<img src="/img/smileys/surprised.gif" class="smiley" onclick="insert(':O');" />
		</div>
		<input type="submit" class="button" value="Speichern">
	</form>
</div>