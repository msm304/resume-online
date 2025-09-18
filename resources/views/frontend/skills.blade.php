@extends('layouts.frontend.main.master')

@section('title', 'مهارت ها - امیرحسین سلطانی')
@section('content')
    <!-- بخش مهارت‌ها -->
    <section class="flex-1 pt-6 pb-20 px-4">
        <h1 class="text-2xl md:text-3xl font-bold text-center mb-6">مهارت‌ها</h1>

        <!-- گرید کارت‌ها -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 max-w-6xl mx-auto">
            <!-- کارت نمونه -->
             @foreach ($skills as $skill)
              <div
                class="group relative bg-gray-800 rounded-xl p-4 flex items-center justify-center cursor-pointer hover:bg-blue-700 transition-colors">
                <span class="text-center text-white font-medium text-sm md:text-base">{{$skill->title}}</span>
                <div
                    class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 hidden group-hover:block bg-gray-700 text-white text-xs px-2 py-1 rounded shadow-lg whitespace-nowrap">
                    {{ $skill->description }}
                </div>
            </div>
             @endforeach
           
            <!-- کارت‌های دیگر بدون بهم ریختگی اضافه می‌شوند -->
        </div>
    </section>
    
@endsection