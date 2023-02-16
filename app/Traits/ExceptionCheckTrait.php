<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Services\Interfaces\ICheckService;
use Response;

trait ExceptionCheckTrait
{
    public function __construct(ICheckService  $checkService)
	{
		$this->checkService = $checkService;
	}
    
	public function check()
	{
        return $this->checkService->check();
	}    
	public function skipCheck()
	{
        return $this->checkService->skipCheck();
	}
	public function skipcheckLater()
	{
        return $this->checkService->skipcheckLater();
	}
	
}
