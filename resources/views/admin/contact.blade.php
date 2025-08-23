<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
           <div
    class="w-fit pb-1 px-2 mx-4 rounded-md text-2xl font-semibold border-b-2 border-blue-600 dark:border-b-2 dark:border-yellow-600">
    Contact Us</div>
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
                
                <!-- Left: Contact Info -->
                <div class="p-10 flex flex-col justify-center bg-gradient-to-br from-indigo-600 to-purple-600 text-white">
                    <h3 class="text-3xl font-bold mb-4">Get in Touch</h3>
                    <p class="mb-6 text-lg text-gray-100">
                        Have any questions or need support? Reach out to us and our team will get back to you quickly.
                    </p>

                    <div class="space-y-4">
                        <p class="flex items-center gap-3">
                            📍 <span>Ain Sbaa, Casablanca, Morocco</span>
                        </p>
                        <p class="flex items-center gap-3">
                            📧 <span>assalrania41@gmail.com</span>
                        </p>
                        <p class="flex items-center gap-3">
                            📞 <span>+212 7 22 63 46 77</span>
                        </p>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="p-10">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" name="name" id="name" required
                                class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" required
                                class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                            <textarea name="message" id="message" rows="4" required
                                class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg shadow hover:bg-indigo-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
