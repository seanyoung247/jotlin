
<x-layout>

    <div id="register-form">
        <form method="POST" action="/login" class="input-form">
            <h2>Login</h2>
            
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="user-email-input" required>
            <x-forms.errors name="email"></x-forms.errors>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="user-password-input" required>
            <x-forms.errors name="password"></x-forms.errors>
            

            <input type="submit" value="Login" class="btn">

        </form>
    <div>

</x-layout>
