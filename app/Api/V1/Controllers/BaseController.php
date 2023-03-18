<?php

namespace App\Api\V1\Controllers;

use Dingo\Api\Http\Response\Factory;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;


/**
 * @property Factory $resp
 */
class BaseController extends Controller
{
    use Helpers;
}
