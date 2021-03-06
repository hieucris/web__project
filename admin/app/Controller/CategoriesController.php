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
        $this->set('title_for_layout', 'Edit Category');
        $result = $this->Category->generateTreeList(null, null, null, "---");
        $this->set('result', $result);
        $detail = $this->Category->find('first', array(
            'fields' => array('id', 'name','parent_id','description'),
            'conditions'=>array('id = '.$id),
            'recursive'   =>-1
        ));
        $this->set('detail', $detail);
        if($this->request->is('post')){
            $arrParams = $this->data['Category'];
            if($arrParams['name']==null){
                $error['name'] = 'Not null';
            }
            if(empty($error)){
                $now = date('Y:m:d h:i:s');
                $data = array(
                    'Category'=>array(
                        'name'=> $arrParams['name'],
                        'date_updated'=>$now,
                        'parent_id'=>$arrParams['parent_id'],
                        'description'=>$arrParams['description']
                    )
                );
                $this->Category->id = $id;
                $this->Category->save($data);
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
                $this->redirect('list');
            }
            
            $this->set("error", $error);//g???i th??ng b??o l???i qua view
        }
    }
    public function add(){
        //L???y d??? li???u ??ang c?? ????? ch???n khi mu???n th??m v??o menu con
        $result = $this->Category->generateTreeList(null, null, null, "---");
        $this->set('result', $result);
        //m???ng th??ng b??o l???i (c??ch n??y kh??ng d??ng validate b??n model)
        $error = array();
        if($this->request->is('post')){
            $arrParams = $this->data['Category'];//d??? li???u sau khi submit
            if($arrParams['name']==null){
                $error['name'] = 'Not null';//ki???m tra l???i
            }
            if(empty($error)){
                //Ti???n th??nh th??m d??? li???u  Th??ng b??o th??nh c??ng v?? chuy???n trang
                $now = date('Y:m:d h:i:s');
                $arrParams['date_created'] = $now;
                $arrParams['date_updated'] = $now;
                $this->Category->save($arrParams);
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
                $this->redirect('list');
            }
            $this->set("error", $error);//g???i th??ng b??o l???i qua view
        }
    }

    public function menu(){
        
        $result = $this->Category->find('all', array('fields' => array('id', 'name','parent_id'),'conditions'=>array(' parent_id=0'),'order'=>array('id'=>'asc'), 'recursive'=>-1));
    return $result;
    }

}