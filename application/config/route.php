<?php

if (isset($_GET['bat'])) {
	if ($_GET['bat'] == "") {
		require("template/content.php");
	}
	// instansi
	elseif ($_GET['bat'] == "data-instansi") {
		require("application/instansi/data.php");
	} elseif ($_GET['bat'] == "tambah-data-instansi") {
		require("application/instansi/form-tambah.php");
	} elseif ($_GET['bat'] == "ubah-data-instansi") {
		require("application/instansi/form-ubah.php");

		// User
	} elseif ($_GET['bat'] == "data-user") {
		require("application/user/data.php");
	} elseif ($_GET['bat'] == "tambah-data-user") {
		require("application/user/form-tambah.php");
	} elseif ($_GET['bat'] == "ubah-data-user") {
		require("application/user/form-ubah.php");

		// Comment Center
	} elseif ($_GET['bat'] == "data-comment-center") {
		require("application/comment/data.php");
	}
} else {
	require("template/content.php");
}
