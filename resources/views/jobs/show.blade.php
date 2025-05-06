<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1> Просмотр данных о вакансии:</h1>
                <div style="margin-bottom: 10px;" >
                    <a href="{{ url('/jobs/'.$jobs->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-black bg-blue-500 hover:bg-blue-600 rounded-md shadow-md">
                        <i class="fas fa-list mr-2"></i> Редактировать
                    </a>
                    <a href="{{ url('/jobs/') }}" class="inline-flex items-center px-4 py-2 text-black bg-blue-500 hover:bg-blue-600 rounded-md shadow-md">
                        <i class="fas fa-list mr-2"></i> Назад
                    </a>
                </div>
                <hr />
                    @csrf
                <label> Вакансия: {{$jobs->title}}</label><br />
                <label> Дата добавления: {{$jobs->created_at->format('d.m.Y H:i:s')}}</label><br />
                <label> Оплата: {{$jobs->price}}</label><br />
                <label> Часы работ: {{$jobs->hours}}</label><br />
                <label> Дата начала: {{$jobs->started_at}}</label><br />
                <label> Автор публикации: {{\App\Models\User::find($jobs->id_user)->name}}</label><br />
            </div>
        </div>
    </div>
</x-app-layout>
