<?php
require_once "model/model.php";

$model = new Model("localhost", "root", "", "all_system_database");

include_once "views/teacher_records_view.php";
