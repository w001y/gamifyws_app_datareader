<?php

/**
 * GAMIFY.WS
 *
 * This is a PHP library for the gamify.ws Gamification API.
 *
 * Questions? Tweet me @w001y - I'll get back to you asap..
 *
 * Reckon you can do a better job, or spin one up using a different language, or a certain framework?
 * Please do, that would rule - drop me a tweet! @w001y
 *
 */

class Gamify {

    protected $api_url		= "http://alpha.gamify.ws";             // Have a play with the alpha API first.
    public $namespace 	    = "gamifyws";                           // Put your namespace in here
    public $api_key 		= "YOUR_API_KEY";	                    // Don't tell anyone your API key or secret.
    protected $api_secret	= "YOUR_API_SECRET";	                // Don't tell anyone your API key or secret.
    public $salt			= "REQUEST_A_SALT";                     // Request a new salt using request_salt


    function api($method, $params)
    {
        $params['ns'] 	    = $this->namespace;
        $params['method'] 	= $method;
        return $this->api_send($this->api_url, $params);
    }


    function api_send($url, $params)
    {

        $fields_string = "";
        foreach($params as $key=>$value) {

            if(is_array($value))
            {
                foreach($value as $minikey => $minvalue)
                {
                    $fields_string .= $key.'['.$minikey.']'.'='.$minvalue.'&';
                }
            }
            else
            {
                $fields_string .= $key.'='.urlencode($value).'&';
            }

        }

        rtrim($fields_string, '&');

        // create curl resource
        $ch = curl_init();
        // set url
        curl_setopt($ch, CURLOPT_URL, $url);
        //return the transfer as a string
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch,CURLOPT_POST, count($params));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        return $output;
    }

    public function get_token($salt)
    {
        return sha1($this->api_secret.$salt);
    }

    public function get_salt()
    {
        return $this->salt;
    }

    public function get_api_key()
    {
        return $this->api_key;
    }

}