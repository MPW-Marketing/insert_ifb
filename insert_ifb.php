<?php
/*
Plugin Name: Phone Number Script
Description:
Version: 0.1
Author:
Text Domain:
*/
function insert_phone_number () {
  return '<script type="text/JavaScript" src="https://secure.dialogtech.com/js/keyword_replacement.js"></script>';
}
add_shortcode( 'phone_number', 'insert_phone_number' );
