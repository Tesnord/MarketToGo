<?php

namespace App\Http\Controllers;

use App\Utils\RequestHelper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected RequestHelper $requestHelper;

    public function __construct()
    {
        $this->requestHelper = new RequestHelper();
    }
}
