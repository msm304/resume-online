@extends('layouts.admin.master')
@section('title', 'مدیریت مهارت ها')

@section('content')

    @include('layouts.admin.sidebar')

    <body class="bg-gray-900 text-white min-h-screen">
        <!-- Main content -->

        <!-- Topbar موبایل -->
        <header class="bg-gray-800 p-4 flex items-center justify-between md:hidden">
            <h1 class="text-lg font-bold">مدیریت کاربران</h1>
            <button onclick="toggleSidebar()" class="text-white text-2xl">☰</button>
        </header>

        <!-- Content -->
        <main class="flex-1 p-4 md:p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="hidden md:block text-2xl md:text-3xl font-bold">
                    مدیریت کاربران
                </h1>
                <button class="px-4 py-2 bg-blue-600 rounded-lg hover:bg-blue-500">
                    ➕ افزودن کاربر
                </button>
            </div>

            <!-- Search -->
            <div class="mb-4">
                <input type="text" placeholder="جستجو..."
                    class="w-full md:w-1/3 p-2 rounded bg-gray-700 focus:outline-none" />
            </div>

            <!-- Desktop Table -->
            <div class="hidden md:block overflow-x-auto">
                <table class="w-full border-collapse border border-gray-700">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="p-3 text-right">نام</th>
                            <th class="p-3 text-right">ایمیل</th>
                            <th class="p-3 text-right">نقش</th>
                            <th class="p-3 text-right">وضعیت</th>
                            <th class="p-3 text-center">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-700">
                            <td class="p-3">علی رضایی</td>
                            <td class="p-3">ali@example.com</td>
                            <td class="p-3">ادمین</td>
                            <td class="p-3 text-green-400">فعال</td>
                            <td class="p-3 text-center space-x-2 space-x-reverse">
                                <button class="px-3 py-1 bg-blue-500 rounded-lg hover:bg-yellow-400">
                                    ویرایش
                                </button>
                                <button class="px-3 py-1 bg-red-600 rounded-lg hover:bg-red-500">
                                    حذف
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="p-3">سارا محمدی</td>
                            <td class="p-3">sara@example.com</td>
                            <td class="p-3">کاربر</td>
                            <td class="p-3 text-red-400">غیرفعال</td>
                            <td class="p-3 text-center space-x-2 space-x-reverse">
                                <button class="px-3 py-1 bg-blue-500 rounded-lg hover:bg-yellow-400">
                                    ویرایش
                                </button>
                                <button class="px-3 py-1 bg-red-600 rounded-lg hover:bg-red-500">
                                    حذف
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            <div class="grid grid-cols-1 gap-4 md:hidden">
                <div class="bg-gray-800 p-4 rounded-lg">
                    <p><span class="font-semibold">نام:</span> علی رضایی</p>
                    <p><span class="font-semibold">ایمیل:</span> ali@example.com</p>
                    <p><span class="font-semibold">نقش:</span> ادمین</p>
                    <p>
                        <span class="font-semibold">وضعیت:</span>
                        <span class="text-green-400">فعال</span>
                    </p>
                    <div class="mt-3 flex gap-2">
                        <button class="flex-1 px-3 py-1 bg-blue-500 rounded-lg hover:bg-yellow-400">
                            ویرایش
                        </button>
                        <button class="flex-1 px-3 py-1 bg-red-600 rounded-lg hover:bg-red-500">
                            حذف
                        </button>
                    </div>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg">
                    <p><span class="font-semibold">نام:</span> سارا محمدی</p>
                    <p><span class="font-semibold">ایمیل:</span> sara@example.com</p>
                    <p><span class="font-semibold">نقش:</span> کاربر</p>
                    <p>
                        <span class="font-semibold">وضعیت:</span>
                        <span class="text-red-400">غیرفعال</span>
                    </p>
                    <div class="mt-3 flex gap-2">
                        <button class="flex-1 px-3 py-1 bg-blue-600 rounded-lg hover:bg-yellow-400">
                            ویرایش
                        </button>
                        <button class="flex-1 px-3 py-1 bg-red-600 rounded-lg hover:bg-red-500">
                            حذف
                        </button>
                    </div>
                </div>
            </div>
        </main>



@endsection