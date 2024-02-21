<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use function redirect;
use function response;

final class RedirectAction extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $response = Response::redirectTo('/');
        $response = response()->redirectTo('/');
        $response = redirect('/');
        
        return $response;
    }
}