<?php

namespace TTSoft\Dashboard\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use TTSoft\Sales\Entities\BillingOrder;
use TTSoft\Dashboard\Repositories\DashboardRepositoryInterface;
class DashboardController extends Controller
{
	/**
	 *
	 * @return attribute for user
	 *
	 */
	protected $repository;

	public function __construct(DashboardRepositoryInterface $repository){
		$this->repository = $repository;
	}

	public function index(Request $request){
        return view('dashboard::index');
	}
}
