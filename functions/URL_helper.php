<?php
require_once '../config/config.php';

function redirect($location)
{
    return header('location: ' .URLROOT. '/' .$location);
}
