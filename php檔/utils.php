<?php 
require_once("conn.php");
$user = Null;
// 從 Session 拿 username
function getUserFromSession($username) {
	global $conn;
	 $sql = sprintf(
    "select * from users where username='%s'",
  	$username
  );
  $result = $conn->query($sql);
  $row = $result->fetch_assoc(); //nickname, id, username, role
  return $row;
};

function escape($str) {
  return htmlspecialchars($str, ENT_QUOTES);
}
?>