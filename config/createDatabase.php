<?php
function checkIfDatabaseExist(){
    $servername =  "localhost";
    $username = "root";
    $password = "smoothless";
    $dbname = "dictionary";
    $conn = mysqli_connect($servername, $username, $password);

    if(!mysqli_select_db($conn, $dbname)){
        $createDatabase = "CREATE A DATABASE IF NOT EXISTS $dbname";
        mysqli_query($conn, $createDatabase);
    }
    mysqli_close($conn);
}
checkIfDatabaseExist();

?>