@props(['submit', 'action', 'lawsuit' => null])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ __('معلومات القضية ') }}</x-slot>
        <x-slot name="description">{{ __('ادخل تفاصيل القضية ') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ $action }}">
            @csrf
            @if($submit === 'PUT')
            @method('PUT')
            @endif
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6">
                    <x-input name="lawsuit_number" label="Lawsuit Number" :value="old('lawsuit_number', $lawsuit->lawsuit_number ?? '')" />
                    <x-input name="lawsuit_subject" label="Lawsuit Subject" :value="old('lawsuit_subject', $lawsuit->lawsuit_subject ?? '')" />
                    <div class="col-span-6 sm:col-span-3">
                        <label for="lawsuit_type" class="block text-sm font-medium text-gray-700">{{ __('نوع القضية ') }}</label>
                        <select id="lawsuit_type" name="lawsuit_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="Civil" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'مدني' ? 'selected' : '' }}>{{ __('مدني') }}</option>
                            <option value="Religious" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'شرعي' ? 'selected' : '' }}>{{ __('شرعي') }}</option>
                            <option value="Military" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'عسكري' ? 'selected' : '' }}>{{ __('عسكري') }}</option>
                            <option value="Criminal" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'جزائي' ? 'selected' : '' }}>{{ __('جزائي') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            @if (isset($actions))
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {{ $actions }}
            </div>
            @endif
        </form>
    </div>
</div>