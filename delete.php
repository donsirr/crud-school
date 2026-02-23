<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `menus` WHERE ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: manage_menu.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>