<?php
/*
Plugin Name: ellipsis AdNet Code Snippet Plugin
Description: This plugin will help you embed ellipsis AdNet Banner, Text and Lead Capture Ads within your blog posts.
Version: 0.1
Author: Gautam Tandon
License: ellipsis solutions LLC, All Rights Reserved
*/

function display_adnet_ad( $atts ) {
        extract( shortcode_atts( array(
                'key' => '',
        ), $atts ) );

        return "<script type='text/javascript' src='http://apps.ellipsissolutions.com/adnet/processadimpression.servlet?key={$key}' ></script>";
}
add_shortcode('adnet', 'display_adnet_ad');

?>
