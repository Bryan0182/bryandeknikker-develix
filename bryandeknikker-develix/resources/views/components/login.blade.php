<div class="login-section flex justify-center container mx-auto py-5 px-4">
    <div class="w-full max-w-md p-8 rounded-lg border">
        <h2 class="text-center text-2xl font-bold mb-6">Inloggen</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block font-semibold mb-2">E-mail</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="password" class="block font-semibold mb-2">Wachtwoord</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            </div>

            <button type="submit" class="login-button m-auto flex">Inloggen</button>
        </form>
    </div>
</div>

