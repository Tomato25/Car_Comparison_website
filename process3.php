 <?php
    include "C:\shares\student\web\ITEC30151\N0826071\Connection.php";


    header("Content-Type: application/json");

    $selection = $_GET["model"];

    $sql = "SELECT * FROM cars WHERE Model=".$selection;

    $result = mysqli_query($con, $sql);

    $data = array();

    foreach ($result as $row) {
    
    $data[] = $row;
    
    }

    print json_encode($data);



?>