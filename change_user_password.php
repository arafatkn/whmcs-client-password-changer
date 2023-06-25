<?php

/**
 * WHMCS Change User Password
 * @author Arafat Islam <arafatkn@gmail.com>
 * @link https://github.com/arafatkn/whmcs-change-user-password
 * @license MIT
 * @version 0.1
 * Buy Me a Coffee: https://www.buymeacoffee.com/arafatkn
 */

if (!defined("WHMCS")) {
	die("This file cannot be accessed directly");
}

function change_user_password_config() {
	return [
		"name" => "Change User Password",
		"description" => "Change user password from admin panel.",
		"version" => "0.1",
		"author" => "Arafat Islam <arafatkn@gmail.com>",
		"fields" => [
//			"send_email" => array ("FriendlyName" => "Send Email to Client", "Type" => "yesno", "Size" => "25",
//				"Description" => "", "Default" => "yes", ),
		],
	];
}

function change_user_password_activate()
{
	//
}

function change_user_password_deactivate()
{
	//
}
