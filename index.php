<?php
//this is my controller

ini_set('display_errors',1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//default root
$f3->route('GET /', function(){

   // $view = new Template();
   // echo $view->render('views/home.html');
    echo"homepage";
}
);
$f3->route('GET /order', function(){


    echo "order1";
}
);
$f3->route('GET /order2', function(){


    echo "order2";
}
);
$f3->route('GET /summary', function(){


    echo "summary";
}
);

//run fat free
$f3->run();