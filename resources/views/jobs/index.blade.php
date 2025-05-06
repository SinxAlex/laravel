<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full overflow-x-auto">
                  <div style="float: right; margin-bottom: 10px;" >
                      <a href="{{ route('jobs.create') }}" class="inline-flex items-center px-4 py-2 text-black bg-black-500 hover:bg-blue-600 rounded-md shadow-md">+Добавить
                      </a>
                  </div>
                <h1> Вакансии:</h1>
                <div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <livewire:data-table />
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
