<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use \Auth;
use \Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use \Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash as FacadesHash;
use App\Models\SysUser as User;
use App\Models\SysApplication as Application;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        return view('layouts.app-login');
    }

    public function checking_login(Request $request){
        $user = User::where('username', $request->username)->first();
        // dd($user);
        if($user){
            if(FacadesHash::check($request->password, $user->password)){
                $user->role   = $user->role ? $user->role : null;
                $user->branch = $user->branch ? $user->branch : null;
                $applications = Application::getAccessMenu($user->role_id, 1);
                if($user->role->permissions){
                    $permissions = [];
                    foreach($user->role->permissions as $rPermission){
                        $row = [
                            'id'                => $rPermission->id,
                            'role_id'           => $rPermission->role_id,
                            'application_id'    => $rPermission->application_id,
                            'permission_id'     => $rPermission->permission_id,
                            'isactive'          => $rPermission->isactive,
                        ];
                        array_push($permissions, $row);
                    }
                }
                Session::put([
                    'status' => 200,
                    'description' => $user->name .' berhasil login!',
                    'user' => $user,
                    'menus' => $applications,
                    'permissions' => $permissions
                ]);
                // dd(Session::all());
                if($user->branch_id > 0){
                    $route      = 'autodebit.mygoals.daftar-rekening';
                    $message    = 'User: '. $user->name .' ('. $user->branch->name .') berhasil login!';
                }else{
                    $route      = 'setting.rolemanagement';
                    if($user->role_id == 1){
                        $message    = 'System: '. $user->name .' berhasil login!';
                    }else{
                        $message    = 'User Pusat: '. $user->name .' berhasil login!';
                    }
                }
                $alert      = 'success';
            }else{
                // dd(false);
                $route      = 'login';
                $message    = 'User gagal login, periksa kembali username atau password!';
                $alert      = 'danger';
            }
        }else{
            $route      = 'login';
            $message    = 'Gagal login, User tersebut tidak ditemukan!';
            $alert      = 'danger';
        }
        return redirect()->route($route)->with([
            'message'       => $message,
            'alert-type'    => $alert
        ]);
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/')->with([
            'message'       => 'Berhasil logout',
            'alert-type'    => 'success'
        ]);
    }

    private function encrypt_msg($username, $password, $appId){
        $cipher = 'AES-256-CBC';
        $key    = $this->config->application->uimKeyEncryptMessage;
        $iv     = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
        $value  = \openssl_encrypt(serialize($password), $cipher, $key, 0, $iv);

        $mac = hash_hmac('sha256', base64_encode($iv).$value, $key);
        $json = json_encode(['iv' => base64_encode($iv), 'value' => $value, 'mac' => $mac]);

        $data = new \stdClass;
        $data->userId = $username;
        $data->password = base64_encode($json);
        $data->appId = $appId;

        return json_encode($data);
    }
}
