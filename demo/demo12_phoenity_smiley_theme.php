<?php

require_once dirname(__FILE__)."/../src/phpfreechat.class.php";
$params = array();
$params["title"]          = "A chat with a customized smiley theme (phoenity theme)";
$params["nick"]           = "guest";  // setup the intitial nickname
$params["smileytheme"]    = "phoenity";
$chat = new phpFreeChat( $params );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>phpFreeChat demo</title>

    <?php $chat->printJavascript(); ?>
    <?php $chat->printStyle(); ?>

  </head>

  <body>
  <?php $chat->printChat(); ?>
  </body>
</html>