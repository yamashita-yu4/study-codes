<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response as IlluminateResponse;
use Illuminate\Support\Facades\Response;

use function response;
use function view;

class ViewAction extends Controller
{
    public function __invoke(Request $request)
    {
        $response = Response::view('view.file');
        return $response;
    }
}