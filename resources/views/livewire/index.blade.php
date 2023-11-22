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
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 w-screen min-[2048px]:w-[2048px] 2xl:px-64 mx-auto">
        <x-card class="col-span-1 sm:col-span-2 text-[22px] font-medium justify-center">
            <img src="/assets/logo.webp" class="aspect-square w-64 h-64 rounded-2xl float-left mr-10">
            <div class="leading-9">
                I'm <span class="font-agbalumo font-semibold text-3xl bg-gradient-to-r from-red via-blue to-green text-transparent bg-clip-text">Willem</span>, a Swedish computer science student who has a philosophy of learning atleast one new technology or tool for each project I make so that I always have something new to learn. If you're interested in my finished projects then you can always looks in <x-a href="/projects">/projects</x-a>.
            </div>
        </x-card>
        <x-card class="flex flex-col gap-3">
            <div class="flex flex-row items-center gap-3 mb-3">
                <x-icons.gitlab class="w-14 h-14" />
                <div class="text-lg font-medium">
                    GitLab
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <a href="https://gitlab.com/keiidev/Medialog" class="gitlab-repo group w-full h-14 rounded-xl bg-[#FFFBFE] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
                    <img src="/assets/medialog-logo.png" class="h-full rounded-lg" >
                    <div>
                        Medialog
                    </div>
                    <x-icons.arrow-right class="w-4 h-4 -rotate-45 absolute right-1 group-hover:right-4 group-hover:opacity-100 opacity-0 transition-all duration-300" />
                </a>
                <a href="https://gitlab.com/keiidev/Fjord" class="gitlab-repo group w-full h-14 rounded-xl bg-[#FFF5F5] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
                    <img src="/assets/fjord-logo.png" class="h-full rounded-lg" >
                    <div>
                        Fjord
                    </div>
                    <x-icons.arrow-right class="w-4 h-4 -rotate-45 absolute right-1 group-hover:right-4 group-hover:opacity-100 opacity-0 transition-all duration-300" />
                </a>
            </div>

            <div class="mt-auto">
                <x-a href="https://gitlab.com/keiidev" class="group w-full text-blue rounded-xl flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
                    Visit Profile
                </x-a>
            </div>
        </x-card>
        <x-card class="row-span-1 sm:row-span-2 overflow-y-hidden">
            <div class="flex flex-row items-center gap-3 mb-3">
                <x-icons.book class="w-12 h-12" />
                <div class="text-lg font-medium">
                    Blog
                </div>
            </div>
        </x-card>

        <x-card>

        </x-card>
        <x-card href="https://youtube.com/@keiidev" class="!bg-red link-expand-button-container group relative cursor-pointer transition-all duration-300 flex items-center justify-center hover:ring-[16px] hover:ring-white active:scale-75 hover:scale-95">
            <button data-tag="@keiidev" class="w-10 h-10 group-hover:w-32 link-expand-button rounded-full transition-all duration-300 bg-white flex items-center justify-center absolute bottom-4 left-4">
                <x-icons.arrow-right class="w-4 h-4 -rotate-45" />
            </button>
            <x-icons.youtube class="fill-white w-28 group-hover:rotate-6 transition-all duration-300 group-hover:scale-125" />
        </x-card>
        <x-card href="/projects" class="row-span-1 sm:row-span-2 link-expand-button-container group !p-0 projects-container cursor-pointer hover:bg-blue transition-all duration-300 hover:ring-[16px] hover:ring-white active:scale-75 hover:scale-[.975]">
            <img src="/assets/medialog.png" class="projects-image projects-image-1">
            <img src="/assets/togethernet.png" class="projects-image projects-image-2">
            <img src="/assets/jetgame.png" class="projects-image projects-image-3">
            <img src="/assets/lostatsea.png" class="projects-image projects-image-4">
            <button data-tag="/projects" class="w-10 h-10 group-hover:w-32 link-expand-button rounded-full transition-all duration-300 bg-white flex items-center justify-center absolute bottom-4 left-4">
                <x-icons.arrow-right class="w-4 h-4 -rotate-45" />
            </button>
        </x-card>

        <x-card class="xl:col-span-2">

        </x-card>
        <x-card href="https://modrinth.com/user/keii" class="!bg-green link-expand-button-container group relative cursor-pointer transition-all duration-300 flex items-center justify-center hover:ring-[16px] hover:ring-white active:scale-75 hover:scale-95">
            <button data-tag="@keii" class="w-10 h-10 group-hover:w-28 link-expand-button rounded-full transition-all duration-300 bg-white flex items-center justify-center absolute bottom-4 left-4">
                <x-icons.arrow-right class="w-4 h-4 -rotate-45" />
            </button>
            <x-icons.modrinth class="fill-white w-28 group-hover:rotate-6 transition-all duration-300 group-hover:scale-125" />
        </x-card>
    </div>
</div>
