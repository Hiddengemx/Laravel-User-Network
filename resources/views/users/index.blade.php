<x-layout>
    <h2>Currently available users</h2>

    <ul>
        @foreach ($users as $user)
            <li>
                <x-card link="{{ route('users.show', $user->id) }}" :highlight="$user['skill'] > 70">
                    <h3>{{ $user->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    <div class="text-lg [&_.pagination]:flex [&_.pagination]:flex-row [&_.pagination]:flex-wrap [&_.pagination]:gap-2.5">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</x-layout>