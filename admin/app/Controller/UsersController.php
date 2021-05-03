<?php

class UsersController extends AppController
{
    var $name = "Users";
    var $layout = "admin";
    var $helpers = array("Html","Session");
    var $components = array("Session");
    public function beforeFilter(){
        parent::beforeFilter();
    }
    public function login(){
           if($this->request->is('post')){
            if($this->Auth->login()){
             if ($this->Auth->user('level') == 0){
              $this->redirect("/Dashboards");
             }else{
              $this->redirect("/Dashboards");
             }
            }else{
             $this->Session->setFlash('User của bạn không có quyền truy cập','default',array('class'=>"alert alert-success"));
            }
           }
 }
    
    public function logout(){
		$this->redirect($this->Auth->logout());
	}

	public function list(){
		//Lay du lieu trong table users
		$array_user = $this->User->find('all', array(
		'conditions'=>array('id > 0'),
		'recursive' =>-1
		));
		//đưa dữ liệu lấy được qua view bằng biến users
		$this->set('users', $array_user);
	}

public function delete($id = null){
        if($this->request->is('get')){
            $data = $this->User->find('first', array(
                'fields' => array('id','name'),
                'conditions'=>array('id'=>$id),
                'recursive'=>-1
            ));
            if(!empty($data)){
                $this->Session->setFlash('Success');
                $this->User->delete($id);
            }else{
                $this->Session->setFlash('Error');
            }
            $this->redirect(array('action'=>'list'));
        }
    }
    public function edit($id = null){
        if($this->request->is('post') || $this->request->is('put')){
            //print_r($this->request->data);exit();
            $this->User->id = $id;
            $this->User->set(array('date_updated' => date('Y:m:d H:i:s')));
            if($this->User->save($this->request->data)){
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
                $this->redirect(array('action'=>'list'));
            }
            
        }else{
            $this->User->id = $id;
            $this->request->data = $this->User->read();//đọc thông tin user với $id, gán vào request->data hiển thị view
        }
    }
    public function add(){
 $this->set('title_for_layout', 'Add user');
 if($this->request->is('post') || $this->request->is('put')){
 $now = date('Y:m:d H:i:s');
 $this->User->set(array('date_updated'=>$now));
 if($this->User->save($this->request->data)){
 $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
 $this->redirect(array('action'=>'list'));
 }
 }
 }
}
