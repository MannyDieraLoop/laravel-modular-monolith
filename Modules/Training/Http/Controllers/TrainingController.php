<?php

namespace Modules\Training\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('training::index');
    }

    public function simpleError()
    {
        abort(422, 'Something was not processable');
    }

    public function unexpectedError()
    {
        abort(500, 'Something just blew up');
    }
}
