<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-8-28
 * Time: 上午11:30
 * @Purpose
 * 登录注册、修改密码功能控制器
 * @Author
 * 冯森
 */

namespace Admin\Controller;


use Think\Controller;

class LoginRegController extends Controller
{
    /**
     * 执行用户的登录操作
     * 根据user_type进行选择操作，选择相应的执行函数
     */
    public function login(){
        if (IS_POST) {
            switch (I('post.user_type')){
                case "student":
                    $this->stuLogin();
                    break;
                case "club":
                    $this->clubLogin();
                    break;
                case "seu":
                    $this->seuLogin();
                    break;
                default:
                    break;
            }
        } else {
            $this->display();
        }
    }

    /**
     * 执行学生用户的登录操作
     */
    private function stuLogin(){
        $data = array(
            'user_name' => I('post.user_name'),
            'user_password' => md5(I('post.user_password'))
        );
        $table = M('user_info');
        $cond = 'user_name = '.$data['user_name'];
        $exit = $table->where($cond)->find();
        if ($exit){
            $result = $table->where($data)->find();
            if ($result && ($data['user_password'] === $result['user_password'])) {
                // 登录成功，设置session
                session('user_id', $result ['user_id']);
                session('user_name', $result ['user_name']);
                session('user_type',I('post.user_type'));
                //跳转页面
                $this->success('登录成功！',U('Admin/Student/stuManage'));
            } else {
                $this->error('帐号密码错误！请重新输入',U('Admin/LoginReg/login'));
            }
        }else{
            $this->error('您输入的账户不存在，请注册后再进行操作！',U('Admin/LoginReg/register'));
        }
    }

    /**
     * 执行社团账户的登录操作
     */
    private function clubLogin(){
        $data = array(
            'admin_name' => I('post.user_name'),
            'admin_password' => md5(I('post.user_password'))
        );
        $table = M('admin');
        $cond = 'admin_name = '.$data['admin_name'];
        $exit = $table->where($data)->find();
        if ($exit) {
            $result = $table->where($data)->find();
            if ($result && ($data['admin_password'] === $result['admin_password'])) {

                // 登录成功，设置session
                session('user_id', $result ['admin_id']);
                session('user_name', $result ['admin_name']);
                session('user_type',I('post.user_type'));

                //跳转页面
                $this->redirect(U('Admin/ClubManager/clubManage'));

            } else {
                $this->error('帐号密码错误！', U('Admin/LoginReg/login'));
            }
        }else{
            $this->error('您输入的账号有误，请仔细核查账号后登录！',U('Admin/LoginReg/login'));
        }
    }

    /**
     * 执行学团联用户的登录操作
     */
    private function seuLogin(){
        $data = array(
            'seu_name' => I('post.user_name'),
            'seu_password' => md5(I('post.user_password'))
        );
        $table = M('seu');
        $where = array(
            'seu_name' => $data['seu_name']
        );
        $exit = $table->where($where)->find();
//        $this->success($table->getLastSql());
        if ($exit) {
            $result = $table->where($data)->field('seu_id,seu_name,seu_password')->find();
            if ($result && ($data['seu_password'] === $result['seu_password'])) {

                // 登录成功，设置session
                session('user_id', $result ['seu_id']);
                session('user_name', $result ['seu_name']);
                session('user_type',I('post.user_type'));

                //跳转页面));
                $this->redirect(U('Admin/Administrator/adminManage'));
            } else {
                $this->error('帐号密码错误！', U('Admin/LoginReg/login'));
            }
        }else{
            $this->error('您输入的账号有误，请仔细核查账号后登录！',U('Admin/LoginReg/login'));
        }
    }

    /**
     * 执行学生用户的注册操作
     */
    public function register(){
        if (IS_POST){
            $data = array(
                'user_name' => I('post.user_name'),
                'user_phone' => I('post.user_phone'),
                'user_email' => I('post.user_email'),
                'user_sex' => I('post.user_sex'),
                'user_academy' => I('post.user_academy'),
                'user_password' => md5(I('post.user_password'))
            );

            $table = M('user_info');
            $condPhone = 'user_phone = '.$data['user_phone'];
            $exitPhone = $table->where($condPhone)->find();
            $condName = 'user_name = '.$data['user_name'];
            $exitName = $table->where($condName)->find();
            if (!$exitPhone){
                if (!$exitName){
                    $result = $table->add($data);
                    if ($result){
                        $this->success('注册成功！',U('Admin/LoginReg/login'));
                    }else{
                        $this->error('注册失败！',U('Admin/LoginReg/Register'));
                    }
                }else{
                    $this->error('您输入的账号已经被注册，注册失败！',U('Admin/LoginReg/Register'));
                }
            }else{
                $this->error('您输入的手机号已经被绑定，注册失败！',U('Admin/LoginReg/Register'));
            }

        }else{
            $this->display();
        }
    }

    /**
     * 执行用户的注销登录操作
     */
    public function logout(){
        session(null);
        $this->success('退出成功', U('Admin/Index/index'));
    }

    /**
     * 执行用户的修改密码操作,选择不同的用户类型，执行不同的操作
     */
    public function editPwd(){
        $user_type = session('user_type');
        switch ($user_type){
            case 'student':
                $this->editStu();
                break;
            case 'club':
                $this->editClub();
                break;
            case 'seu':
                $this->editSeu();
                break;
            default:
                $this->error("type获取失败");
                break;
        }
    }

    /**
     * 执行学生用户的修改密码操作
     */
    private function editStu(){
        if (IS_POST){
            $where = array(
                'user_name' => session('user_name'),
                'user_password' => md5(I('user_password'))
            );
            $data = array(
                'user_name' => session('user_name'),
                'user_password' => md5(I('user_new_password'))
            );
            $cond = array(
                'user_name' => session('user_name')
            );
            $table = M('user_info');
            $result = $table->where($where)->find();
            if ($result){
                session(null);
                $table->where($cond)->save($data);
                $this->success("修改密码成功，请重新登录！",U('Admin/LoginReg/login'));
            }else
                $this->success("您输入的旧密码不正确，修改失败",U('Admin/LoginReg/login'));
        }else
            $this->display();
    }

    /**
     * 执行社团用户的修改密码操作
     */
    private function editClub(){
        if (IS_POST){
            $where = array(
                'admin_name' => session('user_name'),
                'admin_password' => md5(I('user_password'))
            );
            $data = array(
                'admin_name' => session('user_name'),
                'admin_password' => md5(I('user_new_password'))
            );
            $cond = array(
                'admin_name' => session('user_name')
            );
            $table = M('admin');
            $result = $table->where($where)->find();
            if ($result){
                session(null);
                $table->where($cond)->save($data);
                $this->success("修改密码成功，请重新登录！",U('Admin/LoginReg/login'));
            }else
                $this->success("您输入的旧密码不正确，修改失败",U('Admin/LoginReg/login'));
        }else
            $this->display();
    }

    /**
     * 执行学团联用户的修改密码操作
     */
    private function editSeu(){
        if (IS_POST){
            $where = array(
                'seu_name' => session('user_name'),
                'seu_password' => md5(I('user_password'))
            );
            $data = array(
                'seu_name' => session('user_name'),
                'seu_password' => md5(I('user_new_password'))
            );
            $cond = array(
                'seu_name' => session('user_name')
            );
            $table = M('seu');
            $result = $table->where($where)->find();
            if ($result){
                session(null);
                $table->where($cond)->save($data);
                $this->success("修改密码成功，请重新登录！",U('Admin/LoginReg/login'));
            }else
                $this->success("您输入的旧密码不正确，修改失败",U('Admin/LoginReg/login'));
        }else
            $this->display();
    }
//    public function editInfo(){
//        if (IS_POST){
//            $table = M('user_info');
//            $data = array(
//                'user_password' => md5(I('post.user_new_password')),
//                'user_real_name'=> I('post.user_real_name'),
//                'user_phone' => I('post.user_phone'),
//                'user_email' => I('post.user_email')
//            );
//            $where = array(
//                'user_name' => session('user_name'),
//                'user_password' => md5(I('post.user_password'))
//            );
//            $check = $table->where($where)->find();
//            if ($check){
//                $updateData = $table->where($where)->save($data);
//                if ($updateData){
//                    $this->success();
//                }else{
//                    $this->error();
//                }
//            }
//        }else{
//            $table = M('user_info');
////            $where = array(
////                'user_id' => session('user_id'),
////            );
//            $where = array(
//                'user_id' => 1
//            );
//            $result = $table->where($where)->field('user_sex,user_real_name,user_phone,user_email')->find();
//            $this->success(json_encode($result));
//        }
//    }
}