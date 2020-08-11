<?php

    class LoginController {

        public function index() {

            $loader = new \Twig\Loader\FilesystemLoader('../src/views');
            $twig = new \Twig\Environment($loader, [
                'auto_reload' => true
            ]);
            $template = $twig->load('login.php');
            $params['error'] = $_SESSION['msg_error'] ?? null;
            return $template->render($params);    
            
        }

        public function check() {

            try {
                $user = new User;
                $user->setEmail($_POST['email']);
                $user->setPassword(md5($_POST['password']));
                $user->validateLogin();
                header('Location: http://localhost/dashboard');
            }catch(\Exception $e) {       
                $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count' => 0);         
                header('Location: http://localhost/');
            }

        }

    }