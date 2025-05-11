<x-layout>
    <h2>{{ $user->name }}</h2>
    
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $user->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $user->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Company Information</h3>
        <p><strong>Company name:</strong> {{ $user->company->title }}</p>
        <p><strong>Location:</strong> {{ $user->company->location }}</p>
        <p><strong>About the company:</strong></p>
        <p>{{ $user->company->description }}</p>
      </div>
</x-layout>
