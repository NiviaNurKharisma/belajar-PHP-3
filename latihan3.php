<?php
//Array 1 domensi dan ditampilkan dalam looping foreach()
//Array variable menampung lebih darii satu stringn 
//$nama1 = array ("Nivia", "Asti", "Vica");
// versi lama/porsedur 

//$nama2 =  ["Nivia", "Asti", "Vica"];
// versi terbaru/object

//print_r ($nama1);//menampilkan seluruh string dalam array
//echo "<br/>";
//print_r($nama2);
//echo "<br/>";
//echo "Nama saya :" . $nama1[0];

//)
//$siswa = [
    //"nama" => "Nivia",
    //"jk" => "Perempuan",
    //"kelas" => "XI RPL 1"
//];
//echo "Nama Saya :" . $siswa["nama"];
//echo "<br/>";
//echo "Jenis Kelamin saya :" . $siswa["jk"];
//echo "<br/>";
//echo "Saya Kelas :" . $siswa["kelas"];
//echo "<br/>";

$siswa = array(
    array(
    "nama" => "Nivia",
    "jk" => "Perempuan",
    "kelas" => "XI RPL 1"
),
    array(
    "nama" => "Bae Jinyoung",
    "jk" => "Laki-Laki",
    "kelas" => "Art"
    ),

    array(
        "nama" => "WannaOne",
        "jk" => "Laki-Laki",
        "kelas" => "Music"
    ),

    array(
        "nama" => "Wannable",
        "jk" => "LP",
        "kelas" => "Fandom"
    ),

        array(
            "nama" => "CIX",
            "jk" => "Laki-Laki",
            "kelas" => "Music"
    )
);
//echo $siswa [1]["nama"];
//echo "<br/>";
//echo $siswa [1]["jk"];
//echo "<br/>";
//echo $siswa [1]["kelas"];
//echo "<br/>";

foreach($siswa as $row){
    echo "Nama : " . $row["nama"];
    echo "<br/>";
    echo "Kelas :" . $row["jk"];
    echo "<br/>";
    echo "Kelas :" . $row["kelas"];
    echo "<br/>";
}
?>