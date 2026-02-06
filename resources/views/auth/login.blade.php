<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LINKUP | Welcome Back</title>
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
            -webkit-backdrop-filter: blur(16px) saturate(180%);
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
                        'DEFAULT': '1rem',
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
        <div class="glass-card rounded-3xl shadow-2xl p-8 md:p-12 flex flex-col items-center">
            <div class="mb-10 text-center">
                <div
                    class="bg-primary w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 mb-4 mx-auto rotate-12">
                    <span class="material-symbols-outlined text-white text-3xl font-bold">share</span>
                </div>
                <h1 class="text-3xl font-bold tracking-tight text-slate-900">LINKUP</h1>
                <p class="text-slate-500 mt-2 font-medium">Connect. Share. Grow.</p>
            </div>
            <div class="w-full">
                <h2 class="text-2xl font-bold text-slate-800 mb-8">Welcome Back</h2>
                <form class="space-y-5" method="POST" action="{{ route('submitLogin') }}">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2 ml-1">Email Address</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">mail</span>
                            <input name="email"
                                class="w-full pl-12 pr-4 py-4 bg-white/50 border-white focus:border-primary focus:ring-primary/20 rounded-2xl transition-all outline-none"
                                placeholder="name@example.com" required="" type="email" />
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2 ml-1">
                            <label class="text-sm font-semibold text-slate-700">Password</label>
                            <a class="text-xs font-bold text-primary hover:underline" href="#">Forgot?</a>
                        </div>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
                            <input name="password"
                                class="w-full pl-12 pr-4 py-4 bg-white/50 border-white focus:border-primary focus:ring-primary/20 rounded-2xl transition-all outline-none"
                                placeholder="••••••••" required="" type="password" />
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-1">
                        <input class="rounded text-primary focus:ring-primary border-slate-300" id="remember"
                            type="checkbox" />
                        <label class="text-sm text-slate-600 font-medium cursor-pointer" for="remember">Keep me signed
                            in</label>
                    </div>
                    <button
                        class="w-full bg-primary hover:bg-[#ff3355] text-white font-bold py-4 rounded-2xl shadow-lg shadow-primary/25 transition-all transform active:scale-[0.98] mt-4"
                        type="submit">
                        Sign In
                    </button>
                </form>
                <div class="relative my-10">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-transparent text-slate-400 font-medium">Or continue with</span>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <button
                        class="flex items-center justify-center py-3 px-4 bg-white/80 hover:bg-white border border-white rounded-2xl transition-all shadow-sm">
                        <img alt="Google" class="w-5 h-5"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuARU2ZW7MvAF9--SaJiGN5XwaZWlw9wG5bhs-geyXPYTz_AElbZw9-pa6dl0v_wOHi6dV_cUOODh5PyNzBIAtx0RVxQiNtf72skLDk71qEwXC4JtoCvoaBVHPbLK71AJrD0BzAeoONJm7GMbL-62MdACNnazkS3nCUCzNHbBb0wsvTYPgxfNlvjnR-uZa1qLw4VvprY8al_hTBTbXEwGiA7xNQZEN-pnBvKG4qZpxXVMR0071FEjsxQFQT0uHTG1bkFECPyNdS8o5k" />
                    </button>
                    <button
                        class="flex items-center justify-center py-3 px-4 bg-white/80 hover:bg-white border border-white rounded-2xl transition-all shadow-sm">
                        <img alt="LinkedIn" class="w-5 h-5"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdK-s2xBulT8nfw7ezcTcvlyxRo9mpwrY9Y-ZzXg-8YbL9ku_mpYCHcJy1xd3lrqppSwoFOR0ceM9NicE8ZC9I3DgSxap9hYq6uaptFighpQirujlRKixczItZWoUX3MH_IrlZnEhY09xeHBfa3Q45hvP5BxWBAy0D49n8IDYQS91K1KSI5NlWOBV3Ch6vGUEXtGdn74wv3HxsMK9z6_shmR_e206UEw4VyR8411bQ2k2VnkwEn5g8pEU1fDwHPL7V3YKLDiPuM4E" />
                    </button>
                    <button
                        class="flex items-center justify-center py-3 px-4 bg-white/80 hover:bg-white border border-white rounded-2xl transition-all shadow-sm">
                        <img alt="Facebook" class="w-5 h-5"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXUkwZf9DHC143FCIJmXoXzWCNvTxsS68polNsngGwvon_mXmvchMdpFsoOS2y8-R89BAitSXsdvf3WI9TONmZBhlmsC3G2VBwYvGpC2CaTgY-iixCQJaPhRJoji2GZmgwgP2gS9vjJC05cmi17-Qg-395hTaF_I91B0tgrCmRqAwy953bnfHm6EYCM_Lk6D2qlky8lNedgjZOonTJh1QgtwgtWpKNuARu9cikd4v_id4Vu0B5aj2rEeWWC8Irabxdh3Q_dH8uJK0" />
                    </button>
                </div>
                <p class="text-center mt-10 text-slate-600 font-medium">
                    New to LINKUP?
                    <a class="text-primary font-bold hover:underline ml-1" href="{{ route('register') }}">Create account</a>
                </p>
            </div>
        </div>
        <div class="mt-8 flex justify-center gap-6 text-xs font-semibold text-slate-400 uppercase tracking-widest">
            <a class="hover:text-primary transition-colors" href="#">Privacy</a>
            <a class="hover:text-primary transition-colors" href="#">Terms</a>
            <a class="hover:text-primary transition-colors" href="#">Help</a>
        </div>
    </div>

</body>

</html>
