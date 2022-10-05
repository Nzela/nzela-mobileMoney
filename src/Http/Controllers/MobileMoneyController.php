<?php

namespace Nzela\MobileMoney\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class MobileMoneyController extends Controller
{
    public function index(): string
    {
        return "Hello from mobile money package in Controller";
    }

    /**
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function processPaiement(Request $request, User $user): string
    {
        return "Hello from mobile money package in Controller";
    }
}
