<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    /**
     *  @return View
     */
    public function showregister()
    {
        return view('register');
    }

        /**
     *  @return View
     */
    public function thanks()
    {
        return view('thanks');
    }

        /**
     * @param App\Http\Requests\RegisterFormRequest;
     * $request
     */
    public function register(RegisterFormRequest $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        // 保存
        $user->save();
        // リダイレクト
        return redirect()->route('thanks');
    }

    /**
     *  @return View
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * @param App\Http\Requests\LoginFormRequest
     * $request
     */
    public function login(LoginFormRequest $request)
    {
        $credentials=$request->only('email,password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            //アカウントがロックされたら弾く
            $user=$this->user->getuserByEmail($credentials['email']);

            if (!is_null($user)) {
                if($this->user->isAccountLock($user)){
                    return back()->withErrors([
                    'danger'=>'アカウントがロックされています。',
                ]);
                }

                if(Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    //成功したらエラーカウントを0にする
                    $this->user->resetErrorCount($user);

                    return redirect()->route('mypage')->with('login_success','ログイン済み。マイページを表示します。');
                };
                //ログイン失敗したらエラーカウントを1増やす
                $user->error_count=$this->user->addErrorCount($user->error_count);

                //エラーカウントが6以上はアカウントをロックする
                if($user->$this->lockAccou($user)){
                    return back()->withErrors([
                        'danger'=>'アカウントがロックされました。解除したい場合は管理者に連絡してください。',
                    ]);
                }
                $user->save();
            };
        }

        return back()->withErrors([
            'login_error'=>'メールアドレスかパスワードが間違っています。',
        ]);
    }

        /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('showLogin')->with('logout','ログアウトしました。');
    }
}
