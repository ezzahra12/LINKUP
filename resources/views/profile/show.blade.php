<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LINKUP | User Profile</title>
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

        .card-soft-blue {
            @apply bg-[#eef2ff] dark:bg-slate-800/50;
        }

        .card-soft-beige {
            @apply bg-[#fffbeb] dark:bg-slate-800/50;
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
                          <img
                class="w-full h-full object-cover transition-transform group-hover:scale-110"
                src="{{asset('storage/' . auth()->user()->image_path)}}"
            /> </div>
                    <div
                        class="absolute -top-2 -left-2 bg-gradient-to-tr from-blue-400 to-purple-500 w-10 h-10 rounded-2xl flex items-center justify-center text-white shadow-lg">
                        <span class="material-symbols-rounded text-xl">palette</span>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">{{"@". auth()->user()->pseudo}}</p>
                </div>
            </div>
            <nav class="flex flex-col gap-2">
                <a class="flex items-center gap-4 px-6 py-4 hover:bg-white dark:hover:bg-slate-800 rounded-3xl transition-all group"
                    href="{{ route('home') }}">
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
            </nav>
        </aside>
        <main class="flex-1 flex flex-col gap-8">

            <section class="bg-white dark:bg-slate-800 rounded-3xl overflow-hidden shadow-sm">
                <div class="h-64 relative">
                    <img alt="Cover" class="w-full h-full object-cover"
                        src="" />
                    <button
                        class="absolute top-4 right-4 bg-white/20 hover:bg-white/40 backdrop-blur-md text-white p-2 rounded-full transition-all">
                        <span class="material-symbols-rounded">edit</span>
                    </button>
                </div>
                <div class="px-8 pb-8">
                    <div class="flex flex-col md:flex-row items-end -mt-16 gap-6 relative z-10">
                        <div
                            class="w-40 h-40 rounded-full border-4 border-white dark:border-slate-800 overflow-hidden shadow-2xl bg-white">
                           <img
                class="w-full h-full object-cover transition-transform group-hover:scale-110"
                src="{{asset('storage/' . auth()->user()->image_path)}}"
            /></div>
                        <div class="flex-1 mb-2">
                            <h1 class="text-3xl font-bold">{{auth()->user()->name}}</h1>
                            {{-- <p class="text-slate-500 dark:text-slate-400">Digital Artist &amp; UI/UX Designer</p> --}}
                        </div>
                        <div class="flex gap-3 mb-2">
                            <a href="{{ route('profile.edit', ["user" => auth()->user()->id]) }}"
                                class="bg-primary text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-primary/30 hover:scale-105 transition-transform flex items-center gap-2">
                                <span class="material-symbols-rounded">edit</span>
                                Edit profile
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-t dark:border-slate-700 px-8 py-4 flex gap-12">
                    <div class="flex gap-2 items-baseline">
                        <span class="text-xl font-bold">124</span>
                        <span class="text-slate-500 text-sm">Posts</span>
                    </div>
                    <div class="flex gap-2 items-baseline">
                        <span class="text-xl font-bold">12.5k</span>
                        <span class="text-slate-500 text-sm">Followers</span>
                    </div>
                    <div class="flex gap-2 items-baseline">
                        <span class="text-xl font-bold">842</span>
                        <span class="text-slate-500 text-sm">Following</span>
                    </div>
                </div>
            </section>
            <section class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm">
  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm">
  @csrf
  <div class="flex gap-4">
    <img alt="User Avatar" class="w-12 h-12 rounded-full object-cover shrink-0" src="{{ auth()->user()->profile_photo_url ?? 'default-avatar.png' }}"/>
    <div class="flex-1 flex flex-col gap-4">
      <div class="relative">
        <textarea
          name="content"
          class="w-full bg-slate-50 dark:bg-slate-900 border-none rounded-2xl py-3 px-4 text-slate-700 dark:text-slate-200 focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-slate-400"
          placeholder="What's on your mind?"
        ></textarea>
      </div>
      <div class="flex items-center justify-between">
        <div class="flex gap-2">
          <input type="file" name="image" accept="image/*" class="hidden" id="imageInput">
          <label for="imageInput" class="flex items-center gap-2 px-4 py-2 hover:bg-slate-50 dark:hover:bg-slate-700 rounded-xl transition-colors text-slate-500 cursor-pointer">
            <span class="material-symbols-rounded text-primary">image</span>
            <span class="text-sm font-medium">Photo</span>
          </label>

          <input type="file" name="video" accept="video/*" class="hidden" id="videoInput">
          <label for="videoInput" class="flex items-center gap-2 px-4 py-2 hover:bg-slate-50 dark:hover:bg-slate-700 rounded-xl transition-colors text-slate-500 cursor-pointer">
            <span class="material-symbols-rounded text-blue-400">videocam</span>
            <span class="text-sm font-medium">Video</span>
          </label>
        </div>
        <button type="submit" class="bg-primary text-white px-8 py-2.5 rounded-full font-bold shadow-lg shadow-primary/20 hover:scale-105 transition-transform">
          Post
        </button>
      </div>
    </div>
  </div>
</form>

</section>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-4 flex flex-col gap-8">
                    <section class="card-soft-blue p-8 rounded-3xl shadow-sm">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <span class="material-symbols-rounded text-primary">person</span>
                            About Me
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                           {{ auth()->user()->bio }}
                        </p>
                        <div class="mt-6 flex flex-col gap-4">
                            <div class="flex items-center gap-3 text-sm text-slate-500">
                                <span class="material-symbols-rounded text-blue-500">location_on</span>
                                Saint-Petersburg, Russia
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-500">
                                <span class="material-symbols-rounded text-purple-500">calendar_month</span>
                                Joined {{ auth()->user()->created_at->format("M Y") }}
                            </div>
                        </div>
                    </section>
                    <section class="card-soft-beige p-8 rounded-3xl shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold flex items-center gap-2">
                                <span class="material-symbols-rounded text-primary">image</span>
                                Photos
                            </h3>
                            <button class="text-primary text-sm font-bold">View All</button>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-sm">
                                <img alt="p1" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpTjporG7cU2QteEUBx7R8lOGbTsyUhnPd1vgRVKv1MuLsVz90A5Ipvqva2fg_NUU3RSxG4jDEQzPqnbpWl7Oee4E3f5WvCmMyQ1Jcl0ENfiW4mKRSdNCUELcArD5Ar7i_KdtemkM0mARCkEqEIGA0_EiVf1lYg5rlaoIPW6wkxuwIS7s6fHaMyUGsw9ZIwROhfTqw8GP81sEHHFTjchf3EdlllYDTjmfb5wmGdlGvM8v-8XaBYgRq1xeXebnz3U1SKMfMSRrRdJg" />
                            </div>
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-sm">
                                <img alt="p2" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqGxeOGkHmDHk0HVtAbTZcLBnIQAfV9OMvs7WP6a6BZ0QuFRzS5uzDARvlWpmIeCW_9u4AA7rLvbtr5f98c08autxSD5Nd24-8IAbvycVK4cGdKe9oTjbwuZ0AIXLPTM0rU55Zya4AGEl1Sf53FUww97u6iFSCjJGK3aorKX1dT5N068qXk1z5WF37mJ0F5YSR40M7_Bf_JWWFfDIlhy-9gtybAbIkr7YrmNdH5KH0MN47i76gm4rX21pMUxNzVhvp1J-uPTjWJro" />
                            </div>
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-sm">
                                <img alt="p3" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA26kO0bfL_VvY91kummxKLzj57q0W6Pn6Jkr_c4J-4AAI1bOrQPxp5ZAgSMKCe5UhRi7BWDp-obyUW4-LtBq6xa2kOEz9drtqxAhUfkPSbLHHJkhdFOKTH-njph_XSV05yerxd78GkZdcqaM9wfqGPFZPc66OuWznjPX6kk-K7TAI4Ae7ucewpAvAdWw6EP0IHfx_WZf1rbCPMElYJiVuHQ1lWVM2OCbN9JzGOhB_PdOZRnHP9QVXSD4PPuult9CJNlxdP0Eklwps" />
                            </div>
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-sm relative">
                                <img alt="p4" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvrJ-frotcvYknZcPICtIttOVoNXX6fjBfbzJ4p4ny0Jg1VqyLVDTqeDteUaz0ix6XmTJyzdyGjylMmCSiWwQQDwOWxbttUc7AiENOuTHFXRwA3KFXa_Mcdnb1rf-yZ2pZklFGE82iw4bVYw_o-N7r1ecj5JDBHKK5KCFxQgOmrOh8klzDsW8muzP5hkcpgcLAm1WSwkUnVWyXHNo7pBmx23tYLUIJdvmPdQZbozQqx9mI8ULCbDXzeatIEte3sCwu95RdsNAuU-A" />
                                <div
                                    class="absolute inset-0 bg-black/40 flex items-center justify-center text-white font-bold text-lg">
                                    +12</div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="lg:col-span-8 flex flex-col gap-8">

    @foreach($posts as $post)
        <article class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-4">
                    <img alt="User" class="w-12 h-12 rounded-full object-cover"
                        src="{{ asset('storage/' . Auth::user()->image_path) }}" />
                    <div>
                        <h4 class="font-bold">{{ Auth::user()->name }}</h4>
                        <p class="text-xs text-slate-500">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <button class="text-slate-400 hover:text-primary">
                    <span class="material-symbols-rounded">more_horiz</span>
                </button>
            </div>

            @if($post->content)
                <p class="text-slate-700 dark:text-slate-200 mb-6 leading-relaxed">
                    {{ $post->content }}
                </p>
            @endif

            @if($post->image_path)
                <div class="rounded-3xl overflow-hidden mb-6 shadow-lg">
                    <img alt="Post media" class="w-full h-80 object-cover"
                        src="{{ asset('storage/' . $post->image_path) }}" />
                </div>
            @endif

            @if($post->video_path)
                <div class="rounded-3xl overflow-hidden mb-6 shadow-lg">
                    <video class="w-full h-80 object-cover" controls>
                        <source src="{{ asset('storage/' . $post->video_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endif

            <div class="flex items-center justify-between pt-4 border-t dark:border-slate-700">
                <div class="flex gap-6">
                    <button class="like-btn flex items-center gap-2 text-slate-500 hover:text-primary"
        data-post-id="{{ $post->id }}">
    <span class="material-symbols-rounded">
        {{ $post->isLikedBy(Auth::user()) ? 'favorite' : 'favorite_border' }}
    </span>
    <span class="likes-count">{{ $post->likes()->count() }}</span>
</button>

                    <button
                        class="flex items-center gap-2 text-slate-500 hover:text-primary group transition-colors">
                        <span class="material-symbols-rounded">chat_bubble</span>
                        <span class="font-bold text-sm">{{ $post->comments_count ?? 0 }}</span>
                    </button>
                </div>
                <button class="text-slate-500 hover:text-primary transition-colors">
                    <span class="material-symbols-rounded">share</span>
                </button>
            </div>
        </article>
         </article>
         @endforeach





                    <article class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-4">
                                <img alt="User" class="w-12 h-12 rounded-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCg2XB9rsx-exdVAMf9jNvQgcHeQIqG1VLZCf7UgMu01XDRNciIAxMzzAhF5IEsXz-d7Aij1qZrAucZpqTHrvQaw8H-wNoCO-gQlNToHYqy4FQCU5PYQ3-Li77mwhrjhze0CUD3yxduHzgGC0fNQ7vnLOPYAR-7Lq1s3hn60TZ3RBN24YO3uK3SVhPYf8AByPGjmdFdzwzxszdJD8sRLiO5DM4hJ4UCeOaEyI1ADA3Jirw2C9_rabbnL2p4cyZs3-pfO_Oin8ykcUI" />
                                <div>
                                    <h4 class="font-bold">Bogdan Nikitin</h4>
                                    <p class="text-xs text-slate-500">Yesterday at 11:30 PM</p>
                                </div>
                            </div>
                            <button class="text-slate-400 hover:text-primary"><span
                                    class="material-symbols-rounded">more_horiz</span></button>
                        </div>
                        <p class="text-slate-700 dark:text-slate-200 mb-6 leading-relaxed">
                            Golden hour in the city is always something special. 🌆
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t dark:border-slate-700">
                            <div class="flex gap-6">
                                <button class="flex items-center gap-2 text-primary group transition-colors">
                                    <span class="material-symbols-rounded fill-current">favorite</span>
                                    <span class="font-bold text-sm">542</span>
                                </button>
                                <button
                                    class="flex items-center gap-2 text-slate-500 hover:text-primary group transition-colors">
                                    <span class="material-symbols-rounded">chat_bubble</span>
                                    <span class="font-bold text-sm">42</span>
                                </button>
                            </div>
                            <button class="text-slate-500 hover:text-primary transition-colors">
                                <span class="material-symbols-rounded">share</span>
                            </button>
                        </div>
                    </article>
                </div>
            </div>
        </main>
        <aside class="w-80 flex-shrink-0 hidden lg:flex flex-col gap-8 sticky top-8 h-[calc(100vh-4rem)]">
            <section class="flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold">Suggestions</h2>
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
                    <div class="relative min-w-[120px] h-48 rounded-3xl overflow-hidden group shrink-0">
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
        <button class="text-slate-400"><span class="material-symbols-rounded">settings</span></button>
    </div>
<script>
document.querySelectorAll('.like-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const postId = this.dataset.postId;
        const span = this.querySelector('span.likes-count');

        fetch(`/posts/${postId}/like`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            span.textContent = data.likes_count;
            this.querySelector('span.material-symbols-rounded').textContent = data.liked ? 'favorite' : 'favorite_border';
        });
    });
});
</script>
</body>

</html>
