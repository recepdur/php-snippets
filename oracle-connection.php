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

    $query = oci_parse($conn, "select * from USER where USER_ID='$user_id'");
    oci_execute($query);               
    while($row = oci_fetch_array($query))
    {
        echo $row["USER_NAME"];
    } 
    $query = oci_parse($conn, "insert into USER (USER_NAME, USER_PASSWORD) VALUES('$kullanici_ad','$kullanici_md5_sifre')");
    oci_execute($query); 
    $query = oci_parse($conn, "delete from USER where USER_ID='$user_id'");
    oci_execute($query);
    $query = oci_parse($conn, "update USER set USER_PASSWORD='$kullanici_md5_sifre' where USER_ID='$user_id'");
    oci_execute($query); 

?>
