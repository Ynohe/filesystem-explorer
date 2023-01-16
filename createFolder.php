<?php

mkdir('./root/newFolder' . time(), 0777, false);




echo json_encode([
    "ok" => true,
    "path" => '/.root/newFolder' . time(),
]);
