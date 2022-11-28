<div class="sticky top-0">
    <div class="w-full h-1 bg-amber-500"></div>
    <nav class="py-3 shadow bg-white">
        <div class="container mx-auto flex justify-between items-center gap-3">
            <a class="flex" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                </svg>
                <p class="pl-2">Ask World</p> 
            </a>

            
            <form role="search" class="grow max-w-6xl">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input autocomplete="off" onfocus="toggleSearchModal()"  onkeyup="showSuggesstion(this.value)" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search Tags, Title..." required>
                </div>
            </form>

            <div class="flex items-center">
                <div class="text-black"><?= auth()->name ?></div>
                <img class="w-10 h-10 rounded-full" src="\assets\img\avatar.svg" alt="">
            </div>
        </div>
    </nav>

</div>