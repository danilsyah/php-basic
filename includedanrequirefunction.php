<?php

// require "Lib/myfunction.php"; jika file tidak ditemukan maka akan error, program berhenti
// include "Lib/myfunction.php";
// rekomendasi menggunakan include_once atau required_once, file akan di load sekali
// include_once "Lib/myfunction.php";
// include_once "Lib/myfunction.php";
require_once "Lib/myfunction.php";
require_once "Lib/myfunction.php";

echo sayHello("danil", "syah");
