<x-layout>
    <h2>{{ $user->name }}</h2>
    
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $user->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $user->bio }}</p>
    </div>
</x-layout>
