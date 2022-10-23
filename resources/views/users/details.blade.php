<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="w-96 min-h-screen bg-gray-100">
            <div>
            <a href="/users">
                    <x-button class="flex items-center text-sm pr-20">
                        Users
                    </x-button>
                </a>
            </div>
            <table class="mx-auto text-left text-gray-500 dark:text-gray-400">
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="py-4 px-6">ID</th>
                    <td class="py-4 px-6">{{ $user->id }}</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="py-4 px-6">Name</th>
                    <td class="py-4 px-6">{{ $user->name }}</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="py-4 px-6">Email</th>
                    <td class="py-4 px-6">{{ $user->email }}</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">
                        <a href="/users/{{$user->id}}/edit">
                            <x-button class="flex items-center text-sm pr-20">
                                Edit
                            </x-button>
                        </a>
                    </td>
                    <td class="py-4 px-6">
                        <form action="/users/{{ $user->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="text-red-700">Delete</x-button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
