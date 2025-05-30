<x-layout>
    <form action="/users/{{ $user->id }}" method="POST">
        @csrf
        @method('PATCH')

        <h2>Edit a User</h2>
      
        <label for="name">User Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ $user->name }}" 
          required
          class="border-1 rounded-[0.6vw] border-gray-500"
        >
      
        <label for="skill">User Skill (0-100):</label>
        <input 
          type="number" 
          id="skill" 
          name="skill" 
          value="{{ $user->skill }}" 
          required
          class="border-1 rounded-[0.6vw] border-gray-500"
        >
      
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio" 
          name="bio" 
          required
          class="border-1 rounded-[0.6vw] border-gray-500"
        >{{ $user->bio }}</textarea>
      
        <label for="company_id">Company:</label>
        <select id="company_id" class="border-1 rounded-[0.7vw] border-gray-500" name="company_id" required>
          @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{$company->id == old("company_id") ? "selected" : ""}}>
                {{ $company->title }}
            </option>
          @endforeach
        </select>
        
        <button type="submit" class="btn mt-4 hover:cursor-pointer">Update User</button>

        @if ($errors->any())
          <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
              <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
          </ul>
        @endif
    </form>
</x-layout>