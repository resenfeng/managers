<?php

/**
 * Created by PhpStorm.
 * User: fengsen
 * Date: 16-9-5
 * Time: 下午2:57
 */
namespace Admin\Model;

use Think\Model\RelationModel;

class clubModel extends RelationModel
{
    protected $_link = array(
//        'club_info'=> array(
//            'mapping_type' => self::HAS_ONE,
//            'class_name' => 'club_info',
//            'foreign_key'  => 'club_info_id'
//        ),
        'club_type'=> array(
            'mapping_type' => self::HAS_ONE,
            'mapping_name'=>'club_type',
            'class_name' => 'club_type',
            'foreign_key'  => 'club_type_id'
        ),
//        'club_type1'=> self::HAS_ONE
    );
}