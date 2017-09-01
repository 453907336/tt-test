<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'admin/index';

    protected $username;

    public function __construct() {
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');

    }

    public function username()
    {
        return 'username';//登录名
    }

    public function login()
    {
        return view('admin.login');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }



 /*     public  function login(Request $request){

          if($request->isMethod('POST')){
              $this->validate($request, [
                  'username' => 'required',
                  'password' => 'required',
                  'verify'=>'required'
              ],[
                  'required'=>':attribute 不能为空',
              ],[
                  'username'=>'用户名',
                  'password'=>'密码',
                  'verify'=>'验证码'
              ]);

              $admin=Admin::where([
                 'password'=>encrypt($request->input('password'))
              ])->first();

 
             var_dump($admin);exit;

          }

          return view('admin.login');
      }*/

    /**
     * @param $tmp 验证码
     */
    public function code($tmp){
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder();
        //可以设置图片宽高及字体
        $builder->build($width =80, $height = 30, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('admin-code', $phrase);
        ob_clean();
        //生成图片
        header('Content-Type: image/jpeg');
        $builder->output();exit;

    }
}
