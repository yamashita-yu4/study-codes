<?php
declare(strict_types=1);

namespace App\Http\Request;

use Illuminate\Http\Request;

final class PayloadAction
{
    public function __invoke(Request $request)
    {
        $result_get = $request->get('nested');
        $result_json = $request->json('nested');
    }
}