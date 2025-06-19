<?php
/**
* Template Name: Dev tools
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();

?>

<div class="textInverter">
  <form class="inverter" action="" method="post">
    <input type="text" id="invertInput">
    <input type="submit">
  </form>
</div>

<br>
<br>
<br>

<script type="text/javascript">
  jQuery(document).ready(function ($) {
    $('.inverter').on('submit', function (e) {
      e.preventDefault();
      let val = $('#invertInput').val();
      val = val.split('').reverse().join('');
      $('#invertInput').val(val);
    })
  });
</script>

<?php

get_footer();
