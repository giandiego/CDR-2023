<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cdr;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CdrController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cdr_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cdr.index');
    }

    public function show(Cdr $cdr)
    {
        abort_if(Gate::denies('cdr_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cdr.show', compact('cdr'));
    }
}
