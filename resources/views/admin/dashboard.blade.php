@extends('layouts.admin.master')

@section('title', 'داشبورد')
    @vite('resources/css/admin/dashboar.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content')

    @include('layouts.admin.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar (Mobile) -->
        <header class="w-full bg-gray-800 border-b border-gray-700 flex items-center justify-between px-4 py-3 md:hidden">
            <h1 class="text-base font-bold">داشبورد</h1>
            <button id="menuBtn" class="text-white focus:outline-none">
                <span class="material-icons">menu</span>
            </button>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-4 sm:p-6 overflow-y-auto space-y-6">
            <h1 class="text-xl sm:text-2xl font-bold mb-4">خلاصه داشبورد</h1>

            <!-- Stats Boxes -->
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-center">
                <div class="bg-gray-800 rounded-xl p-4 shadow hover:bg-gray-700 transition">
                    <div class="text-2xl font-bold">120</div>
                    <div class="text-sm text-gray-400 mt-1">کاربران</div>
                </div>
                <div class="bg-gray-800 rounded-xl p-4 shadow hover:bg-gray-700 transition">
                    <div class="text-2xl font-bold">15</div>
                    <div class="text-sm text-gray-400 mt-1">ادمین‌ها</div>
                </div>
                <div class="bg-gray-800 rounded-xl p-4 shadow hover:bg-gray-700 transition">
                    <div class="text-2xl font-bold">30</div>
                    <div class="text-sm text-gray-400 mt-1">پروژه‌ها</div>
                </div>
                <div class="bg-gray-800 rounded-xl p-4 shadow hover:bg-gray-700 transition">
                    <div class="text-2xl font-bold">25</div>
                    <div class="text-sm text-gray-400 mt-1">مهارت‌ها</div>
                </div>
            </div>

            <!-- Summary Box -->
            <div class="bg-gray-800 rounded-xl p-4">
                <h2 class="text-lg font-semibold mb-3">توضیح کلی</h2>
                <p class="text-sm text-gray-300 leading-relaxed">
                    این داشبورد نمای کلی از عملکرد سیستم را نمایش می‌دهد. شما می‌توانید
                    روند رشد کاربران، پروژه‌ها و فعالیت‌های کلیدی را مشاهده کنید. از
                    طریق منوی سمت راست نیز به مدیریت بخش‌های مختلف دسترسی دارید.
                </p>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-gray-800 rounded-xl p-4">
                    <h2 class="text-lg font-semibold mb-3">آمار کاربران</h2>
                    <canvas id="usersChart" class="w-full h-48"></canvas>
                </div>
                <div class="bg-gray-800 rounded-xl p-4">
                    <h2 class="text-lg font-semibold mb-3">فعالیت پروژه‌ها</h2>
                    <canvas id="projectsChart" class="w-full h-48"></canvas>
                </div>
            </div>
        </main>
    </div>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@endsection