<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body class="antialiased">
        <a href="/users">Users</a>
        <form action="/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input name="name", type="text" placeholder="Enter name..." value="{{ $user->name }}">
            <br/>

            <label for="email">Email:</label>
            <input name="email", type="text" placeholder="Enter email..." value="{{ $user->email }}">
            <br/>

            <button>Update</button>
        </form>
    </body>
</html>
