<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\user;

class DashboardController extends BackofficeController
{

    public function dashboard()
    {
        return view ("back/dashboard");
    }


}
