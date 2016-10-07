#AutoIt Obfuscator — Obfuscation for AutoIt Script Source Code

AutoIt Obfuscator is a tool to modify AutoIt script source code in this way to
make an analysis of obfuscated code very difficult.

More technical details, downloads, online interface available at: 

https://www.pelock.com/products/autoit-obfuscator

##What is source code obfuscation?

Obfuscation is a process of transforming AutoIt source code into protected
version of itself. The script functionality stays the same, everything works
the same, but the source code is protected from analysis, all of the variables
are encrypted, strings are encrypted, our AutoIt Obfuscator uses multiple
obfuscation strategies to protect the real meaning of your AutoIt source code.

###AutoIt script example before obfuscation 

```autoit
ConsoleWrite("Hello World!")
```

###After obfuscation

```autoit
Global $var_382 = 225
Global $VWUKTOPAG = 10
#OnAutoItStartRegister "func_1675"
Global $FBWUYAT_OSPPKEBV = Asc("l")
Global $WnCx4HPC0ea312__qu_T_3[2][16] = [[1540386418, 74, 52187, 23787, 15150, 224, 789929744, 10864, 46, 57292, 240, 36153703,  _
225, 225, 71, 201],  _
[1182170127, 61672, 15345, 37, 43206, 93, 67, 60, 56413, 133, 48731, 50442, 85, 40037,  _
15258, 13131]]
Global $var_2697 = Asc("C")
Global $var_502[15] = [776861442, 50520, 914414646, 60003, 153, 152, 57581, 41, 252554063, 1178542709, 1790,  _
1503905662, 10736, 118, 43596]
#OnAutoItStartRegister "IdybyqbmmzEwhkdbwcylFunc"
Global $dQtfnuoLbawdebyaWhfqizr = Lekpwpih
Global $dMokwkydCxvjc = BitAND
Global $nWhzikjjrw = NabjqvtehhFunc
Global $_TJYsFyGFpg_A_2oUnB = uBG_WvHge_KoF_kUIKRuBDkE_
Global $var_3477 = RryazhTnrreatVrstjczn
Global $3_JqevgUiOsgQ6AIN3YX_F7X_ = StringReverse
Global $mIdavvqh = BitXOR
Global $tQcjmm = ConsoleWrite
Global $var_1580 = func_3695
Global $var_3104 = _ArrayToString
Global $8PV9OzZiO__Uv_5i = func_182
Global $var_2267 = BitNOT
Global $var_1232 = AprrvxelFdkqnecwUytafbsij
Global $IYHEMOSVL_NIVAI = ChrW
Global $var_1660 = StringTrimRight
Global $ZJLLAEEQ = JwctaHcLcuhgwH_lpM_Siu_
#include <Array.au3>
$tQcjmm($3_JqevgUiOsgQ6AIN3YX_F7X_($var_1580(($_wAv_m9f__FXOFTwxBqwX79 < $WRFGDNBJCT_XUFOVVGTR ? 151 : $var_3477()), $var_502[8],  _
($var_2697 >= $WnCx4HPC0ea312__qu_T_3[1][2] ? $var_382 : 107), $FBWUYAT_OSPPKEBV)) & $var_1660($_TJYsFyGFpg_A_2oUnB(($VWUKTOPAG >= $var_3477() ? $FBWUYAT_OSPPKEBV : 216), $var_382),  _
$var_2267(-($FBWUYAT_OSPPKEBV < $8PV9OzZiO__Uv_5i() ? 7 : $WRFGDNBJCT_XUFOVVGTR))) & $3_JqevgUiOsgQ6AIN3YX_F7X_($var_1232($dQtfnuoLbawdebyaWhfqizr(), $_wAv_m9f__FXOFTwxBqwX79, 1798366573)) & $var_1660($ZJLLAEEQ($dQtfnuoLbawdebyaWhfqizr(), $WRFGDNBJCT_XUFOVVGTR, ($WnCx4HPC0ea312__qu_T_3[1][6] > $var_502[7] ? 198565640 : $var_3477())),  _
$mIdavvqh(968160980, $WRFGDNBJCT_XUFOVVGTR)))
Func AprrvxelFdkqnecwUytafbsij($PYLAO_EDFNQKEVTT_GBNZEGWVBB, $IAHTBPINLF_LZPPI_IKLEMVZXAS, $eLnhiqmiOhxcsbkjcKnhua)
    Local $TISRVTYMCY_UTCRMXDAQU_CRHFBPEL[($VWUKTOPAG >= $var_382 ? $var_502[2] : 1)] = [($WnCx4HPC0ea312__qu_T_3[0][0] <= $var_382 ? $var_382 : 0xC3F2)]
    For $eNfcgzp = 0 To 0
        $var_3853 = $TISRVTYMCY_UTCRMXDAQU_CRHFBPEL[$eNfcgzp]
        $var_3853 -= $eNfcgzp
        $var_3853 = $mIdavvqh($var_3853, ($VWUKTOPAG >= $nWhzikjjrw() ? $var_502[6] : 0xEF06))
        $var_3853 += ($var_382 >= $WRFGDNBJCT_XUFOVVGTR ? $_wAv_m9f__FXOFTwxBqwX79 : 0xD378)
        $var_3853 = $dMokwkydCxvjc($var_3853, ($8PV9OzZiO__Uv_5i() >= $WRFGDNBJCT_XUFOVVGTR ? $FBWUYAT_OSPPKEBV : 65535))
        $TISRVTYMCY_UTCRMXDAQU_CRHFBPEL[$eNfcgzp] = $IYHEMOSVL_NIVAI($var_3853)
    Next
    Local $var_2915 = $var_3104($TISRVTYMCY_UTCRMXDAQU_CRHFBPEL, "")
    Return $var_2915
EndFunc
Func JwctaHcLcuhgwH_lpM_Siu_($aAlahprKxwdhaoc, $var_601, $sCfjwvLtiqdrLgegpggt)
    Local $JFANFJDYFI[($var_382 = $var_382 ? 5 : $_wAv_m9f__FXOFTwxBqwX79)] = [($var_2697 <= $VWUKTOPAG ? $VWUKTOPAG : 0x7A2E), 0x7A6D, ($var_382 = $var_382 ? 0x7A2F : $FBWUYAT_OSPPKEBV),  _
($_wAv_m9f__FXOFTwxBqwX79 > $dQtfnuoLbawdebyaWhfqizr() ? 0x7A3A : $_wAv_m9f__FXOFTwxBqwX79),  _
($var_3477() <> $var_3477() ? $VWUKTOPAG : 0x7A01)]
    For $_drmRe331_tm6xDMY5_Q_ninv = ($WRFGDNBJCT_XUFOVVGTR <= $var_502[12] ? $FBWUYAT_OSPPKEBV : 0) To ($WRFGDNBJCT_XUFOVVGTR > $dQtfnuoLbawdebyaWhfqizr() ? 4 : $FBWUYAT_OSPPKEBV)
        $var_3763 = $JFANFJDYFI[$_drmRe331_tm6xDMY5_Q_ninv]
        $var_3763 = $mIdavvqh($var_3763, ($8PV9OzZiO__Uv_5i() >= $_wAv_m9f__FXOFTwxBqwX79 ? $var_3477() : 0x7A4D))
        $var_3763 = $var_3763 + ($dQtfnuoLbawdebyaWhfqizr() <= $FBWUYAT_OSPPKEBV ? $nWhzikjjrw() : 1)
        $var_3763 = $dMokwkydCxvjc($var_3763, 65535)
        $JFANFJDYFI[$_drmRe331_tm6xDMY5_Q_ninv] = $IYHEMOSVL_NIVAI($var_3763)
    Next
    $JFANFJDYFI = $var_3104($JFANFJDYFI, "")
    Return $JFANFJDYFI
EndFunc
Func uBG_WvHge_KoF_kUIKRuBDkE_($YGWXMAHO_KBAAGVPNLL, $var_2579)
    Local $EIIZXLE_KVDXFPWV_PSBJOYZ[($FBWUYAT_OSPPKEBV > $var_2697 ? 13 : $var_3477())] = [0xFF93, 0xFF93, ($var_502[4] >= $nWhzikjjrw() ? $var_502[8] : 0xFF90), ($var_3477() < $8PV9OzZiO__Uv_5i() ? 0xFFDF : $nWhzikjjrw()),  _
($var_502[1] > $FBWUYAT_OSPPKEBV ? 0xFFA8 : $_wAv_m9f__FXOFTwxBqwX79), ($dQtfnuoLbawdebyaWhfqizr() < $var_382 ? 0xFF90 : $FBWUYAT_OSPPKEBV),  _
($var_502[13] <= $var_2697 ? $var_2697 : 0xFF8D), ($_wAv_m9f__FXOFTwxBqwX79 <> $_wAv_m9f__FXOFTwxBqwX79 ? $8PV9OzZiO__Uv_5i() : 0xFFA7),  _
($WRFGDNBJCT_XUFOVVGTR <= $FBWUYAT_OSPPKEBV ? $WnCx4HPC0ea312__qu_T_3[0][1] : 0xFFAE),  _
($var_2697 < $8PV9OzZiO__Uv_5i() ? 0xFFAF : $dQtfnuoLbawdebyaWhfqizr()), ($8PV9OzZiO__Uv_5i() < $_wAv_m9f__FXOFTwxBqwX79 ? 0xFFB5 : $var_382),  _
($WRFGDNBJCT_XUFOVVGTR <= $WnCx4HPC0ea312__qu_T_3[1][13] ? $var_2697 : 0xFFBA), ($WnCx4HPC0ea312__qu_T_3[0][10] <= $var_382 ? $dQtfnuoLbawdebyaWhfqizr() : 0xFFA7)]
    For $eDqcuhsgcxvBmwgohz = 0 To ($WRFGDNBJCT_XUFOVVGTR > $var_2697 ? 12 : $dQtfnuoLbawdebyaWhfqizr())
        $DNMEK_IEDXUB_ZZOIANETRA = $EIIZXLE_KVDXFPWV_PSBJOYZ[$eDqcuhsgcxvBmwgohz]
        $DNMEK_IEDXUB_ZZOIANETRA = $var_2267($DNMEK_IEDXUB_ZZOIANETRA)
        $DNMEK_IEDXUB_ZZOIANETRA = $dMokwkydCxvjc($DNMEK_IEDXUB_ZZOIANETRA, ($8PV9OzZiO__Uv_5i() <= $var_3477() ? $var_3477() : 0xFFFF))
        $EIIZXLE_KVDXFPWV_PSBJOYZ[$eDqcuhsgcxvBmwgohz] = $IYHEMOSVL_NIVAI($DNMEK_IEDXUB_ZZOIANETRA)
    Next
    Local $CWHGTCKSN = $var_3104($EIIZXLE_KVDXFPWV_PSBJOYZ, "")
    Return $CWHGTCKSN
EndFunc
Func func_3695($M2ia21BGv__6rm2rQE1f, $RWXBFJW_ZCPPAAUO, $DWVTV, $_heJ1_iJlHN_09pGG)
    Local $nPgfsdlQdrweuxmt[($FBWUYAT_OSPPKEBV >= $WRFGDNBJCT_XUFOVVGTR ? $var_502[6] : 2)] = [($var_382 > $_wAv_m9f__FXOFTwxBqwX79 ? 0x13EA : $dQtfnuoLbawdebyaWhfqizr()), ($WRFGDNBJCT_XUFOVVGTR > $var_2697 ? 0x13C6 : $8PV9OzZiO__Uv_5i())]
    For $QDLGH = ($var_502[9] > $VWUKTOPAG ? 0 : $dQtfnuoLbawdebyaWhfqizr()) To ($dQtfnuoLbawdebyaWhfqizr() >= $var_502[11] ? $var_3477() : 1)
        $var_2664 = $nPgfsdlQdrweuxmt[$QDLGH]
        $var_2664 = $mIdavvqh($var_2664, ($var_382 > $dQtfnuoLbawdebyaWhfqizr() ? 0x138F : $FBWUYAT_OSPPKEBV))
        $var_2664 -= $QDLGH
        $nPgfsdlQdrweuxmt[$QDLGH] = $IYHEMOSVL_NIVAI($dMokwkydCxvjc($var_2664, ($VWUKTOPAG < $WnCx4HPC0ea312__qu_T_3[0][4] ? 65535 : $var_2697)))
    Next
    $nPgfsdlQdrweuxmt = $var_3104($nPgfsdlQdrweuxmt, "")
    Return $nPgfsdlQdrweuxmt
EndFunc
Func IdybyqbmmzEwhkdbwcylFunc()
    Global $WRFGDNBJCT_XUFOVVGTR = 968160983
EndFunc
Func NabjqvtehhFunc()
    return 609141471
EndFunc
Func func_1675()
    Global $_wAv_m9f__FXOFTwxBqwX79 = 185
EndFunc
Func Lekpwpih()
    return 134
EndFunc
Func func_182()
    return 169
EndFunc
Func RryazhTnrreatVrstjczn()
    return 158
EndFunc
```

Would you even be able to tell what the obfuscated code does if you didn't
know about the original source code?

##AutoIt decompilation

Why should you obfuscate your scripts you might ask yourself? After all,
they are compiled to executable format, right?

Is it possible to decompile AutoIt compiled executables back to the source code?
Of course it's possible! Our company provides [source code recovery service](https://www.pelock.com/services/source-code-recovery) that
enables you to restore any AutoIt application back to its original source code.

##Protect your AutoIt scripts source code

If you're writing your software, bots, automation scripts or anything else in
AutoIt and you want to prevent others from decompiling your work to the original
source code form — AutoIt Obfuscator is for you.

####Installation

Preferred way of WebApi interface installation is via [composer](https://getcomposer.org/).

Run:

```
php composer.phar require --prefer-dist pelock/autoit-obfuscator "*"
```

Or add this entry:

```
"pelock/autoit-obfuscator": "*"
```

directly to your `composer.json` in require section.

Installation package is available at https://packagist.org/packages/pelock/autoit-obfuscator

####Example of how obfuscate AutoIt script with default options

```autoit
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
```

####Example of how obfuscate AutoIt script using customized obfuscation strategies

```autoit
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
$myAutoItObfuscator->randomAuostarted = true;

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
```

####Example of how to check the activation key status

```autoit
//
// include AutoIt Obfuscator class
//
use PELock\AutoItObfuscator

//
// if you don't want to use Composer use include_once
//
//include_once "AutoItObfuscator.php";

//
// create AutoIt Obfuscator class instance (we are using our activation key)
//
$myAutoItObfuscator = new PELock\AutoItObfuscator("ABCD-ABCD-ABCD-ABCD");

//
// login to the service
//
$result = $myAutoItObfuscator->Login();

//
// $result[] array holds the information about the license
//
// $result["demo"]          - is it a demo mode (invalid or empty activation key was used)
// $result["credits_left"]  - usage credits left after this operation
// $result["credits_total"] - total number of credits for this activation code
// $result["string_limit"]  - max. script size allowed (it's 1000 bytes for demo mode)
//
if ($result !== false)
{
	echo "Demo version status - " . ($result["demo"] ? "true" : "false") . "<br>";
	echo "Usage credits left - " . $result["credits_left"] . "<br>";
	echo "Total usage credits - " . $result["credits_total"] . "<br>";
	echo "Max. script size - " . $result["string_limit"] . "<br>";

}
else
{
	die("Something unexpected happen while trying to login to the service.");
}
```

##Use AutoIt Obfuscator Online

Online interface for the AutoIt Obfuscator is available at:

https://www.pelock.com/autoit-obfuscator/

##Windows GUI client and command line version

AutoIt Obfuscator comes also with full GUI version for Windows:

![AutoIt Obfuscator Windows Client](https://www.pelock.com/img/en/products/autoit-obfuscator/autoit-obfuscator-1-0-main.png)

You can download it at:

https://www.pelock.com/products/autoit-obfuscator/download

Installation package contains an additional command line interface:

![AutoIt Obfuscator Windows Client](https://www.pelock.com/img/en/products/autoit-obfuscator/autoit-obfuscator-command-line-1-0.png)
 
It is compatible with Windows (.NET) and Linux (Mono). Command line version
can be used to integrate obfuscation into your build process or any other
batch operation.

Bartosz Wójcik
https://www.pelock.com