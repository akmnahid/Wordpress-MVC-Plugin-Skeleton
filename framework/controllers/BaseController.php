<?php
/**
 * User: Nahid Hossain
 * Website: http://www.akmnahid.com , http://www.somogrotech.com
 * Contact: http://www.somogrotech.com/contact-us/
 * Date: 4/7/2015
 * Time: 9:44 AM
 */

namespace wpSkeletonMVC\controllers;
defined('ABSPATH') or die('No script kiddies please!');

class BaseController
{
    public $layout;


    /**
     * @param $view
     * @param array $param
     * @param bool $return
     */
    protected function render($view, $param = array(), $return = true)
    {

        extract($param);

    }


}