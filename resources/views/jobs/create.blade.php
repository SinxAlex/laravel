@extends('layouts.app') <!-- Используем лейаут Breeze -->

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold">Список работ</h1>
                    <form method="POST" action="{{ route('jobs.store') }}">
                        @csrf
                        <!-- Поле:наименование -->
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700">Наименование вакансии *</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full px-3 py-2 border rounded @error('title') border-red-500 @enderror" required>
                            @error('title')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Поле: часы работ-->
                        <div class="mb-4">
                            <label for="content" class="block text-gray-700">Часы работ*</label>
                            <input type="text" id="hours_work" name="hours_work" value="{{ old('hours_work') }}" class="w-full px-3 py-2 border rounded @error('hours_work') border-red-500 @enderror" required>
                            @error('hours_work')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Поле: Оплата-->
                        <div class="mb-4">
                            <label for="content" class="block text-gray-700">Оплата*</label>
                            <input type="text" id="price" name="price" value="{{ old('price') }}" class="w-full px-3 py-2 border rounded @error('price') border-red-500 @enderror" required>
                            @error('price')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Поле: Начало работы-->
                        <div class="mb-4">
                            <label for="content" class="block text-gray-700">Начало работы*</label>
                            <input type="date" id="start_at" name="start_at" value="{{ old('start_at') }}" class="w-full px-3 py-2 border rounded @error('start_at') border-red-500 @enderror" required>
                            @error('start_at')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Кнопка -->
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Создать
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
