<?php

if (defined('DS')){
    null;
}else {
    define('DS', DIRECTORY_SEPARATOR);
}

if (defined('SITE_ROOT')){
    null;
}else {
    define('SITE_ROOT', DS . "opt" . DS . "lampp" . DS . "htdocs" . DS . "gallery");
}

if (defined('INCLUDES_PATH')){
    null;
}else {
    define('INCLUDES_PATH', SITE_ROOT.DS."admin".DS."includes");
}

require_once ('functions.php');

require_once ('new_config.php');

require_once ('Database.php');

require_once ('Db_object.php');

require_once ('User.php');

require_once ('Photo.php');

require_once ('Session.php');

require_once ('Comment.php');

require_once ('Paginate.php');


