<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('قائمة الموكيلن') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('clients.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">{{ __('إنشاء موكل جديد') }}</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-table>
                    <x-slot name="header">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('رقم') }}</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('الاسم الثلاثي') }}</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('رقم الهاتف') }}</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('إجراءات') }}</th>
                        </tr>
                    </x-slot>
                    @foreach ($clients as $client)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->client_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->full_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->phone_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('clients.show', $client->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('عرض') }}</a>
                            <a href="{{ route('clients.edit', $client->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">{{ __('تعديل') }}</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-4">{{ __('حذف') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>