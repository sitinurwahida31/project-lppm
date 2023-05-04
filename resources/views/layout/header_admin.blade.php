{{-- <div class="bg-amber-400 pl-4 pr-4 w-full h-10 flex-row flex relative">
    <img src="/img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-6 cursor-pointer mr-auto" id="btnToggle2">

    <div class="items-center gap-x-4 justify-end hidden sm:flex ">
        <img class="w-6" src="/img/icons/default_profile.svg" alt="Profile Image">
        <p class="text-dark-green font-medium text-xs text-white">
            {{ auth()->user()->username }}
        </p>
    </div>
</div> --}}

<div class="bg-green-900 pl-5 pr-4 w-full h-14 flex-row flex relative">
    <img src="/img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-6 cursor-pointer mr-auto" id="btnToggle2">

    <div class="items-center gap-x-2 justify-end hidden sm:flex pr-4">
        <img class="w-8" src="/img/icons/default_profile.svg" alt="Profile Image">
        <p class="text-dark-green font-medium text-base text-white">
            {{ auth()->user()->username }}
        </p>
    </div>
</div>

