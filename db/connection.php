<?php
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbname = 'webboard';
    //เขื่อม db ตัวเเทนค่าการเชื่อมต่อ
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        //echo "Connect success !!";

        //$sql = 'SELECT * from profile_table';
        //$query = $conn->query($sql); 
        //$results = $query->fetchAll(PDO::FETCH_ASSOC); //เป็นการดึงข้อมูลมาทั้งหมด

        //print_r($results);


        //foreach($dbh->query('') as $row) {
        //print_r($row);
        //}
        //$dbh = null;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>