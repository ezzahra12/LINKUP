<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LINKUP | Friends Search Results</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
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
    <style type="text/tailwindcss">
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
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCg2XB9rsx-exdVAMf9jNvQgcHeQIqG1VLZCf7UgMu01XDRNciIAxMzzAhF5IEsXz-d7Aij1qZrAucZpqTHrvQaw8H-wNoCO-gQlNToHYqy4FQCU5PYQ3-Li77mwhrjhze0CUD3yxduHzgGC0fNQ7vnLOPYAR-7Lq1s3hn60TZ3RBN24YO3uK3SVhPYf8AByPGjmdFdzwzxszdJD8sRLiO5DM4hJ4UCeOaEyI1ADA3Jirw2C9_rabbnL2p4cyZs3-pfO_Oin8ykcUI" />
                    </div>
                    <div
                        class="absolute -top-2 -left-2 bg-gradient-to-tr from-blue-400 to-purple-500 w-10 h-10 rounded-2xl flex items-center justify-center text-white shadow-lg">
                        <span class="material-symbols-rounded text-xl">palette</span>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Bogdan Nikitin</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">@nikitinteam</p>
                </div>
            </div>
            <nav class="flex flex-col gap-2">
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">explore</span>
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
                <a class="flex items-center gap-4 px-6 py-4 bg-black dark:bg-slate-800 text-white rounded-3xl transition-all shadow-lg relative"
                    href="#">
                    <span class="material-symbols-rounded">group</span>
                    <span class="font-medium">Friends</span>
                    <span
                        class="ml-auto bg-primary text-white text-[10px] w-5 h-5 flex items-center justify-center rounded-full">3</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">image</span>
                    <span class="font-medium">Media</span>
                </a>
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="#">
                    <span class="material-symbols-rounded text-slate-500 group-hover:text-primary">settings</span>
                    <span class="font-medium">Settings</span>
                </a>
            </nav>
        </aside>
        <main class="flex-1 flex flex-col gap-8 max-w-4xl">
            <header class="flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl font-bold">Search Results</h1>
                    <div class="flex gap-4">
                        <span class="text-sm font-medium text-slate-400">Showing 24 results for "Designers"</span>
                    </div>
                </div>
                <div class="relative group">
                    <span
                        class="material-symbols-rounded absolute left-6 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
                    <input
                        class="w-full bg-white dark:bg-slate-800 border-none rounded-full py-5 pl-16 pr-8 shadow-sm focus:ring-2 focus:ring-primary/20 text-lg transition-all"
                        placeholder="Search for more friends, creators or colleagues..." type="text"
                        value="{{ $search }}" />
                    <button
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-primary text-white px-6 py-2.5 rounded-full font-bold text-sm hover:scale-105 transition-transform">Search</button>
                </div>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($users as $user)
                    <div
                        class="bg-[#eef2ff] dark:bg-slate-800/50 p-8 rounded-[2.5rem] flex flex-col items-center text-center gap-4 shadow-sm border border-white/50 dark:border-slate-700/50 hover:shadow-xl transition-all">
                        <div class="relative">
                            <img alt="{{$user->name}}"
                                class="w-24 h-24 rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-md"
                                src="{{asset('storage/' . $user->image_path)}}" />
                            <div
                                class="absolute bottom-1 right-1 w-5 h-5 bg-green-500 border-2 border-white dark:border-slate-800 rounded-full">
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">{{$user->name}}</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">{{"@". $user->pseudo}}</p>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">{{ $user->bio }}</p>
                        <button
                            class="mt-2 w-full bg-primary text-white py-3 rounded-2xl font-bold shadow-lg shadow-primary/30 hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-rounded text-lg">person_add</span>
                            Add Friend
                        </button>
                    </div>
                @endforeach
            </div>
            <div class="flex items-center justify-center py-8">
                <button
                    class="bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 px-8 py-3 rounded-full font-bold shadow-sm hover:text-primary transition-colors flex items-center gap-2">
                    Load more results
                    <span class="material-symbols-rounded">expand_more</span>
                </button>
            </div>
        </main>
        <aside class="w-80 flex-shrink-0 hidden lg:flex flex-col gap-8 sticky top-8 h-[calc(100vh-4rem)]">
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
        <button class="text-slate-400"><span class="material-symbols-rounded">explore</span></button>
        <button class="text-slate-400"><span class="material-symbols-rounded">mail</span></button>
        <button class="text-primary"><span class="material-symbols-rounded">group</span></button>
        <button class="text-slate-400"><span class="material-symbols-rounded">settings</span></button>
    </div>

</body>

</html>
