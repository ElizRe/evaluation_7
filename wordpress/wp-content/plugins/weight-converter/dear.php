<?php
/*

Plugin Name: Weight Converter
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Weight Converter' in sidebar or footer or in any widgetized area. This 'Weight Converter' PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 1.1
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

Tawhidur Rahman Dear
Mailing Address: 
House - 304, Road - 10 Rupnagar Tinshed,
Pallabi, Mirpur,
Dhaka - 1216
BANGLADESH
tawhidurrahmandear@gmail.com
+8801716816283, (also in Viber, DUO, WhatsApp, IMO)
Skype & Google Hangout: tawhidurrahmandear
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace dearthirtyone\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "dearthirtyone_weight_converter";

    public function __construct() {
      parent::__construct(null, "Weight Converter");
    }


    public function widgetContent($args, $instance)
    {
      ?>

<script type="text/javascript" language="JavaScript">
 
function nofocus()
 
{
 
document.convert.InUnit.focus()
 
}
 
var gValue = 1
var kgValue = 1000
var ounceValue = 28.3495
var lbValue = 453.592
var tValue = 907184
 
function toCM()
 
{
 
var i = document.convert.unit.selectedIndex
var thisUnit = document.convert.unit.options[i].value
 
if (thisUnit == "G")
 
        {
 
document.convert.g.value = document.convert.InUnit.value
 
        }
 
else if(thisUnit == "KG")
 
        {
 
document.convert.g.value = document.convert.InUnit.value * kgValue
 
        }
 
else if(thisUnit == "OUNCE" )
 
        {
 
document.convert.g.value = document.convert.InUnit.value * ounceValue
 
        }
 
else if(thisUnit == "LB" )
 
        {
 
document.convert.g.value = document.convert.InUnit.value * lbValue
 
        }
 
else if(thisUnit == "T" )
 
        {
 
document.convert.g.value = document.convert.InUnit.value * tValue
 
        }
 
toAll()
 
}
 
function toAll()
 
{
 
var m = document.convert.g.value
 
document.convert.kg.value = m / kgValue
document.convert.ounce.value = m / ounceValue
document.convert.lb.value = m / lbValue
document.convert.t.value = m / tValue
 
}
//-->
</script>
 
<h4 align="center">Weight Converter</h4>
 
<div align="center"><form name="convert">
<table border=0>
<tr><th>Unit</th><th>Number</th></tr>
 
<tr><td>
<select name="unit">
<option value = "G">Gram
<option value = "KG">Kilogram
<option value = "OUNCE">Ounce
<option value = "LB">Pound
<option value = "T">U.S. Ton
</select></td>
<td><input type="text" name="InUnit" size="20" maxlength="20" value="0"></td></tr>
 
<tr><td>Gram:</td>
<td><input type="text" name="g" size="20" maxlength="20" value="0" onFocus="nofocus()"></td></tr>
 
<tr><td>Kilogram:</td>
<td><input type="text" name="kg" size="20" maxlength="20" value="0" onFocus="nofocus()"></td></tr>
 
<tr><td>Ounce:</td>
<td><input type="text" name="ounce" size="20" maxlength="20" value="0" onFocus="nofocus()"></td></tr>
 
<tr><td>Pound:</td>
<td><input type="text" name="lb" size="20" maxlength="20" value="0" onFocus="nofocus()"></td></tr>
 
<tr><td>U.S. Ton:</td>
<td><input type="text" name="t" size="20" maxlength="20" value="0" onFocus="nofocus()"></td></tr>
 
<tr><td><input type="Reset" value="Start Over" width=100></td>
<td><input type="button" value="Convert" onClick="toCM()" width=150></td></tr>
</table>
</form>
</font>
</td></tr>
</table></div>
 
 
</body>

      <?php
    
    }
  }

  S::register("dearthirtyone_weight_converter");


