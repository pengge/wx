<?php
/**
 * Created by PhpStorm.
 * User: ligo
 * Date: 2019/12/26
 * Time: 9:51
 */

return [
    //微信appid
    'appId' => 'wx5e492f0c19d91a4f',
    //微信appSecret
    'appSecret' => '6f5d8f44566581fb9b0a69c69082775f',
    //微信支付商户号
    'mch_id' => 'test15634852',
    //微信支付key
    'wxpay_key' => 'test15634852',
    //redis连接配置信息
    'redis' => [
        'host' => '127.0.0.1',
        'port' => 3306,
        'time_out' => 5,
    ],
    'wx_code' => [
        '-1'     => '系统繁忙，此时请开发者稍候再试',
        '0'      => '请求成功',
        '40001'  => 'access_token 无效',
        '40002'  => '不合法的凭证类型',
        '40003'  => 'openid 错误',
        '40007'  => '无效媒体文件 ID',
        '40029'  => 'code 无效',
        '40037'  => '订阅模板id为空不正确',
        '40066'  => '递交的页面被sitemap标记为拦截，具体查看errmsg提示',
        '40212'  => 'paegs 当中存在不合法的query，query格式遵循URL标准，即k1=v1&k2=v2',
        '40219'  => 'pages不存在或者参数为空',
        '41030'  => 'page路径不正确，需要保证在现网版本小程序中存在，与app.json保持一致',
        '43101'  => '用户拒绝接受消息，如果用户之前曾经订阅过，则表示用户取消了订阅关系',
        '45011'  => '频率限制，每个用户每分钟100次',
        '45015'  => '回复时间超过限制',
        '45047'  => '客服接口下行条数超过上限',
        '47001'  => '数据格式出错',
        '47003'  => '模板参数不准确，可能为空或者不满足规则，errmsg会提示具体是哪个字段出错',
        '47004'  => '每次提交的页面数超过1000（备注：每次提交页面数应小于或等于1000）',
        '47006'  => '当天提交页面数达到了配额上限，请明天再试',
        '48001'  => 'API 功能未授权',
        '85083'  => '小程序的搜索功能被禁用',
        '85091'  => '小程序的搜索开关被关闭。请访问设置页面打开开关再重试',
        '87014'  => '内容含有违法违规内容',
        '89002'  => '没有绑定开放平台帐号',
        '89300'  => '订单无效',
        '200011' => '此账号已被封禁，无法操作',
        '200012' => '个人模版数已达上限，上限25个',
        '200013' => '此模版已被封禁，无法选用',
        '200014' => '模版 tid 参数错误',
        '200016' => 'start 参数错误',
        '200017' => 'limit 参数错误',
        '200018' => '类目 ids 缺失',
        '200019' => '类目 ids 不合法',
        '200020' => '关键词列表 kidList 参数错误',
        '200021' => '场景描述 sceneDesc 参数错误',
    ],
];