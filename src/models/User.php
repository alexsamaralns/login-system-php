<?php

    use src\config\Connection;

    class User {

        private $id;
        private $login;
        private $email;
        private $password;
        private $idCompany;

        public function checkInput() {

            if($this->email == '' || $this->email == null
                || $this->password == '' || $this->password == null) {
                throw new Exception('Please check the fields!');
            }

        }

        public function validateLogin() {

            $this->checkInput();
            $conn = Connection::getConn();
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':password', $this->password);
            $stmt->execute();
            if($stmt->rowCount()) {
                $result = $stmt->fetch();
                if($result['password'] === $this->password) {
                    $_SESSION['user'] = array(
                        'id' => $result['id'], 
                        'login' => $result['login']
                    );                   
                    return true;
                }
            }
            
            throw new Exception('Invalid attempt');

        }

        //Setters        
        public function setLogin($login) {
            $this->login = $login;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setPassword($password) {
            $this->password = $password;
        }
        public function setIdCompany($idCompany) {
            $this->idCompany = $idCompany;
        }

        //Getters 
        public function getLogin() {
            return $this->login;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getPassword() {
            return $this->password;
        }
        public function getIdCompany() {
            return $this->idCompany;
        }

    }