<?php

namespace App\Services;

use App\Repositories\Interfaces\ICheckRepository;
use App\Services\Interfaces\ICheckService;
use Exception;
use App\Exceptions\CustomException;
use App\Exceptions\CustomCheckException;
use App\Exceptions\SkipHandlerCustomException;

class CheckService implements ICheckService
{
    private $checkRepository;

    public function __construct(ICheckRepository $checkRepository) {
        $this->checkRepository = $checkRepository;
    }

    public function check()
    {
        // throw new Exception("THIS IS EXCEPTION MESSAGE"); // OK
        // throw new CustomException("THIS IS CustomException MESSAGE"); // OK
        // throw new CustomCheckException("THIS IS CustomException checkiiiiiiiiiiiiii MESSAGE"); // OK
        // throw new SkipHandlerCustomException("THIS IS SkipHandlerCustomException MESSAGE"); // OK    
        return $this->checkRepository->check();
    }
    public function skipCheck()
    {
        return $this->checkRepository->skipCheck();
    }

    public function skipcheckLater()
	{
        throw new SkipHandlerCustomException("THIS IS SkipHandlerCustomException MESSAGE");
        return $this->checkRepository->skipcheckLater();
	}
}
