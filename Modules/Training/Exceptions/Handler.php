<?php

namespace Modules\Training\Exceptions;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class Handler extends ExceptionHandler
{
    public function render($request, Exception|\Throwable $exception)
    {
        $statusCode = $exception->getCode() !== 0 ? $exception->getCode() : $exception->getStatusCode();

        \Log::info('came in here as well');

        switch($statusCode) {
            case(404):
                return response()->json([
                    'Error Type' => 'Training Error',
                    'type' => $request->fullUrl(),
                    'title' => 'Not Found',
                    'status' => $statusCode,
                    'detail' => $exception->getMessage(),
                ], $statusCode);
            case(422):
                return response()->json([
                    'Error Type' => 'Training Error',
                    'type' => $request->fullUrl(),
                    'title' => 'Unprocessable Entity',
                    'status' => $statusCode,
                    'detail' => $exception->getMessage(),
                ], $statusCode);
            default:
                return response()->json([
                    'Error Type' => 'Training Error',
                    'type' => $request->fullUrl(),
                    'title' => 'Server Error',
                    'status' => $statusCode,
                    'detail' => $exception->getMessage(),
                ], ResponseAlias::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
