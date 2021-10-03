<?php
    class Home extends Controller {

        function index() {
            if(isset($_SESSION['user']))
                $this->view("mainLayout", ["Page" => "Home"]);
            else
                $this->view("mainLayout", ["Page" => "Login"]);
        }

        function signup() {
            $user = $this->model("User");
            $isValid_Username = true;
            $isValid_Phone = true;
            $isValid_Password = true;
            $message = [];
            if(strlen($_POST['username']) < 6) {
                $isValid_Username = false;
                $message[0] = "Tên đăng nhập ít nhất 6 kí tự";
            };
            if(strlen($_POST['phone']) < 9) {
                $isValid_Phone = false;
                $message[1] = "Số điện thoại ít nhất 9 chữ số";
            }
            if(strlen($_POST['password']) < 6) {
                $message[2] = "Mật khẩu ít nhất 6 kí tự";
            }
            if($isValid_Username && $isValid_Phone && $isValid_Password) {
                $user->signup($_POST['username'], $_POST['password'], $_POST['phone'], $_POST['role']);
                $_SESSION['user'] = $_POST['username'];
                header("Location: ./index");
            } else {
                $this->view("mainLayout", ["Page" => "Login", "Message" => $message, "signupForm" => "true"]);
            }
        }

        function login() {
            $user = $this->model("User");
            $result = $user->login($_POST['username'], $_POST['password']);
            $check = $result->num_rows;
            if($check > 0) {
                $_SESSION['user'] = $_POST['username'];
                header("Location: ./index");
            }
            else {
                $this->view("mainLayout", ["Page" => "Login", "isValidLogin" => "Sai tên đăng nhập hoặc mật khẩu"]);
            }
        }

        function logout() {
            session_destroy();
            header("Location: ./index");
        }

    }
?>