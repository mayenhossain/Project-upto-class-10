<form action="<?php  echo url('products/update',$product->id) ?>">
    <label for="">Name</label>
    <input type="text" value="<?php echo $product->name   ?>" name="name">
    <label for="">Price</label>
    <input type="float" value="<?php echo $product->price   ?>" name="price">
    <label for="">Details</label>
    <textarea name="details" id="" cols="30" rows="5"><?php echo $product->details  ?></textarea>
    <button type="submit">Update</button>
</form>
