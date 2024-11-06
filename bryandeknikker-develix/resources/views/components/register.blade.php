<div class="register-section flex justify-center container mx-auto py-5 px-4">
    <div class="w-full max-w-md p-8 rounded-lg border">
        <h2 class="text-center text-2xl font-bold mb-6">Registreren</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-semibold mb-2">Naam</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            </div>

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

            <div class="mb-6">
                <label for="password_confirmation" class="block font-semibold mb-2">Bevestig Wachtwoord</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            </div>

            <button type="submit" class="register-button m-auto flex">Registreren</button>
        </form>
    </div>
</div>
