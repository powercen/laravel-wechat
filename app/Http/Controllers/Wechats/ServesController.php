<?php

namespace App\Http\Controllers\Wechats;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use Illuminate\Support\Facades\Log;

class ServesController extends Controller
{
	private $server;

	public function __construct(Application $app)
	{
		$this->server = $app->server;
	}

    public function index()
    {
    	$this->server->setMessageHandler(['App\Wechats\Messages','messageHandler']);
        return $this->server->serve()->send();
    }
}