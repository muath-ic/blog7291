<?php

namespace App\Http\Computers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseComputer;

class Computer extends BaseComputer
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
