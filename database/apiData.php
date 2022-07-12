<?php

require  "../database/data.php";

header("Content-Type: application/json");

echo json_encode([
  "discList" => $discList,
])

?>