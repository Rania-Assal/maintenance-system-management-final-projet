<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('Dmanagement') }}
        </h2>
    </x-slot>

    <div class="flex flex-col overflow-y-auto h-full">
        <table class="min-w-full bg-white border undefined">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 h-6 sticky top-0 z-10 transition-all ease-in-out ">
                <tr>
                    <th class="px-2 2xl:px-6 py-3 bg-gray-200 w-8">name</th>
                    <th class="px-2 2xl:px-6 py-3 bg-gray-200">image</th>
                    <th class="px-2 2xl:px-6 py-3 bg-gray-200">address</th>
                    <th class="px-2 2xl:px-6 py-3 bg-gray-200 w-6">category</th>
                    <th class="px-2 2xl:px-6 py-3 bg-gray-200 w-6"></th>
                </tr>
            </thead>
            <tbody class="undefined select-none">
                @foreach ($users as $user)
                    <tr class="border-b">
                    <td class="px-6 py-1.5 whitespace-nowrap text-sm  text-center">{{ $user->name }}
                    </td>
                    <td class="px-6 py-1.5 whitespace-nowrap text-sm ">
                        <div class="flex items-center gap-2"><img
                                 src="{{ asset('storage/'. $user->images) }}"
                                alt="image" class="aspect-square rounded-lg object-cover h-16">
                        
                        </div>
                    </td>
                    
                    <td class="px-6 py-1.5 whitespace-nowrap text-sm  text-center">
                        <span
                            class="text-xs font-bold me-2 px-2.5 shadow py-2  bg-green-200 text-green-600 font-semibold rounded-lg shadow">{{ $user->address }}</span>
                    </td>
                    <td class="px-6 py-1.5 whitespace-nowrap text-sm   flex justify-center items-center h-full gap-2">
                        <div class="relative inline-block text-left select-none ">
                            <div class="rounded-full py-4 hover:bg-gray-100 focus:outline- cursor-pointer ">{{ $user->category?->name }}</div>
                        </div>
                    </td>

                </tr>
                <td class="px-6 py-1.5 whitespace-nowrap text-sm text-center">
    <!-- Delete Button -->
   
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
