<?php
$module = $_GET["module"] ?? "authentification";
$action = $_GET["action"] ?? "index";
require "../_module/{$module}/{$module}_{$action}.php";
