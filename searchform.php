<?php
/*
  @package Skeletos
*/
?>

<form class="search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="visuallyhidden" for="s">Search for:</label>
  <input type="search" value="" name="s" required="required" />
  <button class="ss-button-alt" type="submit">Search</button>
</form>
