<?php

switch ($_REQUEST['action']) {
    case 'postdata':
        header('location:postmethod.php');
        break;
    case 'getdata':
        header('location:getmethod.php');
        break;
    default:
        header('location:index.php');
        break;
}