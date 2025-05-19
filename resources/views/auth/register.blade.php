<x-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf
      
        <h2>Register for an Account</h2>
        
        <label for="email">Name:</label>
        <input 
          type="text"
          name="name"
          required
          value="{{ old('name') }}"
          class="border-1 rounded-[0.7vw] border-gray-500" 
        >

        <label for="email">Email:</label>
        <input 
          type="email"
          name="email"
          required
          value="{{ old('email') }}"
          class="border-1 rounded-[0.7vw] border-gray-500" 
        >
      
        <label for="password">Password:</label>
        <input 
          type="password"
          name="password"
          required
          class="border-1 rounded-[0.7vw] border-gray-500" 
        >
        
        <label for="password_confirmation">Confirm Password:</label>
        <input 
          type="password"
          name="password_confirmation"
          required
          class="border-1 rounded-[0.7vw] border-gray-500" 
        >

        <button type="submit" class="btn mt-4 hover:cursor-pointer">Register</button>
      
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        
    </form>
</x-layout>