<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\CdrResource;
use App\Models\Cdr;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CdrApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cdr_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CdrResource(Cdr::all());
    }

    public function show(Cdr $cdr)
    {
        abort_if(Gate::denies('cdr_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CdrResource($cdr);
    }

    public function destroy(Cdr $cdr)
    {
        abort_if(Gate::denies('cdr_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cdr->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
