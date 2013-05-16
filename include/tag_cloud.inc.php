<?php

//file may not be necessary

function my_autoloader($class_name)
    {
        include '../classes/' . $class_name . '.class.php';
    }

    spl_autoload_register('my_autoloader');

    $cloud_id = $_GET['tag'];

    $tag_class = new add_tags();

    $tag_class->updateTagCloudClass($cloud_id)

?>