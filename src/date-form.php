<form action="" method="post" name="period" enctype="multipart/form-data">
  <input type="date" name="from" value="<?php echo $thisMonthFirst ?>">
  <input type="date" name="to" value="<?php echo $thisMonthLast ?>">
  <input type="hidden" name="period" value="" />
  <input type="submit" value="GO" class="go">
</form>