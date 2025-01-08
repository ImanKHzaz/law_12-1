<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="bg-gray-100">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mt-8 text-2xl">
                    {{ __('مرحبًا بك في لوحة التحكم') }}
                </div>
                <div class="mt-6 text-gray-500">
                    {{ __('اختر القسم الذي ترغب في عرضه:') }}
                </div>
                <div class="mt-6">
                    <div class="mb-4 flex justify-end">
                        <a href="{{ route('lawsuits.create') }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-700 disabled:opacity-25 transition">
                            {{ __('تسجيل قضية جديدة') }}
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- زر جدول القضايا -->
                        <div class="bg-gray-100 rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-700">{{ __('جدول القضايا') }}</h3>
                            <p class="mt-2 text-gray-600">{{ __('عرض وإدارة جميع القضايا') }}</p>
                            <a href="{{ route('lawsuits.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-700 disabled:opacity-25 transition">
                                {{ __('عرض القضايا') }}
                            </a>
                        </div>

                        <!-- زر جدول الموكلين -->
                        <div class="bg-gray-100 rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-700">{{ __('جدول الموكلين') }}</h3>
                            <p class="mt-2 text-gray-600">{{ __('عرض وإدارة جميع الموكلين') }}</p>
                            <a href="{{ route('clients.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-700 disabled:opacity-25 transition">
                                {{ __('عرض الموكلين') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>