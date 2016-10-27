<?php

/******************************************************************************
 * AutoIt Obfuscator WebApi interface usage example.
 *
 * In this example we will obfuscate sample source with default options.
 *
 * Version        : v1.1
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
//  should the source code be compressed (both input & compressed)
// 
$myAutoItObfuscator->enableCompression = true;

// 
//  generate random integer values
// 
$myAutoItObfuscator->randomIntegers = true;

// 
//  generate random value characters
// 
$myAutoItObfuscator->randomCharacters = true;

// 
//  generate arrays with random values
// 
$myAutoItObfuscator->randomArrays = true;

// 
//  generate multidimensional arrays with random values
// 
$myAutoItObfuscator->randomArraysMultidimensional = true;

// 
//  generate functions that returns random values
// 
$myAutoItObfuscator->randomFunctions = true;

// 
//  generate autostarted random values
// 
$myAutoItObfuscator->randomAutostarted = true;

// 
//  rename variable names to random string values
// 
$myAutoItObfuscator->renameVariables = true;

// 
//  rename function names to random string values
// 
$myAutoItObfuscator->renameFunctions = true;

// 
//  rename function names in function calls
// 
$myAutoItObfuscator->renameFunctionCalls = true;

// 
//  shuffle functions order in the output source
// 
$myAutoItObfuscator->shuffleFunctions = true;

// 
//  resolve WinApi constants to numerical values
// 
$myAutoItObfuscator->resolveConstants = true;

// 
//  encrypt numbers into arithmetic and boolean expressions
// 
$myAutoItObfuscator->cryptNumbers = true;

// 
//  split strings into series of random sized substrings
// 
$myAutoItObfuscator->splitStrings = true;

// 
//  modify strings using built-it AutoIt string functions
// 
$myAutoItObfuscator->modifyStrings = true;

// 
//  encrypt strings using polymorphic encryption algorithms
// 
$myAutoItObfuscator->cryptStrings = true;

// 
//  insert ternary operators for numerical values
// 
$myAutoItObfuscator->insertTernaryOperators = true;

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