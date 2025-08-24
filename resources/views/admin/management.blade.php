<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            <div
                class="w-fit pb-1 px-2 mx-4 rounded-md text-2xl font-semibold border-b-2 border-blue-600 dark:border-b-2 dark:border-yellow-600">
                Management</div>
        </h2>
    </x-slot>

  <div class="flex flex-col overflow-x-auto h-full p-6 bg-gray-50 rounded-lg shadow">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
        <thead class="text-xs text-gray-700 uppercase bg-blue-100">
            <tr>
                <th class="px-4 py-3 text-left">Name</th>
                <th class="px-4 py-3 text-left">Image</th>
                <th class="px-4 py-3 text-left">Address</th>
                <th class="px-4 py-3 text-left">Category</th>
                <th class="px-4 py-3"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr class="hover:bg-blue-50 transition">
                    <td class="px-4 py-3 text-sm text-gray-900 font-medium text-center">
                        {{ $user->name }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('storage/' . $user->images) }}"
                                 alt="image"
                                 class="aspect-square rounded-full object-cover h-12 w-12 border border-gray-300 shadow-sm">
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm text-center">
                        <span class="inline-block text-xs font-semibold px-3 py-1 bg-green-100 text-green-700 rounded-full shadow">
                            {{ $user->address }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm text-center">
                        <span class="inline-block rounded-full px-3 py-1 bg-yellow-100 text-yellow-700 font-semibold shadow">
                            {{ $user->category?->name }}
                        </span>
                    </td>
                   <td class="px-6 py-1.5 whitespace-nowrap text-sm text-center">
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
            Delete
        </button>
    </form>
</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
