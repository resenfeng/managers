<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-8-28
 * Time: 上午11:30
 */

namespace Admin\Controller;


use Think\Controller;

class LoginRegController extends Controller
{
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

    private function stuLogin(){
        $data = array(
            'user_name' => I('post.user_name'),
            'user_password' => md5(I('post.user_password'))
        );
        $table = M('user_info');
        $cond = 'user_name = '.$data['user_name'];
        $exit = $table->where($cond)->find();
        if ($exit){
            $result = $table->where($data)->field('user_id,user_name,user_password,user_sex,user_academy,user_grade,user_phone,user_email')->find();
            if ($result && ($data['user_password'] === $result['user_password'])) {
                // 登录成功，设置session
                session('user_id', $result ['user_id']);
                session('user_name', $result ['user_name']);
                //跳转页面
                $this->success('登录成功！',U('Admin/LoginReg/login'),3);
            } else {
                $this->error('帐号密码错误！请重新输入',U('Admin/LoginReg/login'));
            }
        }else{
            $this->error('您输入的账户不存在，请注册后再进行操作！',U('Admin/LoginReg/register'));
        }
    }

    private function clubLogin(){
        $data = array(
            'admin_name' => I('post.user_name'),
            'admin_password' => md5(I('post.user_password'))
        );
        $table = M('admin');
        $cond = 'admin_name = '.$data['admin_name'];
        $exit = $table->where($data)->find();
        if ($exit) {
            $result = $table->where($data)->field('admin_id,admin_name,admin_password,admin_type')->find();
            if ($result && ($data['admin_password'] === $result['admin_password'])) {

                // 登录成功，设置session
                session('admin_id', $result ['admin_id']);
                session('admin_name', $result ['admin_name']);
//                        $this->success('',U('Admin/ClubManager/clubManage'));

                //跳转页面
//                            $this->success(U('Admin/ClubManager/clubManage'));
//                            $this->success(U('Admin/LoginReg/register'));
                $this->redirect(U('Admin/ClubManager/clubManage'));

            } else {
                $this->error('帐号密码错误！', U('Admin/LoginReg/login'));
            }
        }else{
            $this->error('您输入的账号有误，请仔细核查账号后登录！',U('Admin/LoginReg/login'));
        }
    }

    private function seuLogin(){
        $data = array(
            'seu_name' => I('post.user_name'),
            'seu_password' => md5(I('post.user_password'))
        );
        $table = M('seu');
        $cond = 'seu_name = '.$data['seu_name'];
        $exit = $table->where($data)->find();
        if ($exit) {
            $result = $table->where($data)->field('seu_id,seu_name,seu_password')->find();
            if ($result && ($data['seu_password'] === $result['seu_password'])) {

                // 登录成功，设置session
                session('seu_id', $result ['seu_id']);
                session('seu_name', $result ['seu_name']);
//                        $this->success('',U('Admin/ClubManager/clubManage'));

                //跳转页面
//                            $this->success(U('Admin/ClubManager/clubManage'));
//                            $this->success(U('Admin/LoginReg/register'));
                $this->redirect(U('Admin/ClubManager/clubManage'));

            } else {
                $this->error('帐号密码错误！', U('Admin/LoginReg/login'));
            }
        }else{
            $this->error('您输入的账号有误，请仔细核查账号后登录！',U('Admin/LoginReg/login'));
        }
    }















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

    public function editInfo(){
        if (IS_POST){
            $table = M('user_info');
            $data = array(
                'user_password' => md5(I('post.user_new_password')),
                'user_real_name'=> I('post.user_real_name'),
                'user_phone' => I('post.user_phone'),
                'user_email' => I('post.user_email')
            );
            $where = array(
                'user_name' => session('user_name'),
                'user_password' => md5(I('post.user_password'))
            );
            $check = $table->where($where)->find();
            if ($check){
                $updateData = $table->where($where)->save($data);
                if ($updateData){
                    $this->success();
                }else{
                    $this->error();
                }
            }
        }else{
            $table = M('user_info');
//            $where = array(
//                'user_id' => session('user_id'),
//            );
            $where = array(
                'user_id' => 1
            );
            $result = $table->where($where)->field('user_sex,user_real_name,user_phone,user_email')->find();
            $this->success(json_encode($result));
        }
    }
}