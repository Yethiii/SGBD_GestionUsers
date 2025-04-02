

<h1>Détails de l'utilisateur</h1>
<p><strong>Nom :</strong> {{ $user->name }}</p>
<p><strong>Email :</strong> {{ $user->email }}</p>
<p><strong>Rôle :</strong> {{ $user->role }}</p>


@if (session('success'))
    <div class="bg-green-500 text-white p-4 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif
