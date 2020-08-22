<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $user_company = [];  

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->loggedin_user = AppModel::setupLoggedinUserPermissions();
        $this->user_company = AppModel::setupLoggedinUserCompany();
        if (!empty($this->loggedin_user) && !empty($this->user_company)){
            return view('report', [
                    'company' => $this->user_company->company, 
                    'branches' => $this->user_company->branches,
                    'company_setups' => $this->user_company->company_setups,
                    'user_roles' => $this->loggedin_user['user_roles'],
                    'user_permissions' => $this->loggedin_user['user_permissions']
                ]
            );
        }
        return "Unauthorised User";
    }
}
