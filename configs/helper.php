<?php

require 'env.php';
require 'dbc.php';
require 'functions.php';
require 'functions-category.php';
require 'functions-post.php';
require 'function_settings.php';

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$script_dir = dirname($_SERVER['SCRIPT_NAME']);
$systemBaseURL = $protocol . '://' . $host . $script_dir;

?>