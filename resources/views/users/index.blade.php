<x-layout>
    <h2>Currently available users</h2>

    <ul>
        @foreach ($users as $user)
            <li>
                <x-card link="/users/{{ $user['id'] }}" :highlight="$user['skill'] > 70">
                    <h3>{{ $user['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
