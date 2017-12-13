<?php

return [

    'characters' => '2346789abcdefghmnpqtuxyzABCDEFGHMNPQRTUXYZ',

    // 验证码的长度
    'default'   => [
        'length'    => 5,
        'width'     => 120,
        'height'    => 66,
        'quality'   => 90,
    ],
    // 背景颜色 文字颜色
    'flat'   => [
        'length'    => 3,   //验证码字符个数
        'width'     => 160,
        'height'    => 66,  //验证码图片高
        'quality'   => 90,  //
        'lines'     => 2,   //干扰线
        'bgImage'   => false,
        'bgColor'   => '#ecf2f4',
        'fontColors'=> ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
        'contrast'  => -5,
    ],

    'mini'   => [
        'length'    => 3,
        'width'     => 60,
        'height'    => 32,
    ],

    'inverse'   => [
        'length'    => 5,
        'width'     => 120,
        'height'    => 36,
        'quality'   => 90,
        'sensitive' => true,
        'angle'     => 12,
        'sharpen'   => 10,
        'blur'      => 2,
        'invert'    => true,
        'contrast'  => -5,
    ]

];
