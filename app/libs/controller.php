<?php

class Controller
{
    public function model($modelo)
    {
        require_once '../app/models/' . $modelo . '.php';

        return new $modelo;
    }
    public function view($view , $datos = [])
    {
     if (file_exists('../app/views/' . $view . '.php'))
     {
         require_once '../app/views/' .$view . '.php';
          echo ' ui guevon esta mierda esta funcionando';
     }  else {
         echo 'no guevon esta mierda esta mala siga intentando';
     }

    }
}