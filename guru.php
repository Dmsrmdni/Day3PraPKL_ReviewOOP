<?php

    class Guru extends Database{
        
        public function index(){
            $dataguru = mysqli_query($this->koneksi,"SELECT * FROM guru");
            return $dataguru;
        }

        public function create($nip,$nama,$alamat){
            mysqli_query($this->koneksi,
                        "INSERT INTO guru VALUES (null,'$nip','$nama','$alamat')"
                        );
        }

        public function edit($no){
            $dataguru = mysqli_query($this->koneksi,"SELECT * FROM guru where no='$no'");
            return $dataguru;
        }

        public function update($no,$nip,$nama,$alamat){
            mysqli_query($this->koneksi,
                            "UPDATE guru SET
                                nip = '$nip',
                                nama = '$nama',
                                alamat = '$alamat'
                            WHERE no = $no
                        ");
        }

        public function show($no){
            $dataguru = mysqli_query($this->koneksi,"SELECT * FROM guru WHERE no='$no'");
            return $dataguru;
        }

        public function delete($no){
            mysqli_query($this->koneksi,"DELETE FROM guru WHERE no='$no'");
        }
  
    }
    
?>