<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-8-29
 * Time: 上午11:09
 * @Purpose
 * 社团功能控制器
 * @Author
 * 冯森
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
            'admin_id' => session('user_id'),
            'admin_name' => session('user_name')
        );
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
    public function editManager($manager_id = 0){
        $table = M('manager');
        if (IS_POST){
            $where = array(
                'manager_id' => I('post.manager_id')
            );
            $data = array(
                'manager_position' => I('post.manager_position'),
                'manager_phone'    => I('post.manager_phone'),
                'manager_qq'       => I('post.manager_qq'),
                'manager_email'    => I('post.manager_email')
            );
            $result = $table->where($where)->save($data);
            if ($result){
                $this->success("修改成功");
            }else{
                //
            }
        }else{
            $where = array(
                'manager_id' => $manager_id
            );
            $managerInfo = $table->where($where)->find();
            $this->managerInfo = $managerInfo;
            $this->display();
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
        $table = M('manager');
        $result = $table->where($where)->delete();
        if ($result){
            $this->success("删除成功！");
        }else{
            $this->error("删除失败！");
        }
    }

    /**
     * 显示社团会员信息
     */
    public function membersList(){
        $clubName = session('user_name');
        $tableName = "club_".$clubName."_member";
        $table = M($tableName);
        $result = $table->select();
        $this->membersInfo = $result;
        $this->display();
    }

    /**
     * 编辑成员信息
     */
    public function editMember($member_id = 0){
        $clubName = session('user_name');
        $tableName = "club_".$clubName."_member";
        $table = M($tableName);
        if (IS_POST){
            $where = array(
                'member_id' => I('post.member_id')
            );
            $data = array(
                'member_academy' => I('post.member_academy'),
                'member_grade'    => I('post.member_grade'),
                'member_phone'       => I('post.member_phone')
            );

            $result = $table->where($where)->save($data);
            if ($result){
                $this->success("修改成功");
            }else{
                //
            }
        }else{
            $where = array(
                'member_id' => $member_id
            );
            $memberInfo = $table->where($where)->find();
            $this->memberInfo = $memberInfo;
            $this->display();
        }
    }

    /**
     * 添加成员
     */
    public function addMember(){
        $clubName = session('user_name');
        $tableName = "club_".$clubName."_member";
        $table = M($tableName);
        if (IS_POST){
            $data = array(
                'member_name' => I('member_name'),
                'member_sex' => I('member_sex'),
                'member_academy' => I('post.member_academy'),
                'member_grade'    => I('post.member_grade'),
                'member_phone'       => I('post.member_phone')
            );
            $where = array(
                'member_name' => I('member_name')
            );
            $check = $table->where($where)->find();
            if (!$check){
                $result = $table->add($data);
                if ($result){
                    $this->success("添加成功",U('Admin/ClubManager/membersList'),0);
                }else{
                    //
                }
            }else{
                $this->error("您的成员列表中已有该成员");
            }
        }else{
            $this->display();
        }
    }

    /**
     * 删除成员
     */
    public function delMember($member_id = 0){
        $clubName = session('user_name');
        $tableName = "club_".$clubName."_member";
        $table = M($tableName);
        $where = array(
            'member_id' => $member_id
        );
        $result = $table->where($where)->delete();
        if ($result){
            $this->success("删除成功！");
        }else{
            $this->error("删除失败！");
        }
    }


    /**
     * 显示社团信息
     */
    public function clubInfo(){
        $where = array(
            'admin_id' => session('user_id'),
            'admin_name' => session('user_name')
        );
        $table = M('admin');
        $result = $table->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
            ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
            ->join('JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id')
            ->field('ms_club_info.club_info_id,ms_manager.manager_name,ms_club.club_id,club_full_name,club_time,club_logo,club_slogan,club_honor,club_intro,club_member_num')
            ->where($where)->find();
        $result['club_logo'] = "http://58.213.164.146:8011/managers/picture/".$result['club_logo'];
        $this->clubInfo = $result;
        $this->display();
    }

    /**
     * 编辑社团信息
     */
    public function editClubInfo($club_info_id = 0,$manager_id = 0){
        if (IS_POST){
            $where = array(
                'club_info_id' => $club_info_id
            );
            $data = array(
                'club_full_name' => I('post.club_full_name'),
                'club_slogan' => I('post.club_slogan'),
                'club_intro' => I('post.club_intro'),
                'club_honor' => I('post.club_honor')
            );
            $logoFile = I('post.club_logo');
            $upload = new UploadController();
            $upload->uploadLogoPic($logoFile,$where,$data);
            $managerTable = M('manager');
            $managerWhere = array(
                'manager_id' => $manager_id
            );
            $managerData = array(
                'manager_name' => I('post.manager_name')
            );
            $result1 = $managerTable->where($managerWhere)->save($managerData);
            if ($result1)
                $this->success("修改社团信息成功");
            else
                $this->error("修改社团信息失败");

        }else{
            $where = array(
                'admin_id' => session('user_id'),
                'admin_name' => session('user_name')
            );
            $table = M('admin');
            $result = $table->join('JOIN ms_club ON admin_club_id = ms_club.club_id')
                ->join('JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id')
                ->join('JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id')
                ->field('ms_manager.manager_id,ms_club_info.club_info_id,ms_manager.manager_name,ms_club.club_id,club_full_name,club_time,club_logo,club_slogan,club_honor,club_intro,club_member_num')
                ->where($where)->find();
            $result['club_logo'] = "http://58.213.164.146:8011/managers/picture/".$result['club_logo'];
            $this->clubInfo = $result;
            $this->display();
        }
    }

    /**
     * 活动申请处理
     */
    public function activityApply(){
        if (IS_POST){
            $applyType = I('post.apply_type');
            switch ($applyType){
                case 'normal':
                    $this->normalActApply();
                    break;
                case 'special':
                    $this->spActApply();
                    break;
                default:
                    $this->spActApply();
                    break;
            }
        }else{
            $this->display();
        }
    }

    /**
     * 处理普通活动
     */
    private function normalActApply(){
        $where = array(
            'admin_id' => session('user_id')
        );
        $table = M('admin');
        $clubId = $table->where($where)->field('admin_club_id')->find();
        $enclosure = I('post.act_enclosure');
        $data = array(
            'normal_act_club_id' => $clubId['admin_club_id'],
            'normal_act_name' => I('post.normal_act_name'),
            'normal_act_club' => I('post.normal_act_club'),
            'normal_act_time' => I('post.normal_act_time'),
            'normal_act_type' => I('post.normal_act_type'),
            'normal_act_place' => I('post.normal_act_place'),
            'normal_act_object' => I('post.normal_act_object'),
            'normal_act_proc' => I('post.normal_act_proc'),
            'normal_act_text' => I('post.normal_act_text'),
            'normal_act_exp' => I('post.normal_act_exp'),
            'normal_act_head' => I('post.normal_act_head'),
            'normal_act_head_phone' => I('post.normal_act_head_phone'),
            'normal_act_organizer' => I('post.normal_act_organizer'),
            'normal_act_holder' => I('post.normal_act_holder'),
            'normal_act_num' => I('post.normal_act_num'),
            'normal_act_ifcome_org' => I('post.normal_act_ifcome_org'),
            'normal_act_ifcome_peo' => I('post.normal_act_ifcome_peo')
        );
        
        if ($data['normal_act_ifcome_org'] == 'yes'){
            $data['normal_act_ifcome_org'] = 1;
            $data['normal_act_comepeo_num'] = I('normal_act_comepeo_num');
            $data['normal_act_goods'] = I('normal_act_goods');
        }else{
            $data['normal_act_ifcome_org'] = 0;
        }

        if ($data['normal_act_ifcome_peo'] == 'yes'){
            $data['normal_act_ifcome_peo'] = 1;
            $comerData = array(
                'comer_name' => I('post.comer_name'),
                'comer_company' => I('post.comer_company')
            );
            $comerTable = M('comer');
            $comerTable->add($comerData);
        }else{
            $data['normal_act_ifcome_peo'] = 0;
        }

        $uploadType = "normal_act";
        $upload = new UploadController();
        $upload->uploadZip($uploadType,$enclosure,$data);
        $this->success("提交申请成功");
    }

    /**
     * 处理文体专项活动
     */
    private function spActApply(){
        $where = array(
            'admin_id' => session('user_id')
        );
        $table = M('admin');
        $clubId = $table->where($where)->field('admin_club_id')->find();
        $enclosure = I('post.act_enclosure');
        $data = array(
            'sp_act_club_id' => $clubId['admin_club_id'],
            'sp_act_name' => I('post.sp_act_name'),
            'sp_act_club' => I('post.sp_act_club'),
            'sp_act_organizer' => I('post.sp_act_organizer'),
            'sp_act_holder' => I('post.sp_act_holder'),
            'sp_act_time' => I('post.sp_act_time'),
            'sp_act_place' => I('post.sp_act_place'),
            'sp_act_head' => I('post.sp_act_head'),
            'sp_act_head_phone' => I('post.sp_act_head_phone'),
            'sp_act_money' => I('post.sp_act_money'),
            'sp_act_type' => I('post.sp_act_type'),
            'sp_act_num' => I('post.sp_act_num'),
            'sp_act_come' => I('post.sp_act_come'),
            'sp_act_proc' => I('post.sp_act_name'),
            'sp_act_object' => I('post.sp_act_name')
        );

        $uploadType = "special_act";
        $upload = new UploadController();
        $upload->uploadZip($uploadType,$enclosure,$data);
        $this->success("提交申请成功");
    }

    /**
     * 处理经费报销
     */
    public function rbmApply(){
        if (IS_POST){
            $file = I('post.rbm_invoice_pic');
            $data = array(
                'rbm_club_id' => I('post.rbm_club_id'),
                'rbm_club_name' => I('post.rbm_club_name'),
                'rbm_act_name' => I('post.rbm_act_name'),
                'rbm_order_time' => I('post.rbm_order_time'),
                'rbm_new_url' => I('post.rbm_new_url'),
                'rbm_invoice_money' => I('post.rbm_invoice_name'),
                'rbm_invoice_name' => I('post.rbm_invoice_name'),
                'rbm_invoice_type' => I('post.rbm_invoice_type'),
            );
            $load = new UploadController();
            $load->uploadRbmPic($file,$data);
            $this->success("报销申请成功");
        }else{
            $this->display();
        }
    }

    /**
     * 场地申请
     */
    public function placeApply(){
        if (IS_POST){
            $placeType = I('post.place_type');
            switch ($placeType){
                case 'indoor':
                    $this->iPlaceApply();
                    break;
                case 'outdoor':
                    $this->oPlaceApply();
                    break;
                default:
                    $this->iPlaceApply();
                    break;
            }
        }else{
            $this->display();
        }
    }

    /**
     *室内场地申请
     */
    private function iPlaceApply(){
        $data = array(
            'iapply_org' => I('post.iapply_org'),
            'iapply_time' => I('post.iapply_time'),
            'iapply_act' => I('post.iapply_act'),
            'iapply_num' => I('post.iapply_num'),
            'iapply_place' => I('post.iapply_place'),
            'iapply_peo' => I('post.iapply_peo'),
            'iapply_peo_phone' => I('post.iapply_peo_phone'),
            'iapply_apply_time' => I('post.iapply_apply_time')
        );
        $table = M('indoor_apply');
        $table->add($data);
        $this->success("申请提交成功");
    }

    /**
     * 室外场地申请
     */
    private function oPlaceApply(){
        $data = array(
            'oapply_org' => I('post.oapply_org'),
            'oapply_time' => I('post.oapply_time'),
            'oapply_act' => I('post.oapply_act'),
            'oapply_num' => I('post.oapply_num'),
            'oapply_place' => I('post.oapply_place'),
            'oapply_peo' => I('post.oapply_peo'),
            'oapply_peo_phone' => I('post.oapply_peo_phone'),
            'oapply_apply_time' => I('post.oapply_apply_time')
        );
        if (I('post.oapply_ifgoods') == 'yes'){
            $data['oapply_goods'] = I('post.oapply_goods');
        }else{
            $data['oapply_goods'] = "无";
        }
        $table = M('outdoor_apply');
        $table->add($data);
        $this->success("申请提交成功");
    }

    /**
     * 十佳社团申请
     */
    public function tenBestApply(){
        if (IS_POST){
            $file = I('post.best_apply_enclosure');
            $data = array(
                'best_apply_club' => I('post.best_apply_club'),
                'best_apply_honor' => I('post.best_apply_honor'),
                'best_apply_intro' => I('post.best_apply_intro')
            );
            $uploadType = "ten_best";
            $load = new UploadController();
            $load->uploadZip($uploadType,$file,$data);
            $this->success("提交申请成功");
        }else{
           $this->display();
        }
    }

    /**
     * 星级社团申请
     */
    public function starApply(){
       if (IS_POST){
           $enclosure = I('post.enclosure');
           $join = I('post.if_join');
           if ($join == 'yes'){
               $data = array(
                   'star_apply_club_name' => session('user_name')
               );
               $uploadType = "star";
               $upload = new UploadController();
               $upload->uploadZip($uploadType,$enclosure,$data);
               $this->success("提交成功");
           }else{
               $this->success("提交成功");
           }
       }else{
           $this->display();
       }
    }

    /**
     * 我最喜爱社团申请
     */
    public function myFavoriteApply(){
        if (IS_POST){
            $join = I('post.if_join');
            if ($join == 'yes'){
                $data = array(
                    'favo_apply_club_name' => session('user_name')
                );
                $table = M('favo_apply');
                $table->add($data);
                $this->success("提交成功");
            }else{
                $this->success("提交成功");
            }
        }else{
            $this->display();
        }
    }

    /**
     * 查看报名信息
     */
    public function recruit(){
        if (IS_POST){
            //
        }else{
            $table = M('recruit');
            $where = array(
                'recruit_club' => session('user_name')
            );
            $result = $table->where($where)->select();
            $this->recruit = $result;
            $this->display();
        }

    }

    /**
     * 查看报名信息
     */
    public function delRecruit($recruit_id = 0){
            $table = M('recruit');
            $where = array(
                'recruit_id' => $recruit_id
            );
            $table->where($where)->delete();
            $this->success("删除成功");
    }

    /**
     * 查看报名信息
     */
    public function editRecruit($recruit_id = 0,$recruit_state = 0){
        $table = M('recruit');
        $where = array(
            'recruit_id' => $recruit_id
        );
        $data = array(
            'recruit_state' => $recruit_state
        );
        $table->where($where)->save($data);
        $this->success("成功");
    }

    /**
     * 站内信
     */
    public function message(){
        $where = array(
            'msg_geter' => session('user_id')
        );
        $table = M('message');
        $result = $table->where($where)->select();
        $this->msg = $result;
        $this->display();
    }

    /**
     * 站内信详情
     */
    public function msgDetail(){
        $where = array(
            'msg_id' => I("post.id")
        );
        $table = M('message');

        $data["msg_state"] = 1;

        $table->where($where)->save($data);
        $result = $table->where($where)->find();
         echo json_encode($result);
    }

    /**
     * 删除站内信
     */
    public function delMsg($msg_id = 0){
        $where = array(
            'msg_id' => $msg_id
        );
        $table = M('message');
        $result = $table->where($where)->delete();
        $this->success("删除成功",U('Admin/ClubManager/message'));
    }

    /**
     * 显示社团主页的展示信息
     */
    public function clubInfoShow(){
        $table = M('club_show_info');
        $where = array(
            'club_name' => session('user_name')
        );
        $result = $table->where($where)->find();
        $this->showInfo = $result;
        $this->display();
    }

    /**
     * 修改社团主页的展示信息
     */
    public function editClubShowInfo(){
        if (IS_POST){
            $where = array(
                'admin_id' => session('user_id')
            );
            $table = M('admin');
            $clubId = $table->where($where)->field('admin_club_id')->find();
            $data = array(
                'club_id' => $clubId['admin_club_id'],
                'club_name' => I('post.club_name'),
                'club_slogan' => I('post.club_slogan'),
                'club_intro' => I('post.club_intro'),
                'club_honor' => I('post.club_honor'),
                'club_show_info_honor1' => I('post.club_show_info_honor1'),
                'club_show_info_honor2' => I('post.club_show_info_honor2'),
                'club_show_info_honor3' => I('post.club_show_info_honor3'),
                'club_show_info_context1' => I('post.club_show_info_context1'),
                'club_show_info_context2' => I('post.club_show_info_context2'),
                'club_show_info_context3' => I('post.club_show_info_context3'),
                'club_show_info_jpact' => I('post.club_show_info_jpact')
            );
            $file = I('post.club_show_info_pic[]');
            $upload = new UploadController();
            $upload->uploadClub($file,$data);
            $this->success("提交成功");
        }else{
            $this->display();
        }
    }

    public function setShowInfo(){
        if (IS_POST){
            $where = array(
                'admin_id' => session('user_id')
            );
            $table = M('admin');
            $clubId = $table->where($where)->field('admin_club_id')->find();
            $data = array(
                'act_club_id' => $clubId['admin_club_id'],
                'act_name' => I('post.act_name'),
                'act_context1' => I('act_context1'),
                'act_context2' => I('act_context2'),
                'act_context3' => I('act_context3'),
            );
            $where = array(
                'act_club_id' => $clubId['admin_club_id']
            );

            $file = $_FILES;
            $video = $file['act_video'];
            unset($file['act_video']);
            $upload = new UploadController();
            $upload->uploadJpAct($file,$data);
            $upload->uploadVideo($video,$where);
        }else{
            $where = array(
                'admin_id' => session('user_id')
            );
            $tableTemp = M('admin');
            $clubId = $tableTemp->where($where)->field('admin_club_id')->find();
            $table = M('jp_act');
            $where = array(
                'act_club_id' => $clubId['admin_club_id']
            );
            $result = $table->where($where)->find();
            $result['act_video'] = "http://58.213.164.146:8011/managers/video/".$result['act_video'];
            $result['act_pic'] = str_replace('activity','http://58.213.164.146:8011/managers/picture/activity',$result['act_pic']);
            $picUrl = explode('@',$result['act_pic']);
            $this->picUrl = $picUrl;
            $this->showInfo = $result;
            $this->display();
        }
    }

}