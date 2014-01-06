<?php
/**
 * 用户控制器
 */
class UserControl extends Control {
	private $db;//定义User控制器的私有属性，来用存在实例化后的对象	
	public function __init(){		
		$this->db = K('user');//扩展模型
	}

	private function getData(){		
			$data = array();
			$data['username'] = Q('post.username',NULL,'trim');
			$data['passored'] = Q('post.password',NULL,'trim');
			$data['reg_time'] = time();	
	}	
	public function addUser(){
	 	if(IS_POST){
	 		$this->getData('edit');		
			if($this->db->add($data)){
				$this->success('添加成功！','userList');
			}else{
				$this->error('添加失败！');
			}
	 	}	 	
	 	$this->display();
	 }
	 public function userList(){
	 	$total = $this->db->count();
		$page = new Page($total,10,4,2);
		$this->assign('page',$page->show());
	 	$data = $this->db->order('uid DESC')->select($page->limit());
		$this->assign('data',$data);	 	
	 	$this->display();
	 }
	 public function show(){
	 	$username = Q('get.username',NULL);
		$data = $this->db->where(array('username'=>$username))->find();
		$this->assign('data',$data);
		$this->display();		
	 }
	 

}