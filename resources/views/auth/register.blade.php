<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>LINKUP | Sign Up</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

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
    background-image:
        radial-gradient(var(--primary) 0.5px, transparent 0.5px),
        radial-gradient(var(--primary) 0.5px, #f0f2f5 0.5px);
    background-size: 20px 20px;
    background-position: 0 0, 10px 10px;
    opacity: 0.1;
}
.dark .bg-pattern {
    background-color: #0f172a;
    background-image:
        radial-gradient(var(--primary) 0.5px, transparent 0.5px),
        radial-gradient(var(--primary) 0.5px, #0f172a 0.5px);
    opacity: 0.05;
}
</style>

<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: { primary: "#ff4d6d" },
            borderRadius: { '3xl': '2rem' }
        }
    }
}
</script>
</head>

<body class="bg-[#f0f2f5] dark:bg-[#0f172a] min-h-screen flex items-center justify-center relative overflow-hidden">

<div class="absolute inset-0 bg-pattern"></div>

<main class="relative z-10 w-full max-w-md p-4">
<div class="glass-container rounded-3xl shadow-2xl p-6">


<!-- Header -->
<div class="text-center mb-10">
    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto shadow-lg shadow-primary/30 mb-4">
        <span class="material-symbols-outlined text-white text-4xl">link</span>
    </div>
    <h1 class="text-4xl font-bold">LINKUP</h1>
    <p class="text-slate-500 dark:text-slate-400 mt-2">Join the vibrant social circle</p>
</div>

<form method="POST" action="{{ route('register') }}" class="space-y-6">
@csrf

<!-- Name -->
<div>
    <label class="text-sm font-semibold ml-1">Full Name</label>
    <div class="relative">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">person</span>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
            class="w-full pl-12 pr-4 py-3 text-sm
 rounded-2xl bg-white/50 dark:bg-slate-800/50 ring-1 ring-slate-200 dark:ring-slate-700 focus:ring-2 focus:ring-primary outline-none"
            placeholder="John Doe">
    </div>
    <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500 text-sm"/>
</div>
<div>
    <label class="text-sm font-semibold">Display Name</label>
    <input
        name="display_name"
        value="{{ old('display_name') }}"

        class="w-full p-4 rounded-xl border bg-white/50"
        placeholder="How your name appears publicly"
    >
</div>
<!-- Email -->
<div>
    <label class="text-sm font-semibold ml-1">Email Address</label>
    <div class="relative">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="w-full pl-12 pr-4 py-3 text-sm
 rounded-2xl bg-white/50 dark:bg-slate-800/50 ring-1 ring-slate-200 dark:ring-slate-700 focus:ring-2 focus:ring-primary outline-none"
            placeholder="name@example.com">
    </div>
    <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-sm"/>
</div>

<!-- Password -->
<div>
    <label class="text-sm font-semibold ml-1">Password</label>
    <div class="relative">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
        <input
            type="password"
            name="password"
            required
            class="w-full pl-12 pr-4 py-3 text-sm
 rounded-2xl bg-white/50 dark:bg-slate-800/50 ring-1 ring-slate-200 dark:ring-slate-700 focus:ring-2 focus:ring-primary outline-none"
            placeholder="••••••••">
    </div>
    <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-sm"/>
</div>

<!-- Confirm Password -->
<div>
    <label class="text-sm font-semibold ml-1">Confirm Password</label>
    <input
        type="password"
        name="password_confirmation"
        required
        class="w-full px-4 py-4 rounded-2xl bg-white/50 dark:bg-slate-800/50 ring-1 ring-slate-200 dark:ring-slate-700 focus:ring-2 focus:ring-primary outline-none"
        placeholder="••••••••">
</div>


<button type="submit"
class="w-full bg-primary hover:bg-[#ff3355] text-white font-bold py-4 rounded-2xl shadow-lg shadow-primary/30 transition">
Register
</button>
</form>

<p class="text-center mt-8 text-slate-500 dark:text-slate-400">
Already have an account?
<a href="{{ route('login') }}" class="text-primary font-bold hover:underline ml-1">
Login here
</a>
</p>

</div>
</main>

<button onclick="document.documentElement.classList.toggle('dark')"
class="fixed bottom-6 right-6 w-12 h-12 rounded-full bg-white dark:bg-slate-800 shadow-xl flex items-center justify-center">
<span class="material-symbols-outlined">dark_mode</span>
</button>

</body>
</html>
