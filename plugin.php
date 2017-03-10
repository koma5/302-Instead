<?php
  /*
Plugin Name: 302 Instead
Plugin URI: https://github.com/koma5/302-Instead
Description: Send a 302 (temporary) redirect instead of 301 (permanent) for sites where shortlinks may change
Version: 0.1
Author: koma5
Author URI: https://github.com/koma5/
  */

yourls_add_filter('redirect_code','temp_instead');
function temp_instead($args) {
  $code = $args[1];
  if ($code != 302) {
     return  302;
  }
}
