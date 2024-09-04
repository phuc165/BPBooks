<?php
session_start();


if (isset($_POST['value'])) {
  $stringg = $_POST['value'];

  if ($stringg == "") {
    $_SESSION['cart'] = [];
  } else {
    $_SESSION['cart'][] = $stringg;
  }
  // $stringg="";


} else {
  echo "Invalid request.";
}
