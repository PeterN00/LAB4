<?php
    class Db
    {
        protected static $connection;
        public function connect()
        {
            $connection = 
                mysqli_connect("localhost", "root", "", "demo_lab3");
            mysqli_set_charset($connection, 'utf8');
            if (mysqli_connect_error()) {
                echo "Database connection failed: " . mysqli_connect_error();
            }
            return $connection;
        }
        public function query_execute($queryString)
        {
            $connection = $this->connect();
            $result = $connection->query($queryString);
            $connection->close();
            return $result;
        }

        public function select_to_array($queryString)
        {
            $rows = array();
            $result = $this->query_execute($queryString);
            if ($result == false) return false;
            while ($item = $result->fetch_assoc()) {
                $rows[] = $item;
            }
            return $rows;
        }
    }
?>