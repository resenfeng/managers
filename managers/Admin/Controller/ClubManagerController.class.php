<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-8-29
 * Time: 上午11:09
 */

namespace Admin\Controller;

use Think\Controller;

class ClubManagerController extends Controller
{
    public function clubManage(){
        $this->display();
    }

    /**
     * 显示社团主席团
     */
    public function managersList(){
        $where = array(
            'admin_id' => session('admin_id'),
            'admin_name' => session('admin_name')
        );
//        $where = array(
//            'admin_id' => 7,
//            'admin_name' => 'msc'
//        );
//        $table = M('admin');
//        $result = $table->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
//            ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
//            ->join('JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id')
//            ->field('manager_id,manager_position,manager_phone,manager_qq,manager_email')
//            ->where($where)->find();
//
//        $this->success(json_encode($result));

        $admin = M('admin');
        $count = $admin->count();
        $Page = new \Think\Page($count, 15);
        $this->Page = $Page->show();
        $result = $admin->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
            ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
            ->join('JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id')
            ->field('manager_id,manager_position,manager_phone,manager_qq,manager_email')
            ->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $this->list = $result;

        $this->display();
    }

    /**
     * 编辑主席团
     */
    public function editManager(){
        if (IS_POST){
            $where = array(
                'manager_id' => I('post.manager_id')
            );
            $data = array(
                'manager_position' => I('post.manager_name'),
                'manager_phone'    => I('post.manager_phone'),
                'manager_qq'       => I('post.manager_qq'),
                'manager_email'    => I('post.manager_email')
            );
            $table = M('ms_manager');
            $result = $table->where($where)->save($data);
            if ($result){
                //
            }else{
                //
            }
        }else{
            $this->success("链接成功");
        }
    }

    /**
     * 添加主席团
     */
    public function addManager(){
        //
    }

    /**
     * 删除主席团
     */
    public function delManager(){
        $where = array(
            'manager_id' => I('post.manager_id')
        );
        $table = M('ms_manager');
        $result = $table->where($where)->delete();
        if ($result){
            //
        }else{
            //
        }
    }

    /**
     * 显示社团信息
     */
    public function showClubInfo(){
        $where = array(
            'admin_id' => session('admin_id'),
            'admin_name' => session('admin_name')
        );
//        $where = array(
//            'admin_id' => 7,
//            'admin_name' => 'msc'
//        );
        $table = M('admin');
        $result = $table->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
            ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
            ->field('club_full_name,club_time,club_logo,club_slogan,club_honor,club_intro,club_member_num')
            ->where($where)->find();
        $this->success(json_encode($result));
//        $this->display();
    }

    /**
     * 编辑社团信息
     */
    public function editClubInfo(){
        //
    }



















    public function activityApply(){
        $this->display();
    }

    public function clubInfo(){

    }




    public function memberManager(){
//        $where = array(
//            'admin_id' => session('admin_id'),
//            'admin_name' => session('admin_name')
//        );
//        $where = array(
//            'admin_id' => 7,
//            'admin_name' => 'msc'
//        );
//        $table = M('admin');
//        $result = $table->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
//            ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
//            ->field('club_member_num')
//            ->where($where)->find();
//        $this->success(json_encode($result));

        $admin = M('club_seumsc_member');
        $count = $admin->count();
        $Page = new \Think\Page($count, 15);
        $this->Page = $Page->show();
        $result = $admin
            ->field('seumsc_member_id,seumsc_member_name,seumsc_member_sex,seumsc_member_academy,seumsc_member_grade,seumsc_member_phone')
            ->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $this->mlist = $result;

        $this->display();

    }

    public function editMember(){
        $tablePartName = session('user_name');
        $tableName = "ms_club_".$tablePartName."_member";
        $table = M($tableName);
        $where = array(
            'seumsc_member_id' => I('post.seumsc_member_id')
        );
        $data = array(
            'seumsc_member_name' => I('post.seumsc_member_name'),
            'seumsc_member_academy'    => I('post.seumsc_member_academy'),
            'seumsc_member_grade'       => I('post.seumsc_member_grade'),
            'seumsc_member_phone'    => I('post.seumsc_member_phone')
        );
        $result = $table->where($where)->save($data);
        if ($result){
            //
        }else{
            //
        }
    }

    public function delMember(){
        $tablePartName = session('user_name');
        $tableName = "ms_club_".$tablePartName."_member";
        $table = M($tableName);
        $where = array(
            'seumsc_member_id' => I('post.seumsc_member_id')
        );
        $result = $table->where($where)->delete();
        if ($result){
            //
        }else{
            //
        }
    }

    public function managerList(){
        $admin = M('ms_club_seumsc_member');
        $count = $admin->count();
        $Page = new \Think\Page($count, 15);
        $this->Page = $Page->show();
        $result = $admin
            ->field('club_seumsc_member_id,club_seumsc_member_name,club_seumsc_member_sex,club_seumsc_member_academy,club_seumsc_member_grade,club_seumsc_member_phone')
            ->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $this->list = $result;

        $this->display();
    }


    public function myFavoriteApply(){
        $this->display();
    }

    public function placeApply(){

//        $this->success('提交成功！',U('Admin/ClubManager/clubManage'),3);
        $this->display();
    }

    public function remApply(){
        $this->display();
    }

    public function starApply(){
        $this->display();
    }

    public function tenBestApply(){
        $this->display();
    }

    public function setShowInfo(){
        $where = array(
            'admin_id' => session('admin_id'),
            'admin_name' => session('admin_name')
        );
//        $where = array(
//            'admin_id' => 7,
//            'admin_name' => 'msc'
//        );
        $table = M('admin');
        $result = $table->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
            ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
            ->field('club_full_name,club_time,club_logo,club_slogan,club_honor,club_intro,club_member_num')
            ->where($where)->find();
        $this->success(json_encode($result));
//        $this->display();
    }
}