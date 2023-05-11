<?php
class Member{
    private $koneksi;
    public function __construct()
    {
        global $dbh; //instance object koneksi.php
        $this->koneksi = $dbh;
    }
    public function ceklogin($data)
    {
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM member WHERE username = ? AND password = ?";
        
        $ps = $this->koneksi->prepare($sql);
        $ps->bindParam(1, $_POST['username']);
        $ps->bindParam(2, $password);
        $ps->execute($data);
        $rs = $ps->fetch();

        return $rs;
    }
    
}

?>