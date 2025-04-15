<div>
    <x-card title="user profile" shadow separator>-
        {{--
        <div class="flex flex-wrap mx-8">
            <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
                <x-password wire:model.lazy="oldPassword" label="Old password"  />
            </div>
        </div>
        <br />
        --}}
        <div class="flex flex-wrap mx-8">
            <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
                <x-password wire:model.lazy="newPassword" label="New password" clearable/>
            </div>
            <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
                <x-password wire:model.lazy="confirmPassword" label="New password confirmation" clearable/>
            </div>
        </div>
        <br/>
        <div class="flex flex-wrap mx-8">
            <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
                <x-button wire:click="updateProfile" icon="o-bookmark" label="Change password" class="btn btn-success"/>
            </div>
        </div>
    </x-card>
</div>
