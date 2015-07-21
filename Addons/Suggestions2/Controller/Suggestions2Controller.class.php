<?php

namespace Addons\Suggestions2\Controller;
use Home\Controller\AddonsController;

class Suggestions2Controller extends AddonsController{
	function list()
	{
		$model = $this->getModel();
		
		$list_date = $this->get_model_list($model);
	
		$uids = getSubByKey ($list_data['list_data'],'uid');
		$uids = array_filter($uids);
		$uids = array_unique($uids);
		if(! empty($uids))
		{
			$map['uid'] = array ('in', $uids);
			$members = M('member')->where($map)->field('uid,nickname,truename,mobile')->select();
			foreach($members as $m)
			{
				!empty ($m['truename']) ||
				 $m['truename'] = $m['nickname'];
				$user[$m['uid']] = $m;
			}	
			
			foreach($list_data['list_data'] as &$vo)
			{
				$vo['mobile'] = $user[$vo['uid']]['mobile'];
				$vo['uid'] = $user[$vo['uid']]['truename'];
			}
			$this->assign($list_data);
			$this->display($model['template_list']);
		}
		
	}
	
	function suggest()
	{
		$config = getAddonConfig('Suggestions2');
		$this->assign($config);

		$data['uid'] = $this->mid;
		$user = M('member')->where($data)->find();
		$this->assign('user',$user);
		
		if(IS_POST)
		{
			$truename = I('truename');
			if($config['need_truename'] && !empty($truename) )
			{
				$member['truename'] = $truename;
			}
			$mobile = I ('mobile');
			if($config('need_mobile') && !empty($mobile) )
			{
				$member['mobile'] = $mobile;
			}
			if(!empty($member))
			{
				M('member')->where($data)->save($member);
			}

			$data['cTime'] = time();
			$data['content'] = I('content');
			
			$res = M('suggestions2')->add($data);
			if($res)
				$this->success('ADD SUCCESSFUL,THANK YOU FOR YOUR RESPONSE');
			else
				$this->error('Add false,Please try again later');
		}else
		{
			this->display();	
		}
	}
}
