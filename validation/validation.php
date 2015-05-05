

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//由T-baby封装，https://github.com/T-baby/CI_expand
//本类用于常见的一些验证

class validation {

    function __construct()
    {
    }


    /*支持判断【移动：134、135、136、137、138、139、150、151、152、157、158、159、182、183、184、187、188、178(4G)、147(上网卡)；
    联通：130、131、132、155、156、185、186、176(4G)、145(上网卡)；
    电信：133、153、180、181、189 、177(4G)；
    卫星通信：1349
    虚拟运营商：170】*/
    function is_mobile($mobile) {
        if (!is_numeric($mobile)) {
            return false;
        }
        return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
    }

    //判断是否是邮箱格式
    function is_email($email)
    {
        return preg_match('^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+', $email) ? true : false;
    }

    //检验在utf-8下是否是中文
    function is_chinese($str){
        return preg_match('/[^\x00-\x80]/', $str) ? true : false;;
    }

    //检验是否是英文
    function is_english($str){
        return preg_match("/^[A-Za-z]+$/", $str);
    }

    //验证是否是国际电话
    function is_mobel_i18n($mobile){
        return preg_match('/^[+]?([0-9]){1,3}?[ |-]?(0[1-9]{2,3})(-| )?\d{7,8}$/', $mobile) ? true : false;

    }

    //验证邮编
    function is_zipcode($str){
        return (preg_match("/^[1-9]d{5}$/",$str))?true:false;
    }

    //验证是否大于并小于某个长度
    function is_length($str,$min,$max){
        return $min < strlen($str)&&strlen($str)< $max;
    }

    //判断是否是日期
    function is_date($str){
        return preg_match(' /[0-9]{4}-[0-9]{2}-[0-9]{2}/', $str) ? true : false;
    }





}

?>