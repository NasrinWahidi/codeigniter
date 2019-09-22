<!DOCTYPE html>
<html>
	<head>
		<title>All posts</title>
	</head>
	<body>
		
		<h1> All posts</h1>
		<?php echo anchor('posts/new_post/',
			"<button>New Post</button>")?>
		<?php foreach($posts as $post):?>
			<h3><?php echo $post->title?></h3>
			<p><?php echo substr($post->body,0,100 )."...." ?></p>
			<?php echo anchor('posts/get_post/'.$post->p_id,
			"<button>read more</button>")?>
			<?php echo anchor('posts/post_info_edit/'.$post->p_id,
			"<button>Edit post</button>")?>
			<?php echo anchor('posts/delete_post/'.$post->p_id,
			"<button>delete post</button>",array("onclick"=>"return confirm('are you sure!!')"))?>
			<?php endforeach?>
			

	</body>
</html>