<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('cdr_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Cdr" format="csv" />
                <livewire:excel-export model="Cdr" format="xlsx" />
                <livewire:excel-export model="Cdr" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.cdr.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.calldate') }}
                            @include('components.table.sort', ['field' => 'calldate'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.clid') }}
                            @include('components.table.sort', ['field' => 'clid'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.src') }}
                            @include('components.table.sort', ['field' => 'src'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.dst') }}
                            @include('components.table.sort', ['field' => 'dst'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.dcontext') }}
                            @include('components.table.sort', ['field' => 'dcontext'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.channel') }}
                            @include('components.table.sort', ['field' => 'channel'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.dstchannel') }}
                            @include('components.table.sort', ['field' => 'dstchannel'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.lastapp') }}
                            @include('components.table.sort', ['field' => 'lastapp'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.lastdata') }}
                            @include('components.table.sort', ['field' => 'lastdata'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.duration') }}
                            @include('components.table.sort', ['field' => 'duration'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.billsec') }}
                            @include('components.table.sort', ['field' => 'billsec'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.disposition') }}
                            @include('components.table.sort', ['field' => 'disposition'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.amaflags') }}
                            @include('components.table.sort', ['field' => 'amaflags'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.accountcode') }}
                            @include('components.table.sort', ['field' => 'accountcode'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.uniqueid') }}
                            @include('components.table.sort', ['field' => 'uniqueid'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.userfield') }}
                            @include('components.table.sort', ['field' => 'userfield'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.peeraccount') }}
                            @include('components.table.sort', ['field' => 'peeraccount'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.linkedid') }}
                            @include('components.table.sort', ['field' => 'linkedid'])
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.sequence') }}
                            @include('components.table.sort', ['field' => 'sequence'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cdrs as $cdr)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $cdr->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $cdr->id }}
                            </td>
                            <td>
                                {{ $cdr->calldate }}
                            </td>
                            <td>
                                {{ $cdr->clid }}
                            </td>
                            <td>
                                {{ $cdr->src }}
                            </td>
                            <td>
                                {{ $cdr->dst }}
                            </td>
                            <td>
                                {{ $cdr->dcontext }}
                            </td>
                            <td>
                                {{ $cdr->channel }}
                            </td>
                            <td>
                                {{ $cdr->dstchannel }}
                            </td>
                            <td>
                                {{ $cdr->lastapp }}
                            </td>
                            <td>
                                {{ $cdr->lastdata }}
                            </td>
                            <td>
                                {{ $cdr->duration }}
                            </td>
                            <td>
                                {{ $cdr->billsec }}
                            </td>
                            <td>
                                {{ $cdr->disposition }}
                            </td>
                            <td>
                                {{ $cdr->amaflags }}
                            </td>
                            <td>
                                {{ $cdr->accountcode }}
                            </td>
                            <td>
                                {{ $cdr->uniqueid }}
                            </td>
                            <td>
                                {{ $cdr->userfield }}
                            </td>
                            <td>
                                {{ $cdr->peeraccount }}
                            </td>
                            <td>
                                {{ $cdr->linkedid }}
                            </td>
                            <td>
                                {{ $cdr->sequence }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('cdr_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.cdrs.show', $cdr) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('cdr_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.cdrs.edit', $cdr) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('cdr_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $cdr->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $cdrs->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush