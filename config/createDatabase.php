<?php
function checkIfDatabaseExist(){
    $serverName =  "localhost";
    $username = "root";
    $password = "Lateef";
    $dbname = "dictionary";
    $conn = mysqli_connect($serverName, $username, $password);

    if(!mysqli_select_db($conn, $dbname)){
        $createDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";
        mysqli_query($conn, $createDatabase);
    }
    mysqli_close($conn);
}

function checkIfTableExist(){
    $serverName =  "localhost";
    $username = "root";
    $password = "Lateef";
    $dbname = "dictionary";
    $conn = mysqli_connect($serverName, $username, $password, $dbname);
    $checkTable = "SELECT 1 FROM dictionary_resource LIMIT 1";
    $result = mysqli_query($conn, $checkTable);
    if($result){
        if($result && mysqli_num_rows($result) == 0){
            $path = "../csv/dictionary.csv";
            $filePath = fopen($path, "r");
            while(!feof($filePath)){
                if(!$line = fgetcsv($filePath)){
                    continue;
                }
                $importSQL = "INSERT INTO dictionary_resource VALUES ('".$line[0]."','".$line[1]."','".$line[2]."')";
            }

        }
    } else{
        echo "noExist";
    }
}
checkIfDatabaseExist();
checkIfTableExist();

?>