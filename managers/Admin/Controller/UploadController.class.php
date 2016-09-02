<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-8-31
 * Time: 下午12:34
 */

namespace Admin\Controller;


use Think\Controller;

class UploadController extends Controller
{
    public function uploadActPic(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '../../picture'; // 设置附件上传根目录
        $upload->savePath  =     'activityPic'; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();

//        $this->success("上传成功！");
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            foreach($info as $file){
                echo $file['savepath'].$file['savename'];
            }
            $this->success('上传成功！');
        }
    }

    public function uploadLogoPic(){
        import('ORG.Net.UploadFile');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '../../../picture'; // 设置附件上传根目录
        $upload->savePath  =     'logo'; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            foreach($info as $file){
                echo $file['savepath'].$file['savename'];
            }
            $this->success('上传成功！');
        }
    }

    public function uploadRemPic()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = '../../../picture'; // 设置附件上传根目录
        $upload->savePath = 'remPic'; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            foreach ($info as $file) {
                echo $file['savepath'] . $file['savename'];
            }
            $this->success('上传成功！');
        }
    }

    public function uploadVideo(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '../../../video/'; // 设置附件上传根目录
        $upload->savePath  =     'remPic'; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            foreach($info as $file){
                echo $file['savepath'].$file['savename'];
            }
            $this->success('上传成功！');
        }
    }
}