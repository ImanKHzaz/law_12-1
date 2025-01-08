@props(['submit', 'action', 'lawsuit' => null, 'nextCaseNumber', 'userCaseNumber'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ __('معلومات الدعوى') }}</x-slot>
        <x-slot name="description">{{ __('قم بإدخال تفاصيل الدعوى ') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ $action }}">
            @csrf
            @if($submit === 'PUT')
            @method('PUT')
            @endif
            <div class="px-6 py-5 bg-white sm:px-10 sm:py-8 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">

                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="user_case_number" class="block text-sm font-medium text-gray-700">{{ __('رقم الدعوى الخاص') }}</label>
                        <input type="text" name="user_case_number" id="user_case_number" value="{{ old('user_case_number', $userCaseNumber) }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="lawsuit_type" class="block text-sm font-medium text-gray-700">{{ __('نوع الدعوى') }}</label>
                        <select id="lawsuit_type" name="lawsuit_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="مدني" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'مدني' ? 'selected' : '' }}>{{ __('مدني') }}</option>
                            <option value="شرعي" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'شرعي' ? 'selected' : '' }}>{{ __('شرعي') }}</option>
                            <option value="عسكري" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'عسكري' ? 'selected' : '' }}>{{ __('عسكري') }}</option>
                            <option value="جنائي" {{ old('lawsuit_type', $lawsuit->lawsuit_type ?? '') == 'جنائي' ? 'selected' : '' }}>{{ __('جنائي') }}</option>
                        </select>

                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="lawsuit_subject" class="block text-sm font-medium text-gray-700">{{ __('موضوع الدعوى ') }}</label>
                        <input type="text" name="lawsuit_subject" id="lawsuit_subject" value="{{ old('lawsuit_subject', $lawsuit->lawsuit_subject ?? '') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <x-button>{{ $submit === 'PUT' ? __('حفظ التعديل') : __(' حفظ القضية') }}</x-button>
            </div>
        </form>
    </div>
</div>