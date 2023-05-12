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
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA(MD5(SHA1(?)))";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
    
}

?>