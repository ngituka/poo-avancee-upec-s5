<form method="POST"
action="{{ route('clients.update', $client) }}">
@csrf
@method('PUT')
    <input
        type="text"
        name="name"
        value="{{ $client->name }}"
    >
    <input
        type="text"
        name="email"
        value="{{ $client->email }}"
    >
    <input
        type="text"
        name="city"
        value="{{ $client->city }}"
    >
</form>