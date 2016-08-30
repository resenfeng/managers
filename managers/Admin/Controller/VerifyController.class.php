<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2016/8/28
 * Time: 16:28
 *  * @Purpose
 * 验证码控制器
 * @Author
 * 方舟
 */
namespace Admin\Controller;
use Think\Controller;

class VerifyController{
    public function verify(){
        $verify = new \Think\Verify();

        // 配置验证码参数
        $verify->fontSize = 14;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->codeSet = '0123456789';
        $verify->entry();
    }

    public function verifyCheck(){
        $code = I('post.text1');
        $verify = new \Think\Verify();
//        if (check_code($code) == true)
//        if(($verify->check($code, '')) == true)
//            echo '验证码正确';
//        else
//            echo '验证码错误';
        return $verify->check($code, '');
    }

    public function checkCode($code, $id=''){
        // 实例化验证码类
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    public function sssss(){
        return false;
    }

    public function ahah(){
        $data = R('Verify/sssss');
        dump($data);
    }
}
?>