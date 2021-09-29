<?php
    class User extends Database {

        public function login($username, $password) {
            $query = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($this->con, $query);
            return $result;
        }

    }
?>