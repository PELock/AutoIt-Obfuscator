<?php
/******************************************************************************
 * AutoIt Obfuscator WebApi interface
 *
 * Version        : v1.1
 * Language       : PHP
 * Author         : Bartosz Wójcik
 * Web page       : https://www.pelock.com
 *
 *****************************************************************************/

namespace PELock;

class AutoItObfuscator
{
	/**
	 * @var string default AutoIt Obfuscator WebApi endpoint
	 */
	const API_URL = "https://www.pelock.com/api/autoit-obfuscator/v1";

	/**
	 * @var string WebApi key for the service
	 */
	protected $_ApiKey = null;

	/**
	 * @var bool should the source code be compressed
	 */
	public $enableCompression = false;

	/**
	 * @var bool generate random integer values
	 */
	public $randomIntegers = false;

	/**
	 * @var bool generate random value characters
	 */
	public $randomCharacters = false;

	/**
	 * @var bool generate arrays with random values
	 */
	public $randomArrays = false;

	/**
	 * @var bool generate multidimensional arrays with random values
	 */
	public $randomArraysMultidimensional = false;

	/**
	 * @var bool generate functions that returns random values
	 */
	public $randomFunctions = false;

	/**
	 * @var bool generate autostarted random values
	 */
	public $randomAutostarted = false;

	/**
	 * @var bool rename variable names to random string values
	 */
	public $renameVariables = false;

	/**
	 * @var bool rename function names to random string values
	 */
	public $renameFunctions = false;

	/**
	 * @var bool rename function names in function calls
	 */
	public $renameFunctionCalls = false;

	/**
	 * @var bool shuffle functions order in the output source
	 */
	public $shuffleFunctions = false;

	/**
	 * @var bool resolve WinApi constants to numerical values
	 */
	public $resolveConstants = false;

	/**
	 * @var bool encrypt numbers into arithmetic and boolean expressions
	 */
	public $cryptNumbers = false;

	/**
	 * @var bool split strings into series of random sized substrings
	 */
	public $splitStrings = false;

	/**
	 * @var bool modify strings using built-it AutoIt string functions
	 */
	public $modifyStrings = false;

	/**
	 * @var bool encrypt strings using polymorphic encryption algorithms
	 */
	public $cryptStrings = false;

	/**
	 * @var bool insert ternary operators for numerical values
	 */
	public $insertTernaryOperators = false;

	/**
	 * @var integer success
	 */
	const ERROR_SUCCESS = 0;

	/**
	 * @var integer invalid size for source code (it's 1000 bytes max. for demo version)
	 */
	const ERROR_INPUT_SIZE = 1;

	/**
	 * @var integer input source is empty
	 */
	const ERROR_INPUT = 2;

	/**
	 * @var integer AutoIt source code parsing error
	 */
	const ERROR_PARSING = 3;

	/**
	 * @var integer AutoIt parsed code obfuscation error
	 */
	const ERROR_OBFUSCATION = 4;

	/**
	 * @var integer AutoIt error while generating output code
	 */
	const ERROR_OUTPUT = 5;

	/**
	 * Initialize AutoItObfuscator class
	 *
	 * @param string|null $ApiKey Activation key for the service (it can be empty for demo mode)
	 */
	function __construct($ApiKey = null)
	{
		$this->_ApiKey = $ApiKey;
	}

	/**
	 * Login to the service and get the information about the current license limits
	 *
	 * @param bool $ReturnAsArray  Return result as an associative array or JSON encoded string
	 * @return mixed               An array with the results or false on error
	 */
	public function Login($ReturnAsArray = true)
	{
		// parameters
		$Params["command"] = "login";

		return $this->PostRequest($Params, $ReturnAsArray);
	}

	/**
	 * Obfuscate AutoIt script source code using provided parameters
	 *
	 * @param string $ScriptFilePath AutoIt compatible script *.au3 file path
	 * @param bool $ReturnAsArray    Return result as an associative array or JSON encoded string
	 * @return mixed                 An array with the results or false on error
	 */
	public function ObfuscateScriptFile($ScriptFilePath, $ReturnAsArray = true)
	{
		$Source = @file_get_contents($ScriptFilePath);

		if (!$Source) return null;

		return $this->ObfuscateScriptSource($Source, $ReturnAsArray);
	}

	/**
	 * Obfuscate AutoIt script source code using provided parameters
	 *
	 * @param string $ScriptSource AutoIt compatible script *.au3 source code
	 * @param bool $ReturnAsArray  Return result as an associative array or JSON encoded string
	 * @return mixed               An array with the results or false on error
	 */
	public function ObfuscateScriptSource($ScriptSource, $ReturnAsArray = true)
	{
		// additional parameters
		$ParamsArray["command"] = "obfuscate";
		$ParamsArray["source"] = $ScriptSource;

		return $this->PostRequest($ParamsArray, $ReturnAsArray);
	}

	/**
	 * Send a POST request to the server
	 *
	 * @param array $ParamsArray  An array with the parameters
	 * @param bool $ReturnAsArray Return result as an associative array or JSON encoded string
	 * @return mixed              An array with the results or false on error
	 */
	protected function PostRequest($ParamsArray, $ReturnAsArray)
	{
		// add activation key to the parameters array
		if (!empty($this->_ApiKey))
		{
			$ParamsArray["key"] = $this->_ApiKey;
		}

		//
		// random bucket setup
		//
		if ($this->randomIntegers) $ParamsArray["random_bucket_integers"] = "1";
		if ($this->randomCharacters) $ParamsArray["random_bucket_characters"] = "1";
		if ($this->randomArrays) $ParamsArray["random_bucket_arrays"] = "1";
		if ($this->randomArraysMultidimensional) $ParamsArray["random_bucket_arrays_multidimensional"] = "1";
		if ($this->randomFunctions) $ParamsArray["random_bucket_functions"] = "1";
		if ($this->randomAutostarted) $ParamsArray["random_bucket_autostart"] = "1";

		//
		// obfuscation strategies
		//
		if ($this->renameVariables) $ParamsArray["rename_variables"] = "1";
		if ($this->renameFunctions) $ParamsArray["rename_functions"] = "1";
		if ($this->renameFunctionCalls) $ParamsArray["rename_function_calls"] = "1";
		if ($this->shuffleFunctions) $ParamsArray["shuffle_functions"] = "1";
		if ($this->resolveConstants) $ParamsArray["resolve_const"] = "1";
		if ($this->cryptNumbers) $ParamsArray["crypt_numbers"] = "1";
		if ($this->splitStrings) $ParamsArray["split_strings"] = "1";
		if ($this->modifyStrings) $ParamsArray["modify_strings"] = "1";
		if ($this->cryptStrings) $ParamsArray["crypt_strings"] = "1";
		if ($this->insertTernaryOperators) $ParamsArray["insert_ternary_operators"] = "1";

		//
		// check if compression is enabled
		//
		if ($this->enableCompression && !empty($ParamsArray["source"]))
		{
			$ParamsArray["source"] = @base64_encode(@gzcompress($ParamsArray["source"], 9));
			$ParamsArray["compression"] = "1";
		}

		if (!function_exists('curl_version'))
		{
			return false;
		}

		$ch = curl_init();

		// URL
		curl_setopt($ch, CURLOPT_URL, self::API_URL);

		// send POST request
		curl_setopt($ch, CURLOPT_POST, true);

		// POST parameters
		curl_setopt($ch, CURLOPT_POSTFIELDS, $ParamsArray);

		// user agent
		curl_setopt($ch, CURLOPT_USERAGENT, "PELock AutoIt Obfuscator");

		// return only result
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// execute query
		$response = curl_exec($ch);

		// close the session
		curl_close($ch);

		// check the result
		if (empty($response)) return false;

		// decode to array
		$result = json_decode($response, true);

		if (empty($result)) return false;

		// depack output code back into the string
		$depacked = false;

		if ($this->enableCompression && $result["error"] === self::ERROR_SUCCESS)
		{
			$result["output"] = @gzuncompress(@base64_decode($result["output"]));
			$depacked = true;
		}

		if ($ReturnAsArray)
		{
			return $result;
		}

		// if output was depacked - pack it again to JSON format
		if ($depacked)
		{
			return json_encode($result);
		}

		// return original JSON response code
		return $response;
	}
}
?>