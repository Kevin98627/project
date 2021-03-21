<?php

class Home extends Controller
{
    public function __construct()
    {
      $this->usuario = $this->model('usuario');      
    }

    public function index()
    {

    }
    public function login()
    {
       if($_SERVER['REQUEST_METHOD'] == 'POST'){

       } else {
         $this->view('pages/login');
       }
    }

    public function register()
    {
       if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $datosRegistro = [
          'privilegio' => '2',
          'email' => trim($_POST['email']),
          'usuario' => trim($_POST['usuario']),
          'contraseña' => password_hash(trim($_POST['contrasena']),PASSWORD_DEFAULT)
        ];

        if ($this->usuario->verificarUsuario($datosRegitro))
        {
          if ($this->usuario->register($datosRegitro)){
            $_SESSION['usuario'] = $datosRegistro['usuario'];
            $_SESSION['usuario'] = 'Ya puedes ingresar ya estas registrado difruta la nueva red social';
            redirection('/home/login');
          } else { }
        } else { 
          $_SESSION['usuarioError'] = 'no esta disponible el usuario';
          $this->view('pages/register');
          }
        }  else {
         $this->view('pages/register');
       }

    }
}