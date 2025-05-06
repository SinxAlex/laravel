<div class="w-full">
    <!-- Поиск -->
    <input type="text" wire:model.live.debounce.500ms="search" placeholder="Поиск..." class="mb-4 w-full">

    <!-- Таблица -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <!-- Заголовки с сортировкой -->
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" wire:click="sortBy('id')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                    ID
                    @if($sortField === 'id')
                        @if($sortDirection === 'asc') ↑ @else ↓ @endif
                    @endif
                </th>
                <th scope="col" wire:click="sortBy('title')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                    Наименование:
                    @if($sortField === 'title')
                        @if($sortDirection === 'asc') ↑ @else ↓ @endif
                    @endif
                </th>
                <th scope="col" wire:click="sortBy('price')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                    Оплата:
                    @if($sortField === 'price')
                        @if($sortDirection === 'asc') ↑ @else ↓ @endif
                    @endif
                </th>
                <th scope="col" wire:click="sortBy('started_at')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                    Дата начала:
                    @if($sortField === 'started_at')
                        @if($sortDirection === 'asc') ↑ @else ↓ @endif
                    @endif
                </th>
                <th scope="col" wire:click="sortBy('hours')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                   Часы:
                    @if($sortField === 'hours')
                        @if($sortDirection === 'asc') ↑ @else ↓ @endif
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Действия
                </th>
            </tr>
            </thead>
            <!-- Данные -->
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($items as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->price }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->started_at }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->hours}}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <!-- Кнопка просмотра -->
                            <button wire:click="view({{ $item->id }})" title="Просмотр" class="text-blue-500 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>

                            <!-- Кнопка редактирования -->
                            <button wire:click="edit({{ $item->id }})" title="Редактировать" class="text-green-500 hover:text-green-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>

                            <!-- Кнопка удаления -->
                            <button wire:click="delete({{ $item->id }})" title="Удалить" class="text-red-500 hover:text-red-700" onclick="return confirm('Вы уверены?')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Пагинация -->
    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>
