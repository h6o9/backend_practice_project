<?php
function view($path, $data)
{
    if ($data) {
        extract($data);
    }

    $path = $path . ".view.php";

    include "views/layoout.php";
}
?>