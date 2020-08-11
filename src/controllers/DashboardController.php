<?php

    class DashboardController {

        public function index() {

            $loader = new \Twig\Loader\FilesystemLoader('../src/views');
            $twig = new \Twig\Environment($loader, [
                'auto_reload' => true
            ]);
            $template = $twig->load('dashboard.php');
            $params['login'] = $_SESSION['user']['login'];
            return $template->render($params);
            
        }

        public function logout() {
            
            unset($_SESSION['user']);
            session_destroy();
            header('Location: http://localhost/');

        }

    }