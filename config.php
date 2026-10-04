$MODE = "mysql";

class connect{

    public $db_host = "localhost";
    public $db_user = "root";
    public $db_pass = "";
    public $db_name = "test";

    public function start_connection(){

        $connection = mysqli_connect(
            $this->db_host,
            $this->db_user,
            $this->db_pass,
            $this->db_name
        );

        if (!$connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        return $connection;
    }
}