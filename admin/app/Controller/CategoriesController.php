<?php
class CategoriesController extends AppController
{
    var $layout = 'admin';
    var $uses = array('Category');
    public function beforeFilter(){
        parent::beforeFilter();
    }
    public function list(){
        $this->set('title_for_layout', 'Menu');
        
        $data = $this->Category->generateTreeList(null,null,null, '&nbsp;&nbsp;|&mdash;');
        $this->set('menu', $data);

    }
    public function delete($id = null){
        if($this->request->is('get')){
            $data = $this->Category->find('first', array(
                    'conditions'=>array('id = '.$id)
            ));
            if(!empty($data)){
                $this->Category->delete($id);
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
            }else{
                $this->Session->setFlash('Error','default',array('class'=>"alert alert-success"));
            }
            $this->redirect(array('action'=>'list'));
        }
    }
    public function edit($id = null){
        if($this->request->is('post') || $this->request->is('put')){
            //print_r($this->request->data);exit();
            $this->Category->id = $id;
            $this->Category->set(array('date_updated' => date('Y:m:d H:i:s')));
            if($this->Category->save($this->request->data)){
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
                $this->redirect(array('action'=>'list'));
            }
            
        }else{
            $this->Category->id = $id;
            $this->request->data = $this->Category->read();//đọc thông tin user với $id, gán vào request->data hiển thị view
        }
    }
    public function add(){
        //Lấy dữ liệu đang có để chọn khi muốn thêm vào menu con
        $result = $this->Category->generateTreeList(null, null, null, "---");
        $this->set('result', $result);
        //mảng thông báo lỗi (cách này không dùng validate bên model)
        $error = array();
        if($this->request->is('post')){
            $arrParams = $this->data['Category'];//dữ liệu sau khi submit
            if($arrParams['name']==null){
                $error['name'] = 'Not null';//kiểm tra lỗi
            }
            if(empty($error)){
                //Tiến thành thêm dữ liệu  Thông báo thành công và chuyển trang
                $now = date('Y:m:d h:i:s');
                $arrParams['date_created'] = $now;
                $arrParams['date_updated'] = $now;
                $this->Category->save($arrParams);
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
                $this->redirect('list');
            }
            $this->set("error", $error);//gửi thông báo lỗi qua view
        }
    }

    public function menu(){
        
        $result = $this->Category->find('all', array('fields' => array('id', 'name','parent_id'),'conditions'=>array(' parent_id=0'),'order'=>array('id'=>'asc'), 'recursive'=>-1));
    return $result;
    }

}