<?php
namespace Jiny\Site\Board\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Jiny\WireTable\Http\Controllers\WireDashController;
class AdminSiteBoardDashboard extends WireDashController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        $this->actions['view']['layout'] = "jiny-site-board::admin.dashboard.dash";

        $this->actions['title'] = "Site Board";
        $this->actions['subtitle'] = "사이트 계시물을 관리합니다.";

        //setMenu('menus/site.json');
        setTheme("admin/sidebar");
    }


    public function index(Request $request)
    {
        return parent::index($request);
    }

}
