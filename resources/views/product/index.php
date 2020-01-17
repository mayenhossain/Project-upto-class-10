<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Products</title>
</head>
<body>
<h1>List of Products</h1>
<a href="<?php echo url('products/create')  ?>">Create new product</a>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Details</th>
    </tr>
    <?php foreach($products as $product){ ?>
        <tr>
            <td><?php echo $product->id ?></td>
            <td><?php echo $product->name ?></td>
            <td><?php echo $product->price ?></td>
            <td><?php echo $product->details ?></td>
            <td>
                <a href="<?php echo url('products/edit',$product->id) ?>">Edit</a>
                ||
                <a href="<?php echo url('products/delete',$product->id) ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
