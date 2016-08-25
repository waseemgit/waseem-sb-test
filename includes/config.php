<?php
//Set Base URL
define('HTTP_TYPE', getProtocol());
define('BASE_URL', HTTP_TYPE . "://" . $_SERVER['HTTP_HOST']);
//Set default Controller and action
define('DEFAULT_CONTROLLER', 'view');
define('DEFAULT_ACTION', 'index');
//Protocol function
function getProtocol() 
{
    if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) 
    {
        return $_SERVER['HTTP_X_FORWARDED_PROTO'];
    } 
    else 
    {
        return !empty($_SERVER['HTTPS']) ? "https" : "http";
    }
}
?>
