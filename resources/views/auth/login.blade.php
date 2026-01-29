<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LINKUP | Welcome Back</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <style type="text/tailwindcss">
        :root {
            --primary: #ff4d6d;
            --background-light: #f0f2f5;
        }
        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--background-light);
            background-image:
                radial-gradient(at 0% 0%, rgba(255, 77, 109, 0.1) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(255, 77, 109, 0.1) 0px, transparent 50%);
        }
        .glass-card {
            backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#ff4d6d",
                    },
                    borderRadius: {
                        '2xl': '1.5rem',
                        '3xl': '2rem',
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen flex items-center justify-center p-6">

<div class="w-full max-w-[480px]">
    <div class="glass-card rounded-3xl shadow-2xl p-8 md:p-12">

        <!-- Logo -->
        <div class="mb-10 text-center">
            <div class="bg-primary w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 mb-4 mx-auto rotate-12">
                <span class="material-symbols-outlined text-white text-3xl">share</span>
            </div>
            <h1 class="text-3xl font-bold text-slate-900">LINKUP</h1>
            <p class="text-slate-500 mt-2 font-medium">Connect. Share. Grow.</p>
        </div>

        <h2 class="text-2xl font-bold text-slate-800 mb-8">Welcome Back</h2>

        <!-- Session status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full pl-12 pr-4 py-4 rounded-2xl bg-white/50 border border-white focus:border-primary focus:ring-primary/20"
                        placeholder="name@example.com"
                    >
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-sm"/>
            </div>

            <!-- Password -->
            <div>
                <div class="flex justify-between mb-2">
                    <label class="text-sm font-semibold text-slate-700">Password</label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-xs font-bold text-primary hover:underline">
                            Forgot?
                        </a>
                    @endif
                </div>

                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full pl-12 pr-4 py-4 rounded-2xl bg-white/50 border border-white focus:border-primary focus:ring-primary/20"
                        placeholder="••••••••"
                    >
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-sm"/>
            </div>

            <!-- Remember -->
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember" class="rounded text-primary focus:ring-primary">
                <span class="text-sm text-slate-600 font-medium">Keep me signed in</span>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-primary hover:bg-[#ff3355] text-white font-bold py-4 rounded-2xl shadow-lg shadow-primary/25 transition">
                Sign In
            </button>
        </form>

        <!-- Register -->
        <p class="text-center mt-10 text-slate-600 font-medium">
            New to LINKUP?
            <a href="{{ route('register') }}" class="text-primary font-bold hover:underline ml-1">
                Create account
            </a>
        </p>
    </div>
</div>

</body>
</html>
