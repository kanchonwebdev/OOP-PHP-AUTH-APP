<?php
    require_once 'Utilize.php';

    class Database
    {
        use Utilize;
        protected $db;

        /* database connection property */
        public function __construct()
        {
            $this->ConnectDB();
        }

        /* database connection method */
        protected function ConnectDB()
        {
            $this->db = new PDO("mysql:host={$this->db_servername};dbname={$this->db_database}", $this->db_username, $this->db_password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
?>