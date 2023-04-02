<?php
/*
* User setting file;
* @author FFSir LLQ & Xcsoft
* @version 1.0
* @date 2021-04-28
*/
    header("Access-Control-Allow-Origin: *");
    
    define('APIURL',"https://nmvideo.aibqb.top/api.php"); //api.php链接
    
    $token = array(
        "ffsir" => "123",
    );
     //用户名 => 你的用户TOKEN
    
    $api = array(
        "ffsir" => "oss.byteamone.cn",
    );
     //用户名 => 你的API对接域名

    $originarr = array(   // 留空允许所有域名
        'oss.byteamone.cn',  //设置允许访问的域名  举例  一行一个  （设置你的播放器域名) 不需要http:// 或https://
    );  
    
    $user = array(
        "title" => "柠檬影视", //网站标题
        "logo" => "#",  //右上角logo
        "img" => "#", //封面图
        "button" => "#,#", //右键button  用,隔开网址
        "startAD" => "", //广告类型（pic/video, 内容外链, 跳转链接, 广告时间
        "danmuon" => 0,
        "pauseAD" => "", //暂停广告   格式 ：图片链接,图片跳转链接
        "themeColor" => '#00FFFF', //主题颜色
        "forbidden" => "此网站未授权播放",
        "bad" => "视频链接解析错误,请联系管理员"
    );
    
    
    $button = explode(",",$user['button']);
    
    //-------------------------------------------------------------------------------------------------------
    function httpget($url) {
        $curl = curl_init();
        //1.初始化，创建一个新cURL资源
        $UserAgent = 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0';
        curl_setopt($curl, CURLOPT_URL, $url);
        //2.设置URL curl_setopt($ch, CURLOPT_URL, "http://www.lampbrother.net/");
        // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        //在发起连接前等待的时间，如果设置为0，则无限等待。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //设定是否显示头信息
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        //启用时会将服务器服务器返回的"Location: "放在header中递归的返回给服务器,设置可以302跳转
        curl_setopt($curl, CURLOPT_REFERER, "http://www.gov.com");
        //构造来路
        curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
        //gzip压缩内容
        $data = curl_exec($curl);
        // 抓取URL并把它传递给浏览器
        curl_close($curl);
        return $data;
    }
    
/* 
* End of File 
* @path ./config.php
*/
