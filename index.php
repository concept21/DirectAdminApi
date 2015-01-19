<?php
/**
 *
 * DirectAdmin API implementation
 *
 * @version 0.1
 * @link http://www.directadmin.com/api.html
 *
 */

include 'lib/DirectAdmin/DirectAdmin.php';

$da = new \DirectAdmin\DirectAdmin();
$da->connect('domain.com', 2222);
$da->set_login('username', 'password');

$da->set_method('get');
$da->query('/CMD_API_SHOW_USERS');
$da = $da->fetch_parsed_body();

//PRINT THE RESULT
echo "<pre>";
var_dump($da);
echo "</pre>";

?>


