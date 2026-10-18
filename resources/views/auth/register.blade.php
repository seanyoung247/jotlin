
<x-layout>

    <form method="POST" action="/register" id="register-form" class="input-form">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="user-name-input" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="user-email-input" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="user-password-input" required>

        <input type="submit" value="Submit" class="button">

    </form>

</x-layout>
