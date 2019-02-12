<?php

/******************************************************************************
 * AutoIt Obfuscator WebApi interface usage example.
 *
 * In this example we will obfuscate sample source with default options.
 *
 * Version        : v1.4
 * Language       : PHP
 * Author         : Bartosz Wójcik
 * Web page       : https://www.pelock.com
 *
 *****************************************************************************/

//
// include AutoIt Obfuscator class
//
use PELock\AutoItObfuscator;

//
// if you don't want to use Composer use include_once
//
//include_once "AutoItObfuscator.php";

//
// create AutoIt Obfuscator class instance (we are using our activation key)
//
$myAutoItObfuscator = new PELock\AutoItObfuscator("ABCD-ABCD-ABCD-ABCD");

//
// source code in AutoIt v3 format
//
$scriptSourceCode = 'ConsoleWrite("Hello World")';

//
// by default all options are enabled, both helper random numbers
// generation & obfuscation strategies, so we can just simply call:
//
$result = $myAutoItObfuscator->ObfuscateScriptSource($scriptSourceCode);

//
// it's also possible to pass script path instead of a string with the source e.g.
//
// $result = $myAutoItObfuscator->ObfuscateScriptFile("/path/to/script/source.au3");

//
// $result[] array holds the obfuscation results as well as other information
//
// $result["error"]         - error code
// $result["output"]        - obfuscated code
// $result["demo"]          - was it used in demo mode (invalid or empty activation key was used)
// $result["credits_left"]  - usage credits left after this operation
// $result["credits_total"] - total number of credits for this activation code
// $result["expired"]       - if this was the last usage credit for the activation key it will be set to true
//
if ($result !== false)
{
	// display obfuscated code
	if ($result["error"] === \PELock\AutoItObfuscator::ERROR_SUCCESS)
	{
		// format output code for HTML display
		echo "<pre>" . htmlentities($result["output"]) . "</pre>";
	}
	else
	{
		die("An error occurred, error code: " . $result["error"]);
	}
}
else
{
	die("Something unexpected happen while trying to obfuscate the code.");
}

?>