@extends('layouts.admin.master')

@section('title', 'مدیریت پروژه ها')

@section('content')

    <body class="bg-gray-900 text-white min-h-screen flex flex-col md:flex-row">

        @include('layouts.admin.sidebar')

        <!-- Main content -->
        <main class="flex-1 p-4 md:p-6">
            <h1 class="text-2xl md:text-3xl font-bold mb-6">مدیریت پروژه‌ها</h1>

            <!-- جستجو و مرتب‌سازی -->
            <div class="flex flex-col sm:flex-row justify-between gap-2 mb-4">
                <input type="text" placeholder="جستجوی پروژه..."
                    class="p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 flex-1" />
                <select class="p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>مرتب‌سازی بر اساس تاریخ</option>
                    <option>مرتب‌سازی بر اساس نام</option>
                </select>
                <button class="px-4 py-2 bg-blue-700 rounded hover:bg-blue-600 transition">
                    افزودن پروژه جدید
                </button>
            </div>

            <!-- پروژه‌ها به صورت کارت واکنش‌گرا -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- کارت نمونه -->
                <div class="bg-gray-800 rounded-lg overflow-hidden flex flex-col">
                    <img src="https://picsum.photos/400/200?random=1" alt="پروژه ۱"
                        class="w-full object-cover transition-opacity duration-300 hover:opacity-70" />
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <h2 class="text-lg font-semibold mb-2">وبسایت شرکتی</h2>
                        <p class="text-sm text-gray-300 mb-4">
                            طراحی وبسایت شرکتی با رابط کاربری مدرن و واکنش‌گرا
                        </p>
                        <div class="flex gap-2">
                            <a href="#"
                                class="px-3 py-1 bg-blue-700 rounded hover:bg-blue-600 transition text-xs md:text-sm text-center flex-1">ویرایش</a>
                            <a href="#"
                                class="px-3 py-1 bg-red-600 rounded hover:bg-red-500 transition text-xs md:text-sm text-center flex-1">حذف</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden flex flex-col">
                    <img src="https://picsum.photos/400/200?random=2" alt="پروژه ۲"
                        class="w-full object-cover transition-opacity duration-300 hover:opacity-70" />
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <h2 class="text-lg font-semibold mb-2">اپلیکیشن موبایل</h2>
                        <p class="text-sm text-gray-300 mb-4">
                            توسعه اپلیکیشن موبایل برای سیستم عامل iOS و Android
                        </p>
                        <div class="flex gap-2">
                            <a href="#"
                                class="px-3 py-1 bg-blue-700 rounded hover:bg-blue-600 transition text-xs md:text-sm text-center flex-1">ویرایش</a>
                            <a href="#"
                                class="px-3 py-1 bg-red-600 rounded hover:bg-red-500 transition text-xs md:text-sm text-center flex-1">حذف</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden flex flex-col">
                    <img src="https://picsum.photos/400/200?random=3" alt="پروژه ۳"
                        class="w-full object-cover transition-opacity duration-300 hover:opacity-70" />
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <h2 class="text-lg font-semibold mb-2">فروشگاه اینترنتی</h2>
                        <p class="text-sm text-gray-300 mb-4">
                            راه‌اندازی فروشگاه آنلاین با قابلیت پرداخت و مدیریت محصولات
                        </p>
                        <div class="flex gap-2">
                            <a href="#"
                                class="px-3 py-1 bg-blue-700 rounded hover:bg-blue-600 transition text-xs md:text-sm text-center flex-1">ویرایش</a>
                            <a href="#"
                                class="px-3 py-1 bg-red-600 rounded hover:bg-red-500 transition text-xs md:text-sm text-center flex-1">حذف</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden flex flex-col">
                    <img src="https://picsum.photos/400/200?random=4" alt="پروژه ۴"
                        class="w-full object-cover transition-opacity duration-300 hover:opacity-70" />
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <h2 class="text-lg font-semibold mb-2">سیستم مدیریت محتوا</h2>
                        <p class="text-sm text-gray-300 mb-4">
                            طراحی و پیاده‌سازی CMS برای مدیریت محتوای سایت
                        </p>
                        <div class="flex gap-2">
                            <a href="#"
                                class="px-3 py-1 bg-blue-700 rounded hover:bg-blue-600 transition text-xs md:text-sm text-center flex-1">ویرایش</a>
                            <a href="#"
                                class="px-3 py-1 bg-red-600 rounded hover:bg-red-500 transition text-xs md:text-sm text-center flex-1">حذف</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection