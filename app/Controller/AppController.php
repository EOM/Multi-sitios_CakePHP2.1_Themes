<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    private $sitios = Array('ck2.local' => 'sitio1', 'ck3.local' => 'sitio2');
    public $sitio_flag = NULL;

    public function beforeFilter() {
        parent::beforeFilter();
        // Check sitio
        if (isset($this->sitios[$_SERVER['HTTP_HOST']])) {
//            exit('Si existo');
            $this->sitio_flag = $this->sitios[$_SERVER['HTTP_HOST']];
            $this->theme = $this->sitios[$_SERVER['HTTP_HOST']];
            App::build(array('Controller' => array(
                    ROOT . DS . APP_DIR . DS . 'Controller' . DS,
                    ROOT . DS . APP_DIR . DS . 'View' . DS . 'Themed' . DS . $this->theme . DS . 'Controller' . DS,
                    ))
            );
        } else {
//            exit('no existo');
            $this->sitio_flag = $this->sitios[$_SERVER['HTTP_HOST']];
            $this->theme = $this->sitios[$_SERVER['HTTP_HOST']];
        }
    }

}
