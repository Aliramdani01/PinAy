 @extends('layouts.master')

 @section('content')
 <section class="mt-10">
    <h1 class="text-[40px] text-center text-red-800 font-fontutama">PinAy</h1>
</section>
    @if ($message = Session::get('error'))
        <div class="flex justify-center mt-4">
            <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal text-red-500">
                {{ $message }}
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <form action="/update-password" method="POST">
        @csrf
<section class="mt-[45px]">
  <div class="w-[400px] bg-white rounded-3xl shadow-2xl mx-auto px-9 py-9">
       <div class="flex flex-col">
            <!-- header login -->
            <span class="mt-2 text-3xl text-red-800 font-fontutama mx-auto">Change Your Password</span>
            <!-- end -->
            <!-- input login -->
            <span class="text-sm mt-5 mb-1">Password lama</span>
        <input type="password" name="password_lama" id="password"
             class="bg-gray-50 border border-black text-gray-900 text-sm rounded-xl block w-full p-2.5"/>
             @error('password_lama')
                 <small class="italic text-red-800">{{ $message }}</small>
           @enderror
        <span class="text-sm mt-4 mb-1">Password baru</span>
        <input type="password" name="password_baru" id="password"
             class="bg-gray-50 border border-black text-gray-900 text-sm rounded-xl block w-full p-2.5"/>
             @error('password_baru')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
        <span class="text-sm mt-4 mb-1">Konfirmasi password</span>
        <input type="password" name="confirm_password" id="password"
             class="bg-gray-50 border border-black text-gray-900 text-sm rounded-xl block w-full p-2.5"/>
             @error('confirm_password')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
        <!-- button -->
        <button type="submit" class="py-2 mt-4 text-white rounded-md bg-red-800">Perbaharui</button>
        <!-- end -->
       </div>
  </div>
</section>
    </form>

 @endsection