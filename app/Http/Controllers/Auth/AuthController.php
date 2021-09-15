<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //ユーザーモデルでの処理
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    /**
     * 会員登録ページ表示
     *  @return View
     */
    public function showregister()
    {
        return view('register');
    }

    /**
     * 会員登録完了ページ表示
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
        //RegisterFormRequestでバリデーション後に保存
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
     * ログイン画面を表示
     *  @return View
     */
    public function showlogin()
    {
        return view('login');
    }

    /**
     * @param App\Http\Requests\LoginFormRequest
     * $request
     */
    public function login(LoginFormRequest $request)
    {
        $credentials=$request->only('email','password');

            //アカウントがロックされたら弾く
            $user=$this->user->getUserByEmail($credentials['email']);

            if (!is_null($user)) {
                if($this->user->isAccountLocked($user)){
                    return back()->withErrors([
                    'danger'=>'アカウントがロックされています。',
                ]);
                }

                if(Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    //成功したらエラーカウントを0にする
                    $this->user->resetErrorCount($user);
                    $id = Auth::user()->id;

                    return redirect()->route('mypage',['id'=>$id])->with('success','ログイン済み。マイページを表示します。');
                };
                //ログイン失敗したらエラーカウントを1増やす
                $user->error_count=$this->user->addErrorCount($user->error_count);

                //エラーカウントが6以上はアカウントをロックする
                if($this->user->lockAccount($user)){
                    return back()->withErrors([
                        'danger'=>'アカウントがロックされました。解除したい場合は管理者に連絡してください。',
                    ]);
                }
                $user->save();
            };

        return back()->withErrors([
            'danger'=>'メールアドレスかパスワードが間違っています。',
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

        return redirect()->route('showlogin')->with('danger','ログアウトしました。');
    }
}
