<?php
/**
*
*/
class NewsControl extends Control{

	function show(){
		$db = M('news');
		$tatol = $db->count();
		$page = new Page($tatol,10,4,2);
		$this->assign('page',$page->show());
		$data = $db->order('id DESC')->all($page->limit());
		$this->assign('data',$data);
		$this->display();
	}
	public function add(){
		if(IS_POST){
			$data = $this->_post();
			if(M('news')->add($data)){
				$this->success('添加成功','show');
			}else{
				$this->error('添加失败');
			}
		}
		$this->display();
	}
}