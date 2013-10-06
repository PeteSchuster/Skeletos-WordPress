<?php
/*
    @package WordPress
    @subpackage Skeletos
*/
?>

<form class="search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label class="visuallyhidden" for="s">Search for:</label>
    <input type="search" value="" name="s" id="s" />
    <button class="button-alt" type="submit" id="searchsubmit">Search</button>
</form>
