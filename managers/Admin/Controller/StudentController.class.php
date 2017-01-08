<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-9-7
 * Time: 上午8:41
 * @Purpose
 * 学生端功能控制器
 * @Author
 * 冯森
 */

namespace Admin\Controller;


use Think\Controller;

class StudentController extends Controller
{
    /**
     * 显示学生管理主界面
     */
    public function stuManage(){
        $this->display();
    }

    public function stuInfo(){
        $table = M('user_info');
        $where = array(
            'user_id' => session('user_id')
        );
        $result = $table->where($where)->find();
        $this->stuInfo = $result;
        $this->display();
    }

    /**
     * 编辑学生信息
     */
    public function editStuInfo(){
        $where = array(
            'user_id' => session('user_id')
        );
        $data = array(
            'user_real_name' => I('post.user_real_name'),
            'user_academy' => I('post.user_academy'),
            'user_grade' => I('post.user_grade'),
            'user_phone' => I('post.user_phone'),
            'user_email' => I('post.user_email'),
            'user_hobby' => I('post.user_hobby'),
            'user_age' => I('post.user_age')
        );
        $table = M('user_info');
        $table->where($where)->save($data);
        $this->success("个人信息修改成功");
    }

    /**
     * 处理学生申请加入社团
     */
    public function applyClub(){
        if (IS_POST) {
            $data = array(
                'recruit_name' => I('post.recruit_name'),
                'recruit_sex' => I('post.recruit_sex'),
                'recruit_age' => I('post.recruit_age'),
                'recruit_grade' => I('post.recruit_grade'),
                'recruit_academy' => I('post.recruit_academy'),
                'recruit_area' => I('post.recruit_area'),
                'recruit_phone' => I('post.recruit_phone'),
                'recruit_exchange' => I('post.recruit_exchange'),
                'recruit_exp' => I('post.recruit_exp'),
                'recruit_advice' => I('post.recruit_advice'),
                'recruit_club' => I('post.recruit_club'),
                'recruit_hobby' => I('post.recruit_hobby'),
                'recruit_birthday' => I('post.recruit_birthday'),
                'recruit_intro' => I('post.recruit_intro')
            );
            $table = M('recruit');
            $table->add($data);
            $this->success("提交成功");
        }else
            $this->display();
    }

    /**
     * 处理学生申请成立社团
     */
    public function clubEstablish(){
        if (IS_POST){
            $data = array(
                'club_apply_state' => 1,
                'club_name' => I('post.club_name'),
                'club_apply_time' => I('post.club_apply_time'),
                'club_type' => I('post.club_type'),
                'club_intro' => I('post.club_intro'),
                'manager_name' => I('post.manager_name'),
                'manager_intro' => I('post.manager_intro'),
                'manager_academy' => I('post.manager_academy'),
                'manager_phone' => I('post.manager_phone')
            );
            $table = M('club_apply');
            $table->add($data);
            $this->success("提交申请成功");
        }else{
            $this->display();
        }
    }
}