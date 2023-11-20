<div class="bg-[#f7eff0] w-screen pb-12 font-poppins">
    <div class="grid grid-cols-[1fr,1fr,1fr] px-8 xl:px-64 py-16 items-center">
        <h1 class="w-full font-agbalumo text-3xl">
            Keii
        </h1>
        <nav class="flex justify-center">
            <ul class="w-max h-14 flex flex-row rounded-full bg-[#ebe5e8] py-[6px] px-[8px] gap-2">
                <li class="rounded-full bg-[#fefdfe] px-8 flex items-center justify-center font-semibold text-lg cursor-pointer">
                    About
                </li>
                <li class="rounded-full hover:bg-[#fefdfe] px-8 flex items-center justify-center font-semibold text-lg cursor-pointer">
                    Blog
                </li>
                <li class="rounded-full hover:bg-[#fefdfe] px-8 flex items-center justify-center font-semibold text-lg cursor-pointer">
                    Projects
                </li>
            </ul>
        </nav>
        <div class="w-full flex items-center justify-end font-semibold text-lg cursor-pointer">
            Contact
        </div>
    </div>
    <div class="grid grid-cols-2 xl:grid-cols-4 gap-6 w-screen min-[2048px]:w-[2048px] 2xl:p-64 mx-auto">
        <x-card class="col-span-2 text-[22px] flex flex-col gap-10 font-medium justify-center">
            <img src="/assets/logo.webp" class="aspect-square w-64 rounded-2xl">
            <div class="leading-9">
                I'm <span class="font-agbalumo font-semibold text-3xl bg-gradient-to-r from-red via-blue to-green text-transparent bg-clip-text">Willem</span>, a Swedish computer science student who has a philosophy of learning atleast one new technology or tool for each project I make so that I always have something new to learn. If you're interested in my finished projects then you can always looks in <x-a href="/projects">/projects</x-a>.
            </div>
        </x-card>
        <x-card>

        </x-card>
        <x-card class="row-span-2">
            @php
                $response = Http::withHeaders([
                    'PRIVATE-TOKEN' => env('GITLAB_PAT')
                ])->get('https://gitlab.com/api/v4/users/4008654/events?action=pushed');

                if ($response->successful()) {
                    $events = $response->json();
                    // Process or return the events data
                    //(response()->json($events));
                } else {
                    // Handle the error
                    //dd(response()->json(['error' => 'Unable to fetch events'], 500));
                }
            @endphp
        </x-card>

        <x-card>

        </x-card>
        <x-card href="https://youtube.com/@keiidev" class="!bg-red group relative cursor-pointer transition-all duration-300 flex items-center justify-center hover:ring-[16px] hover:ring-white active:scale-75 hover:scale-95">
            <button class="w-10 h-10 rounded-full transition-all duration-300 bg-white flex items-center justify-center absolute bottom-4 left-4">
                <x-icons.arrow-right class="w-4 h-4 -rotate-45" />
            </button>
            <x-icons.youtube class="fill-white w-28 group-hover:rotate-6 transition-all duration-300 group-hover:scale-125" />
        </x-card>
        <x-card href="/projects" class="row-span-2 !p-0 projects-container cursor-pointer hover:bg-blue transition-all duration-300 hover:ring-[16px] hover:ring-white active:scale-75 hover:scale-[.975]">
            <img src="/assets/medialog.png" class="projects-image projects-image-1">
            <img src="/assets/togethernet.png" class="projects-image projects-image-2">
            <img src="/assets/jetgame.png" class="projects-image projects-image-3">
            <img src="/assets/lostatsea.png" class="projects-image projects-image-4">
            <button class="w-10 h-10 rounded-full transition-all duration-300 bg-white flex items-center justify-center absolute bottom-4 left-4">
                <x-icons.arrow-right class="w-4 h-4 -rotate-45" />
            </button>
        </x-card>

        <x-card class="col-span-2">

        </x-card>
        <x-card>

        </x-card>
    </div>
</div>
