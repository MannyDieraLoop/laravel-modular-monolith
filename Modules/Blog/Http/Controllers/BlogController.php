<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('blog::index');
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
