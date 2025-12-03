<?php
class connection
{
    public $db;

    public function __construct()
    {
        $this->connect_database();
    }
    public function connect_database()
    {
        $this->db = mysqli_connect('localhost', 'root', '', 'dersim_stationery');
        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function query($sql)
    {
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            exit(mysqli_error($this->db));
        }
        return $result;
    }
}
$db = new connection();
?>