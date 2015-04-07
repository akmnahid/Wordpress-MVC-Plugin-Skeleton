<?php
/**
 * User: Nahid Hossain
 * Website: http://www.akmnahid.com , http://www.somogrotech.com
 * Contact: http://www.somogrotech.com/contact-us/
 * Date: 4/7/2015
 * Time: 9:40 AM
 */

return [
    //database instance
    // put false if you want it uninitialize
    // you can also put your custom database instance
    'databases' => [
        'db' => require_once 'db.php'
    ],
    //application routing
    'routes' => [
        //application landing page
        'defaultRoute' => [
            'controller' => 'app\controllers\DefaultController',
            'action' => 'index'
        ],
        //wordpress shortcodes routing
        'shortCodes' => [

        ],
        //routing for 404 page
        'error404' => [

        ],


    ],


];