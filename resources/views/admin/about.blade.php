<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-400">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            
            <!-- Title + Description -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-extrabold text-indigo-600">Who We Are</h1>
                <p class="mt-4 text-lg text-gray-600 dark:text-black max-w-3xl mx-auto leading-relaxed">
                    Welcome to <span class="font-semibold text-indigo-500">TechniConnect</span>, your trusted platform that connects 
                    clients with professional technicians. We focus on delivering high-quality services that make 
                    your life easier. Whether you need quick repairs, expert installation, or specialized maintenance, 
                    we’ve got the right professional for you.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Plumber -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
                    <div class="text-5xl mb-4">🚰</div>
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Plumber</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                        Reliable plumbing services, from fixing leaks to installing pipes. We ensure everything flows smoothly at your home or office.
                    </p>
                </div>

                <!-- Carpenter -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
                    <div class="text-5xl mb-4">🪚</div>
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Carpenter</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                        Skilled carpentry for furniture, repairs, and custom designs. We bring your woodwork ideas to life with precision.
                    </p>
                </div>

                <!-- Refrigeration Technician -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
                    <div class="text-5xl mb-4">❄️</div>
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Refrigeration Technician</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                        From air conditioners to refrigerators, our technicians keep your cooling systems running efficiently all year round.
                    </p>
                </div>

                <!-- Oven Manufacturer -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
                    <div class="text-5xl mb-4">🔥</div>
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Oven Manufacturer</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                        High-quality ovens and reliable repair services for your kitchen needs. We make cooking easier and more efficient.
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
