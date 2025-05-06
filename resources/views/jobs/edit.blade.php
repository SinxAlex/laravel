<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1> Редактирование вакансии:</h1>
                <hr />
                <form action="{{ route('jobs.store') }}" method="POST" class="mt-6 space-y-6">
                    @csrf
                    <div>
                        <x-input-label for="title" :value="__('Наименование*:')" />
                        <x-text-input id="title" name="title" type="text"  value="{{ $jobs->title }}" class="mt-1 block w-full"></x-text-input>

                    </div>
                    <div>
                        <x-input-label for="price" :value="__('Цена*:')" />
                        <x-text-input id="price" name="price" type="text" value="{{ $jobs->price }}" class="mt-1 block w-full"></x-text-input>

                    </div>
                    <div>
                        <x-input-label for="started_at" :value="__('Дата начала*:')" />
                        <x-text-input id="started_at" name="started_at" type="date" value="{{ $jobs->started_at }}" class="mt-1 block w-full"></x-text-input>

                    </div>
                    <div>
                        <x-input-label for="started_at" :value="__('Часы работы*:')" />
                        <x-text-input id="hours" name="hours" type="text"  value="{{ $jobs->hours}}"  class="mt-1 block w-full"></x-text-input>

                    </div>
                    <div>
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
