<?php

require __DIR__ . "/../helper/student_helpers.php";

// GET METHODS
if (isset($_GET["action"]) && $_GET["action"] === "get_students") get_students();
if (isset($_GET["action"]) && $_GET["action"] === "get_deleted_students") get_deleted_students();
if (isset($_GET["action"]) && $_GET["action"] === "get_student") get_student($_GET["sid"]);

// POST METHODS
if (isset($_POST["action"]) && $_POST["action"] === "create_student") create_student($_POST);

// PATCH METHODS
if (isset($_PATCH["action"]) && $_PATCH["action"] === "update_student") update_student($_PATCH);
if (isset($_PATCH["action"]) && $_PATCH["action"] === "restore_deleted_student") restore_deleted_student($_DELETE["sid"]);

// DELETE METHODS
if (isset($_DELETE["action"]) && $_DELETE["action"] === "delete_student") delete_student($_DELETE["sid"]);
if (isset($_DELETE["action"]) && $_DELETE["action"] === "delete_all_students") delete_all_students();
if (isset($_DELETE["action"]) && $_DELETE["action"] === "soft_delete_student") soft_delete_student($_DELETE["sid"]);
