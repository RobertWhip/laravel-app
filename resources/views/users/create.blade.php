<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="antialiased">
        <div class="w-96 min-h-screen bg-gray-100">
            <div>
                <a href="/users">
                    <x-button class="flex items-center text-sm pr-20">
                        Users
                    </x-button>
                </a>
            </div>
            <form action="/users" method="POST">
                @csrf
                <table class="mx-auto text-left text-gray-500 dark:text-gray-400">
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th class="py-4 px-6">Name</th>
                        <td class="py-4 px-6">
                            <input name="name" type="text" placeholder="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th class="py-4 px-6">Email</th>
                        <td class="py-4 px-6">
                            <input name="email" type="text" placeholder="email@gamil.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th class="py-4 px-6">Password</th>
                        <td class="py-4 px-6">
                            <input name="password" type="password" placeholder="****" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">
                            <x-button>Create</x-button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
