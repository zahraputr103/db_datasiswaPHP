<?php
//pembuatan class
class dbConfig
{
    //private adalah untuk menjaga property dan method class, agar tidak bisa terlihat dari luar class.
    //private itu termasuk properti yang tidak bisa sembarang di buka 
    //properti ini hny dapat digunkan oleh 'class' dimana proprty atau method didefinisikan,
    //tetapi 'class' turunan dan kode luar tidak dapat menggunakannya

    private $_host = 'localhost';
    private $_username = 'usr';
    private $_password = '';
    private $_database = 'dbpbolatihan';

    //protected adalah sebuah keyword untuk menandai suatu method di lindungi. method/property yang dilindungin hanya dapat digunakan oleh 'class' dimana, 
    //method/proprty sebuah method didefinisikan dan sebuah 'class' apapun yang diturunkan drinya namun kode lain tidak dapat di gunakan. 
    protected $connection;

    //fungsi ini digunakan sbgai koneksi ke databse
    public function _construct()
    {
        //mengacu ke line 10
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
    //menampilkan array
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;
}
?>
