
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="gestion_voiture";
    $conn=new mysqli($servername, $username, $password, $database);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
   // echo "connected syccessfully";
      $qr="select * from voiture";
      $res=$conn->query($qr);

       $rows=$res->fetch_all(MYSQLI_ASSOC);
       echo json_encode($rows);

    //   if($res->num_rows > 0){
    //     while($row = $res->fetch_assoc()) {
    //         echo "numero voiture: " . $row["no_v"]."  marque: " . $row["marque"]. "  anciente: " . $row["anciente"]."   annee: " . $row["annee"]."   couleur: " . $row["couleur"]. "<br>";
    //   }}
    // else {
    //     echo "0 results";
    //   }
      
    ?>
