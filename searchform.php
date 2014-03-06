<?php
/*
    @package Skeletos
*/
?>

<form class="search" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="visuallyhidden" for="s">Search for:</label>
    <input type="search" value="" name="s" id="s" required="required" />
    <button class="ss-button-alt" type="submit" id="searchsubmit">Search</button>
</form>
