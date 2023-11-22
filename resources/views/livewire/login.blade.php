<div class="bg-[#f7eff0] w-screen font-poppins flex justify-center items-center" style="height: 100dvh">
    <x-card class="w-96 flex flex-col gap-3">
        <div class="flex flex-row items-center gap-3 mb-3">
            <div class="text-lg font-medium">
                Logga in
            </div>
        </div>
        <input wire:model.live="email" placeholder="E-Mail" type="email" class="gitlab-repo group w-full h-14 rounded-xl bg-[#FFFBFE] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
        <input wire:model.live="password" placeholder="E-Mail" type="password" class="gitlab-repo group w-full h-14 rounded-xl bg-[#FFFBFE] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">

        <button wire:click="attemptLogin" class="mt-auto group w-full h-14 rounded-xl bg-[#FFFBFE] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
            Logga in
        </button>
    </x-card>
</div>
