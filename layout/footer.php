<?php error_reporting(0);

$parts = explode('/', __FILE__);
$filename = $parts[count($parts) - 1];

if (strpos($_SERVER["SCRIPT_URI"], $filename) !== false) {
	exit("illegal method");
}
?>
<div class="footer">
    <div class="pull-right">
        <strong>Build</strong> by <a href="http://github.com/Good-Game-Services">©2021 GGS-Network</a>
    </div>
    <div>
        <strong>Managed</strong> and <strong>owned</strong> by <a href="https://github.com/Good-Game-Services">©2021 GoodGameServices</a>
    </div>
</div>