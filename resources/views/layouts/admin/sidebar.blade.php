<!-- Sidebar (Right aligned) -->
<!-- Sidebar -->
<aside id="sidebar"
    class="w-64 bg-gray-800 border-l border-gray-700 hidden md:flex flex-col fixed md:static inset-y-0 right-0 z-50">
    <div class="px-4 py-6 text-center text-lg font-bold border-b border-gray-700">
        منوی ادمین
    </div>
    <nav class="flex-1 p-4 space-y-2 text-right">
        <button onclick="showPage('dashboard')"
            class="w-full block px-3 py-2 rounded-lg hover:bg-blue-600 transition text-right">
            داشبورد
        </button>
        <button onclick="showPage('users')"
            class="w-full block px-3 py-2 rounded-lg hover:bg-blue-600 transition text-right">
            مدیریت کاربران
        </button>
        <button onclick="showPage('admins')"
            class="w-full block px-3 py-2 rounded-lg hover:bg-blue-600 transition text-right">
            مدیریت ادمین‌ها
        </button>
        <button onclick="showPage('skills')" class="w-full block px-3 py-2 rounded-lg bg-blue-700 text-right">
            مدیریت مهارت‌ها
        </button>
        <button onclick="showPage('projects')"
            class="w-full block px-3 py-2 rounded-lg hover:bg-blue-600 transition text-right">
            مدیریت پروژه‌ها
        </button>
    </nav>
</aside>