<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="w-96 min-h-screen bg-gray-100">
            <div class="w-96 flex justify-end">
                <a href="/users/create">
                    <x-button class="flex items-center text-sm pr-20">
                        Create
                    </x-button>
                </a>
            </div>
            <table class="mx-auto text-left text-gray-500 dark:text-gray-400">
                <thead class="text-gray-700 uppercase dark:bg-gray-900 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6 text-start">ID</th>
                        <th scope="col" class="py-3 px-6">Name</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                        <th scope="col" class="py-3 px-6"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="/users/{{ $user->id }}">{{ $user->id }}</a>
                            </td>
                            <td class="py-4 px-6">{{ $user->name }}</td>
                            <td class="py-4 px-6">{{ $user->email }}</td>
                            <td class="py-4 px-6">
                                <form action="/users/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-button class="text-red-700">Delete</x-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
