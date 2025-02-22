<aside class="ease-nav-brand z-990 fixed inset-y-0 my-4 block w-full max-w-64 -translate-x-full flex-wrap items-center justify-between overflow-y-hidden rounded-2xl border-0 bg-pale-pink p-0 antialiased shadow-xl transition-transform duration-200 dark:bg-spanish-white dark:shadow-none xl:left-0 xl:ml-6 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
        <i class="ri-close-large-fill absolute right-0 top-0 cursor-pointer p-4 text-rose opacity-50 xl:hidden" sidenav-close></i>
        <a class="m-0 block whitespace-nowrap px-8 py-6 text-sm text-affair" href="{{ route("dashboard") }}">
            <img src="{{ asset("img/logo.jpg") }}" class="ease-nav-brand inline w-16 rounded-lg transition-all duration-200 dark:hidden" alt="main_logo" />
            <img src="{{ asset("img/logo.jpg") }}" class="ease-nav-brand hidden w-16 rounded-lg transition-all duration-200 dark:inline" alt="main_logo" />
            <span class="ease-nav-brand ml-2 font-bold transition-all duration-200 font-spaceGrotesk">Laravel SMART</span>
        </a>
    </div>

    <hr class="mb-3 mt-6 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-black/40 dark:to-transparent" />

    <div class="h-sidenav block max-h-screen w-auto grow basis-full items-center overflow-auto">
        <ul class="mb-0 flex flex-col pl-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs("dashboard") ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("dashboard") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-tv-2-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Dashboard</span>
                </a>
            </li>

            {{-- Awal Data Master --}}
            <li class="mt-4 w-full">
                <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight text-zambezi dark:text-affair opacity-60">Data Master</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["kriteria"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("kriteria") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-puzzle-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Kriteria</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["sub-kriteria"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("sub-kriteria") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-puzzle-2-fill relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Sub Kriteria</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["alternatif"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("alternatif") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-survey-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Alternatif</span>
                </a>
            </li>
            {{-- Akhir Data Master --}}

            {{-- Awal SMART --}}
            <li class="mt-4 w-full">
                <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight text-zambezi dark:text-affair opacity-60">SMART</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["penilaian"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("penilaian") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-arrow-right-down-long-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Penilaian</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["perhitungan"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("perhitungan") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-gradienter-fill relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Perhitungan Metode</span>
                </a>
            </li>

            {{-- <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["normalisasi-bobot"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("normalisasi-bobot") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-gradienter-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Normalisasi Bobot</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["nilai-utility"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("nilai-utility") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-cpu-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Nilai Utility</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["nilai-akhir"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("nilai-akhir") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-cpu-fill relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Nilai Akhir</span>
                </a>
            </li> --}}

            <li class="mt-0.5 w-full">
                <a class="py-2.7 ease-nav-brand {{ Request::routeIs(["hasil-akhir"]) ? "rounded-lg font text-affair dark:text-white bg-zambezi/10 dark:bg-zambezi/30" : "dark:text-white" }} mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30" href="{{ route("hasil-akhir") }}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="ri-service-bell-line relative top-0 text-lg leading-normal text-affair dark:text-white"></i>
                    </div>
                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Hasil Akhir</span>
                </a>
            </li>
            {{-- Akhir SMART --}}

            <li class="mt-4 w-full">
                <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight text-zambezi dark:text-affair opacity-60">Pengaturan</h6>
            </li>

            <li class="mt-0.5 w-full">
                <form method="POST" action="{{ route("logout") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="py-2.7 ease-nav-brand mx-2 my-0 flex items-center whitespace-nowrap px-4 text-sm transition-colors hover:rounded-lg hover:bg-zambezi/10 dark:hover:bg-zambezi/30 dark:text-white">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="ri-login-box-line relative top-0 text-lg leading-normal text-cyan-500"></i>
                        </div>
                        <button type="submit" class="ease ml-1 opacity-100 duration-300">Logout</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</aside>
