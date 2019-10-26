<?php

// Setting Config
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_perpustakaan';

// Connect To database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek Error
if (!$conn) {

    echo mysqli_error($conn);
}
