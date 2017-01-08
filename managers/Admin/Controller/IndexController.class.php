<?php

/**
 *
 * @Purpose
 * 首页
 * @Author
 * 冯森
 *
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index() {
		$this->display();
	}

	/*
	 * 社彩缤纷展示1
	 */
	public function clubIndex(){
		$club_info = M("club_info");

		$where["club_brilliant"] = 2;

		//club_info->club->club_show_info
		//				 ->manager
		$result = $club_info->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
					->join("JOIN ms_club_show_info ON ms_club.club_id = ms_club_show_info.club_id")
					->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")
					->where($where)->select();

		$picture = explode("@", $result[0]["club_show_info_pic"]);

		$i = 0;
		foreach ($picture as $value){
			$data[$i] = "http://58.213.164.146:8011/managers/picture/".$value;
			$i++;
		}

		$result[0]["club_show_info_pic"] = $data;

		$this->assign("show", $result[0]);
		$this->display();
	}
	/*
	 * 社彩缤纷展示2
	 */
	public function clubIndex2(){
		$club_info = M("club_info");

		$where["club_brilliant"] = 2;

		//club_info->club->club_show_info
		$result = $club_info->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
			->join("JOIN ms_club_show_info ON ms_club.club_id = ms_club_show_info.club_id")
			->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")
			->where($where)->select();

		$picture = explode("@", $result[1]["club_show_info_pic"]);

		$i = 0;
		foreach ($picture as $value){
			$data[$i] = "http://58.213.164.146:8011/managers/picture/".$value;
			$i++;
		}

		$result[1]["club_show_info_pic"] = $data;

		$this->assign("show", $result[1]);

//		dump($result[0]);
		$this->display();
	}
	/*
	 * 社彩缤纷展示3
	 */
	public function clubIndex3(){
		$club_info = M("club_info");

		$where["club_brilliant"] = 2;

		//club_info->club->club_show_info
		$result = $club_info->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
			->join("JOIN ms_club_show_info ON ms_club.club_id = ms_club_show_info.club_id")
			->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")
			->where($where)->select();

		$picture = explode("@", $result[2]["club_show_info_pic"]);

		$i = 0;
		foreach ($picture as $value){
			$data[$i] = "http://58.213.164.146:8011/managers/picture/".$value;
			$i++;
		}

		$result[2]["club_show_info_pic"] = $data;

		$this->assign("show", $result[2]);

//		dump($result[2]["club_id"]);
		$this->display();
	}
	/*
	 * 精品活动展示1
	 */
	public function jpActIndex(){
		$jp_act = M("jp_act");
		$club_info = M("club_info");

		$where["club_brilliant"] = 2;

		//club_info->club->jp_act
		$result = $club_info->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
					->join("JOIN ms_jp_act ON ms_club.club_id = ms_jp_act.act_club_id")
					->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")
					->where($where)->select();

		$picture = explode("@", $result[0]["act_pic"]);

		$i = 0;
		foreach ($picture as $value){
			$data[$i] = "http://58.213.164.146:8011/managers/picture/".$value;
			$i++;
		}

		$result[0]["act_pic"] = $data;

		$result[0]["act_video"] = "http://58.213.164.146:8011/managers/video/".$result[0]["act_video"];

		$this->assign("show", $result[0]);
		$this->display();
	}
	/*
	 * 精品活动展示2
	 */
	public function jpActIndex2(){
		$jp_act = M("jp_act");
		$club_info = M("club_info");

		$where["club_brilliant"] = 2;

		//club_info->club->jp_act
		$result = $club_info->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
					->join("JOIN ms_jp_act ON ms_club.club_id = ms_jp_act.act_club_id")
					->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")
					->where($where)->select();

		$picture = explode("@", $result[1]["act_pic"]);

		$i = 0;
		foreach ($picture as $value){
			$data[$i] = "http://58.213.164.146:8011/managers/picture/".$value;
			$i++;
		}

		$result[1]["act_pic"] = $data;

		$result[1]["act_video"] = "http://58.213.164.146:8011/managers/video/".$result[1]["act_video"];

		$this->assign("show", $result[1]);
		$this->display();
	}
	/*
	 * 精品活动展示3
	 */
	public function jpActIndex3(){
		$jp_act = M("jp_act");
		$club_info = M("club_info");

		$where["club_brilliant"] = 2;

		//club_info->club->jp_act
		$result = $club_info->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
					->join("JOIN ms_jp_act ON ms_club.club_id = ms_jp_act.act_club_id")
					->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")
					->where($where)->select();

		$picture = explode("@", $result[2]["act_pic"]);

		$i = 0;
		foreach ($picture as $value){
			$data[$i] = "http://58.213.164.146:8011/managers/picture/".$value;
			$i++;
		}

		$result[2]["act_pic"] = $data;

		$result[2]["act_video"] = "http://58.213.164.146:8011/managers/video/".$result[2]["act_video"];
		
		$this->assign("show", $result[2]);
		$this->display();
	}
	/*
	 * 活动预告
	 */
	public function actTrailer_index(){
		$act_trailer = M("act_trailer");

		$where["act_trailer_state"] = 2;

		$result = $act_trailer->where($where)->select();

		$this->assign("trailer", $result);
		$this->display();
	}

	public function rolling(){
		$table = M('');
	}
}