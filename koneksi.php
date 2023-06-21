<?php
    $db = mysqli_connect("sql200.infinityfree.com","if0_34467138","K9FuSsBIelQh","if0_34467138_donatur");
    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $total_dana = []; 
        while($th = mysqli_fetch_assoc($result)){
            $total_dana[]=$th;
        }
        return $total_dana;
    };

    function tambah($data){
        global $db;
        $nama = htmlspecialchars($data["nama"]);
        $paket = htmlspecialchars($data["paket"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $nominal = htmlspecialchars($data["nominal"]);
        $query = "INSERT INTO donatur
        VALUES
        ('','$nama','$paket',
        '$kategori','$nominal') ";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    };
?>