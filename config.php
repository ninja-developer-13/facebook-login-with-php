
<?php
ob_start();
require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '<place app id>',
  'app_secret'     => '<place your app secret>',
  'default_graph_version'  => 'v2.10'
]);

?>
