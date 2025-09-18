@extends('layouts.frontend.main.master')

@section('title', 'رزومه - امیرحسین سلطانی')

@section('content')
<!-- بخش رزومه -->
<section class="flex-1 pt-6 pb-20 px-4 max-w-5xl mx-auto">
    <!-- معرفی -->
    <div class="text-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold">امیرحسین سلطانی</h1>
        <p class="text-gray-400 text-sm md:text-base mt-2">
            توسعه‌دهنده وب فول‌استک با علاقه‌مندی به طراحی مینیمال، بهینه‌سازی
            سیستم‌ها و یادگیری مداوم.
        </p>
    </div>

    <!-- گرید رزومه (دسکتاپ: دو ستونه) -->
    <div class="grid md:grid-cols-3 gap-6">
        <!-- ستون اصلی -->
        <div class="md:col-span-2 space-y-6">
            <!-- تجربه کاری -->
            <div class="bg-gray-800 rounded-xl p-4">
                <h2 class="text-lg font-semibold mb-3 border-b border-gray-700 pb-2">
                    تجربه کاری
                </h2>
                <div class="space-y-4 text-sm md:text-base">
                    <div>
                        <h3 class="font-medium">توسعه‌دهنده فول‌استک - شرکت X</h3>
                        <p class="text-gray-400 text-xs">1399 - 1401</p>
                        <ul class="list-disc list-inside text-gray-300 text-sm mt-1">
                            <li>طراحی و توسعه وب‌اپلیکیشن‌های داخلی</li>
                            <li>بهبود کارایی و امنیت سیستم‌ها</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-medium">برنامه‌نویس بک‌اند - شرکت Y</h3>
                        <p class="text-gray-400 text-xs">1401 - اکنون</p>
                        <ul class="list-disc list-inside text-gray-300 text-sm mt-1">
                            <li>توسعه API با Laravel</li>
                            <li>مدیریت دیتابیس و بهینه‌سازی کوئری‌ها</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- مهارت‌ها -->
            <div class="bg-gray-800 rounded-xl p-4">
                <h2 class="text-lg font-semibold mb-3 border-b border-gray-700 pb-2">
                    مهارت‌ها
                </h2>
                <div class="flex flex-wrap gap-2 text-sm">
                    <span class="bg-blue-700 px-3 py-1 rounded-full">HTML</span>
                    <span class="bg-blue-700 px-3 py-1 rounded-full">CSS</span>
                    <span class="bg-blue-700 px-3 py-1 rounded-full">JavaScript</span>
                    <span class="bg-blue-700 px-3 py-1 rounded-full">PHP</span>
                    <span class="bg-blue-700 px-3 py-1 rounded-full">Laravel</span>
                </div>
            </div>

            <!-- تحصیلات -->
            <div class="bg-gray-800 rounded-xl p-4">
                <h2 class="text-lg font-semibold mb-3 border-b border-gray-700 pb-2">
                    تحصیلات
                </h2>
                <div class="space-y-2 text-sm">
                    <h3 class="font-medium">کارشناسی علوم کامپیوتر</h3>
                    <p class="text-gray-400 text-xs">دانشگاه تهران | 1395 - 1399</p>
                </div>
            </div>
        </div>

        <!-- ستون کناری -->
        <div class="space-y-6">
            <!-- زبان‌ها -->
            <div class="bg-gray-800 rounded-xl p-4">
                <h2 class="text-lg font-semibold mb-3 border-b border-gray-700 pb-2">
                    زبان‌ها
                </h2>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>فارسی - زبان مادری</li>
                    <li>انگلیسی - سطح پیشرفته</li>
                </ul>
            </div>

            <!-- اطلاعات تماس -->
            <div class="bg-gray-800 rounded-xl p-4">
                <h2 class="text-lg font-semibold mb-3 border-b border-gray-700 pb-2">
                    اطلاعات تماس
                </h2>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>
                        <span class="material-icons text-blue-400 align-middle">email</span>
                        <span class="ml-1">example@email.com</span>
                    </li>
                    <li>
                        <span class="material-icons text-blue-400 align-middle">call</span>
                        <span class="ml-1">+98 912 000 0000</span>
                    </li>
                    <li>
                        <span class="material-icons text-blue-400 align-middle">language</span>
                        <span class="ml-1">linkedin.com/in/example</span>
                    </li>
                    <li>
                        <span class="material-icons text-blue-400 align-middle">code</span>
                        <span class="ml-1">github.com/example</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection