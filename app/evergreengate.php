<?php

/**
 * Expressions for matching browser type
 */
$BROWSERS = [
  "Chrome" => "/(chrome|crios)/i",
  "Safari" => "/safari/i",
  "Firefox" => "/firefox/i",
  "IE" => "/(windows.*)?(iemobile|msie|trident.*like Gecko)(.*windows)?/i",
  "Edge" => "/edge/i",
  "Opera" => "/opera/i"
];

/**
 * Expressions for matching engines
 */
$ENGINES = [];

$BOTS = [
  "Bingbot" => "/(bingbot|www\.bing\.com\/bingbot\.htm)/i",
  "Googlebot" => "/(googlebot|www\.googlebot\.com\/bot\.html)/i",
  "Yahoobot" => "/(yahoo! slurp|help\.yahoo\.com\/help\/\w+\/ysearch\/slurp)/i"
];

/**
 * Expressions for version recognition
 */
$VERSIONS = [
  "Chrome" => "/(chrome|crios)\/([\d.]+)/i", // Group 2
  "Safari" => "/version\/([\d.]+)/i", // Group 1
  "Firefox" => "/firefox\/([\d.]+)/i", // Group 1
  "IE" => "/(msie|rv|iemobile)[ \/]([\d.]+)/i", // Group 2
  "Edge" => "/edge\/([\d.]+)/i", // Group 1
  "Opera" => "/version\/([\d.]+)/i", // Group 1
  "Bingbot" => "/bingbot\/([\d.]+)/i", // Group 1
  "Googlebot" => "/googlebot\/([\d.]+)/i", // Group 1
  "Yahoobot" => "NONE" // Yahoo! Slurp doesn't expose it's version
];

/*
 * Possible base config values
 */
$CONF = [
  "mode" => ["blacklist","whitelist"],
  "action" => ["block","redirect","ignore"],
  "log" => [true,false],
];

/**
 * Required config values
 */
$REQUIRED = ["mode","action","log","rule"];

?>
