**ip_attribution**

****简介****

这个支持库主要是用于根据IP地址获取所在国家、省份、城市。

****配置****

将这个文件夹中除了README文件外的文件复制到CI的目录下的application\libraries

****使用方法****

首先你要载入这个支持库

    $this->load->library('ip_attribution');

然后就可以通过$this来调用

    $result=$this->ip_attribution->find(这里输入你的IP，注意是文本型);

 然后这个方法会返回一个array数组，然后你可以通过访问这个数组的内容来获取结果

    $result[0]  //获取国家
    $result[1]  //获取省份
    $result[2]  //获取省份