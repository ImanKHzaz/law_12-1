@props(['submit', 'action', 'lawsuitId', 'clientId'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ __('معلومات سجل المحكمة ') }}</x-slot>
        <x-slot name="description">{{ __('ادخل تفاصيل الدعوى في المحكمة ') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ $action }}">
            @csrf
            @if($submit === 'PUT')
            @method('PUT')
            @endif
            <input type="hidden" name="lawsuit_id" value="{{ $lawsuitId }}">
            <input type="hidden" name="client_id" value="{{ $clientId }}">
            <div class="px-6 py-5 bg-white sm:px-10 sm:py-8 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="court_name" class="block text-sm font-medium text-gray-700">{{ __('محكمة ') }}</label>
                        <select id="court_name" name="court_name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="دمشق">{{ __('دمشق') }}</option>
                            <option value="ببيلا">{{ __('ببيلا') }}</option>
                            <option value="جرمانا">{{ __('جرمانا') }}</option>
                            <option value="داريا">{{ __('داريا') }}</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="court_number" class="block text-sm font-medium text-gray-700">{{ __('رقم المحكمة') }}</label>
                        <input type="number" name="court_number" id="court_number" value="{{ old('court_number', 1) }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="case_status" class="block text-sm font-medium text-gray-700">{{ __('حالة الدعوى ') }}</label>
                        <select id="case_status" name="case_status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="انتظار">{{ __('انتظار') }}</option>
                            <option value="قيد الدراسة">{{ __('قيد الدراسة') }}</option>
                            <option value="تم التسجيل">{{ __('تم التسجيل') }}</option>
                            <option value="تم الفصل">{{ __('تم الفصل') }}</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="decision_number" class="block text-sm font-medium text-gray-700">{{ __('رقم الأساس ') }}</label>
                        <input type="text" name="decision_number" id="decision_number" value="{{ old('decision_number') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="base_number" class="block text-sm font-medium text-gray-700">{{ __('رقم القرار ') }}</label>
                        <input type="text" name="base_number" id="base_number" value="{{ old('base_number') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="col-span-6">
                        <label for="notes" class="block text-sm font-medium text-gray-700">{{ __('ملاحظات') }}</label>
                        <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('notes') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <x-button>{{ $submit === 'PUT' ? __('تعديل') : __('حفظ سجل المحكمة') }}</x-button>
            </div>
        </form>
    </div>
</div>