<?php

include "wechat.class.php";
$options = array(
        'token'=>'qbtest',   //填写应用接口的Token
        'encodingaeskey'=>'d4o9WVg8sxxxxxxxxxxxxxxxxxxxxxx',//填写加密用的EncodingAESKey
        'appid'=>'wx7815e297bc0f8547',  //填写高级调用功能的appid
        'appsecret'=>'2422f59d7f19efd2657aecdf7659b5d7',
);
$weObj = new Wechat($options);
//$weObj->valid(); //注意, 企业号与普通公众号不同，必须打开验证，不要注释掉

$type = $weObj->getRev()->getRevType();
//$reb  = $weObj-

$wecha_id = $weObj->getRevFrom();
//关键字
$keywords = $weObj->getRevContent();
switch($type) {
    case Wechat::MSGTYPE_TEXT:   //文字类型

            switch ($keywords) {

                case '我的课程':
                     $arrayName = array(
                        "0"=>array(
                                'Title'=>'初中一年级语文',
                                'Description'=>'订单详情',
                                'PicUrl'=>'https://www.baidu.com/img/bd_logo1.png',
                                'Url'=>'http://www.bibizan.cn',
                                ),
                        "1"=>array(
                                'Title'=>'初中一年级语文',
                                'Description'=>'订单详情',
                                'PicUrl'=>'https://www.baidu.com/img/bd_logo1.png',
                                'Url'=>'http://www.bibizan.cn',
                                ),
                );
                $weObj->news($arrayName)->reply();

                    break;
                case '我的积分':
                    $arrayName = array(
                        "0"=>array(
                                'Title'=>'初中一年级语文',
                                'Description'=>'订单详情',
                                'PicUrl'=>'https://www.baidu.com/img/bd_logo1.png',
                                'Url'=>'http://www.bibizan.cn',
                                ),
                        "1"=>array(
                                'Title'=>'初中一年级语文',
                                'Description'=>'订单详情',
                                'PicUrl'=>'https://www.baidu.com/img/bd_logo1.png',
                                'Url'=>'http://www.bibizan.cn',
                                ),
                );
                $weObj->news($arrayName)->reply();
                    break;
                case '你的':
                    $weObj->text($weObj->getRevFrom())->reply();
                    //$weObj->text($weObj->getRevCtime())->reply();
                    break;
                default:
                    $weObj->text("help info")->reply();
                    break;
            }

            exit;
            break;
    case Wechat::MSGTYPE_EVENT:  //事件类型
            break;
    case Wechat::MSGTYPE_IMAGE:   //图像类型
            break;
    default:
            $weObj->text("help info")->reply();
}




//我的课程


function getMyOrder()
{

}
//我的积分





