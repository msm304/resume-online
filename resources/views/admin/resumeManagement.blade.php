@extends('layouts.admin.master')

@section('title', 'مدیریت رزومه')

@section('content')

    @include('layouts.admin.sidebar')

    <!-- Main content -->
    <main class="flex-1 p-4 md:p-6">
        <h1 class="text-2xl md:text-3xl font-bold mb-6">مدیریت رزومه</h1>

        <!-- فرم ویرایش بخش‌های رزومه -->
        <form class="space-y-6">
            <!-- معرفی کوتاه -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">معرفی کوتاه</label>
                <textarea class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="3" placeholder="یک معرفی کوتاه بنویسید...">
        لورم ایپسوم متن نمونه</textarea>
            </div>

            <!-- تجربه‌ها -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">تجربه‌ها</label>
                <textarea class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4" placeholder="تجربه‌های کاری خود را وارد کنید...">
        لورم ایپسوم متن نمونه</textarea>
            </div>

            <!-- تحصیلات -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">تحصیلات</label>
                <textarea class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="3" placeholder="سوابق تحصیلی خود را وارد کنید...">
        لورم ایپسوم متن نمونه</textarea>
            </div>

            <!-- مهارت‌ها -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">مهارت‌ها</label>
                <input type="text" placeholder="مهارت‌ها را با کاما جدا کنید"
                    class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="HTML, CSS, JavaScript, Laravel, PHP" />
            </div>

            <!-- زبان‌ها -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">زبان‌ها</label>
                <input type="text" placeholder="زبان‌ها را با کاما جدا کنید"
                    class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="فارسی, انگلیسی" />
            </div>

            <!-- اطلاعات تماس -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">اطلاعات تماس</label>
                <input type="text" placeholder="ایمیل"
                    class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                    value="example@email.com" />
                <input type="text" placeholder="شماره تماس"
                    class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="09120000000" />
            </div>

            <!-- آپلود PDF -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <label class="block mb-2 font-semibold">آپلود فایل PDF رزومه</label>
                <input type="file" accept=".pdf"
                    class="w-full p-2 rounded bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <p class="text-xs text-gray-400 mt-1">
                    کاربران می‌توانند رزومه را دانلود کنند.
                </p>
            </div>

            <!-- دکمه ذخیره -->
            <button type="submit" class="px-4 py-2 bg-blue-700 rounded hover:bg-blue-600 transition">
                ذخیره تغییرات
            </button>
        </form>
    </main>


@endsection