<?php

//llamando a coonfig
require_once 'config/config.php'

//llamando a helpeers

require_once 'helpers/url_helper.php';

// llamando a libs  
spl_autoload_register(function($files){
    require_once 'libs/' . $files . '.php';

});