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
	} elseif ($_GET['bat'] == "detail-data-instansi") {
		require("application/instansi/detail.php");
	} elseif ($_GET['bat'] == "hapus-instansi") {
		require("application/instansi/hapus-instansi.php");

		// User
	} elseif ($_GET['bat'] == "data-user") {
		require("application/user/data.php");
	} elseif ($_GET['bat'] == "tambah-data-user") {
		require("application/user/form-tambah.php");
	} elseif ($_GET['bat'] == "ubah-data-user") {
		require("application/user/form-ubah.php");
	} elseif ($_GET['bat'] == "detail-data-user") {
		require("application/user/detail.php");

		// Comment Center
	} elseif ($_GET['bat'] == "data-command-center") {
		require("application/command/data.php");
	}
} else {
	require("template/content.php");
}