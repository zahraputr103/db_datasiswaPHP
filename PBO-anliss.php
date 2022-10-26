<?php
//pembuatan class
class dbConfig
{
    //private adalah untuk menjaga property dan method class, agar tidak bisa terlihat dari luar class.

    private $_host = 'localhost';
    private $_username = 'usr';
    private $_password = '';
    private $_database = 'dbpbolatihan';

    
    protected $connection;

    //koneksi ke databsae 
    public function _construct()
    {
        //menyambungkan ke database, 
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
         //jika tidak terhubung ke database   
            if (!$this->connection){
                echo "cannot connect to database serve";
                exit;
            }
        }
        //kemballi ke database nya
        return $this->connection;
    }
} 
 
$konek=mysqli_connect("localhost","usr","","dbpbolatihan");
function query($query){
global $konek;
$result = mysqli_query ($konek,$query);
$rows= [];
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;
}
?>