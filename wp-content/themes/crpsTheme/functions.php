<?php

function crps_files() {
  wp_enqueue_style('crps_styles', get_theme_file_uri('/build/css/index.css'));
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

add_action('wp_enqueue_scripts', 'crps_files');

function crps_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'crps_features');