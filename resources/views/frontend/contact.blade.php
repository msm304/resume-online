@extends('layouts.frontend.main.master')

@section('title', 'تماس')

@section('content')

    <!-- بخش تماس -->
    <section class="flex-1 flex items-center justify-center px-4 pb-20">
        <div class="w-full max-w-4xl">
            <h1 class="text-2xl md:text-3xl font-bold text-center mb-8">
                تماس با من
            </h1>

            <div class="grid md:grid-cols-2 gap-6 items-start">
                <!-- فرم تماس -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl p-6 shadow-xl border border-gray-600">
                    <h2 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2 text-blue-400">
                        فرم تماس
                    </h2>
                    <form class="space-y-4 text-sm md:text-base">
                        <div>
                            <label class="block mb-1 text-gray-300">نام</label>
                            <input type="text"
                                class="w-full px-3 py-2 rounded-xl bg-gray-900 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="نام شما" />
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-300">ایمیل</label>
                            <input type="email"
                                class="w-full px-3 py-2 rounded-xl bg-gray-900 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="example@email.com" />
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-300">پیام</label>
                            <textarea rows="4"
                                class="w-full px-3 py-2 rounded-xl bg-gray-900 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="متن پیام شما..."></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 transition-colors py-2 rounded-xl font-medium shadow-md">
                            ارسال پیام
                        </button>
                    </form>
                </div>

                <!-- اطلاعات تماس -->
                <div
                    class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl p-6 shadow-xl border border-gray-600 w-fit">
                    <h2 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2 text-blue-400">
                        اطلاعات تماس
                    </h2>
                    <ul class="space-y-4 text-gray-300 text-sm md:text-base">
                        <li class="flex items-center gap-2">
                            <span class="material-icons text-blue-400">email</span>
                            <span>example@email.com</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-icons text-blue-400">call</span>
                            <span>+98 912 000 0000</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-icons text-blue-400">location_on</span>
                            <span>تهران، ایران</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-icons text-blue-400">language</span>
                            <a href="https://linkedin.com/in/example" target="_blank"
                                class="hover:text-blue-400 transition">linkedin.com/in/example</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-icons text-blue-400">code</span>
                            <a href="https://github.com/example" target="_blank"
                                class="hover:text-blue-400 transition">github.com/example</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection