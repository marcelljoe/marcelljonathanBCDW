<?php

// Load Database
require_once('config.php');

function getBooks()
{
    global $conn;
    $query = "SELECT * FROM books";
    $result = mysqli_query($conn, $query);
    return $result;
}
