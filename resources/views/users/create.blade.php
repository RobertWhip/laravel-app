<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body class="antialiased">
        <a href="/users">Users</a>
        <form action="/users" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input name="name", type="text" placeholder="Enter name...">
            <br/>

            <label for="email">Email:</label>
            <input name="email", type="text" placeholder="Enter email...">
            <br/>
            
            <label for="password">Password:</label>
            <input name="password", type="password" placeholder="Enter password...">
            <br/>

            <button>Create user</button>
        </form>
    </body>
</html>
