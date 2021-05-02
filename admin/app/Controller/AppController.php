<?php

App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $components = array(
		'Data',
		'Session',
		'Auth'=>array(
			'authenticate' => array(
				'Blowfish' => array(
					'userModel' => 'User',
					'fields' => array('username' => 'username', 'password' => 'password'),
				)
			),
			'loginAction' => array('admin'=>false, 'controller'=>'users', 'action'=>'login'),
			'loginRedirect' => array('admin'=>true, 'controller'=>'dashboards', 'action'=>'index'),
			'logoutRedirect' => array('admin'=>true, 'controller'=>'users', 'action'=>'login'),
			'authError' => 'You can not access that page',
			'authorize' => array('Controller')
		)
	);
	public function beforeFilter(){
		if($this->params['prefix'] == "admin"){
            if($this->Auth->loggedIn()){
                $this->Auth->allow();
            }
        }else{
            $this->Auth->allow();
        }
		$this->set('current_user', $this->Auth->user());
		$this->set("DataComponent", $this->Data);
	}
	function isAuthorized(){
   		return true;
 	}
}
