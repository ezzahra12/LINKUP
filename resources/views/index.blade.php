<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LINKUP | Social Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#ff4d6d",
                        "background-light": "#f0f2f5",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        display: ["Outfit", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "1rem",
                        '3xl': '2rem',
                    },
                },
            },
        };
    </script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        .glass-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.7);
        }

        .dark .glass-card {
            background: rgba(30, 41, 59, 0.7);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #475569;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="max-w-[1440px] mx-auto p-4 md:p-6 lg:p-8 flex gap-8">
        <aside class="w-64 flex-shrink-0 hidden xl:flex flex-col gap-8 sticky top-8 h-[calc(100vh-4rem)]">
            <div class="flex flex-col items-center text-center gap-3">
                <div class="relative">
                    <div
                        class="w-24 h-24 rounded-full overflow-hidden border-4 border-white dark:border-slate-800 shadow-xl">
                        <img alt="Bogdan Nikitin" class="w-full h-full object-cover"
                            src="{{asset('storage/' . auth()->user()->image_path)}}" />
                    </div>
                    <div
                        class="absolute -top-2 -left-2 bg-gradient-to-tr from-blue-400 to-purple-500 w-10 h-10 rounded-2xl flex items-center justify-center text-white shadow-lg">
                        <span class="material-symbols-rounded text-xl">palette</span>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">{{ "@". auth()->user()->pseudo }}</p>
                </div>
            </div>
            <nav class="flex flex-col gap-2">
                <a class="flex items-center gap-4 px-6 py-4 bg-black dark:bg-slate-800 text-white rounded-3xl transition-all shadow-lg"
                    href="#">
                    <span class="material-symbols-rounded">explore</span>
                    <span class="font-medium">News Feed</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group relative"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">mail</span>
                    <span class="font-medium">Messages</span>
                    <span
                        class="ml-auto bg-black dark:bg-primary text-white text-[10px] w-5 h-5 flex items-center justify-center rounded-full">6</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">forum</span>
                    <span class="font-medium">Forums</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group relative"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">group</span>
                    <span class="font-medium">Friends</span>
                    <span
                        class="ml-auto bg-black dark:bg-primary text-white text-[10px] w-5 h-5 flex items-center justify-center rounded-full">3</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">image</span>
                    <span class="font-medium">Media</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="{{ route('profile.show') }}">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">settings</span>
                    <span class="font-medium">Settings</span>
                </a>
                <form class="w-full" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button
                        class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group">
                        <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">logout</span>
                        <span class="font-medium">Logout</span>
                    </button>
                </form>
            </nav>
        </aside>
        <main class="flex-1 flex flex-col gap-8 max-w-3xl">
            <div class="flex flex-col gap-6">
                <form method="POST" action="{{ route('search') }}" class="flex gap-4">
                    @csrf
                    <div class="relative w-full">
                    <span
                        class="material-symbols-rounded absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input name="search"
                            class="w-11/12 bg-slate-200/50 dark:bg-slate-800/50 border-none rounded-3xl py-4 pl-14 pr-6 focus:ring-2 focus:ring-primary/20 focus:bg-white dark:focus:bg-slate-800 transition-all text-slate-700 dark:text-slate-200 placeholder:text-slate-400"
                            placeholder="Search for friends..." type="text" />
                    </div>
                    <button class="w-2/12 rounded-full bg-rose-500 text-white font-extrabold py-1 px-3">Search</button>
                </form>
                <header class="flex items-center justify-between">
                    <h1 class="text-3xl font-bold">Feeds</h1>
                    <div class="flex gap-6 text-sm font-medium">
                        <button class="text-slate-400 hover:text-primary transition-colors">Recents</button>
                        <button class="text-slate-900 dark:text-white border-b-2 border-primary pb-1">Friends</button>
                        <button class="text-slate-400 hover:text-primary transition-colors">Popular</button>
                    </div>
                </header>
            </div>
            <article class="bg-[#eef2ff] dark:bg-slate-800/50 rounded-3xl p-6 flex flex-col gap-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <img alt="George Lobko"
                            class="w-12 h-12 rounded-2xl object-cover ring-2 ring-white dark:ring-slate-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNfIfT5g5ERWDC1D8vqQVoAoUXi_z7BjhsRFjz_RbCowAI5ISjohoEmc8k6okTDIVzKN17qKVRcnZmJ4fiSQVJOqPLZo9511BsizE5lFJ0jup52ON5T7u1LKpz_Ns8fQzMy4Wsn9XO-wcKcjgnh4i1RUEcnRDfhblrr-sn23nKeDLtLHfrLhU6LsVGeEWK-p18hw0bj1Mg_t-9RlMc5w2DCiktBQNFXAFlqinn6U0qqvkRi8tAYhQV86jeg3WYWTwTVIUJNV8GAxs" />
                        <div>
                            <h3 class="font-bold">George Lobko</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400">2 hours ago</p>
                        </div>
                    </div>
                    <button
                        class="w-10 h-10 flex flex-col items-center justify-center gap-1 hover:bg-white/50 dark:hover:bg-slate-700 rounded-xl transition-all">
                        <div class="w-1 h-1 bg-slate-900 dark:bg-white rounded-full"></div>
                        <div class="w-1 h-1 bg-slate-900 dark:bg-white rounded-full"></div>
                    </button>
                </div>
                <p class="text-slate-700 dark:text-slate-200 leading-relaxed">
                    Hi everyone, today I was on the most beautiful mountain in the world 😍, I also want to say hi to
                    <span class="text-blue-600 font-medium inline-flex items-center gap-1 mx-1">
                        <img alt="Silena" class="w-5 h-5 rounded-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2AJ4pXPpcuHJ4IbkK0pEi7ofe7Ch9jsp7Wnf4Znu5N2MPk_5XVLKPRKsg-pOu4sjVDbsEhgoW6JF27HoopqPCJJ2Zok3YGxsnvazIqg4G_XRI3Zu6BLJQFQcVYtrSBy8IYditzM1iM9q4cTPWgUKVXWlRpfQ7GXNh3y6z5yRndb8YCc7NUWaOmfWHvrG767Q9NDKsH0bXvcaWUmNth0N-OPSvIGWLxrsf1byOz4KOYqDnNPxallmA9IpNBOfz4bsZXudpJ_AgzC0" />
                        Silena,
                    </span>
                    <span class="text-blue-600 font-medium inline-flex items-center gap-1 mx-1">
                        <img alt="Olya" class="w-5 h-5 rounded-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCveA0tOMyFba7-53IILraVZowJn8DBHsaplYtmaJpi4pYk5VZwaRKJ2VsTWwlQehrirqtLcDO65ebaHZKValgc3dBROpHk9514pmIqOC8T-Fbm-GnfEmybmsHNK30ySmBn4KswahfUiBjKlKUQExPvpLnxKWQABx_J8RCJ28gDqD7LN7B1McdVeLptzZ3oc3rmRC6AezTPL-PLXNPBDZI59eDLy5lJ3Lqtr6IaRd1WxHxhwIAKnQ7SSPTr2dsTM4b-YvCpDqjtDuo" />
                        Olya
                    </span>
                    and
                    <span class="text-blue-600 font-medium inline-flex items-center gap-1 mx-1">
                        <img alt="Davis" class="w-5 h-5 rounded-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHT1yUpz75o982HWmXWvhw97hjE7EMErKdJ5VHpTiwziu2wa4hlrGqsfPzv0ILs2oaG2xNYtpLpgbDqH4UQsNLXrOCli136QUA_2U3qwFxwdLNnrcmbrYdMrBjgGf8P_XEdkevynQLK_Zr3_aWh_METluYfJ5tkQbh_6Qppe-AJ8qOjHB9cqeybwoFrWcNDBSesy18pSSNWIgAxHko0sZyZztrV8knJFajCsKe8KW-APZw4GpmJqQ-uvKvSRqjXxYzrxWwV28A9JY" />
                        Davis!
                    </span>
                </p>
                <div class="grid grid-cols-12 gap-3 h-[300px] relative">
                    <div class="col-span-4 h-full">
                        <img alt="Mountain 1" class="w-full h-full object-cover rounded-2xl"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7tsYkyHT3X1NLtkgCf2sq4dJfx2Eus8hRlCVd5-DEhV2vzzviqPoV1j2CbPws9hXTQEni5zt9mhkXGALBv5KnX3deOyjCPCeSwOZ8F-pPxUtKUStHcRLD94Ao_hj4c69s3vyRs7TnNo3imNsl9phr7rh2gEpsz3lp4U9PGtAdmmPmt2DItl7mBeacjc5fSC3uzKj_2Uy1yscSZBVKbLmEdpmCLNbVh2emNofWUjkvorMubMtONJ3beuu4GU6eoTvkp2OpPbsSOXE" />
                    </div>
                    <div class="col-span-3 h-full">
                        <img alt="Nature close-up" class="w-full h-full object-cover rounded-2xl"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDr42DhuhlajlTGHMiFBfkhJEtL_qg3Ak3XOwFYDXR8ZhcVLru9FC9L3GCjTbjXguSlyCScSbvOEncRIK2T01Jg3FOd0Rs3R9Fgs0qFsEkYfS5B8k2mGsxbCsCF4EO9W-RQE6JGRjliz0hgs7MzeL59m_M5wF3lgZcTrwlLbmbgznMSSXZfaN7RJEL_x_wyPfcuYIVkPp41cckN1Hx1dVmuWDVv14D1n9ZYmX6RWx9AliMVtH8CJKdchjYAp-eq2Mg2_yDOEiWgbj4" />
                    </div>
                    <div class="col-span-5 h-full relative">
                        <img alt="Mountain View" class="w-full h-full object-cover rounded-2xl"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZly23Cn5M4O77tfHUuAcbJKrytPUWeqVoJT4FjmPWOyCoDs7HUSnKB5RgWleUvVJZZ0e3LeZd7QuMs28oJWyxA0yqrUuYpUCXE_OPrjHvwvqeOwHMyWQJo-PeONp191dDEeLi3EytYcQXT6JfEwgehnwh_9YY_y8wsVxdkU5qNLnutr86tPAhageBbBcPGt3tzKt5MLPwUm8lLnFWcvmub4QSB70MsJnMcnwLSSBHCj8h5EfLlRho8KpLwvX-xlEAcxuoM8XMjNo" />
                        <div class="absolute bottom-4 right-4 flex items-center gap-2">
                            <div
                                class="flex items-center gap-1 bg-white/90 dark:bg-slate-900/90 backdrop-blur-sm p-1.5 px-3 rounded-full shadow-lg">
                                <span>🔥</span><span>😍</span><span>😲</span><span>😡</span><span>❤️</span>
                                <button
                                    class="ml-2 bg-slate-200 dark:bg-slate-700 w-6 h-6 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-rounded text-sm">close</span>
                                </button>
                            </div>
                            <button
                                class="bg-primary text-white px-5 py-2.5 rounded-full font-bold shadow-lg shadow-primary/30 flex items-center gap-2 hover:scale-105 transition-transform">
                                <span>🔥</span> Woow!!
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-6 mt-2 text-slate-500 dark:text-slate-400 font-medium">
                    <button class="flex items-center gap-2 hover:text-primary transition-colors">
                        <span class="material-symbols-rounded text-xl">visibility</span>
                        <span class="text-sm">6355</span>
                    </button>
                    <button class="flex items-center gap-2 hover:text-primary transition-colors">
                        <span class="material-symbols-rounded text-xl">favorite</span>
                        <span class="text-sm">Like</span>
                    </button>
                    <button class="flex items-center gap-2 hover:text-primary transition-colors">
                        <span class="material-symbols-rounded text-xl">chat_bubble</span>
                        <span class="text-sm">Comment</span>
                    </button>
                </div>
            </article>
            <article class="bg-[#fffbeb] dark:bg-slate-800/50 rounded-3xl p-6 flex flex-col gap-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <img alt="Vitaliy Boyko"
                            class="w-12 h-12 rounded-2xl object-cover ring-2 ring-white dark:ring-slate-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkBlJNEMId6GuVUstmVrfzQxXsUrVI6IEF3CCc0hMOwVxGGKzhKmwG5I9QR5epo2YUbaYnz9BU7Se-8rbvDnEHrNRVZJ2JL8fa6C5qTaYzw6ld2IJtp77TDo_17hX9uAnv_7Ba_gz4h4Zt2yn3LE-EHTZu6LEorJZqsxnFqeadORSAydackqOd8ntG5ypxuLXIQPie9XCt239IkeQHeh55U8lMQX_jkp7BVkYdZ_rs4rkkNXqXx_D9ikO4gbpNAsICK4GOVX-dcqk" />
                        <div>
                            <h3 class="font-bold">Vitaliy Boyko</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400">3 hours ago</p>
                        </div>
                    </div>
                    <button
                        class="w-10 h-10 flex flex-col items-center justify-center gap-1 hover:bg-white/50 dark:hover:bg-slate-700 rounded-xl transition-all">
                        <div class="w-1 h-1 bg-slate-900 dark:bg-white rounded-full"></div>
                        <div class="w-1 h-1 bg-slate-900 dark:bg-white rounded-full"></div>
                    </button>
                </div>
                <div
                    class="h-32 bg-slate-200/50 dark:bg-slate-700/50 rounded-2xl flex items-center justify-center text-slate-400 italic">
                    Loading more content...
                </div>
            </article>
        </main>
        <aside class="w-80 flex-shrink-0 hidden lg:flex flex-col gap-8 sticky top-8 h-[calc(100vh-4rem)]">
            <section class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Stories</h2>
                <div class="flex gap-4 overflow-x-auto pb-2 custom-scrollbar">
                    <div class="relative min-w-[120px] h-48 rounded-3xl overflow-hidden group">
                        <img alt="Story 1"
                            class="w-full h-full object-cover transition-transform group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpTjporG7cU2QteEUBx7R8lOGbTsyUhnPd1vgRVKv1MuLsVz90A5Ipvqva2fg_NUU3RSxG4jDEQzPqnbpWl7Oee4E3f5WvCmMyQ1Jcl0ENfiW4mKRSdNCUELcArD5Ar7i_KdtemkM0mARCkEqEIGA0_EiVf1lYg5rlaoIPW6wkxuwIS7s6fHaMyUGsw9ZIwROhfTqw8GP81sEHHFTjchf3EdlllYDTjmfb5wmGdlGvM8v-8XaBYgRq1xeXebnz3U1SKMfMSRrRdJg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 flex items-center gap-2">
                            <img alt="Anatoly" class="w-6 h-6 rounded-full border-2 border-white"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhKuXBLzrH6gWh452464Wro09TKjtbEij6n85bCG3cXEVghDLScDoeYlI2nFkzZlhEVbjyDkXGgHfzf9BpCPOz8F7TKpz9K8kioON4UgXIwP1MeFe5u3a3xV9E3q0QTJhDRPBQJsQgKorEr5TA_tSun900iVQbq20S9rRmkH5sRBBi4TiAnarHviHYsow8uV0S8bkTv0kUqSErRyFg09gbQdAleHOfw2Ipl7qDvkxKgXCSIcCpT1hP05HZHx2J8f4_yZUXL46Sxss" />
                            <p class="text-[10px] text-white font-medium truncate">Anatoly Pr...</p>
                        </div>
                    </div>
                    <div class="relative min-w-[120px] h-48 rounded-3xl overflow-hidden group">
                        <img alt="Story 2"
                            class="w-full h-full object-cover transition-transform group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlhERrAse5DsOphPYUmJLFr8PftIdZp2WNwfpd5MACiLoa7QNDLuAOaf1ZLor_pI8-jgi-oUDdyi1qHU8glB8EjskkqP5uSYw6TmiVG_AYwbgOWcADeOLPpaIOzBE7sLoaiXcF3TKHlAUyEnEz4ta_--dK2MImNZVEkmFLbufIyhRfgTWon9vvjM44fm19rH1GkDZIKaIRKjcQyMaoJr7fUQo9KPfnNDmgzXVg4Z92W83SV7zsURehOhyzNrL5rUk-0LebbY7wcMM" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 flex items-center gap-2">
                            <img alt="Lolita" class="w-6 h-6 rounded-full border-2 border-white"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkaHhzMSBqw6US98IEwEdBpGY5H9yUHzi01WNy3jDQk10OZEHDwoIKrDnn3GhtcdbcobwU3-rOK1B9XZ2PRKbqygwSJsFxPi3d7vIyDBynzAZJUm1H8ZQZFiXo5DvBJc70jRBO7pXjGlxLbEQc6DVsZ8QNg5VYaf8zFRZA9BYRUjKXAAl34EfXSVfR7w4JpV_W3biG7zTQe17pes_SsqpqMaQYufBO9fFbtmKPqM6C6xxSOGj-ya2LHg5ukdvs407RfjizLL-cARA" />
                            <p class="text-[10px] text-white font-medium truncate">Lolita Earns</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold">Suggestions</h2>
                    <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-lg -mr-4 z-10">
                        <img alt="Floating Avatar" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqGxeOGkHmDHk0HVtAbTZcLBnIQAfV9OMvs7WP6a6BZ0QuFRzS5uzDARvlWpmIeCW_9u4AA7rLvbtr5f98c08autxSD5Nd24-8IAbvycVK4cGdKe9oTjbwuZ0AIXLPTM0rU55Zya4AGEl1Sf53FUww97u6iFSCjJGK3aorKX1dT5N068qXk1z5WF37mJ0F5YSR40M7_Bf_JWWFfDIlhy-9gtybAbIkr7YrmNdH5KH0MN47i76gm4rX21pMUxNzVhvp1J-uPTjWJro" />
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img alt="Nick" class="w-12 h-12 rounded-2xl object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA26kO0bfL_VvY91kummxKLzj57q0W6Pn6Jkr_c4J-4AAI1bOrQPxp5ZAgSMKCe5UhRi7BWDp-obyUW4-LtBq6xa2kOEz9drtqxAhUfkPSbLHHJkhdFOKTH-njph_XSV05yerxd78GkZdcqaM9wfqGPFZPc66OuWznjPX6kk-K7TAI4Ae7ucewpAvAdWw6EP0IHfx_WZf1rbCPMElYJiVuHQ1lWVM2OCbN9JzGOhB_PdOZRnHP9QVXSD4PPuult9CJNlxdP0Eklwps" />
                            <div>
                                <h4 class="font-bold text-sm">Nick</h4>
                                <p class="text-xs text-slate-500">Shelburne</p>
                            </div>
                        </div>
                        <button
                            class="bg-black dark:bg-slate-100 dark:text-slate-900 text-white text-[10px] font-bold px-5 py-2 rounded-full hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors uppercase tracking-wider">Follow</button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img alt="Brittni" class="w-12 h-12 rounded-2xl object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvrJ-frotcvYknZcPICtIttOVoNXX6fjBfbzJ4p4ny0Jg1VqyLVDTqeDteUaz0ix6XmTJyzdyGjylMmCSiWwQQDwOWxbttUc7AiENOuTHFXRwA3KFXa_Mcdnb1rf-yZ2pZklFGE82iw4bVYw_o-N7r1ecj5JDBHKK5KCFxQgOmrOh8klzDsW8muzP5hkcpgcLAm1WSwkUnVWyXHNo7pBmx23tYLUIJdvmPdQZbozQqx9mI8ULCbDXzeatIEte3sCwu95RdsNAuU-A" />
                            <div>
                                <h4 class="font-bold text-sm">Brittni</h4>
                                <p class="text-xs text-slate-500">Lando</p>
                            </div>
                        </div>
                        <button
                            class="bg-black dark:bg-slate-100 dark:text-slate-900 text-white text-[10px] font-bold px-5 py-2 rounded-full hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors uppercase tracking-wider">Follow</button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img alt="Ivan" class="w-12 h-12 rounded-2xl object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwlJUeEzerDOWwkl7BDBWv7i_0y5cRJE0fMlbPblj7WT5kPZaWpWEcz9J2uNO6zBj4OwyZnPn6c27e_alLF6hHj9wYPxZ5p95dhJiFP1KvSOPIRjHu57GFH0Ug9ggmtKkrYjVGmp5nzil0ojSn5MWkbMSEJYFNX5-pKlCLLn3H9jzIElFW-n6VbRLMyBqqx3VHudH5t3kqtzBLfSDk7IeihGxGit1GPuT3_aZliEzYEodwG8a0FF-xzRmEssHzd8k07uJKIUSsymk" />
                            <div>
                                <h4 class="font-bold text-sm">Ivan</h4>
                                <p class="text-xs text-slate-500">Shevchenko</p>
                            </div>
                        </div>
                        <button
                            class="bg-black dark:bg-slate-100 dark:text-slate-900 text-white text-[10px] font-bold px-5 py-2 rounded-full hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors uppercase tracking-wider">Follow</button>
                    </div>
                </div>
                <button class="text-slate-400 text-xs font-medium self-start hover:text-primary transition-colors">See
                    all</button>
            </section>
            <section class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Recommendations</h2>
                <div
                    class="bg-primary/10 dark:bg-slate-800 p-6 rounded-3xl relative overflow-hidden group cursor-pointer">
                    <div class="relative z-10">
                        <h4 class="font-bold">Explore Content</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Based on your interests</p>
                    </div>
                    <div
                        class="absolute -right-4 -bottom-4 bg-primary/20 w-24 h-24 rounded-full transition-all group-hover:scale-150">
                    </div>
                </div>
            </section>
        </aside>
    </div>
    <div
        class="xl:hidden fixed bottom-0 left-0 right-0 bg-white dark:bg-slate-900 border-t dark:border-slate-800 p-4 flex justify-around items-center z-50">
        <button class="text-primary"><span class="material-symbols-rounded">explore</span></button>
        <button class="text-slate-400"><span class="material-symbols-rounded">mail</span></button>
        <button class="text-slate-400"><span class="material-symbols-rounded">group</span></button>
        <a href="{{ route('profile.show') }}" class="text-slate-400"><span
                class="material-symbols-rounded">settings</span></a>
    </div>

</body>

</html>



