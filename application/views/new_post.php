<!DOCTYPE html>
<html>
<head>
	<title>New Posy</title>
</head>
<body>
	<?php echo form_open('posts/create_post')?>
	<fieldset>
		<legend>New Post</legend>
		<label for="title"> Post Title</label>
		<input type="text" name="title" placeholder="Write a title"/>
		<br /><br />
		<label for="body"> POST BODY</label>
		<textarea name="body"></textarea><br />
		<label for="p_cat"> Post Category</label>
		<select name="p_cat">
			<?php foreach ($p_cat as $cat): ?>
			<option value="<?=$cat->post_category_id;?>"> 
				
				<?= $cat->post_category_name ;?></option>
				<?php endforeach?>
		</select>
		<input type="submit" value="NEW POST" />
	</fieldset>
</body>
</html>