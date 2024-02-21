<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegistPost;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(UserRegistPost $request)
    {
        //バリデーション通過後の処理
        $name = $request->get('name');
        $email = $request->get('email');
    }
}