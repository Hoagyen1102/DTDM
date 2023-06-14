<?php
$conn = new PDO("sqlsrv:server = tcp:dtdmserver.database.windows.net,1433; Database = db", "3120520033@ued.udn.vn", "dtdm");

// Check connection
if ($conn->connect_errno) {
  echo "Thất bại khi kết nối tới database: " . $conn->connect_error;
  exit();
}
?>