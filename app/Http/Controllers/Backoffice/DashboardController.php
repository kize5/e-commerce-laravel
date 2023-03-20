<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Support\Facades\Gate;

class DashboardController extends BackofficeController
{

    public function dashboard()
    {
        return view ("back/dashboard");
    }

    public function dashboardv2 () {


        return view("dashboard");
    }

}
