<?php
// show error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
// home page url
$home_url="http://localhost/api/";
 
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 5;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

// set your default time-zone
date_default_timezone_set('America/Los_Angeles');
 
// variables used for jwt
$key = "394u9aJASFl91";
$iss = "http://localhost:8000";
$aud = "http://localhost:8000";
$iat = 1356999524;
$nbf = 1357000000;
?>