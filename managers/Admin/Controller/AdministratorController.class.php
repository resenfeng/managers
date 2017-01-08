<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2016/8/31
 * Time: 14:02
 * @Purpose
 * 学团联控制器
 * @Author
 * 方舟
 */

namespace Admin\Controller;
use Think\Controller;

class AdministratorController extends Controller{

    /*
     * 学团联端主页
     */
    public function adminManage(){
        $this->display();
    }
    /*
     * 室外场地申请信息
     */
    public function outdoorApply(){
        //实例化室外场地表
        $place = M('outdoor_apply');

        $result = $place->limit(10)->select();

        $this->assign('list',$result);
        $this->display();
    }
    /*
     * 室内场地申请信息
     */
    public function indoorApply(){
        $place = M('indoor_apply');

        $result = $place->limit(10)->select();
//        dump($result);
        $this->assign('list',$result);
        $this->display();
    }
    /*
     * 场地申请
     */
    public function placeApply(){
        $outdoorPlace = M('outdoor_apply');
        $indoorPlace = M('indoor_apply');

        $result1 = $outdoorPlace->select();
        $result2 = $indoorPlace->select();

        $this->assign('outdoorList', $result1);
        $this->assign('indoorList', $result2);

        $this->display();
    }
    /*
     * 常规活动申请
     */
    public function normalActApply(){

        $activity = M('normal_act');

        //获取除了ID的申请信息
        $result = $activity->select();

        $this->assign('list',$result);
        $this->display();
    }
    /*
     * 常规活动申请详细信息
     */
    public function normalActDetail(){
        $activity = M("normal_act");

        $where["normal_act_id"] = $_POST["id"];

        $result = $activity->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 文体专项申请详细信息
     */
    public function spActDetail(){
        $activity = M("sp_act");

        $where["sp_act_id"] = $_POST["id"];

        $result = $activity->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 室外活动申请详细信息
     */
    public function outdoorDetail(){
        $place = M("outdoor_apply");

        $where["outdoor_id"] = $_POST["id"];

        $result = $place->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 室内活动申请详细信息
     */
    public function indoorDetail(){
        $place = M("indoor_apply");

        $where["indoor_id"] = $_POST["id"];

        $result = $place->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 经费报销申请详细信息
     */
    public function reimbursementDetail(){
        $place = M("reimbursement");

        $where["rbm_id"] = $_POST["id"];

        $result = $place->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 文体专项活动申请
     */
    public function spActApply(){
        $activity = M('sp_act');

        //获取除了ID的申请信息
        $result = $activity->select();

        $this->assign('list',$result);
        $this->display();
    }
    /*
     * 经费报销信息
     */
    public function reimbursement(){
        $reimbursement = M('reimbursement');

        $result = $reimbursement->select();

        $this->assign('list',$result);
        $this->display();
    }
    /*
     * 室外活动审批通过
     */
    public function outdoorApprove($id){
        $place = M('outdoor_apply');

        $where['outdoor_id'] = $id;
        $data['oapply_state'] = 2;

        $temp = $place->where($where)->find();
        $state = $temp["oapply_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $place->where($where)->save($data);

            $result2 = $place->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["oapply_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "室外场地审批";
            $data3["msg_context"] = $result2["oapply_place"]."场地审批通过!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('outdoorApply'));
        }
    }
    /*
     * 室外活动审批未通过
     */
    public function outdoorRefuse($id){
        $place = M('outdoor_apply');

        $where['outdoor_id'] = $id;
        $data['oapply_state'] = 3;

        $temp = $place->where($where)->find();
        $state = $temp["oapply_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $place->where($where)->save($data);

            $result2 = $place->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["oapply_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "室外场地审批";
            $data3["msg_context"] = $result2["oapply_place"]."场地审批不准许!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('outdoorApply'));
        }
    }
    /*
     * 删除室外活动审批
     */
    public function deleteOutdoor($id){
        $place = M("outdoor_apply");

        $where["outdoor_id"] = $id;

        $result = $place->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('outdoorApply'));
    }
    /*
     * 室内场地申请通过
     */
    public function indoorApprove($id){
        $place = M('indoor_apply');

        $where['indoor_id'] = $id;
        $data['iapply_state'] = 2;

        $temp = $place->where($where)->find();
        $state = $temp["iapply_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $place->where($where)->save($data);

            $result2 = $place->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["iapply_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "室内场地审批";
            $data3["msg_context"] = $result2["iapply_place"]."场地审批通过!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('indoorApply'));
        }
    }
    /*
     * 室内场地申请未通过
     */
    public function indoorRefuse($id){
        $place = M('indoor_apply');

        $where['indoor_id'] = $id;
        $data['iapply_state'] = 3;

        $temp = $place->where($where)->find();
        $state = $temp["iapply_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $place->where($where)->save($data);

            $result2 = $place->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["iapply_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "室内场地审批";
            $data3["msg_context"] = $result2["iapply_place"]."场地审批不准许!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('indoorApply'));
        }
    }
    /*
     * 删除室内活动审批
     */
    public function deleteIndoor($id){
        $place = M("indoor_apply");

        $where["indoor_id"] = $id;

        $result = $place->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('indoorApply'));
    }
    /*
     * 普通活动申请通过
     */
    public function normalActApprove($id){
        $activity = M('normal_act');
        $actTrailer = M("act_trailer");

        $where['normal_act_id'] = $id;
        $data['normal_act_state'] = 2;

        $temp = $activity->where($where)->find();
        $state = $temp["normal_act_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $activity->where($where)->save($data);

            $result2 = $activity->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["normal_act_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                        ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "普通活动审批";
            $data3["msg_context"] = $result2["normal_act_name"]."活动审批通过!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else{
                //向活动预告表中添加一条信息
                $data2["act_trailer_name"] = $result2["normal_act_name"];
                $data2["act_club_id"] = $id;
                $data2["act_trailer_club"] = $result2["normal_act_club"];
                $data2["act_trailer_time"] = $result2["normal_act_time"];
                $data2["act_trailer_place"] = $result2["normal_act_place"];
                $data2["act_type"] = 1;

                $actTrailer->add($data2);

                $this->success("操作成功", U('normalActApply'));
            }
        }
    }
    /*
     * 普通活动申请未通过
     */
    public function normalActRefuse($id){
        $activity = M('normal_act');

        $where['normal_act_id'] = $id;
        $data['normal_act_state'] = 3;

        $temp = $activity->where($where)->find();
        $state = $temp["normal_act_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $activity->where($where)->save($data);

            $result2 = $activity->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["normal_act_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "普通活动审批";
            $data3["msg_context"] = $result2["normal_act_name"]."活动审批不准许!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('normalActApply'));
        }
    }
    /*
     * 删除普通活动申请
     */
    public function deleteNormalAct($id){
        $activity = M("normal_act");

        $where["normal_act_id"] = $id;

        $result = $activity->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('normalActApply'));
    }
    /*
     * 文体专项活动审批通过
     */
    public function spActApprove($id){
        $activity = M('sp_act');
        $actTrailer = M("act_trailer");

        $where['sp_act_id'] = $id;
        $data['sp_act_state'] = 2;

        $temp = $activity->where($where)->find();
        $state = $temp["sp_act_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $activity->where($where)->save($data);

            //查询更改的那一条信息
            $result2 = $activity->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["sp_act_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "文体专项活动审批";
            $data3["msg_context"] = $result2["sp_act_name"]."活动审批通过!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else{
                //向活动预告表中添加一条信息
                $data2["act_trailer_name"] = $result2["sp_act_name"];
                $data2["act_club_id"] = $id;
                $data2["act_trailer_club"] = $result2["sp_act_club"];
                $data2["act_trailer_time"] = $result2["sp_act_time"];
                $data2["act_trailer_place"] = $result2["sp_act_place"];
                $data2["act_type"] = 2;

                $actTrailer->add($data2);

                $this->success("操作成功", U('spActApply'));
            }
        }
    }
    /*
     * 文体专项活动审批未通过
     */
    public function spActRefuse($id){
        $activity = M('sp_act');

        $where['sp_act_id'] = $id;
        $data['sp_act_state'] = 3;

        $temp = $activity->where($where)->find();
        $state = $temp["sp_act_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $activity->where($where)->save($data);

            $result2 = $activity->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["sp_act_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "文体专项活动审批";
            $data3["msg_context"] = $result2["sp_act_name"]."活动审批不准许!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('spActApply'));
        }
    }
    /*
     * 删除文体专项活动申请
     */
    public function deleteSpAct($id){
        $activity = M("sp_act");

        $where["sp_act_id"] = $id;

        $result = $activity->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('spActApply'));
    }
    /*
     * 经费报销审批通过
     */
    public function reimbursementApprove($id){
        $reimbursement = M('reimbursement');

        $where['rbm_id'] = $id;
        $data['rem_state'] = 2;

        $temp = $reimbursement->where($where)->find();
        $state = $temp["rem_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $reimbursement->where($where)->save($data);

            $result2 = $reimbursement->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["rbm_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "经费报销审批";
            $data3["msg_context"] = $result2["rbm_act_name"]."活动经费报销审批通过!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('reimbursement'));
        }
    }
    /*
     * 经费报销审批不通过
     */
    public function reimbursementRefuse($id){
        $reimbursement = M('reimbursement');

        $where['rbm_id'] = $id;
        $data['rem_state'] = 3;

        $temp = $reimbursement->where($where)->find();
        $state = $temp["rem_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $reimbursement->where($where)->save($data);

            $result2 = $reimbursement->where($where)->find();

            $message = M("message");
            $club = M("club");
            $where2["club_id"] = $result2["rbm_club_id"];

            $temp2 = $club->join("JOIN ms_admin ON ms_club.club_id = ms_admin.admin_club_id")
                ->where($where2)->find();

            $data3["msg_sender"] = 0;
            $data3["msg_theme"] = "经费报销审批";
            $data3["msg_context"] = $result2["rbm_act_name"]."活动经费报销审批不准许!";
            $data3["msg_level"] = "普通";
            $data3["msg_geter"] = $temp2["admin_id"];

            $message->add($data3);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('reimbursement'));
        }
    }
    /*
     * 删除经费报销审批
     */
    public function deleteReimbursement($id){
        $reimbursement = M("reimbursement");

        $where["rbm_id"] = $id;

        $result = $reimbursement->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('reimbursement'));
    }
    /*
     * 获取十佳社团参评表
     */
    public function bestClub(){
        $bestApply = M("best_apply");

        //获取十佳社团信息
        $result = $bestApply->select();

        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 十佳社团参评详细信息
     */
    public function bestDetail(){
        $place = M("best_apply");

        $where["best_apply_id"] = $_POST["id"];

        $result = $place->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 删除十佳申请
     */
    public function deleteBest($id){
        $best = M("best_apply");

        $where["best_apply_id"] = $id;

        $result = $best->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('bestClub'));
    }
    /*
     * 获取我最喜爱社团参评表
     */
    public function favoClub(){
        $favoApply = M("favo_apply");
        $club = M("club");

        $data = $club->select();
        $data2 = $favoApply->select();

        //查找不在我最喜爱社团参评表的社团列表:双循环
        $i = 0;
        $j = 0;
        foreach ($data as $value){
            foreach ($data2 as $value2){
                if ($value["club_id"] == $value2["favo_apply_club_id"]){
                    $j = 1;
                    break;
                }
            }
            if ($j == 0){
                $array[$i] = $value;
                $i++;
            }
            $j = 0;
        }

        //获取我最喜爱社团信息
        $result = $favoApply->select();

        $this->assign("list", $result);
        $this->assign("list2", $array);
        $this->display();
    }
    /*
     * 我最喜爱社团参评详细信息
     */
    public function favoDetail(){
        $place = M("favo_Apply");

        $where["favo_apply_id"] = $_POST["id"];

        $result = $place->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 获取星级社团参评表
     */
    public function starClub(){
        $starApply = M("star_apply");
        $club = M("club");

        $data = $club->select();
        $data2 = $starApply->select();

        //查找不在星级社团参评表的社团列表:双循环
        $i = 0;
        $j = 0;
        foreach ($data as $value){
            foreach ($data2 as $value2){
                if ($value["club_id"] == $value2["star_apply_club_id"]){
                    $j = 1;
                    break;
                }
            }
            if ($j == 0){
                $array[$i] = $value;
                $i++;
            }
            $j = 0;
        }

        //获取星级社团信息
        $result = $starApply->select();

        //参评
        $this->assign("list", $result);
        //不参评
        $this->assign("list2", $array);

        $this->display();
    }
    /*
     * 星级社团参评详细信息
     */
    public function starDetail(){
        $place = M("star_Apply");

        $where["star_apply_id"] = $_POST["id"];

        $result = $place->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 获取所有违规登记信息
     */
    public function getViolate(){
        $violate = M('violate');

        $result = $violate->select();
        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 登记新的违规信息
     */
    public function setViolate(){
        $violate = M('violate');

        $club_id = $_POST["club_id"];
        $club_name = $_POST["club_name"];
        $violate_rec = $_POST["violate_info"];
        $violate_peo = $_POST["add_person"];

        $data["club_id"] = $club_id;
        $data["club_name"] = $club_name;
        $data["violate_rec"] = $violate_rec;
        $data["violate_peo"] = $violate_peo;

        //创建新的违规登记
        $result = $violate->add($data);

        if ($result == 0)
            $this->error("登记失败");
        else
            $this->success("登记成功", U('getViolate'));
    }
    /*
     * 删除违规登记
     */
    public function deleteViolate($id){
        $violate = M("violate");

        $where["violate_id"] = $id;

        $result = $violate->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('getViolate'));
    }
    /*
     * 获取全部社团信息
     */
    public function getClub(){
        $club_info = M('club_info');

        $result = $club_info->select();
        $this->assign("list", $result);
        $this->display();
    }

    public function getClubPage(){
        $club_info = M('club_info');

        //查询社团总数
        $count= $club_info->count();
        //实例化分页类，传入总数和每页个数
        $Page = new \Think\Page($count, 15);
        //分页显示输出
        $show = $Page->show();

        //分页查询
        $list = $club_info->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign("club_info", $list);
        $this->assign("page", $show);
        $this->display();
//        $result = $club_info->select();
//        $this->assign("club_info", $result);
//        $this->display();
    }

    /*
     * 获取所有社团的简短信息
     */
    public function getBriefClub(){
        $club = M("club");

        $result = $club->join("JOIN ms_club_info ON ms_club.club_info_id = ms_club_info.club_info_id")
            ->join("JOIN ms_club_type ON ms_club.club_type_id = ms_club_type.club_type_id")
            ->join("JOIN ms_manager ON ms_club_info.club_manager_id = ms_manager.manager_id")->select();

        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 删除社团
     */
    public function deleteClub($id){

        //删除账号
        $admin = M("admin");
        $where["admin_club_id"] = $id;

        //删除社团
        $club = M("club");
        $where2["club_id"] = $id;

        //删除社团信息
        $club_info = M("club_info");
        $temp = $club->where($where2)->find();
        $where3["club_info_id"] = $temp["club_info_id"];

        //删除管理者信息
        $manager = M("manager");
        $temp2 = $club_info->where($where3)->find();
        $where4["manager_id"] = $temp2["club_manager_id"];

        $temp3 = $admin->where($where)->find();
        $adminName = $temp3["admin_name"];

        //删除社团成员数据表
        $sql = "DROP TABLE IF EXISTS ms_club_".$adminName."_member";

        //执行SQL语句
        M()->execute($sql);

        $result = $admin->where($where)->delete();
        $result2 = $club->where($where2)->delete();
        $result3 = $club_info->where($where3)->delete();
        $result4 = $manager->where($where4)->delete();

        if ($result == 0 || $result2 == 0 || $result3 == 0 || $result4 == 0)
            $this->error("社团删除失败");
        else
            $this->success("社团删除成功", U('getBriefClub'));
    }
    /*
     * 增加新社团
     */
    public function addClub(){
        $club_info = M('club_info');
        $manager_info = M('manager');
        $club_apply = M("club_apply");

        $apply = $_POST["apply"];

        $where["club_apply_id"] = $apply["club_apply_id"];

        $temp = $club_apply->where($where)->find();
        $state = $temp["club_apply_state"];

        if ($state != 1)
            echo "error";       //申请已被拒绝
        else{
            $data2["manager_phone"] = $apply["manager_phone"];
//            $data2["manager_qq"] = $apply["manager_qq"];
//            $data2["manager_email"] = $apply["manager_email"];
            $data2["manager_name"] = $apply["manager_name"];

            //创建管理者信息
            $manager_id = $manager_info->add($data2);

//        //获取新创建的管理者id
//            $manager_id = $manager_info->where($data2)->find();

            $data["club_full_name"] = $apply["club_name"];
            $data["club_time"] = $apply["club_apply_time"];
//            $data["club_manager_id"] = $manager_id["manager_id"];
            $data["club_manager_id"] = $manager_id;

            $data4["club_apply_state"] = 2;
            $club_apply->where($apply)->save($data4);

            //创建新社团
            $result = $club_info->add($data);

            $club = M("club");

            $club_info_id = $club_info->where($data)->field("club_info_id")->find();

            $club_type = M("club_type");

            $where2["club_type_name"] = $apply["club_type"];
            $temp2 = $club_type->where($where2)->find();

            $data3["club_info_id"] = $club_info_id["club_info_id"];
            $data3["club_name"] = $apply["club_name"];
            $data3["club_type_id"] = $temp2["club_type_id"];
//            $data3["club_type_id"] = 1;

            //club表增加一条数据
            $club->add($data3);

            $club_id = $club->where($data3)->field("club_id")->find();

            echo $club_id["club_id"];

            if ($result == 0)
                $this->error("社团创建失败");
        }
    }

    /*
     * 试成立审批不通过
     */
    public function clubApplyRefuse($id){
        $club_apply = M('club_apply');

        $where['club_apply_id'] = $id;
        $data['club_apply_state'] = 3;

        $temp = $club_apply->where($where)->find();
        $state = $temp["club_apply_state"];

        if ($state != 1)
            $this->error("操作失败，不可重复操作");
        else{
            //更新审批状态
            $result = $club_apply->where($where)->save($data);

            if ($result == 0)
                $this->error("操作失败");
            else
                $this->success("操作成功", U('clubApply'));
        }
    }

    public function searchClub(){
        $club_info = M('club_info');

        $data = $club_info->select();
        $manager = M('manager');
        $data2 = $club_info->join("JOIN dm_manager ON dm_club_info.club_managers_id = dm_manager.manager_id")->select();

        dump($data2);
//        dump($manager->select());
    }
    /*
     * 社团成立申请
     */
    public function clubApply(){
        $clubApply = M('club_apply');

        //获取社团成立申请表
        $result = $clubApply->select();
        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 社团成立详细申请信息
     */
    public function clubApplyDetail(){
        $clubApplyDetail = M("club_apply");

        $where["club_apply_id"] = $_POST["id"];

        $result = $clubApplyDetail->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 删除试成立申请
     */
    public function deleteClubApply($id){
        $club_apply = M("club_apply");

        $where["club_apply_id"] = $id;

        $result = $club_apply->where($where)->delete();

        if ($result == 0)
            $this->error("删除失败");
        else
            $this->success("删除成功", U('clubApply'));
    }

    public function getClubAdmin(){
        $admin = M('admin');

        $result = $admin->select();

        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 为新增加的社团分配账号并建立新的数据表
     */
    public function setClubAdmin(){
        //实例化管理者用户
        $admin = M('admin');
        $manager = M("manager");

        //接收post请求中的参数
        $data["admin_name"] = $_POST["newClub_account"];
        $data["admin_password"] = md5($_POST["newClub_password"]);
//        $data["admin_type"] = 2;
        $data["admin_club_id"] = $_POST["clubId"];

        //创建新的管理员用户
        $result = $admin->add($data);

        $where["club_id"] = $_POST["clubId"];
        $data3["manager_position"] = $_POST["manager_position"];

        $result2 = $manager->join("JOIN ms_club_info ON ms_manager.manager_id = ms_club_info.club_manager_id")
            ->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")
            ->where($where)->find();

        $where2["manager_id"] = $result2["manager_id"];

        $manager->where($where2)->save($data3);

        //用社团的用户名建表
        $data2 = $data["admin_name"];

        //根据输入的用户名动态创建数据表的SQL语句
        $sql = "CREATE TABLE IF NOT EXISTS ms_club_".$data2."_member(member_id INT PRIMARY KEY AUTO_INCREMENT,
            member_name VARCHAR(20),member_sex VARCHAR(10),member_academy VARCHAR(30),
            member_grade VARCHAR(30),member_phone VARCHAR(20));";

//                $sql = "CREATE TABLE dm_club_seunba_member(
//                seunba_member_id INT PRIMARY KEY AUTO_INCREMENT,
//                seunba_member_name VARCHAR(20),
//                seunba_member_sex VARCHAR(10),
//                seunba_member_academy VARCHAR(30),
//                seunba_member_grade VARCHAR(30),
//                seunba_member_phone VARCHAR(20)
//                );";

        //执行SQL语句
        M()->execute($sql);

        if ($result == 0)
            $this->error("社团账号创建失败");
        else
            $this->success("社团账号创建成功");
    }
    /*
     * *检测admin账号是否存在
     */
    public function adminIsExist(){
        $admin = M("admin");

        $where["admin_name"] = I("post.account");
        $result = $admin->where($where)->find();

        if(!$result){
            echo "notExist";
        }else
            echo "exist";
    }

    //创建社团新表
    public function createClubMembers(){
        $data = "seunba";

        $sql = "CREATE TABLE dm_club_".$data."member(".$data."_member_id INT PRIMARY KEY AUTO_INCREMENT,".
            $data."_member_name VARCHAR(20),".$data."_member_sex VARCHAR(10),".
            $data."_member_academy VARCHAR(30),".$data."_member_grade VARCHAR(30),".$data.
            "_member_phone VARCHAR(20));";

//        $sql = "CREATE TABLE dm_club_seunba_member(
//                seunba_member_id INT PRIMARY KEY AUTO_INCREMENT,
//                seunba_member_name VARCHAR(20),
//                seunba_member_sex VARCHAR(10),
//                seunba_member_academy VARCHAR(30),
//                seunba_member_grade VARCHAR(30),
//                seunba_member_phone VARCHAR(20)
//                );";

        $result = M()->execute($sql);
        dump($result);
    }
    /*
     * 预警注销社团
     */
    public function clubWarning(){
        if(IS_POST){
            $club_info = M("club_info");
            $club = M("club");
            $admin = M("admin");
            $message = M("message");

            //获取社团id和预警内容
            $content = $_POST["warning_content"];
            $where2["club_id"] = $_POST["club_id"];

            //查找与它关联的社团信息id
            $temp = $club->where($where2)->find();

            $where["club_info_id"] = $temp["club_info_id"];
            $data["club_warning_content"] = $content;
            $data["club_warning_state"] = 2;

            $result = $club_info->where($where)->save($data);

            $where3["admin_club_id"] = $_POST["club_id"];
            $temp = $admin->where($where3)->find();
            $data2["msg_geter"] = $temp["admin_id"];
            $data2["msg_sender"] = 0;
            $data2["msg_theme"] = "预警";
            $data2["msg_context"] = $content;
            $data2["msg_level"] = "紧急";

            $result2 = $message->add($data2);

            if ($result == 0 || $result2 == 0)
                $this->error("预警失败");
            else
                $this->success("预警成功");
        }else
            $this->display();
    }
    /*
     * 获取活动列表
     */
    public function getActivity(){
        $activity = M("activity");

        $result = $activity->select();

        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 获取指定ID的活动详细信息
     */
    public function activityDetail(){
        $activity = M("activity");

        $where["act_id"] = $_POST["id"];

        $result = $activity->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 获取所有活动预告
     */
    public function actTrailer(){
        $actTrailer = M("act_trailer");

        $where["act_trailer_state"] = 2;

        $where2["act_trailer_state"] = 1;

        //所有待选活动预告
        $result = $actTrailer->where($where)->select();
        $result2 = $actTrailer->where($where2)->select();

        //被选中的活动预告
        $this->assign("list", $result);
        //全部待办活动
        $this->assign("list2", $result2);
        $this->display();
    }
    /*
     * 添加活动预告
     */
    public function addActTrailer($act_trailer_time,$act_trailer_name,$act_trailer_club,$act_trailer_place){
        $actTrailer = M("act_trailer");

        $where["act_trailer_time"] = $act_trailer_time;
        $where["act_trailer_name"] = $act_trailer_name;
        $where["act_trailer_club"] = $act_trailer_club;
        $where["act_trailer_place"] = $act_trailer_place;

        $data["act_trailer_state"] = 2;

        $result = $actTrailer->where($where)->save($data);

        if ($result == 0)
            $this->error("活动预告添加失败");
        else
            $this->success("活动预告添加成功", U('actTrailer'));
    }
    /*
     * 删除活动预告
     */
    public function deleteActTrailer($act_trailer_time,$act_trailer_name,$act_trailer_club,$act_trailer_place){
        $actTrailer = M("act_trailer");

        $where["act_trailer_time"] = $act_trailer_time;
        $where["act_trailer_name"] = $act_trailer_name;
        $where["act_trailer_club"] = $act_trailer_club;
        $where["act_trailer_place"] = $act_trailer_place;

        $data["act_trailer_state"] = 1;

        $result = $actTrailer->where($where)->save($data);

        if ($result == 0)
            $this->error("活动预告删除失败");
        else
            $this->success("活动预告删除成功", U('actTrailer'));
    }
    /*
     * 社彩缤纷
     */
    public function brilliantClub(){
        $brilliantClub = M("club_info");
//        $club = M("club");

        $where["club_brilliant"] = 2;
        $where2["club_brilliant"] = 1;

        $result = $brilliantClub->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")->where($where)->select();

//        $result2 = $club->select();
        $result2 = $brilliantClub->join("JOIN ms_club ON ms_club_info.club_info_id = ms_club.club_info_id")->where($where2)->select();

        $this->assign("list", $result);
        $this->assign("list2", $result2);
        $this->display();
    }
    /*
     * 添加社彩缤纷
     */
    public function addBrilliantClub($club_id, $club_name){
        $brilliantClub = M("club_info");
        $club = M("club");

        $where3["club_brilliant"] = 2;
        $result2 = $brilliantClub->where($where3)->select();
        $count = count($result2);

        if ($count >= 3){
            $this->error("社彩缤纷已达上限!");
        }else{
            $data["club_brilliant"] = 2;
            $where2["club_id"] = $club_id;
            $where2["club_name"] = $club_name;

            $temp = $club->where($where2)->find();

            $where["club_info_id"] = $temp["club_info_id"];

            $result = $brilliantClub->where($where)->save($data);

            if ($result == 0)
                $this->error("社彩缤纷添加失败");
            else
                $this->success("社彩缤纷添加成功", U('brilliantClub'));
        }
    }
    /*
     * 删除社彩缤纷
     */
    public function deleteBrilliantClub($club_id, $club_name){
        $brilliantClub = M("club_info");
        $club = M("club");

        $data["club_brilliant"] = 1;
        $where2["club_id"] = $club_id;
        $where2["club_name"] = $club_name;

        $temp = $club->where($where2)->field("club_info_id")->find();

        $where["club_info_id"] = $temp["club_info_id"];

        $result = $brilliantClub->where($where)->save($data);

        if ($result == 0)
            $this->error("社彩缤纷删除失败");
        else
            $this->success("社彩缤纷删除成功", U('brilliantClub'));
    }

    public function getJpAct(){
        $activity = M("activity");

        $where["act_jpact_state"] = 2;

        $result = $activity->where($where)->select();
        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 修改活动通知
     */
    public function modifyActivityNotification(){

    }
    /*
     * 修改学团联密码
     */
    public function modifyPassword(){
        if (IS_POST){
            //实例化学团联账号对象
            $seu = M("seu");

            //获取表单的旧密码和新密码
            $pastPassword = $_POST["pastPassword"];
            $newPassword = $_POST["newPassword"];

            //判断旧密码是否匹配
            $user = $seu->find();
            if (md5($pastPassword) != $user["seu_password"])
                $this->error("密码和原密码匹配失败!");

            $id["seu_id"] = 1;
            $data["seu_password"] = md5($newPassword);

            //修改密码
            $seu->where($id)->save($data);

            $this->success("密码修改成功!");
        }else
            $this->display();
    }

    //选择轮播照片
    public function choosePhotoRoll(){
        if (IS_POST){
            $roll = M("roll");
            //获得多选框的数组
            $array = $_POST["photos"];

            $result = 0;
            foreach ($array as $value){
                $data["roll_photo"] = $value;

                $temp = $roll->add($data);

                $result += $temp;
            }

            if ($result == 0)
                $this->error("轮播图片选择失败");
            else
                $this->success("轮播图片选择成功");
        }else
            $this->display();
    }
    /*
     * 站内信
     */
    public function message(){
        $message = M("message");
        $club = M("club");

        $where["msg_geter"] = 0;

        $result = $message->where($where)->select();

        foreach ($result as $value){
            $where2["club_id"] = $value["msg_sender"];
            $result2 = $club->where($where)->find();
            $value["msg_sender"] == $result2["club_name"];
        }

        $this->assign("list", $result);
        $this->display();
    }
    /*
     * 站内信详情
     */
    public function messageDetail(){
        $message = M("message");

        $where["msg_id"] = $_POST["id"];

        $data["msg_state"] = 1;

        $message->where($where)->save($data);

        $result = $message->where($where)->find();

        echo json_encode($result);
    }
    /*
     * 删除站内信
     */
    public function deleteMessage($id){
        $message = M("message");

        $where["msg_id"] = $id;

        $result = $message->where($where)->delete();

        if ($result == 0)
            $this->error("站内信删除失败");
        else
            $this->success("站内信删除成功");
    }
    /*
     * 发送站内信
     */
    public function sendMessage(){
        $message = M("message");
        $admin = M("admin");

        $data["msg_level"] = $_POST["mail_type"];
        $data["msg_theme"] = $_POST["mail_theme"];
        $data["msg_sender"] = 0;
        $data["msg_context"] = $_POST["mail_article"];

        //id转换
        $where["admin_club_id"] = $_POST["mail_receive"];
        $temp = $admin->where($where)->find();
        $data["msg_geter"] = $temp["admin_id"];

        $result = $message->add($data);

        if ($result == 0)
            $this->error("站内信发送失败");
        else
            $this->success("站内信发送成功", U('message'));
    }
    /*
     * 轮播图片
     */
    public function pictureModify(){
        if (IS_POST){
            $picture = M("picture_roll");
            $image = I("post.imgUpload1");

            $data["picture_title"] = $_POST["title_Modify"];
            $data["pictureSelect"] = $_POST["pictureSelect"];
            $upload = new UploadController();
            $upload->uploadRollPic($image, $data);
        }else
            $this->display();
    }
    /*
     * 获取轮播图片
     */
    public function getPicture(){
        $picture = M("picture_roll");

        $result = $picture->field("picture_name")->select();

        $i = 0;
        foreach ($result as $value){
            $data[$i] = "http://112.124.107.125:8011/picture/".$value["picture_name"];
            $i++;
        }
        echo json_encode($data);
    }
}