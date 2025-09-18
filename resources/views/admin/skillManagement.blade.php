@extends('layouts.admin.master')
@section('title', 'مدیریت مهارت ها')
@vite(['resources/css/admin/skills.css', 'resources/js/admin/skills.js'])

@section('content')
    @include('layouts.admin.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar (Mobile) -->
        <header class="w-full bg-gray-800 border-b border-gray-700 flex items-center justify-between px-4 py-3 md:hidden">
            <h1 class="text-base font-bold">مدیریت</h1>
            <button id="menuBtn" class="text-white focus:outline-none">
                <span class="material-icons">menu</span>
            </button>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-4 sm:p-6 overflow-y-auto space-y-6">
            <!-- Skills Management -->
            <section id="skills" class="space-y-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl sm:text-2xl font-bold">مدیریت مهارت‌ها</h1>
                    <!-- دکمه افزودن مهارت -->
                    <button id="addSkillBtn"
                        class="bg-green-600 px-3 sm:px-4 py-2 rounded hover:bg-green-700 transition text-sm sm:text-base">
                        افزودن مهارت +
                    </button>

                    <!-- مودال افزودن مهارت -->
                    <div id="addSkillModal"
                        class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
                        <div class="bg-gray-800 rounded-2xl shadow-lg w-11/12 sm:w-2/3 lg:w-1/3 p-6 relative">
                            <!-- دکمه بستن -->
                            <button id="closeModalBtn"
                                class="absolute top-3 left-3 text-gray-400 hover:text-white text-2xl">
                                &times;
                            </button>

                            <h2 class="text-lg font-bold mb-4">افزودن مهارت جدید</h2>

                            <form action="{{ route('dashboard.skill.create') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-sm mb-1">نام مهارت</label>
                                    <input type="text" name="skill_name"
                                        class="w-full px-3 py-2 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:border-blue-500" />
                                </div>

                                <div>
                                    <label class="block text-sm mb-1">توضیح کوتاه</label>
                                    <textarea name="description" rows="3"
                                        class="w-full px-3 py-2 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:border-blue-500"></textarea>
                                </div>

                                <div class="flex justify-end gap-3">
                                    <button type="button" id="cancelModalBtn"
                                        class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">
                                        انصراف
                                    </button>
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded">
                                        ذخیره
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- مودال ویرایش مهارت -->
                    <div id="editSkillModal"
                        class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
                        <div class="bg-gray-800 rounded-2xl shadow-lg w-11/12 sm:w-2/3 lg:w-1/3 p-6 relative">
                            <!-- دکمه بستن -->
                            <button id="closeEditModalBtn"
                                class="absolute top-3 left-3 text-gray-400 hover:text-white text-2xl">
                                &times;
                            </button>

                            <h2 class="text-lg font-bold mb-4">ویرایش مهارت</h2>

                            <form id="editSkillForm" method="POST" class="space-y-4">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="skill_id" id="editSkillId">
                                <div>
                                    <label class="block text-sm mb-1">نام مهارت</label>
                                    <input type="text" name="skill_name" id="editSkillName" value=""
                                        class="w-full px-3 py-2 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:border-blue-500" />
                                </div>

                                <div>
                                    <label class="block text-sm mb-1">توضیح کوتاه</label>
                                    <textarea name="description" id="editSkillDescription" rows="3"
                                        class="w-full px-3 py-2 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:border-blue-500"></textarea>
                                </div>

                                <div class="flex justify-end gap-3">
                                    <button type="button" id="cancelEditModalBtn"
                                        class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">
                                        انصراف
                                    </button>
                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">
                                        ذخیره تغییرات
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>

                <!-- Search & Sort -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                    <input type="text" placeholder="جستجو در مهارت‌ها..."
                        class="px-3 py-2 rounded bg-gray-800 border border-gray-700 text-sm focus:outline-none focus:border-blue-500 w-full md:w-1/3" />
                    <select
                        class="px-3 py-2 rounded bg-gray-800 border border-gray-700 text-sm focus:outline-none w-full md:w-auto">
                        <option>مرتب‌سازی بر اساس نام</option>
                        <option>مرتب‌سازی بر اساس جدیدترین</option>
                        <option>مرتب‌سازی بر اساس قدیمی‌ترین</option>
                    </select>
                </div>

                <!-- Desktop Table -->
                <div class="hidden md:block overflow-x-auto">
                    @include('errors.message')
                    <table class="min-w-full text-sm text-right">
                        <thead class="bg-gray-700 text-sm">
                            <tr>
                                <th class="px-4 py-2 text-right">نام مهارت</th>
                                <th class="px-4 py-2 text-right">توضیح کوتاه</th>
                                <th class="px-4 py-2 text-center">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)

                                <tr class="border-b border-gray-700">
                                    <td class="px-4 py-2">{{ $skill['title'] }}</td>
                                    <td class="px-4 py-2">{{ $skill['description'] }}</td>
                                    <td class="px-4 py-2 text-center space-x-2 space-x-reverse">
                                        <button class="bg-blue-600 px-2 py-1 rounded text-sm editSkillBtn" data-id="{{ $skill['id'] }}"
                                            data-name="{{ $skill['title'] }}" data-description="{{ $skill['description'] }}">
                                            ویرایش
                                        </button>


                                        <form action="{{ route('dashboard.skill.delete', $skill['id']) }}" method="post"
                                            style="display:inline;">
                                            @method('delete')
                                            @csrf

                                            <button class="bg-red-600 px-2 py-1 rounded text-sm">
                                                حذف
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- Mobile List -->
                <div class="space-y-3 md:hidden">
                    @include('errors.message')
                    @foreach ($skills as $skill)
                        <div class="bg-gray-800 rounded-lg p-3">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold">{{ $skill['title'] }}</h3>
                                <button class="bg-blue-600 px-2 py-1 rounded text-sm editSkillBtn" data-id="18"
                                    data-name="salam" data-description="ssaaaamla">
                                    ویرایش
                                </button>

                                <form action="{{ route('dashboard.skill.delete', $skill['id']) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <div class="space-x-2 space-x-reverse text-sm">

                                        <button class="bg-red-600 px-2 py-1 rounded">حذف</button>
                                    </div>
                                </form>
                            </div>
                            <p class="text-gray-300 text-sm mt-2">{{ $skill['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </div>

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


@endsection