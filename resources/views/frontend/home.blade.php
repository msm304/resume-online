@extends('layouts.frontend.home.master')

@section('title', 'رزومه آنلاین')

<body class="bg-gray-900 text-white font-vazir overflow-hidden">

    @section('content')
        {{-- محتوای صفحه --}}
        <main class="min-h-screen flex flex-col items-center justify-center px-4">
            <!-- عکس پروفایل -->
            <div>
                <img src="https://i.pravatar.cc/200" alt="Profile"
                    class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-blue-600 object-cover mx-auto" />
            </div>

            <!-- نام -->
            <h1 class="text-xl md:text-2xl font-bold text-center mx-auto mt-4">
                امیرحسین سلطانی
            </h1>

            <!-- معرفی کوتاه -->
            <p class="text-gray-300 text-sm md:text-base leading-snug text-right max-w-xs md:max-w-md mt-2" dir="rtl">
                برنامه‌نویس و طراح وب با تمرکز بر توسعه پروژه‌های وب و رزومه آنلاین حرفه‌ای.
                عاشق یادگیری و خلق تجربه‌های دیجیتال مینیمال و کاربردی.
            </p>

            <!-- بخش آیکن شبکه‌های اجتماعی -->
            <div class="flex justify-center items-center space-x-6 rtl:space-x-reverse mt-6">
                {{-- GitHub --}}
                <a href="https://github.com/username" target="_blank" class="hover:opacity-80 transition">
                    <svg class="w-8 h-8 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.37 0 0 5.37..."></path>
                    </svg>
                </a>
                {{-- LinkedIn --}}
                <a href="https://linkedin.com/in/username" target="_blank" class="hover:opacity-80 transition">
                    <svg class="w-8 h-8 fill-blue-500" viewBox="0 0 24 24">
                        <path d="M22.23 0H1.77..." />
                    </svg>
                </a>
                {{-- Telegram --}}
                <a href="https://t.me/username" target="_blank" class="hover:opacity-80 transition">
                    <svg class="w-8 h-8 fill-blue-400" viewBox="0 0 24 24">
                        <path d="M12 0C5.373 0..." />
                    </svg>
                </a>
            </div>

            <!-- دکمه‌ها -->
            <div class="flex flex-col sm:flex-row justify-center gap-3 mt-6">
                <a href="#contact"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-md font-medium text-sm md:text-base transition">
                    تماس با من
                </a>
                <a href="files/resume.pdf" download
                    class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-md font-medium text-sm md:text-base transition">
                    دانلود رزومه
                </a>
            </div>

            <!-- دسترسی به بخش‌های رزومه -->
            <div class="flex flex-wrap justify-center gap-2 mt-4">
                <a href="#skills"
                    class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-md text-xs md:text-sm transition">مهارت‌ها</a>
                <a href="#projects"
                    class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-md text-xs md:text-sm transition">پروژه‌ها</a>
                <a href="#resume"
                    class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-md text-xs md:text-sm transition">رزومه</a>
                <a href="#contact"
                    class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-md text-xs md:text-sm transition">تماس</a>
            </div>
        </main>
    @endsection

</body>