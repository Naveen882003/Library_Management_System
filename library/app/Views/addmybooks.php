<form action="<?php echo base_url('inserted/'.$user_info[0]['book_id']);?>" method="post">
<label for="uid">User Id</label><br>
<input type="text" name="uid"><br>
<label for="bnname">Book Name</label><br>
<input type="text" name="bnname" value="<?php echo $user_info[0]['book_name'] ; ?>"><br>
<label for="baauthor">Book Author</label><br>
<input type="text" name="baauthor" value="<?php echo $user_info[0]['book_author'] ; ?>"><br>
<label for="tdate">Taken Date</label><br>
<input type="datetime-local" name="tdate"><br>
<label for="ddate">Due Date</label><br>
<input type="datetime-local" name="ddate"><br>
<label for="bsstaus">Book Status</label><br>
<input type="text" name="bsstaus" value=0><br><br>
<input type="submit" name="submit" value="Add to my books">

</form>