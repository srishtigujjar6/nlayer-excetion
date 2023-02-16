<?php

namespace App\Traits;

use Response;
use Illuminate\Http\Response as IlluminateResponse;
use stdClass;

trait APIResponseTrait
{   
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    public function getStatusCode()
    {
        return  $this->statusCode;
    }
    protected function respondWithError($message)
    {
        return $this->respond([
            'data' => new stdClass,
            'message' => $message,
            'status_code' => $this->getStatusCode()

        ]);
    }
    private function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

	public function responseNotFound($message = 'Not Found!')
	{
        return $this->setStatusCode(IlluminateResponse::HTTP_NOT_FOUND)->respondWithError($message);
	}

	public function responseServerError($message = 'Server Error!')
	{
        return $this->setStatusCode(IlluminateResponse::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
	}
    


}
