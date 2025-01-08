<div>
    <form method="{{ $submit }}" action="{{ $action }}" enctype="multipart/form-data">
        @csrf
        <!-- حقول النموذج -->
        <div>
            <x-label for="full_name" :value="__('Full Name')" />
            <x-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" required autofocus />
        </div>
        <div>
            <x-label for="phone_number" :value="__('Phone Number')" />
            <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" required />
        </div>
        <div>
            <x-label for="id_front_image" :value="__('ID Front Image')" />
            <x-input id="id_front_image" class="block mt-1 w-full" type="file" name="id_front_image" />
        </div>
        <div>
            <x-label for="id_back_image" :value="__('ID Back Image')" />
            <x-input id="id_back_image" class="block mt-1 w-full" type="file" name="id_back_image" />
        </div>
        <div>
            <x-label for="power_of_attorney" :value="__('Power of Attorney')" />
            <x-input id="power_of_attorney" class="block mt-1 w-full" type="file" name="power_of_attorney" />
        </div>
        <div>
            <x-label for="notes" :value="__('Notes')" />
            <textarea id="notes" class="block mt-1 w-full" name="notes"></textarea>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('Create Defendant') }}
            </x-button>
        </div>
    </form>
</div>