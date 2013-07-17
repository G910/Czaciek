<?php
function get_users($who = 'online', $from = ''){
	$db = new mysqli("localhost", "root", "2b2HGuzx91", "czat");
	if($who == 'all'){
		$users_all_db = $db->query("SELECT * FROM `users`");
		$nr = array();
		while($users_all = $users_all_db->fetch_assoc()){
			$nr[] = $users_all['nr'];
		}
	}elseif($who == 'echo'){
		$users_onlinee_db = $db->query("SELECT * FROM `users` WHERE `online` = 1 AND `nr` != {$from}");
		$nr = array();
		while($users_onlinee = $users_onlinee_db->fetch_assoc()){
			$nr[] = $users_onlinee['nr'];
		}
	}else{
		$users_online_db = $db->query("SELECT * FROM `users` WHERE `online` = 1");
		$nr = array();
		while($users_online = $users_online_db->fetch_assoc()){
			$nr[] = $users_online['nr'];
		}
	}
	return($nr);
}

?>