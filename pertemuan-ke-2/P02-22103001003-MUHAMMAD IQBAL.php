<?php
class kipasAngin{

   //property
   public $nama = "panasonic";
   public $warna = "hitam";
   public $jenis = "kipas gantung";
   public $ukuran = "besar";
   public $daya = "listrik";

   //method 
   public function putarKeKanan(){
       return "kipas ke arah kanan <br/>";
   }
   
   public function putarKeKiri(){
       return "kipas ke arah kiri <br/>";
   }
   
    public function tambahKecepatan(){
        return "menaikan kecepatan terakhir";
    }

}

//instansiasi class kipasAngin
$kipasAngin1 = new kipasAngin();

//memanggil method tampilkan_nama dari class manusia
echo $kipasAngin1->putarKeKanan();

//memanggil method warna_kulit dari class manusia
echo $kipasAngin1->putarKeKiri();

//memanggil method warna_kulit dari class manusia
echo $kipasAngin1->tambahKecepatan();
