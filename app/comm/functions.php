<?php
/**
 * Created by PhpStorm.
 * User: 90607
 * Date: 2018/6/3
 * Time: 23:38
 */

# 自动加载自定义函数

#  1.在composer.json文件中的autoload对象中增加： "files": ["comm/functions.php"]
#  2.执行composer dump-autoload

function  showName() {
    echo '我的名字';
}