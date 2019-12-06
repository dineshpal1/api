<?php
namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use  Symfony\Component\HttpFoundation\Response;

trait ExceptionTrait
{
	public function apiException($request,$e)
	{
			 if($this->isModel($e))
        {
            return response()->json([
                    "errors"=>"Product Model Not Found"
            ],404);
        }


        if ($this->isHttp($e))
        {
            return response()->json([
                    "errors"=>"Incorrect Route"
            ],404);
        }
        return parent::render($request, $exception);
	}

	public function isModel($e)
	{
		return $e instanceof ModelNotFoundException;
	}

	public function isHttp($e)
	{
		return $e instanceof NotFoundHttpException;

	}


}



?>