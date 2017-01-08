<?php
/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-8-31
 * Time: 下午12:34
 * @Purpose
 * 上传文件控制器
 * @Author
 * 冯森
 */

namespace Admin\Controller;

use Think\Controller;

class UploadController extends Controller
{
    /**
     * @param $file
     * @param $data
     * 处理活动图片上传
     */
    public function uploadActPic($file,$data){
        $upload = new \Think\Upload();                              // 实例化上传类
        $upload->maxSize   =     0 ;                          // 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/picture/'; // 设置附件上传根目录
        $upload->savePath  =     'activity/';                       // 设置附件上传（子）目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        // 上传文件
        $info   =   $upload->upload($file);

        if(!$info) {    // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{          // 上传成功
            foreach($info as $fileInfo){
                $data['normal_act_enclosure'] = $fileInfo['savepath'].$fileInfo['savename'];
                $table = M('normal_act');
                $table->add($data);
                return ;
            }
        }
    }

    /**
     * @param $file
     * @param $data
     * @return string
     * 处理logo上传
     */
    public function uploadLogoPic($file,$where,$data){
        $upload = new \Think\Upload();                              // 实例化上传类
        $upload->maxSize   =     0 ;                          // 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/picture/'; // 设置附件上传根目录
        $upload->savePath  =     'logo/';                           // 设置附件上传（子）目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        // 上传文件
        $info   =   $upload->upload($file);

        if(!$info) {    // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{          // 上传成功
            foreach($info as $fileInfo){
                $data['club_logo'] = $fileInfo['savepath'].$fileInfo['savename'];
                $table = M('club_info');
                $this->success(json_encode($where));
                $table->where($where)->save($data);
                return ;
            }
//            $this->success('上传成功！');
        }
    }

    /**
     * @param $file
     * @param $data
     * 处理发票照片上传
     */
    public function uploadRbmPic($file,$data)
    {
        $upload = new \Think\Upload();                              // 实例化上传类
        $upload->maxSize   =     0 ;                          // 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/picture/'; // 设置附件上传根目录
        $upload->savePath  =     'reimbursement/';                  // 设置附件上传（子）目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        // 上传文件
        $info   =   $upload->upload($file);

        if(!$info) {        // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{              // 上传成功
            foreach($info as $fileInfo){
                $data['best_apply_enclosure'] = $fileInfo['savepath'].$fileInfo['savename'];
                $table = M('reimbursement');
                $table->add($data);
                return ;
            }
        }
    }

    /**
     * @param $zip
     * @param $data
     * 处理十佳、星级、常规活动、文体专项活动上传附件
     */
    public function uploadZip($type,$zip,$data){
        $upload = new \Think\Upload();                                // 实例化上传类
        $upload->maxSize   =     0 ;                            // 设置附件上传大小
        $upload->exts      =     array('rar', 'zip', 'rar');          // 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/applyFile/'; // 设置附件上传根目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        $enclosure = '';
        $tableName = '';
        switch ($type){
            case 'normal_act':
                $enclosure = "normal_act_enclosure";
                $tableName = "normal_act";
                $upload->savePath  = 'normal/'; // 设置附件上传（子）目录
                break;
            case 'special_act':
                $enclosure = "sp_act_enclosure";
                $tableName = "sp_act";
                $upload->savePath  = 'special/'; // 设置附件上传（子）目录
                break;
            case 'ten_best':
                $enclosure = "best_apply_enclosure";
                $tableName = "best_apply";
                $upload->savePath  = 'best/'; // 设置附件上传（子）目录
                break;
            case 'star':
                $enclosure = "star_apply_enclosure";
                $tableName = "star_apply";
                $upload->savePath  = 'star/'; // 设置附件上传（子）目录
                break;
            default:
                break;
        }
        $info   =   $upload->upload($zip);
        if(!$info) {        // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{              // 上传成功
            foreach($info as $fileInfo){
                $data[$enclosure] = $fileInfo['savepath'].$fileInfo['savename'];
                $table = M($tableName);
                $table->add($data);
                return ;
            }
        }
    }

    /**
     * @param $file
     * @param $data
     * 处理社团展示界面上传的图片
     */
    public function uploadClub($file,$data)
    {
        $upload = new \Think\Upload();                              // 实例化上传类
        $upload->maxSize   =     0 ;                          // 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/picture/'; // 设置附件上传根目录
        $upload->savePath  =     'club/';                  // 设置附件上传（子）目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        // 上传文件
        $info   =   $upload->upload($file);
        $str = '';

        if(!$info) {        // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{              // 上传成功
            foreach($info as $fileInfo){
                if ($str == ''){
                    $sp = '';
                }else
                    $sp = '@';
                $str .= $sp.$fileInfo['savepath'].$fileInfo['savename'];
            }
            $data['club_show_info_pic'] = $str;
            $table = M('club_show_info');
            $table->add($data);
            return ;
        }
    }

    /**
     * @param $file
     * @param $data
     * 处理精品活动展示界面上传的图片
     */
    public function uploadJpAct($file,$data)
    {
        $upload = new \Think\Upload();                              // 实例化上传类
        $upload->maxSize   =     0 ;                          // 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/picture/'; // 设置附件上传根目录
        $upload->savePath  =     'activity/';                  // 设置附件上传（子）目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        // 上传文件
        $info   =   $upload->upload($file);
        $str = '';

        if(!$info) {        // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{              // 上传成功
            foreach($info as $fileInfo){
                if ($str == ''){
                    $sp = '';
                }else
                    $sp = '@';
                $str .= $sp.$fileInfo['savepath'].$fileInfo['savename'];
            }
            $data['act_pic'] = $str;
            $table = M('jp_act');
            $table->add($data);
            return ;
        }
    }

    /**
     * @param $video
     * @return string
     * 处理社团展示主页的视频上传
     */
    public function uploadVideo($video,$where){
        $upload = new \Think\Upload();                                          // 实例化上传类
        $upload->maxSize   =     0 ;                                      // 设置附件上传大小
        $upload->exts      =     array('mp4', 'rmvb', 'avi', 'mkv','3gp','wmv');// 设置附件上传类型
        $upload->rootPath  =     '/home/yyz/www/managers/video/';               // 设置附件上传根目录
//        $upload->savePath  =     'activityPic/';                              // 设置附件上传（子）目录
        $upload->saveName  =     '';
        $upload->autoSub   =     false;
        // 上传文件
        $info   =   $upload->upload($video);

        if(!$info) {        // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{              // 上传成功
            foreach($info as $fileInfo){
                $data['act_video'] = $fileInfo['savepath'].$fileInfo['savename'];
                $table = M('jp_act');
                $table->where($where)->save($data);
                return ;
            }
        }
    }

}