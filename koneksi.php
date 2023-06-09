<?php
class Koneksi_db{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "uas";
    private $koneksi = false;

    function __construct(){
        $k=mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if($k){
            $this -> koneksi=$k;
            echo("Koneksi berhasil");
        } else{
            echo("Koneksi Gagal");
        }
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
}
?>
<?php 
$host_name = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'uas';

$con = mysqli_connect($host_name,$db_user,$db_pass,$db_name);
?>