<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('قائمة القضايا ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('lawsuits.create') }}" class="btn-create">{{ __('تسجيل قضية جديدة') }}</a>
            </div>
            <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden table-responsive">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 text-gray-800 text-left text-xs leading-4 font-medium uppercase tracking-wider">{{ __('رقم الدعوى  ') }}</th>
                            <th class="px-6 py-3 border-b border-gray-200 text-gray-800 text-left text-xs leading-4 font-medium uppercase tracking-wider">{{ __('موضوع الدعوى ') }}</th>
                            <th class="px-6 py-3 border-b border-gray-200 text-gray-800 text-left text-xs leading-4 font-medium uppercase tracking-wider">{{ __('نوع الدعوى ') }}</th>
                            <th class="px-6 py-3 border-b border-gray-200 text-gray-800 text-left text-xs leading-4 font-medium uppercase tracking-wider">{{ __('اسم الموكل') }}</th>
                            <th class="px-6 py-3 border-b border-gray-200 text-gray-800 text-left text-xs leading-4 font-medium uppercase tracking-wider">{{ __('إجراءات') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($lawsuits as $lawsuit)
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td data-label="{{ __('Lawsuit Number') }}" class="px-6 py-4 border-b border-gray-200 whitespace-nowrap text-sm leading-5 text-gray-900">{{ $lawsuit->user_case_number }}</td>
                            <td data-label="{{ __('Lawsuit Subject') }}" class="px-6 py-4 border-b border-gray-200 whitespace-nowrap text-sm leading-5 text-gray-900">{{ $lawsuit->lawsuit_subject }}</td>
                            <td data-label="{{ __('Lawsuit Type') }}" class="px-6 py-4 border-b border-gray-200 whitespace-nowrap text-sm leading-5 text-gray-900">{{ $lawsuit->lawsuit_type }}</td>
                            <td data-label="{{ __('Client Name') }}" class="px-6 py-4 border-b border-gray-200 whitespace-nowrap text-sm leading-5 text-gray-900">
                                @foreach ($lawsuit->clients as $client)
                                {{ $client->full_name }}<br>
                                @endforeach
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap text-sm leading-5 font-medium">
                                <a href="{{ route('lawsuits.show', $lawsuit->id) }}" class="btn-view">{{ __('عرض') }}</a>
                                <a href="{{ route('lawsuits.edit', $lawsuit->id) }}" class="btn-edit ml-4">{{ __('تعديل') }}</a>
                                <form action="{{ route('lawsuits.destroy', $lawsuit->id) }}" method="POST" class="inline-block ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">{{ __('حذف') }}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    thead {
        background-color: #f8f8f8;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #e9e9e9;
    }

    .btn-view,
    .btn-edit,
    .btn-delete {
        padding: 6px 12px;
        border-radius: 4px;
        text-decoration: none;
        color: #ffffff;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-view {
        background-color: #4caf50;
    }

    .btn-view:hover {
        background-color: #45a049;
    }

    .btn-edit {
        background-color: #ff9800;
    }

    .btn-edit:hover {
        background-color: #fb8c00;
    }

    .btn-delete {
        background-color: #f44336;
        border: none;
        cursor: pointer;
    }

    .btn-delete:hover {
        background-color: #e53935;
    }

    @media (max-width: 600px) {
        thead {
            display: none;
        }

        tbody tr {
            display: block;
            margin-bottom: 10px;
        }

        tbody td {
            display: block;
            text-align: right;
            font-size: 13px;
            border-bottom: 1px solid #eee;
        }

        tbody td::before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
        }

        tbody td:last-child {
            border-bottom: 0;
        }
    }

    .btn-create {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #ffffff;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-create:hover {
        background-color: #0056b3;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }
</style>