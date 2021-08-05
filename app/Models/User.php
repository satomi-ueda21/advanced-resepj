<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'locked_flg',
        'error_count',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    /**
     * Emailがマッチしたユーザーを返す。
     * @param string $email
     * @return object
     */
    public function getuserByEmail($email)
    {
        return User::where('emai','=',$email)->first();
    }

    /**
     * アカウントがロックされているか判別
     * @param object $user
     * @return bool
     */
    public function isAccountLocked($user)
    {
        if($user->locked_flg===1){
            return true;
        }
        return false;
    }

    /**
     * エラーカウントをリセットする
     * @param object $user
     * @return int
     */
    public function resetErrorCount($user)
    {
        if($user->error_count >0){
            $user->error_count=0;
            $user->save();
        }
    }

    /**
     * エラーカウントを加算する
     * @param int $error_count
     */
    public function addErrorCount($error_count)
    {
        return $error_count + 1;
    }

    /**
     * アカウントをロックする
     * @param object $user
     * @return bool
     */
    public function lockAccount($user)
    {
        if($user->error_count>5){
            $user->locked_flg=1;
            $user->save();
        }
        return false;
    }
}