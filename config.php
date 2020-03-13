<?php
    
    $DBhost = "localhost";
    $DBuser = "root";
    $DBpass = "";
    $DBname = "employee";
    
    $conn = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        exit();
    }

    function alert($a) {
        echo "<script>
                alert('".$a."');
        </script>>";
    }

    function redir($r) {
        echo "<script>
                document.location = '".$r."'
        </script>";
    }

    function val($v) {
        global $conn;
        return $conn->real_escape_string($v);
    }

?>