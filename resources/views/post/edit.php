<form action="<?php  echo url('posts/update',$post->id) ?>">
    <label for="">Title</label>
    <input type="text" value="<?php echo $post->title   ?>" name="title">
    <label for="">Details</label>
    <textarea name="details" id="" cols="30" rows="5"><?php echo $post->details  ?></textarea>
    <button type="submit">Update</button>
</form>
