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
#include <MsgBoxConstants.au3>

Example()

Func Example()
    MsgBox($MB_SYSTEMMODAL, "AutoIt Obfuscator", "Hello World!")
EndFunc   ;==>Example
```

###After obfuscation

```autoit
Global Const $var_1043[2][6] = [[65183, 162, 43226], [47720, 201908501, 199, 98, 5467, 116939692]]
#OnAutoItStartRegister "EsqionxreEwvjrdtVthapfold"
Global $pGjspnYdnuqqrvf = Asc("Q")
Global $g_tBvtecoqk = Asc("O")
Global $_9nnlxJGW4ZWLLInz_Dx_Z_ = Asc("7")
Global $var_1502 = 40161
Global Const $HKTDBQX_ONDCNXN[2][15] = [[225, 52067, 940262642, 135, 60289, 98, 1889467718, 19, 2027461551, 685680576, 2003511795,  _
215, 2095030694, 33403, 80],  _
[38177, 43348, 57322, 28997, 502, 811828111, 598503755, 1512705422, 31963, 53921,  _
1159375109, 137]]
Global Const $Tpwix3eFS_n_lY_iH = 134
#OnAutoItStartRegister "TjxmyzxrdaFunc"
Global $H9U2j_zVV74ALk9fVR_G = Asc("t")
Global Const $var_570[3] = [485744289, 179601303, 139]
Global Const $aGymkispfwPkwrqRnucttlk[14] = [42555, 1915848226, 1927057066, 10735, 52673, 1291937098, 14054, 171, 20, 1527616065,  _
68, 884266351, 216, 447999259]
#OnAutoItStartRegister "func_2900"
Global Const $BeB0xjcAEa_jrHf1_0TZu_[2][11] = [[130, 5975, 58957, 3731, 39], [5, 41960, 31868, 60346, 477376462, 10, 6277, 1906895509, 202, 946525159, 7231]]
Global $var_3791[2][3] = [[1955785738, 30495], [17358, 28275, 1655039001]]
Global $var_1560[9] = [139245900, 895559182, 951213844, 184, 1414311984, 1934852618, 13217863, 26790, 86]
Global $UFVBJH_YOHFK_JDJFEXNTLP[8] = [807343992, 114, 96, 54241, 52109, 36561, 50382, 24373]
Global Const $var_3359[4] = [35220, 795270257, 60945, 876796546]
Global $qY_BJgtJ_lsa9R_r = BitOR
Global $var_3137 = MsgBox
Global $tSmggmxhnYstnaf = hzPDg_CPtFEFNOY_k_JL
Global $JNONS_PKDVO_IVQZAQ = BitRotate
Global $pJnomhikkl = Sqrt
Global $var_939 = VnekhzNlmioFunc
Global $g_eAofghw = Int
Global $g_dTdeauptilvOapvtuloRqomqdf = BitAND
Global $var_3553 = dL_KKJTIZ_VTITDzJzzbqr_
Global $var_2915 = StringTrimRight
Global $g_mLeumiBspriiyj = TtutybbiCmkdvdFunc
Global $CTNQNGLF_NFYVUS_LZGTP = StringReverse
Global $var_1300 = Chr
Global $pCr_jIT_0K8y_GEM = BitNOT
Global $3s8k__AZje9uD8C_ = _ArrayToString
Global $fPiazcdqnZlmpfluhFsrjynzgj = UishondgfQuwujFunc
Global $var_2299 = Jkxnkpxp
Global $KQGMBCOVB = UgZ___sFusnLijH
Global $var_675 = Yv_UxOVshIRn_rnvNIeL_
Global $wQj2LVwcTwQ_d5QG_ZJ_dp_ = ChrW
Global $hRhohbuZotakvuInkgkdrni = func_3967
Global $var_202 = QqorzleMutbosfoFunc
Global $tagUmennkn = BitXOR
Global $_A077_GHVrj7T2G8L = mi__pwyTQX_EIrvGGRq
Global $__TNG_3v7r3q7P_7ufycipz = BovkbmXobrrezFunc
#include <Array.au3>
Global $Foewj59PFhL__7_Rf_K1USOq = 11
#include <MsgBoxConstants.au3>
$var_939()
Func QqorzleMutbosfoFunc($var_3666, $LDBMQFWTK_QTMCL)
    Local $mFetzspk[9] = [0x0057, 0x0074, 0x005D, 0x0072, 0x0071, 0x0076, 0x0074, 0x0086, 0x0069]
    For $ODSUC = 0 To 8
        $WANSVA = $mFetzspk[$ODSUC]
        $WANSVA -= $ODSUC
        $WANSVA = $tagUmennkn($WANSVA, $ODSUC)
        $WANSVA = $g_dTdeauptilvOapvtuloRqomqdf($WANSVA, 65535)
        $mFetzspk[$ODSUC] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($WANSVA)
    Next
    Return $3s8k__AZje9uD8C_($mFetzspk, "")
EndFunc
Func UishondgfQuwujFunc($_OAcC_SB_WyCVwVwpggO, $_U3xoOwdQR_PN_6up)
    Local $dQiedqcocvmDxtjawizpz[10] = [0x1004, 0x5007, 0x8007, 0xF006, 0x1005, 0x6007, 0x5008, 0xC005, 0x4005, 0x7006]
    For $jnoy2Pi9N_U_DKjw_ILRVcb_ = 0 To 9
        $ZAIMULMVW = $dQiedqcocvmDxtjawizpz[$jnoy2Pi9N_U_DKjw_ILRVcb_]
        $ZAIMULMVW = $JNONS_PKDVO_IVQZAQ($ZAIMULMVW, -12, ($CGLSUTO_AXDRHVIFSL_UKMIFIWRTT <= $var_570[1] ? $var_2299() : "W"))
        $ZAIMULMVW -= $jnoy2Pi9N_U_DKjw_ILRVcb_
        $ZAIMULMVW = $tagUmennkn($ZAIMULMVW, $jnoy2Pi9N_U_DKjw_ILRVcb_)
        $ZAIMULMVW = $g_dTdeauptilvOapvtuloRqomqdf($ZAIMULMVW, 65535)
        $dQiedqcocvmDxtjawizpz[$jnoy2Pi9N_U_DKjw_ILRVcb_] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($ZAIMULMVW)
    Next
    $dQiedqcocvmDxtjawizpz = $3s8k__AZje9uD8C_($dQiedqcocvmDxtjawizpz, ($_9nnlxJGW4ZWLLInz_Dx_Z_ < $var_99 ? "" : $var_2299()))
    Return $dQiedqcocvmDxtjawizpz
EndFunc
Func dL_KKJTIZ_VTITDzJzzbqr_($YKCUXEW_UNOEM, $VFWZXLJZZR_BRRGZIHR_SMRTPOVGT)
    Local $var_1686[1] = [0x0044]
    For $var_3453 = 0 To 0
        $var_1208 = $var_1686[$var_3453]
        $var_1208 -= $var_3453
        $var_1208 = $tagUmennkn($var_1208, $var_3453)
        $var_1208 = $g_dTdeauptilvOapvtuloRqomqdf($var_1208, 65535)
        $var_1686[$var_3453] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($var_1208)
    Next
    $var_1686 = $3s8k__AZje9uD8C_($var_1686, ($g_tBvtecoqk >= $pMmoolab ? $var_1560[1] : ""))
    Return $var_1686
EndFunc
Func hzPDg_CPtFEFNOY_k_JL($JWORV, $CDPNS_QCHXLS)
    Local $var_919[2] = [0x0020, 0x0063]
    For $vJclbkoiaqrVihqzoajtiOxihkirs = 0 To 1
        $mVrynr = $var_919[$vJclbkoiaqrVihqzoajtiOxihkirs]
        $mVrynr = $mVrynr + 1
        $var_919[$vJclbkoiaqrVihqzoajtiOxihkirs] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($g_dTdeauptilvOapvtuloRqomqdf($mVrynr, 0xFFFF))
    Next
    $var_919 = $3s8k__AZje9uD8C_($var_919, ($var_570[2] > $Tpwix3eFS_n_lY_iH ? "" : $var_675()))
    Return $var_919
EndFunc
Func VnekhzNlmioFunc()
    $var_3137(4096, $var_2915($fPiazcdqnZlmpfluhFsrjynzgj($var_570[0], 1082367128), 2 * 2) & $var_2915($__TNG_3v7r3q7P_7ufycipz($var_1043[1][5], $H9U2j_zVV74ALk9fVR_G), 1 * 1) & $var_2915($_A077_GHVrj7T2G8L($BeB0xjcAEa_jrHf1_0TZu_[1][10], $H9U2j_zVV74ALk9fVR_G, 2022612374, 169999006, $_9nnlxJGW4ZWLLInz_Dx_Z_),  _
$JNONS_PKDVO_IVQZAQ(8388608, $Foewj59PFhL__7_Rf_K1USOq, $var_3553($aGymkispfwPkwrqRnucttlk[2], $var_99))) & $var_2915($hRhohbuZotakvuInkgkdrni($var_675(), $UFVBJH_YOHFK_JDJFEXNTLP[5], $var_3791[1][1], 5360, $var_1560[0]),  _
$g_eAofghw($pJnomhikkl(49))),  _
$CTNQNGLF_NFYVUS_LZGTP($g_mLeumiBspriiyj($H9U2j_zVV74ALk9fVR_G, $pGjspnYdnuqqrvf, $Tpwix3eFS_n_lY_iH, $var_570[1], $pMmoolab)) & $var_2915($var_202($Tpwix3eFS_n_lY_iH, $var_1043[0][2]), $qY_BJgtJ_lsa9R_r(0, 8)) & $CTNQNGLF_NFYVUS_LZGTP($KQGMBCOVB(153151886)) & $CTNQNGLF_NFYVUS_LZGTP($tSmggmxhnYstnaf($var_99, $var_99)))
EndFunc
Func UgZ___sFusnLijH($CZSYJTVTF_OZJMCVPF)
    Local $FEqSoQ_TW3__xPgPUT[3] = [0xAC89, 0xACEA, 0xACBB]
    For $tagMlnauatpgMiiilf = 0 To 2
        $HZOWV_KIGVO_KELESS = $FEqSoQ_TW3__xPgPUT[$tagMlnauatpgMiiilf]
        $HZOWV_KIGVO_KELESS += 0x5A37
        $HZOWV_KIGVO_KELESS = $tagUmennkn($HZOWV_KIGVO_KELESS, $tagMlnauatpgMiiilf)
        $HZOWV_KIGVO_KELESS = $JNONS_PKDVO_IVQZAQ($HZOWV_KIGVO_KELESS, 12, "W")
        $FEqSoQ_TW3__xPgPUT[$tagMlnauatpgMiiilf] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($g_dTdeauptilvOapvtuloRqomqdf($HZOWV_KIGVO_KELESS, 65535))
    Next
    $FEqSoQ_TW3__xPgPUT = $3s8k__AZje9uD8C_($FEqSoQ_TW3__xPgPUT, ($var_3359[1] <= $pGjspnYdnuqqrvf ? $var_1502 : ""))
    Return $FEqSoQ_TW3__xPgPUT
EndFunc
Func ZhmqeualLetahwavSugsnbhu()
    return 6634
EndFunc
Func BovkbmXobrrezFunc($LKFWGGJDR_ATSBIUNV_QCFXMPVBH, $g_eQfvlgeyfnQwxwv)
    Local $RVGXYYO_MFDYRCDE[5] = [0x0020, 0x004E, 0x0060, 0x0065, 0x0053]
    For $var_127 = 0 To 4
        $var_1296 = $RVGXYYO_MFDYRCDE[$var_127]
        $var_1296 = $tagUmennkn($var_1296, $var_127)
        $var_1296 = $g_dTdeauptilvOapvtuloRqomqdf($var_1296, 65535)
        $RVGXYYO_MFDYRCDE[$var_127] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($var_1296)
    Next
    Local $UNESRZZ_AKTQSNSWNX = $3s8k__AZje9uD8C_($RVGXYYO_MFDYRCDE, "")
    Return $UNESRZZ_AKTQSNSWNX
EndFunc
Func Jkxnkpxp()
    return 495764533
EndFunc
Func EsqionxreEwvjrdtVthapfold()
    Global Const $pMmoolab = 41462
EndFunc
Func func_3967($var_3474, $var_802, $var_4083, $var_1167, $CMCWUW)
    Local $mPmrVDGTHSteVk_v__y_h6[10] = [0x0075, 0x0070, 0x0073, 0x0071, 0x0047, 0x004F, 0x0045, 0x0068, 0x006A, 0x0076]
    For $fHnvbmWhhcu = 0 To 9
        $idOlkzqlmUhmthuv = $mPmrVDGTHSteVk_v__y_h6[$fHnvbmWhhcu]
        $idOlkzqlmUhmthuv = $idOlkzqlmUhmthuv - 1
        $mPmrVDGTHSteVk_v__y_h6[$fHnvbmWhhcu] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($g_dTdeauptilvOapvtuloRqomqdf($idOlkzqlmUhmthuv, 0xFFFF))
    Next
    $mPmrVDGTHSteVk_v__y_h6 = $3s8k__AZje9uD8C_($mPmrVDGTHSteVk_v__y_h6, "")
    Return $mPmrVDGTHSteVk_v__y_h6
EndFunc
Func func_2900()
    Global Const $var_99 = 1050370420
EndFunc
Func Yv_UxOVshIRn_rnvNIeL_()
    return 1148247495
EndFunc
Func mi__pwyTQX_EIrvGGRq($iWrvexrbwbNzjwqvd, $RRCAT_ROYAZSQLLJ_KTFMO, $DELVEYYQL, $KNSYR, $var_727)
    Local $REZQI_SYHTPAC_BVLLITKU[8] = [0x5F5B, 0x5F5A, 0x5F52, 0x5F51, 0x5F41, 0x5F57, 0xDF4A, 0x5F4C]
    For $var_1099 = 0 To 7
        $g_vPemrrhmwka = $REZQI_SYHTPAC_BVLLITKU[$var_1099]
        $g_vPemrrhmwka -= 0xDF21
        $g_vPemrrhmwka = $JNONS_PKDVO_IVQZAQ($g_vPemrrhmwka, 1, $var_1300(87))
        $REZQI_SYHTPAC_BVLLITKU[$var_1099] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($g_dTdeauptilvOapvtuloRqomqdf($g_vPemrrhmwka, 65535))
    Next
    Local $SDLYJVM_JTKKF_DIPSCXQD = $3s8k__AZje9uD8C_($REZQI_SYHTPAC_BVLLITKU, "")
    Return $SDLYJVM_JTKKF_DIPSCXQD
EndFunc
Func TtutybbiCmkdvdFunc($idWxxqniJhmthgPgedrsb, $var_986, $AOIAACLWV_WCQQOLG_VBIMTJ, $JKSAUTK_WELJBRIQ, $MKOJEM_VFYFKYPR_LXMEHM)
    Local $ZSYXH_VNEKYHF[6] = [0x21A5, 0x2156, 0x2159, 0x2159, 0x2160, 0x217D]
    For $EDANPVVWV_BIKQPN_BONUGLTXGC = 0 To 5
        $dUpoadRuzyixhOfvtaez = $ZSYXH_VNEKYHF[$EDANPVVWV_BIKQPN_BONUGLTXGC]
        $dUpoadRuzyixhOfvtaez = $pCr_jIT_0K8y_GEM($dUpoadRuzyixhOfvtaez)
        $dUpoadRuzyixhOfvtaez -= 0xDE3A
        $dUpoadRuzyixhOfvtaez = $g_dTdeauptilvOapvtuloRqomqdf($dUpoadRuzyixhOfvtaez, 0xFFFF)
        $ZSYXH_VNEKYHF[$EDANPVVWV_BIKQPN_BONUGLTXGC] = $wQj2LVwcTwQ_d5QG_ZJ_dp_($dUpoadRuzyixhOfvtaez)
    Next
    Local $zQlXY6XnIaL__WYe42Te_p_ = $3s8k__AZje9uD8C_($ZSYXH_VNEKYHF, ($var_1560[7] >= $pMmoolab ? $_9nnlxJGW4ZWLLInz_Dx_Z_ : ""))
    Return $zQlXY6XnIaL__WYe42Te_p_
EndFunc
Func TjxmyzxrdaFunc()
    Global Const $CGLSUTO_AXDRHVIFSL_UKMIFIWRTT = 783193962
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

####Example of how to obfuscate AutoIt script with default options

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

####Example of how to obfuscate AutoIt script using customized obfuscation strategies

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

![AutoIt Obfuscator Windows Client](https://www.pelock.com/img/en/products/autoit-obfuscator/autoit-obfuscator-1-1-main.png)

Obfuscation options:

![AutoIt Obfuscator Options](https://www.pelock.com/img/en/products/autoit-obfuscator/autoit-obfuscator-1-1-options.png)

You can download it at:

https://www.pelock.com/products/autoit-obfuscator/download

Installation package contains an additional command line interface:

![AutoIt Obfuscator Windows Client](https://www.pelock.com/img/en/products/autoit-obfuscator/autoit-obfuscator-command-line-1-1.png)
 
It is compatible with Windows (.NET) and Linux (Mono). Command line version
can be used to integrate obfuscation into your build process or any other
batch operation.

Bartosz Wójcik
https://www.pelock.com