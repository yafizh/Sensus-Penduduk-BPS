<?php
if (isset($_GET['id'])) {
  require_once "koneksi.php";

  $sql = "DELETE FROM penduduk WHERE id=" . $_GET['id'];
  if ($mysqli->query($sql) === TRUE) {
    echo "<script>alert('Data Penduduk Berhasil Dihapus.')</script>";
    echo "<script>" .
      "window.location.href='penduduk.php';" .
      "</script>";
  } else echo "Error: " . $sql . "<br>" . $mysqli->error;
} else
  echo "<script>" .
    "window.location.href='penduduk.php';" .
    "</script>";
