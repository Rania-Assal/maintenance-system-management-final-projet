<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('Technicien Platform') }}
        </h2>
    </x-slot>

   <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            
            <div class="p-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                
               
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 dark:text-white leading-tight">
                        Welcome to <span class="text-indigo-600">TechniConnect</span>
                    </h1>
                    
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                        TechniConnect is your trusted platform that connects you with the best 
                        <span class="font-semibold">technicians</span> around you.  
                        From <span class="text-indigo-500 font-semibold">air conditioning experts</span> to 
                        <span class="text-indigo-500 font-semibold">oven repair specialists</span>, we’ve got you covered.  
                        Find reliable, skilled professionals to handle your technical needs quickly and efficiently.
                    </p>

                    <div class="mt-8 flex gap-4">
                        <a href="{{ route('register') }}" 
                           class="px-6 py-3 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
                            Get Started
                        </a>
                        <a href="#services" 
                           class="px-6 py-3 bg-gray-200 text-gray-800 rounded-xl shadow hover:bg-gray-300 transition">
                            Explore Services
                        </a>
                    </div>
                </div>

              
                <div class="flex justify-center">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.G9yB0l213goOZJl5QQ9v_AHaHa?rs=1&pid=ImgDetMain&o=7&rm=3"
                         alt="Technician at work" 
                         class="rounded-2xl shadow-lg max-h-[400px] object-cover">
                </div>
            </div>

        </div>
    </div>
</div>

</x-app-layout>
