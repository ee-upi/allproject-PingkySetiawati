<div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <div class="flex flex-wrap mx-8">
        <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
        </div>
            `
        <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
            <x-form wire:submit.prevent="authenticate">
                <x-input wire:model.lazy="email" label="E-mail" icon="o-envelope" />
                <x-input wire:model.lazy="password" label="Password" type="password" icon="o-key" />

                <x-slot:actions>
                    <x-button label="Login" type="submit" icon="o-paper-airplane" class="btn-primary" spinner="login" />
                </x-slot:actions>
            </x-form>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-2/6 sm:flex-none xl:mb-0 xl:w-2/6">
        </div>
    </div>
</div>
