<?php
session_start();

  //LogOut the user by unsetting the session cookie
  unset($_SESSION['is_auth']);
  unset($_SESSION['username']);
  unset($_SESSION['ID']);
  $_SESSION["cart_item"];

  //  delete session cookie
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000, $params["path"],
          $params["domain"], $params["secure"], $params["httponly"]
      );
  }
  $_SESSION = array();
  session_destroy();
  header("Location: _index.php");
  exit;
?>
