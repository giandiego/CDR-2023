@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.cdr.title_singular') }}:
                    {{ trans('cruds.cdr.fields.id') }}
                    {{ $cdr->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.id') }}
                            </th>
                            <td>
                                {{ $cdr->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.calldate') }}
                            </th>
                            <td>
                                {{ $cdr->calldate }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.clid') }}
                            </th>
                            <td>
                                {{ $cdr->clid }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.src') }}
                            </th>
                            <td>
                                {{ $cdr->src }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.dst') }}
                            </th>
                            <td>
                                {{ $cdr->dst }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.dcontext') }}
                            </th>
                            <td>
                                {{ $cdr->dcontext }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.channel') }}
                            </th>
                            <td>
                                {{ $cdr->channel }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.dstchannel') }}
                            </th>
                            <td>
                                {{ $cdr->dstchannel }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.lastapp') }}
                            </th>
                            <td>
                                {{ $cdr->lastapp }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.lastdata') }}
                            </th>
                            <td>
                                {{ $cdr->lastdata }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.duration') }}
                            </th>
                            <td>
                                {{ $cdr->duration }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.billsec') }}
                            </th>
                            <td>
                                {{ $cdr->billsec }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.disposition') }}
                            </th>
                            <td>
                                {{ $cdr->disposition }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.amaflags') }}
                            </th>
                            <td>
                                {{ $cdr->amaflags }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.accountcode') }}
                            </th>
                            <td>
                                {{ $cdr->accountcode }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.uniqueid') }}
                            </th>
                            <td>
                                {{ $cdr->uniqueid }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.userfield') }}
                            </th>
                            <td>
                                {{ $cdr->userfield }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.peeraccount') }}
                            </th>
                            <td>
                                {{ $cdr->peeraccount }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.linkedid') }}
                            </th>
                            <td>
                                {{ $cdr->linkedid }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cdr.fields.sequence') }}
                            </th>
                            <td>
                                {{ $cdr->sequence }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('cdr_edit')
                    <a href="{{ route('admin.cdrs.edit', $cdr) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.cdrs.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection