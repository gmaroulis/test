<?php
ini_set('display_errors', 1);

/*Load the twitter wrapper library TwitterAPIExchange*/
require_once('twitter-api-php-master/TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "110852534-XQx8aKKPrqeg5EVPIJbiwdJKdquJY5WlhXfavA",
    'oauth_access_token_secret' => "uBtAKGEr822HTXsZEZDLnUc1ZM64UKdTsuRLjwEPc",
    'consumer_key' => "W6QWJorxtRLN1IJlf3C1w",
    'consumer_secret' => "H3dA6SXZI44tCqXe0EI8Ardu6TBzHGg7pfeVoKx0mg"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ 
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above 
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);**/

/** Perform a POST request and echo the response 
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest(); **/

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=thebayfish';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>