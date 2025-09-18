@extends('layouts.frontend.main.master')

@section('title', 'پروژه ها - امیرحسین سلطانی')

@section('content')

    <!-- بخش پروژه‌ها -->
    <section class="flex-1 pt-6 pb-20 px-4">
        <h1 class="text-2xl md:text-3xl font-bold text-center mb-6">پروژه‌ها</h1>
    
        <!-- گرید کارت‌ها -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-6xl mx-auto">
            <!-- کارت پروژه -->
            <div class="group relative bg-gray-800 rounded-xl overflow-hidden cursor-pointer">
                <img src="https://picsum.photos/id/1015/400/250" alt="Project 1"
                    class="w-full h-48 object-cover transition duration-500 group-hover:opacity-40" />
                <!-- عنوان -->
                <div
                    class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 group-hover:opacity-0">
                    <span class="text-white font-medium text-base md:text-lg text-center">وب‌سایت شخصی</span>
                </div>
                <!-- توضیحات -->
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    <div class="bg-black bg-opacity-70 text-white text-sm md:text-base px-3 py-2 rounded-lg text-center">
                        وب‌سایتی برای نمایش رزومه و نمونه‌کارها
                    </div>
                </div>
            </div>
    
            <div class="group relative bg-gray-800 rounded-xl overflow-hidden cursor-pointer">
                <img src="https://picsum.photos/id/1016/400/250" alt="Project 2"
                    class="w-full h-48 object-cover transition duration-500 group-hover:opacity-40" />
                <div
                    class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 group-hover:opacity-0">
                    <span class="text-white font-medium text-base md:text-lg text-center">فروشگاه آنلاین</span>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    <div class="bg-black bg-opacity-70 text-white text-sm md:text-base px-3 py-2 rounded-lg text-center">
                        فروشگاه آنلاین با قابلیت پرداخت و مدیریت سفارش
                    </div>
                </div>
            </div>
    
            <div class="group relative bg-gray-800 rounded-xl overflow-hidden cursor-pointer">
                <img src="https://picsum.photos/id/1018/400/250" alt="Project 3"
                    class="w-full h-48 object-cover transition duration-500 group-hover:opacity-40" />
                <div
                    class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 group-hover:opacity-0">
                    <span class="text-white font-medium text-base md:text-lg text-center">اپلیکیشن وبلاگ</span>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    <div class="bg-black bg-opacity-70 text-white text-sm md:text-base px-3 py-2 rounded-lg text-center">
                        مدیریت نوشته‌ها و دسته‌بندی با طراحی ریسپانسیو
                    </div>
                </div>
            </div>
    
            <div class="group relative bg-gray-800 rounded-xl overflow-hidden cursor-pointer">
                <img src="https://picsum.photos/id/1020/400/250" alt="Project 4"
                    class="w-full h-48 object-cover transition duration-500 group-hover:opacity-40" />
                <div
                    class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 group-hover:opacity-0">
                    <span class="text-white font-medium text-base md:text-lg text-center">اپلیکیشن فروش</span>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    <div class="bg-black bg-opacity-70 text-white text-sm md:text-base px-3 py-2 rounded-lg text-center">
                        مدیریت فروش، موجودی و گزارشات با طراحی مینیمال
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection