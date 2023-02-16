<?php

namespace App\Repositories;
use App\Repositories\Interfaces\ICheckRepository;

class CheckRepository implements ICheckRepository
{
	public function check(){
                // dump('Repository');
                // dump('Api/v1/auth.invalid_otp');
                return ['message'=>'Checking from Repo'];
	}

        public function skipCheck(){
                return ['message'=>'Checking from skipCheck'];
	}

        public function skipcheckLater(){
                return ['message'=>'checking skipcheckLater from Repo'];
	}
}
