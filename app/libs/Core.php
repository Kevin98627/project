<?php

class Core
{
 
    protected $currentController = 'home';
    protected $currentMethod = 'index';
    protected $parameters = [];

public function __construct()
{
    $url = $this->getUrl;

    if (file_exists('../app/controllers' . ucwords($url[0]) . '.php' ))
    {
        $this->CurrentController = ucwords($url[0]);

        unset($url[0]);
        
       }
     require_once '../app/controllers' . $this->currentController . '.php';

}
public  function getUrl ()
{
    if (isset($_GET['url'] )){
    $url = rtrim($_GET['url'] , '/');
    $url = filter_var($url , FILTER_SANITIZE_URL);
    $url = explode('/' , $url);
    return $url;
         }
      } 
  }