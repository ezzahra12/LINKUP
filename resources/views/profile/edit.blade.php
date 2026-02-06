<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LINKUP | Profile Settings</title>
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

        input,
        textarea {
            @apply bg-white/50 dark:bg-slate-900/50 border-none focus:ring-2 focus:ring-primary rounded-2xl p-4;
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

                src="{{asset('storage/' . auth()->user()->image_path)}}"
            />   </div>
                    <div
                        class="absolute -top-2 -left-2 bg-gradient-to-tr from-blue-400 to-purple-500 w-10 h-10 rounded-2xl flex items-center justify-center text-white shadow-lg">
                        <span class="material-symbols-rounded text-xl">palette</span>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-bold">{{ auth()->user()->name}}</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">{{"@".auth()->user()->pseudo}}</p>
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
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group relative"
                    href="{{route('search')}}">
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
                <a class="flex items-center gap-4 px-6 py-4 bg-black dark:bg-slate-800 text-white rounded-3xl transition-all shadow-lg"
                    href="#">
                    <span class="material-symbols-rounded text-primary">settings</span>
                    <span class="font-medium">Settings</span>
                </a>
            </nav>
        </aside>
        <main class="flex-1 flex flex-col gap-8 max-w-3xl">
            <header>
                <h1 class="text-3xl font-bold">Profile Settings</h1>
            </header>
           <form method="POST" action="{{ route('profile.photo.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="image" class="relative group cursor-pointer">
        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-background-light dark:border-slate-700 shadow-2xl">
            <img
                class="w-full h-full object-cover transition-transform group-hover:scale-110"
                src="{{asset('storage/' . $user->image_path)}}"
            />
        </div>

        <div
            class="absolute inset-0 bg-black/40 rounded-full flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
            <span class="material-symbols-rounded text-white text-3xl">photo_camera</span>
            <span class="text-white text-xs font-bold mt-1 uppercase">Change Photo</span>
        </div>
    </label>

    <input type="file" name="image" id="image" class="hidden" onchange="this.form.submit()">
</form>

            <form method="POST" action="{{ route('profile.update', ["user" => $user->id]) }}" class="bg-[#eef2ff] dark:bg-slate-800/50 rounded-3xl p-8 shadow-sm flex flex-col gap-6">
                @csrf
                @method('PUT')
                <h2 class="text-xl font-bold flex items-center gap-2">
                    <span class="material-symbols-rounded text-primary">person_edit</span>
                    Basic Information
                </h2>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">Name</label>
                        <input class="w-full shadow-inner" placeholder="nikitinteam" type="text" name="name"
                            value="{{ $user->name }}" />
                        @error('name')
                            <p class="mt-5 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">Pseudo</label>
                        <input class="w-full shadow-inner" placeholder="@nikitinteam" type="text" name="pseudo"
                            value="{{ $user->pseudo }}" />
                        @error('pseudo')
                            <p class="mt-5 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">Email</label>
                        <input class="w-full shadow-inner" placeholder="@nikitinteam" type="email" name="email"
                            value="{{ $user->email }}" />
                        @error('email')
                            <p class="mt-5 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">Bio</label>
                        <textarea class="w-full shadow-inner" name="bio" placeholder="Tell us about yourself..." rows="4">{{$user->bio}}</textarea>

                        @error('bio')
                            <p class="mt-5 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button
                        class="bg-primary text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-primary/30 flex items-center justify-center gap-2 hover:scale-105 transition-transform mt-2">
                        Update Profile
                    </button>
                </div>
            </form>
            <form method="POST" action="{{ route('reset_password') }}" class="bg-[#fffbeb] dark:bg-slate-800/50 rounded-3xl p-8 shadow-sm flex flex-col gap-6">
                @csrf
                @method('PUT')
                <h2 class="text-xl font-bold flex items-center gap-2">
                    <span class="material-symbols-rounded text-primary">security</span>
                    Security
                </h2>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">Current
                            Password</label>
                        <input class="w-full shadow-inner" placeholder="••••••••" type="password" name="current_password" />
                        @error('current_password')
                            <p class="mt-5 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">New
                                Password</label>
                            <input class="w-full shadow-inner" placeholder="••••••••" type="password" name="password"/>
                            @error('password')
                                <p class="mt-5 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-600 dark:text-slate-400 ml-1">Confirm
                                Password</label>
                            <input class="w-full shadow-inner" placeholder="••••••••" type="password" name="password_confirmation" />
                            @error('password_confirmation')
                                <p class="mt-5 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button
                        class="bg-primary text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-primary/30 flex items-center justify-center gap-2 hover:scale-105 transition-transform mt-2">
                        Change Password
                    </button>
                </div>
            </form>
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
                </div>
                <button class="text-slate-400 text-xs font-medium self-start hover:text-primary transition-colors">See
                    all</button>
            </section>
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
                </div>
            </section>
        </aside>
    </div>
    <div
        class="xl:hidden fixed bottom-0 left-0 right-0 bg-white dark:bg-slate-900 border-t dark:border-slate-800 p-4 flex justify-around items-center z-50">
        <button class="text-slate-400"><span class="material-symbols-rounded">explore</span></button>
        <button class="text-slate-400"><span class="material-symbols-rounded">mail</span></button>
        <button class="text-slate-400"><span class="material-symbols-rounded">group</span></button>
        <button class="text-primary"><span class="material-symbols-rounded">settings</span></button>
    </div>

</body>

</html>
