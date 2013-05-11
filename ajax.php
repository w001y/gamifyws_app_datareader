<?php

if(!$_POST){ exit; }

include("classes/gamify.class.php");

$params = $_POST;

$gamify = new Gamify;

$method = $params['method'];
unset($params['method']);

$params = $params['params'];

switch($method)
{
    case "request_salt":
        $params['api_key'] = $gamify->api_key;
        break;
    default:
        $params['token'] = $gamify->get_token($gamify->salt);
}

// Uncomment below to output your current token.
/*echo $params['token'];
exit;*/

$reply = $gamify->api($method, $params);
echo $reply;
