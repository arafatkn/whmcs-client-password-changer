<?php

if (!defined("WHMCS")) {
	die("This file cannot be accessed directly");
}

use WHMCS\User\User;

add_hook('AdminClientProfileTabFields', 1, function($vars) {

	return [
		'Password' => '<input type="text" name="password" class="form-control input-250 input-inline" /> <font color="#cccccc"><small>(Optional)</small></font>
		<p class="help-block">Leave blank to keep the existing password.</p>',
	];
});

//Obtain the values defined in the AdminClientProfileTabFields hook point and save them as required
add_hook('AdminClientProfileTabFieldsSave', 1, function($vars) {

	if (empty($_REQUEST['password'])) {
		return;
	}

	$user = User::find($vars['userid']);

	if (!$user) {
		return;
	}

	$user->password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT); // Hash the password
	$user->save();
});
