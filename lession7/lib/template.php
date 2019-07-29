<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/20/2019
 * Time: 5:57 AM
 */
function get_header()
{
    $path_header = "inc/header.php";
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "khoong ton tai duong dan {$path_header}";
    }
}

function get_footer()
{
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "khoong ton tai duong dan {$path_footer}";
    }
}