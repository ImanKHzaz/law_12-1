@props(['submit', 'action', 'document' => null, 'lawsuitId', 'client'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ __('وثائق الدعوى ') }}</x-slot>
        <x-slot name="description">{{ __('قم برفع وثائق الدعوى المرفقة ') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
            @csrf
            @if($submit === 'PUT')
            @method('PUT')
            @endif
            <input type="hidden" name="lawsuit_id" value="{{ $lawsuitId }}">

            <input type="hidden" name="power_of_attorney" value="default_power_of_attorney_value">
            <div class="px-6 py-5 bg-white sm:px-10 sm:py-8 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="attachments" class="block text-sm font-medium text-gray-700">{{ __('الوثائق') }}</label>
                        <input type="file" name="attachments[]" id="attachments" multiple class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <x-button>{{ $submit === 'PUT' ? __('تعديل') : __('حفظ الوثائق') }}</x-button>
            </div>
        </form>
    </div>
</div>