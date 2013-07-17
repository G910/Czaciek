<?php
$m->addBBCode("Witaj, komendy obsługi zaczynają się od :: czyli dwóch dwukropków. Np. ::kick Ktośtam[br]");
if($user['staff'] > 0){
	$m->addBBCode("Komendy [b]Jr Helper[/b][br]");
	$m->addBBCode("[b]::nick[/b] - zmiana nicku[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 1){
	$m->addBBCode("Komendy [b]Helper[/b][br]");
	$m->addBBCode("[b]::warn[/b] - wysłanie ostrzeżenia do użytkownika");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 2){
	$m->addBBCode("Komendy [b]Sr Helper[/b][br]");
	$m->addBBCode("[b]::kick[/b] - wyrzucanie z czatu[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 3){
	$m->addBBCode("Komendy [b]Trial Mod[/b][br]");
	$m->addBBCode("[b]::ban[/b] - banowanie na czacie[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 4){
	$m->addBBCode("Komendy [b]Mod[/b][br]");
	$m->addBBCode();
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 5){
	$m->addBBCode("Komendy [b]Global Mod[/b][br]");
	$m->addBBCode("[b]::yell[/b] - wysłanie wiadomości globalnej[br][b]::zdegraduj[/b] - usunięcie uprawnień użytkownikowi");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 6){
	$m->addBBCode("Komendy [b]Admin[/b][br]");
	$m->addBBCode("[b]::motd[/b] - zmiana wiadomości dnia[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 7){
	$m->addBBCode("Komendy [b]Global Admin[/b][br]");
	$m->addBBCode();
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 8){
	$m->addBBCode("Komendy [b]Co-owner[/b][br]");
	$m->addBBCode("[b]::status[/b] - zmiana statusu czatu[br][b]::add_alias[/b] - dodawanie aliasu komendy");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 9){
	$m->addBBCode("Komendy [b]Owner[/b][br]");
	$m->addBBCode();
}
$m->reply();
$m->clear();
?>