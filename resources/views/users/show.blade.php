<x-layout>
    <h2>{{ $user->name }}'s Profile</h2>
  
    <div class="bg-gray-200 p-4 rounded">
      <p><strong>Skill level:</strong> {{ $user->skill }}</p>
      <p><strong>About me:</strong></p>
      <p>{{ $user->bio }}</p>
    </div>
  
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
      <h3>Company Information</h3>
      <p><strong>Company name:</strong> {{ $user->company->title }}</p>
      <p><strong>Location:</strong> {{ $user->company->location }}</p>
      <p><strong>About the Company:</strong></p>
      <p>{{ $user->company->description }}</p>
    </div>
    <div class="flex gap-x-5">
      <button class="btn my-4"><a href="/users/{{ $user->id }}/edit">Edit User</a></button>
      <form action="{{ route('users.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
    
        <button type="submit" class="btn my-4">Delete user</button>
      </form>
    </div>
</x-layout>