<?php
    class User extends Database {

        public function login($username, $password) {
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($this->con, $query);
            return $result;
        }

        public function signup($username, $password, $phone, $role) {
            $query = "INSERT INTO user (username, password, phone, role) VALUES ('$username', '$password', '$phone', '$role')";
            mysqli_query($this->con, $query);
        }

    }
?>