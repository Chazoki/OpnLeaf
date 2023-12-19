<?php 
#   OpnLeaf, The stoners managment platform
#   Index.php
#   Refrence list:
#
#
#   12/18/2023

#   cookie init
$cookie_lifetime = 60 * 60 * 24 * 30;
session_set_cookie_params($cookie_lifetime, '/');
session_start();

#   database connection
require_once('database.php');