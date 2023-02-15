<?php
include 'conn.php';
$query = "SELECT * FROM master_customer";
$queryMysql = mysqli_query($conn, $query);
$numrowsMysql = mysqli_num_rows($queryMysql);
while ($resultMysql = mysqli_fetch_array($queryMysql)) {
    if ($numrowsMysql > 0) {
        $arr[] =
            array(
                'id_cust' => $resultMysql["id_cust"],
                'name_cust' => $resultMysql["name_cust"],
                'code_cust' => $resultMysql["code_cust"],
                'addres_cust' => $resultMysql["addres_cust"],
                'contact_cust' => $resultMysql["contact_cust"]
            );
    }
}
echo json_encode($arr);
