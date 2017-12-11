<?php

/**
 * Expressions for matching browsers
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
$ENGINES = [
  "EdgeHTML" => "/(applewebkit).*(edge)/i",
  "Trident" => "/(msie.*windows|trident)/i",
  "Gecko" => "/gecko/i",
  "WebKit" => "/applewebkit/i"
];

/**
 * Expressions for matching bots
 */
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
  "Yahoobot" => "NONE", // Yahoo! Slurp doesn't expose it's version
  "EdgeHTML" => "NONE", // EdgeHTML exposes incorrect user agent data
  "Trident" => "/trident\/([\d.]+)/i", // Group 1, may be unavailable in some cases
  "Gecko" => "/gecko\/([\d.]+)/i", // Group 1,
  "WebKit" => "/applewebkit\/([\d.]+)/i" // Group 1
];

/*
 * Possible base config values
 */
$CONF = [
  "mode" => ["blacklist","whitelist"],
  "action" => ["block","redirect","ignore"],
  "log" => [true,false]
];

/**
 * Required config values
 */
$REQUIRED = ["mode","action","log","rule"];

?>
