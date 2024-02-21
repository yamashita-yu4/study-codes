<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response as IlluminateResponse;
use Illuminate\Support\Facades\Response;

use function response;

class TextAction extends Controller
{
    public function __invoke(Request $request): IlluminateResponse
    {
        $response = Response::make('hello world');

        return $response;
    }
}
