@extends('layouts.app') <!-- Используем лейаут Breeze -->

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold">Список работ</h2>
                    <livewire:vacancy-table-view />
                    {{ $vacancies->links() }} <!-- Пагинация -->
                </div>
            </div>
        </div>
    </div>
@endsection
