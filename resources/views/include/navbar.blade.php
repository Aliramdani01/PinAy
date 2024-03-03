<nav class="fixed top-0 z-20 w-full bg-cyan-500 shadow-md">
    <div class="flex flex-wrap items-center justify-center container p-1 mx-auto">
        <div class="flex items-center">
            <img src="/assets/image_1-removebg-preview 1.png" alt="" class="w-8 h-7">
            <h2 class="text-3xl text-red-800 font-fontutama px-2">PinAy</h2>
            <a href="home" class=" p-1 text-red-800 text-2xl font-fontpopins">Home</a>
        </div>
        <form action="/home" method="get">
        <input type="text" class="w-[170px] px-3 py-1  rounded-full shadow-md bg-white border border-gray-300" placeholder="Search..." name="cari">
        </form>
        <div class="flex items-center">
        <a href="upload" class=" p-1 text-black text-xl font-fontpopins">Upload</a>
    </div>
        <div class="flex items-center overflow-hidden">
         <button type="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0" type="button">
              <span class="sr-only">Open user menu</span>
           <img class="w-8 h-8 rounded-full" src="{{ asset('/assets/'.Auth::user()->picture) }}" alt="user photo" >
           </button>
 </div>
    </div>
  

        <!-- Dropdown menu -->
        <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
              <li>
                <a href="profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
              </li>
              <li>
                <a href="album" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Album</a>
              </li>
              <li>
                <a href="ubahpassword" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Password</a>
              </li>
            </ul>
            <div class="py-2">
              <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log Out</a>
            </div>
        </div>
        
        </div>
</div>
</div>
</nav>
