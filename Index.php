<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\validate\test;
class Index extends Controller
{
    public function index()
    {	
    	
       return $this->fetch();
    }
    public function token($name = '__token__', $type = 'md5')
    {           //s_callable() 函数验证变量的内容能否作为函数调用
        $type  = is_callable($type) ? $type : 'md5';
        $token = call_user_func($type, $_SERVER['REQUEST_TIME_FLOAT']);
        echo md5($_SERVER['REQUEST_TIME_FLOAT']).'<br>';
        return $token;
    }
    public function test()
    {
            $time = time();   
            $value = "www.baidu.co?time=".$time; //二维码内容
            $data = array('text' =>$value , 'code'=>1); 
            return $data;
        
    }

}
