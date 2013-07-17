<?php
$admins_db = $db->query("SELECT * FROM `users` WHERE `staff` > 0 ORDER BY `staff` DESC");
$m->addBBCode("Oto obs³uga Czaciek:[br]");
$znaczek[1] = "<!";
$znaczek[2] = "!";
$znaczek[3] = "*!";
$znaczek[4] = "<#";
$znaczek[5] = "#";
$znaczek[6] = "*#";
$znaczek[7] = "$";
$znaczek[8] = "*$";
$znaczek[9] = "**";
$znaczek[10] = "***";
$nazwa[10] = "Owner";
$nazwa[9] = "Co-owner";
$nazwa[8] = "Global Admin";
$nazwa[7] = "Admin";
$nazwa[6] = "Global Mod";
$nazwa[5] = "Mod";
$nazwa[4] = "Trial Mod";
$nazwa[3] = "Sr Helper";
$nazwa[2] = "Helper";
$nazwa[1] = "Jr Helper";
while($admins = $admins_db->fetch_assoc()){
	$znacz = $znaczek[$admins['staff']];
	$naz = $nazwa[$admins['staff']];
	$m->addBBCode("[b][color=ff0000][{$znacz}][/color]{$admins['nick']}[/b] [color=00ff00]{$naz}[/color] gg:{$admins['nr']}[br]");
}
$m->reply();
$m->clear();
?>