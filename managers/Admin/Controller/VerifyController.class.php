<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2016/8/30
 * Time: 10:21
 * @Purpose
 * 验证码控制器
 * 包括验证码生成和验证
 * @Author
 * 方舟
 */
namespace Admin\Controller;
use Think\Controller;

class VerifyController extends Controller{
    public function verify(){
        $verify = new \Think\Verify();

        // 配置验证码参数
        $verify->fontSize = 20;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 50;       // 验证码高度
        $verify->imageW = 150;
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
    }

    public function verifyCheck(){
        // 实例化验证码类
        $verify = new \Think\Verify();
        $code = $_POST['code'];
        if($verify->check($code, '')){
//            echo "success";
            echo "验证码正确";
        }else {
//            echo "wrong";
            echo "验证码错误";
        }
    }
}