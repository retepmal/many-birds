<?php

if( !defined('IN_PAGE') ) {
	// No direct access to this PHP file.
	exit();
}


$_CONF = array();

/*
 * Database Configuration
 */
$_CONF['db'] = array();
$_CONF['db']['host'] = 'localhost';
$_CONF['db']['port'] = '3306';
$_CONF['db']['user'] = 'reteazbp_birds';
$_CONF['db']['pass'] = 'bdZz9fSZsWJ5MXsn';
$_CONF['db']['name'] = 'reteazbp_manybirds';

/*
 * Facebook API Configuration
 */
$_CONF['fb'] = array();
$_CONF['fb']['appid']  = '835001473193147';
$_CONF['fb']['secret'] = '4571179210e327f8d2e9d69fa93fe207';

/*
 * Security Configuration
 */
$_CONF['oauth_secret'] = 'd27dca78f983d57cbf5147c04c62eb70';
$_CONF['session_lifetime'] = 604800;  // one week
$_CONF['max_score_per_sec'] = 1;
$_CONF['max_concurrent_client'] = 5;

/*
 * General Configuration
 */
$_CONF['max_cache_friend_time'] = 5 * 60;  // five minutes
$_CONF['max_friend_in_ranking'] = 20;
$_CONF['max_friend_in_battle'] = 20;
$_CONF['battle_mode_enabled'] = true;

?>