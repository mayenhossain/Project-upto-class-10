<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Posts</title>
</head>
<body>
<h1>List of Posts</h1>
<a href="<?php echo url('posts/create')  ?>">Create new post</a>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Details</th>
        <th>Options</th>
    </tr>
    <?php foreach($blogs as $post){ ?>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->details ?></td>
        <td>
            <a href="<?php echo url('posts/edit',$post->id) ?>">Edit</a>
            ||
            <a href="<?php echo url('posts/delete',$post->id) ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
