<div>
    <x-card title="Super Admin | Staff Management (Mobile)" shadow separator>
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div>
                    <x-input wire:model.live="staffSearch" placeholder="Search staff name orf code" inline/>
                </div>
            </div>
        </div>
        <br>
        <x-table :headers="$headersMobile" :rows="$staffs" wire:model="expanded" with-pagination no-headers expandable>
            {{-- Special `expansion` slot --}}
            @scope('cell_profile', $staff)
            {{$staff->code}} | {{$staff->first_name}} {{$staff->last_name}}
            @endscope
            @scope('actions', $staff)
            <i style="color:green; cursor: pointer" wire:click="loginAs({{$staff->id}})"><u>Login As</u></i>
            @endscope
            @scope('expansion', $staff)
            <div class="bg-base-200 p-8 font-bold">
                Hello, {{ $staff->code }}!
            </div>
            @endscope
        </x-table>
    </x-card>
</div>
