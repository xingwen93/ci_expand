**validation**

****简介****

这个支持库主要是用于对变量、字符串进行常见的认证。

****配置****

将这个文件夹中除了README文件外的文件复制到CI的目录下的application\libraries

****使用方法****

首先你要载入这个支持库

    $this->load->library('validation');

然后就可以通过$this来调用

    $result=$this->validation->验证方法名;

 然后这个方法会返回一个布尔值。

 目前支持：

    is_mobile($mobile) //判断是否是手机
    is_email($email) //判断是否是邮箱
    is_chinese($str) //判断UTF-8下是否是中文或包含中文
    is_english($str) //判断是否是英文
    is_mobel_i18n($mobile) //判断是否是国际号码
    is_zipcode($str) //判断是否是邮编
    is_length($str,$min,$max)() //判断长度是否大于某个数并且小于某个数，$min是最小长度，$max是最大长度
    is_date($str) //判断是否是日期