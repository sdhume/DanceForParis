<?php
require_once('twitter_proxy.php');
// Twitter OAuth Config options
$oauth_access_token = '4234136772-E4MPBovrtT1W0b8eHSdzjHyx80xJQ3SKmpwhSdP';
$oauth_access_token_secret = 'eAasyIf1g2z0oAR3iVxPsdcf8N0hq9KByDTltkXTK3MiI';
$consumer_key = 'I8UQiVXB51sRQAcc78hV8undj';
$consumer_secret = 'iQywuBblJZrDMY6Rdiajxw9thOPcAgxLPupgAwtVkDmyG14Bq6';
$user_id = '4234136772';
$hashtag = 'danceforparis';
// $screen_name = 'DanceForParis';
$count = 5;

$twitter_url = 'search/tweets.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&q=%23' . $hashtag;
$twitter_url .= '&count=' . $count;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$hashtag,					// Hashtag
	$count							// The number of tweets to pull out
);
// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);
// echo $twitter_url;
echo $tweets;
?>
