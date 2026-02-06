<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LINKUP | Sign Up</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style type="text/tailwindcss">
        :root {
            --primary: #ff4d6d;
            --background-light: #f0f2f5;
            --background-dark: #0f172a;
        }

        body {
            font-family: 'Outfit', sans-serif;
        }

        .glass-container {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.7);
        }

        .dark .glass-container {
            background: rgba(30, 41, 59, 0.6);
        }

        .bg-pattern {
            background-color: #f0f2f5;
            background-image: radial-gradient(var(--primary) 0.5px, transparent 0.5px), radial-gradient(var(--primary) 0.5px, #f0f2f5 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.1;
        }

        .dark .bg-pattern {
            background-color: #0f172a;
            background-image: radial-gradient(var(--primary) 0.5px, transparent 0.5px), radial-gradient(var(--primary) 0.5px, #0f172a 0.5px);
            opacity: 0.05;
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#ff4d6d",
                    },
                    borderRadius: {
                        DEFAULT: "1rem",
                        '3xl': '2rem',
                    },
                },
            },
        };
    </script>
</head>

<body
    class="bg-[#f0f2f5] dark:bg-[#0f172a] text-slate-900 dark:text-slate-100 min-h-screen relative flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-pattern"></div>
    <div class="absolute top-[-10%] left-[-5%] w-[40%] h-[60%] bg-primary/20 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[40%] h-[60%] bg-blue-400/20 rounded-full blur-[120px]"></div>
    <main class="relative z-10 w-full max-w-lg p-6">
        <div class="glass-container border border-white/50 dark:border-slate-700/50 rounded-3xl shadow-2xl p-8 md:p-12">
            <div class="flex flex-col items-center text-center gap-4 mb-10">
                <div
                    class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30">
                    <span class="material-symbols-outlined text-4xl text-white font-bold">link</span>
                </div>
                <div>
                    <h1 class="text-4xl font-bold tracking-tight">LINKUP</h1>
                    <p class="text-slate-500 dark:text-slate-400 mt-2 font-medium">Join the vibrant social circle</p>
                </div>
            </div>
            <form class="space-y-6" method="POST" action="{{ route('submitRegister') }}">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-semibold ml-1 text-slate-700 dark:text-slate-300">Full Name</label>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">person</span>
                        <input name="name"
                            class="w-full pl-12 pr-4 py-4 bg-white/50 dark:bg-slate-800/50 border-0 ring-1 ring-slate-200 dark:ring-slate-700 rounded-2xl focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400"
                            placeholder="John Doe" type="text" />
                    </div>
                    @error('name')
                        <p class="mt-5 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-semibold ml-1 text-slate-700 dark:text-slate-300">Pseudo</label>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">person</span>
                        <input name="pseudo"
                            class="w-full pl-12 pr-4 py-4 bg-white/50 dark:bg-slate-800/50 border-0 ring-1 ring-slate-200 dark:ring-slate-700 rounded-2xl focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400"
                            placeholder="John Doe" type="text" />
                    </div>

                    @error('pseudo')
                        <p class="mt-5 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-semibold ml-1 text-slate-700 dark:text-slate-300">Email Address</label>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">mail</span>
                        <input name="email"
                            class="w-full pl-12 pr-4 py-4 bg-white/50 dark:bg-slate-800/50 border-0 ring-1 ring-slate-200 dark:ring-slate-700 rounded-2xl focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400"
                            placeholder="name@example.com" type="email" />
                    </div>

                    @error('email')
                        <p class="mt-5 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-semibold ml-1 text-slate-700 dark:text-slate-300">Password</label>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">lock</span>
                        <input name="password"
                            class="w-full pl-12 pr-12 py-4 bg-white/50 dark:bg-slate-800/50 border-0 ring-1 ring-slate-200 dark:ring-slate-700 rounded-2xl focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400"
                            placeholder="••••••••" type="password" />
                        <button
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
                            type="button">
                            <span class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>

                    @error('password')
                        <p class="mt-5 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-semibold ml-1 text-slate-700 dark:text-slate-300">Confirm Password</label>
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">lock</span>
                        <input name="password_confirmation"
                            class="w-full pl-12 pr-12 py-4 bg-white/50 dark:bg-slate-800/50 border-0 ring-1 ring-slate-200 dark:ring-slate-700 rounded-2xl focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400"
                            placeholder="••••••••" type="password" />
                        <button
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
                            type="button">
                            <span class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>

                    @error('password_confirmation')
                        <p class="mt-5 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center gap-2 px-1">
                    <input
                        class="rounded text-primary focus:ring-primary bg-white/50 dark:bg-slate-800/50 border-slate-200 dark:border-slate-700"
                        id="terms" type="checkbox" />
                    <label class="text-xs text-slate-500 dark:text-slate-400" for="terms">
                        I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a> and
                        <a class="text-primary hover:underline" href="#">Privacy Policy</a>
                    </label>
                </div>
                <button
                    class="w-full py-4 bg-primary hover:bg-[#ff3355] text-white rounded-2xl font-bold text-lg shadow-lg shadow-primary/30 transition-all hover:scale-[1.02] active:scale-[0.98]"
                    type="submit">
                    Register
                </button>
            </form>
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-200 dark:border-slate-700"></div>
                </div>

            </div>

            <div class="mt-10 text-center">
                <p class="text-slate-500 dark:text-slate-400">
                    Already have an account?
                    <a class="text-primary font-bold hover:underline ml-1" href="{{ route('login') }}">Login here</a>
                </p>
            </div>
        </div>
        <div
            class="hidden md:block absolute -right-24 top-20 bg-white dark:bg-slate-800 p-4 rounded-3xl shadow-xl rotate-12 scale-90 border border-slate-100 dark:border-slate-700">
            <div class="flex items-center gap-3">
                <img alt="User" class="w-10 h-10 rounded-xl object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqGxeOGkHmDHk0HVtAbTZcLBnIQAfV9OMvs7WP6a6BZ0QuFRzS5uzDARvlWpmIeCW_9u4AA7rLvbtr5f98c08autxSD5Nd24-8IAbvycVK4cGdKe9oTjbwuZ0AIXLPTM0rU55Zya4AGEl1Sf53FUww97u6iFSCjJGK3aorKX1dT5N068qXk1z5WF37mJ0F5YSR40M7_Bf_JWWFfDIlhy-9gtybAbIkr7YrmNdH5KH0MN47i76gm4rX21pMUxNzVhvp1J-uPTjWJro" />
                <div>
                    <p class="text-[10px] font-bold">New Friend!</p>
                    <p class="text-[8px] text-slate-500">Alex just joined</p>
                </div>
            </div>
        </div>
        <div
            class="hidden md:block absolute -left-20 bottom-10 bg-white dark:bg-slate-800 p-4 rounded-3xl shadow-xl -rotate-6 scale-90 border border-slate-100 dark:border-slate-700">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">favorite</span>
                <span class="text-xs font-bold">2.4k Likes</span>
            </div>
        </div>
    </main>
    <button
        class="fixed bottom-6 right-6 w-12 h-12 rounded-full bg-white dark:bg-slate-800 shadow-xl flex items-center justify-center text-slate-600 dark:text-slate-300 border border-slate-100 dark:border-slate-700 z-50"
        onclick="document.documentElement.classList.toggle('dark')">
        <span class="material-symbols-outlined">dark_mode</span>
    </button>

</body>

</html>
