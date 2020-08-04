<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\UserInfoHelper;

class IpController extends Controller
{
  function getuserinfo()
  {
    $getip = UserInfoHelper::get_ip();
    $getbrowser = UserInfoHelper::get_browsers();
    $getdevice = UserInfoHelper::get_device();
    $getos = UserInfoHelper::get_os();

    echo "<center>$getip <br> $getdevice <br> $getbrowser <br> $getos</center>";
  }
}
