<x-guest-layout>
    <div class="max-w-lg mx-auto bg-gray-400 shadow-lg rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-bold text-center text-purple-600 mb-6">Create Account</h2>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-gray-700" />
                <x-text-input id="name" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                <x-text-input id="email" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                <x-text-input id="password" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Address -->
            <div>
                <x-input-label for="address" :value="__('Address')" class="text-gray-700" />
                <x-text-input id="address" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500" type="text" name="address" :value="old('address')" required autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- User Type -->
            <div>
                <x-input-label for="user_type" :value="__('Register Category')" class="text-gray-700" />
                <select name="user_type" id="role" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                    <option value="{{ $roles[1]->id }}">{{ $roles[1]->name }}</option>
                    <option value="{{ $roles[2]->id }}" selected>{{ $roles[2]->name }}</option>
                </select>
            </div>

            <!-- Category -->
            <div id="category-container">
                <x-input-label for="category_id" :value="__('Category')" class="text-gray-700" />
                <select id="category_id" name="category_id" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                    <option value="">-- Select Category --</option>
                    @foreach ($category as $categori)
                        <option value="{{ $categori->id }}">{{ $categori->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('category_id')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Profile Image -->
            <div>
                <x-input-label for="images" :value="__('Profile Image')" class="text-gray-700" />
                <input id="images" type="file" name="images" accept="image/*" class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
                <x-input-error :messages="$errors->get('images')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-800 underline text-sm">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="bg-purple-600 hover:bg-pink-500 focus:ring-purple-500 px-6 py-2 rounded-lg">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
