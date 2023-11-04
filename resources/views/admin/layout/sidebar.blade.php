<aside id="sidebar" class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ route('admin.home') }}" target="_blank">
            <img src="{{ asset('img/admin/logo-ct.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Soft UI Dashboard</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <!-- change h-sidenav-no-pro to h-sidenav when pro is up -->
    <div class="items-center block w-auto max-h-screen h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="sidenav-menu ease-nav-brand {{ request()->routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}">
                    <div class="icon">
                        <i class="bx bxs-user"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="sidenav-menu ease-nav-brand {{ request()->routeIs('admin.resume') ? 'active' : '' }}" href="{{ route('admin.resume') }}">
                    <div class="icon">
                        <i class="bx bxs-file"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Resume</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="sidenav-menu ease-nav-brand {{ request()->routeIs('admin.inbox*') ? 'active' : '' }}" href="{{ route('admin.inbox') }}">
                    <div class="icon">
                        <i class="bx bxs-envelope"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Inbox</span>
                </a>
            </li>

            <hr class="h-px mt-5 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

            <li class="mt-0.5 w-full">
                <a class="sidenav-menu ease-nav-brand" href="{{ route('home') }}" target="_blank">
                    <div class="icon">
                        <i class='bx bx-link-external'></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">View Web</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="sidenav-menu ease-nav-brand" href="{{ route('admin.logout') }}">
                    <div class="icon">
                        <i class='bx bx-log-out'></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
