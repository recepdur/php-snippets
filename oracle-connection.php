<?php
    $conn = oci_connect("username", "password", "(DESCRIPTION =(ADDRESS_LIST =(ADDRESS = (COMMUNITY = tcp.world)(PROTOCOL = TCP)(Host = 192.168.1.45)(Port = 1521)))(CONNECT_DATA = (SID = ORAVT)))");
    if($conn != null)
    {
        //echo "Bağlandı.";
    }
    else
    {
        $err = OCIError();
        echo "Bağlanamadı. ";
    }      
?>
