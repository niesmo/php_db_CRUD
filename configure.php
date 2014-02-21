<?
require_once(<PATH_TO_DATABASE_CLASS>);


define ( DB_USER, <DB_USER> );
define ( DB_PASS, <DB_PASSWORD> );
define ( DB_HOST, <DB_HOST> );
define ( DB_DB,   <DB_DATABASE_NAME> );

$db = new Database ( DB_HOST, DB_USER, DB_PASS, DB_DB );
if (!$db->isConnected())
    die("DATABASE IS NOT CONNECTED");

/*
Turn on the error or debug here
//$db->error_on();
//$db->debug_on();
*/

?>
