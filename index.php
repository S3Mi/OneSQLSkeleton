<?php
namespace BeesGame;

session_start();

require_once('SplClassLoader.php');
$classLoader = new \SplClassLoader('OneSQL', './lib/');
$classLoader->register();

die('OK');