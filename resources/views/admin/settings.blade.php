@extends('layouts.admin.master')
@section('title', 'تنظیمات')

@section('content')

        @include('layouts.admin.sidebar')
     <body class="bg-gray-900 text-white min-h-screen flex flex-col md:flex-row">
        <!-- Main content -->
          <!-- Topbar موبایل -->
          <header
            class="bg-gray-800 p-4 flex items-center justify-between md:hidden"
          >
            <h1 class="text-lg font-bold">تنظیمات کلی</h1>
            <button onclick="toggleSidebar()" class="text-white text-2xl">☰</button>
          </header>

          <!-- Content -->
          <main class="flex-1 p-4 md:p-6">
            <h1 class="hidden md:block text-2xl md:text-3xl font-bold mb-6">
              تنظیمات کلی سایت
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- رنگ‌بندی / تم -->
              <div class="bg-gray-800 p-5 rounded-lg">
                <h2 class="text-xl font-semibold mb-4">رنگ‌بندی / تم</h2>
                <div class="flex items-center gap-4">
                  <label class="flex items-center gap-2">
                    <input
                      type="radio"
                      name="theme"
                      value="dark"
                      checked
                      class="accent-blue-600"
                    />
                    <span>تم تاریک</span>
                  </label>
                  <label class="flex items-center gap-2">
                    <input
                      type="radio"
                      name="theme"
                      value="light"
                      class="accent-blue-600"
                    />
                    <span>تم روشن</span>
                  </label>
                </div>
              </div>

              <!-- فونت‌ها -->
              <div class="bg-gray-800 p-5 rounded-lg">
                <h2 class="text-xl font-semibold mb-4">فونت‌ها</h2>
                <select class="w-full p-2 rounded bg-gray-700 focus:outline-none">
                  <option>وزیر</option>
                  <option>ایران‌سنس</option>
                  <option>Tahoma</option>
                </select>
              </div>

              <!-- اطلاعات پروفایل -->
              <div class="bg-gray-800 p-5 rounded-lg col-span-1 md:col-span-2">
                <h2 class="text-xl font-semibold mb-4">اطلاعات پروفایل ادمین</h2>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <label class="block mb-1">نام</label>
                    <input
                      type="text"
                      class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                      placeholder="نام ادمین"
                    />
                  </div>
                  <div>
                    <label class="block mb-1">تصویر پروفایل</label>
                    <input
                      type="file"
                      class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                    />
                  </div>
                  <div>
                    <label class="block mb-1">ایمیل</label>
                    <input
                      type="email"
                      class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                      placeholder="example@email.com"
                    />
                  </div>
                  <div>
                    <label class="block mb-1">تلگرام</label>
                    <input
                      type="text"
                      class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                      placeholder="@username"
                    />
                  </div>
                  <div>
                    <label class="block mb-1">لینکدین</label>
                    <input
                      type="text"
                      class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                      placeholder="linkedin.com/in/..."
                    />
                  </div>
                  <div>
                    <label class="block mb-1">گیت‌هاب</label>
                    <input
                      type="text"
                      class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                      placeholder="github.com/username"
                    />
                  </div>
                </form>
              </div>

              <!-- لینک‌ها و دسترسی‌ها -->
              <div class="bg-gray-800 p-5 rounded-lg col-span-1 md:col-span-2">
                <h2 class="text-xl font-semibold mb-4">لینک‌ها و دسترسی‌ها</h2>
                <textarea
                  class="w-full p-2 rounded bg-gray-700 focus:outline-none"
                  rows="4"
                  placeholder="لینک‌ها یا توضیحات دسترسی‌ها..."
                ></textarea>
              </div>
            </div>

            <!-- دکمه ذخیره -->
            <div class="mt-6 text-left">
              <button class="px-6 py-2 bg-blue-600 rounded-lg hover:bg-blue-500">
                ذخیره تغییرات
              </button>
            </div>
          </main>
      

@endsection
