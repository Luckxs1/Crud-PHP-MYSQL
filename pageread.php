<?php
$db = mysqli_connect("localhost", "root", "", "data");
if (isset($_GET['page_no']) && $_GET['page_no']!="" ){
    $page_no = $_GET['page_no'];
}else{
    $page_no = 1;
}

$total_records_per_page = 3;

$offset = ($page_no-1) * $total_records_per_page;
$prev_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";


$sql = "SELECT COUNT(*) As total_records FROM `php_crud`";
$result_c = mysqli_query($db,$sql);
$total_records = mysqli_fetch_array($result_c);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;

?>