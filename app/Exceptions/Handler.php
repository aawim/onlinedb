<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
        \Illuminate\Foundation\Exceptions\Handler::class,
    ];

  
    public function report(Exception $exception)
     {
         parent::report($exception);

    }

   


     public function render($request, Exception $exception)
     {
       
            if($exception instanceof NotFoundHttpException)
            {
                return response()->view('missing', [], 404);
            }

            if ($this->isHttpException($exception))
            {
                return $this->renderHttpException($exception);
            }
            else
            {
                return parent::render($request, $exception);
            }


    }

















   
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
