@extends('layouts.admin.master')

@section('title', 'پیام ها')
@vite('resources/css/admin/messages.css')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content')

    @include('layouts.admin.sidebar')

    <!-- Main content -->
    <div class="flex-1 p-4 sm:p-6 overflow-y-auto">
        <!-- فاصله از منو در دسکتاپ -->

        <!-- Topbar موبایل -->
        <header class="bg-gray-800 p-4 flex items-center justify-between md:hidden">
            <h1 class="text-lg font-bold">مدیریت پیام‌ها</h1>
            <button onclick="toggleSidebar()" class="text-white text-2xl">☰</button>
        </header>

        <!-- Content -->
        <main class="flex-1 p-4 md:p-6">
            <h1 class="hidden md:block text-2xl md:text-3xl font-bold mb-6">
                مدیریت پیام‌ها
            </h1>

            <!-- جدول در دسکتاپ -->
            <div class="hidden md:block overflow-x-auto">
                <table class="min-w-full bg-gray-800 rounded-lg text-sm md:text-base">
                    <thead>
                        <tr class="border-b border-gray-700 text-right">
                            <th class="px-4 py-2">فرستنده</th>
                            <th class="px-4 py-2">ایمیل</th>
                            <th class="px-4 py-2">موضوع</th>
                            <th class="px-4 py-2">تاریخ</th>
                            <th class="px-4 py-2 text-center">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr>
                            <td class="px-4 py-2">امیرحسین سلطانی</td>
                            <td class="px-4 py-2">amir@example.com</td>
                            <td class="px-4 py-2">پیشنهاد همکاری</td>
                            <td class="px-4 py-2">1404/06/10</td>
                            <td class="px-4 py-2 text-center">
                                <button onclick="openModal('detailsModal')"
                                    class="px-2 py-1 bg-blue-700 rounded hover:bg-blue-600 transition mx-1">
                                    مشاهده
                                </button>
                                <button onclick="openModal('replyModal')"
                                    class="px-2 py-1 bg-green-600 rounded hover:bg-green-500 transition mx-1">
                                    پاسخ
                                </button>
                                <button class="px-2 py-1 bg-red-600 rounded hover:bg-red-500 transition mx-1">
                                    حذف
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- کارت‌ها در موبایل -->
            <div class="space-y-4 md:hidden">
                <div class="bg-gray-800 p-4 rounded-lg">
                    <p><strong>فرستنده:</strong> امیرحسین سلطانی</p>
                    <p><strong>ایمیل:</strong> amir@example.com</p>
                    <p><strong>موضوع:</strong> پیشنهاد همکاری</p>
                    <p><strong>تاریخ:</strong> 1404/06/10</p>
                    <div class="mt-3 flex justify-end gap-2">
                        <button onclick="openModal('detailsModal')" class="px-2 py-1 bg-blue-700 rounded hover:bg-blue-600">
                            مشاهده
                        </button>
                        <button onclick="openModal('replyModal')" class="px-2 py-1 bg-green-600 rounded hover:bg-green-500">
                            پاسخ
                        </button>
                        <button class="px-2 py-1 bg-red-600 rounded hover:bg-red-500">
                            حذف
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal جزئیات پیام -->
    <div id="detailsModal" class="modal fixed inset-0 bg-black bg-opacity-70 items-center justify-center z-50">
        <div class="bg-gray-800 p-6 rounded-lg w-11/12 md:w-1/2">
            <h2 class="text-xl font-bold mb-4">جزئیات پیام</h2>
            <p><strong>نام:</strong> امیرحسین سلطانی</p>
            <p><strong>ایمیل:</strong> amir@example.com</p>
            <p class="mt-3"><strong>متن پیام:</strong></p>
            <p class="bg-gray-700 p-3 rounded mt-2">
                سلام وقت بخیر، مایلم در پروژه شما همکاری کنم...
            </p>
            <div class="text-left mt-4">
                <button onclick="closeModal('detailsModal')" class="px-4 py-2 bg-blue-600 rounded hover:bg-blue-500">
                    بستن
                </button>
            </div>
        </div>
    </div>

    <!-- Modal پاسخ -->
    <div id="replyModal" class="modal fixed inset-0 bg-black bg-opacity-70 items-center justify-center z-50">
        <div class="bg-gray-800 p-6 rounded-lg w-11/12 md:w-1/2">
            <h2 class="text-xl font-bold mb-4">پاسخ به پیام</h2>
            <form>
                <textarea class="w-full p-2 rounded bg-gray-700 focus:outline-none" rows="5"
                    placeholder="متن پاسخ..."></textarea>
                <div class="flex justify-between mt-4">
                    <button type="button" onclick="closeModal('replyModal')"
                        class="px-4 py-2 bg-gray-600 rounded hover:bg-gray-500">
                        انصراف
                    </button>
                    <button type="submit" class="px-4 py-2 bg-green-600 rounded hover:bg-green-500">
                        ارسال پاسخ
                    </button>
                </div>
            </form>
        </div>
    </div>


    @vite('resources/js/admin/messages.js')

@endsection