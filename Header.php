<?php $PerformanceMonitorStart = microtime(true); require_once "STHSSetting.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="<?php echo $LeagueOwner . " - " . $MetaContent;?>">
<?php 
echo "<link href=\"" . $CSSJSCDNPath . "STHSMain.css\" rel=\"stylesheet\" type=\"text/css\">";
include "ThemeFunction.php";
If ($CookieTeamWebsiteThemeID == -1){GetThemeFunction($DefaultTheme,$CSSJSCDNPath);}else{GetThemeFunction($CookieTeamWebsiteThemeID,$CSSJSCDNPath);}
If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link  href=\"" . $CSSJSCDNPath . "STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\">\n";}
?>