<!DOCTYPE html>
<html>
<head>
	<title>New Posy</title>
</head>
<body>
	<?php echo form_open('posts/update_post')?>
	<fieldset>
		<legend>Edit post</legend>
        <label for="title"> Post Title</label>
        <input type="hidden" name="p_id" value="<?php echo $post->p_id?>"
        <input type="text" name="title"  value="<?php echo $post->title?>" 
    placeholder="Write a title"/>
		<br /><br />
		<label for="body"> POST BODY</label>
		<textarea name="body"><?php echo $post->$title?> </textarea><br />
		<label for="p_cat"> Post Category</label>
		<select name="p_cat">
			<?php foreach ($p_cat as $cat): ?>
			<option value="<?=$cat->post_category_id;?>"> 
				
				<?= $cat->post_category_name;?></option>
				<?php endforeach?>
		</select>
		<input type="submit" value="Update POST" />
	</fieldset>
</body>
</html>