<?php
$m->addBBCode("$nazwa rzuca kostką", FORMAT_BOLD_TEXT)->setRecipients($from);
$p->push($m); 
$m->clear();
sleep(3); 
$m->addBBCode("I Uzyskuje wynik $wynik !! ", FORMAT_BOLD_TEXT)->setRecipients($from); 
$p->push($m);
$m->clear();
?>