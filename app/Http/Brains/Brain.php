<?php

namespace App\Http\Brains;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseBrain;

class Brain extends BaseBrain
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
