<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mony Pich San | Software Engineer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-slate-200 font-sans antialiased">

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-slate-900/90 backdrop-blur-md text-slate-100 border-b border-slate-800 shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- NEW BRAND LOGO -->
            <a href="#home" class="flex items-center gap-3 group">
                <div class="flex items-center justify-center w-9 h-9 rounded-lg bg-indigo-600 text-white font-bold text-xl group-hover:bg-indigo-500 transition-all duration-300 shadow-lg shadow-indigo-500/30 group-hover:shadow-indigo-500/50 group-hover:-translate-y-0.5">
                    P
                </div>
                <span class="font-bold text-xl tracking-wide text-slate-100 group-hover:text-indigo-400 transition-colors duration-300">MonyPich</span>
            </a>

            <!-- Desktop Menu (Hidden on Mobile) -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-sm">
                <!-- Polished Page Links -->
                <div class="flex space-x-8">
                    <a href="#about" class="relative group py-1 text-slate-300 hover:text-indigo-400 transition-colors duration-300">
                        <span>About</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-500 transition-all duration-300 group-hover:w-full rounded-full"></span>
                    </a>
                    <a href="#projects" class="relative group py-1 text-slate-300 hover:text-indigo-400 transition-colors duration-300">
                        <span>Projects</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-500 transition-all duration-300 group-hover:w-full rounded-full"></span>
                    </a>
                    <a href="#education" class="relative group py-1 text-slate-300 hover:text-indigo-400 transition-colors duration-300">
                        <span>Education</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-500 transition-all duration-300 group-hover:w-full rounded-full"></span>
                    </a>
                    <a href="#experience" class="relative group py-1 text-slate-300 hover:text-indigo-400 transition-colors duration-300">
                        <span>Experience</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-500 transition-all duration-300 group-hover:w-full rounded-full"></span>
                    </a>
                    <a href="#contact" class="relative group py-1 text-slate-300 hover:text-indigo-400 transition-colors duration-300">
                        <span>Contact</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-500 transition-all duration-300 group-hover:w-full rounded-full"></span>
                    </a>
                </div>

                <!-- Divider -->
                <div class="h-6 w-px bg-slate-700"></div>

                <!-- Desktop Social Icons -->
                <div class="flex space-x-5 items-center">
                    <a href="https://github.com/SeverovX" target="_blank" class="text-slate-400 hover:text-indigo-400 hover:scale-110 transition-all duration-300" title="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://www.facebook.com/Mony.Pich.KH/" target="_blank" class="text-slate-400 hover:text-indigo-400 hover:scale-110 transition-all duration-300" title="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="https://t.me/Sanmonypich" target="_blank" class="text-slate-400 hover:text-indigo-400 hover:scale-110 transition-all duration-300" title="Telegram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.06-.2-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.62-.2-1.12-.31-1.1-.66.01-.18.27-.36.78-.55 3.05-1.33 5.09-2.21 6.12-2.64 2.91-1.22 3.51-1.43 3.91-1.44.09 0 .28.02.4.11.1.08.13.19.14.3z"/></svg>
                    </a>
                    <a href="mailto:pich.devkh@gmail.com" class="text-slate-400 hover:text-indigo-400 hover:scale-110 transition-all duration-300" title="Email Me">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button (Hamburger) -->
            <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-indigo-400 focus:outline-none transition">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Dropdown Menu (With Socials) -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-b border-slate-800 shadow-xl overflow-hidden">
            <div class="px-6 py-4 flex flex-col space-y-4">
                <a href="#about" class="mobile-link text-lg font-medium text-slate-300 hover:text-indigo-400 transition-colors">About</a>
                <a href="#projects" class="mobile-link text-lg font-medium text-slate-300 hover:text-indigo-400 transition-colors">Projects</a>
                <a href="#education" class="mobile-link text-lg font-medium text-slate-300 hover:text-indigo-400 transition-colors">Education</a>
                <a href="#experience" class="mobile-link text-lg font-medium text-slate-300 hover:text-indigo-400 transition-colors">Experience</a>
                <a href="#contact" class="mobile-link text-lg font-medium text-slate-300 hover:text-indigo-400 transition-colors">Contact</a>

                <!-- Divider -->
                <div class="h-px w-full bg-slate-700/50 my-2"></div>

                <!-- Mobile Social Grid -->
                <div class="flex items-center justify-around py-3">
                    <a href="https://github.com/SeverovX" target="_blank" class="text-slate-400 hover:text-indigo-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg></a>
                    <a href="https://www.facebook.com/Mony.Pich.KH/" target="_blank" class="text-slate-400 hover:text-indigo-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg></a>
                    <a href="https://t.me/Sanmonypich" target="_blank" class="text-slate-400 hover:text-indigo-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.06-.2-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.62-.2-1.12-.31-1.1-.66.01-.18.27-.36.78-.55 3.05-1.33 5.09-2.21 6.12-2.64 2.91-1.22 3.51-1.43 3.91-1.44.09 0 .28.02.4.11.1.08.13.19.14.3z"/></svg></a>
                    <a href="mailto:pich.devkh@gmail.com" class="text-slate-400 hover:text-indigo-400 transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 1. Angkor Wat Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center bg-cover bg-center bg-fixed" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Ankor_Wat_temple.jpg/1920px-Ankor_Wat_temple.jpg');">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-950/50 to-slate-950/20"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center text-slate-100 mt-16 drop-shadow-2xl">
            <span class="inline-block px-4 py-1.5 bg-indigo-500/30 text-white border border-indigo-500/50 rounded-full text-xs font-semibold tracking-wider uppercase mb-4 backdrop-blur-md shadow-lg">
                Software Engineer
            </span>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6 text-white drop-shadow-xl">
                Building Strong Foundations <br>
                <span class="text-indigo-400">Inspired by Timeless Architecture</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-100 max-w-2xl mx-auto leading-relaxed mb-8 drop-shadow-md font-medium">
                Welcome! I'm Mony Pich, a developer specializing in backend logic, client-server architecture, and solving complex problems with modern tech.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#about" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-lg shadow-lg transition">Discover My Journey</a>
            </div>
        </div>
    </section>

    <!-- 1.5 About Me & Tech Stack -->
    <section id="about" class="py-24 relative bg-cover bg-center bg-fixed border-t border-slate-800" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/20/03_Prasat_Preah_Vihear-nX-06513.jpg');">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-900/85 to-slate-950"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Text Story Side -->
                <div class="drop-shadow-xl">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Who I Am</h2>
                    <p class="text-slate-200 text-lg leading-relaxed mb-8 font-medium">
                        Hello! I'm <span class="text-indigo-400 font-bold">Mony Pich San</span> (traditionally written as <span class="text-indigo-400 font-bold">San MonyPich</span> in Khmer), a 3rd-year Software Engineering student at BELTEI International University.
                    </p>

                    <div class="space-y-6 mb-8">
                        <div>
                            <h4 class="text-indigo-400 font-bold text-lg mb-2 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                The Tech & Hardware Guy
                            </h4>
                            <p class="text-slate-300 leading-relaxed text-sm md:text-base">
                                My journey started with physical hardware. Fluent in diagnosing PCs and understanding how CPUs and GPUs communicate, I bring a unique, bottom-up perspective to software. From configuring networks and virtual machines to building REST APIs in Laravel and C# client-server apps, I love making complex systems talk.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-indigo-400 font-bold text-lg mb-2 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                The Team Leader
                            </h4>
                            <p class="text-slate-300 leading-relaxed text-sm md:text-base">
                                Beyond the screen, I have a strong track record of leading university project teams. I excel at analyzing a project, breaking it down, and delegating tasks based on each member's specific strengths. I am highly supportive of my teammates, but when the deadline approaches, I switch into serious mode to ensure we cross the finish line successfully.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-indigo-400 font-bold text-lg mb-2 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Beyond the Code
                            </h4>
                            <p class="text-slate-300 leading-relaxed text-sm md:text-base">
                                I might look a bit serious or introverted at first glance, but don't judge a book by its cover! Once you get to know me, I'm highly approachable and love a good laugh (I appreciate all humor, from lighthearted to dark and sarcastic). I'm usually the one sparking conversations about the latest tech trends, gaming news, or recent football matches.
                            </p>
                        </div>
                    </div>

                    <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 hover:bg-indigo-500 rounded-lg text-white font-medium transition shadow-xl">
                        Let's Work Together
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                <!-- NEW: Modern UI Badge Grid (Mobile Friendly) -->
                <div class="bg-slate-900/80 backdrop-blur-md p-8 rounded-2xl border border-slate-700 shadow-2xl h-fit">
                    <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        Technical Arsenal
                    </h3>

                    <div class="space-y-8">

                        <!-- Programming & Web -->
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Programming & Web</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/csharp/csharp-original.svg" class="w-5 h-5 object-contain" alt="C#">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">C# (.NET/WinForms)</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" class="w-5 h-5 object-contain" alt="C++">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">C++</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" class="w-5 h-5 object-contain" alt="Java">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">Java</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" class="w-5 h-5 object-contain" alt="PHP">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">PHP</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" class="w-5 h-5 object-contain" alt="Laravel">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">Laravel</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" class="w-5 h-5 object-contain" alt="React">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">React (Basics)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Databases & Servers -->
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Databases & Servers</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">SQL Server</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" class="w-5 h-5 object-contain" alt="MySQL">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">MySQL</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">XAMPP / WAMP</span>
                                </div>
                            </div>
                        </div>

                        <!-- IT, Hardware & Networking -->
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">IT, Hardware & Networking</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m14-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">Hardware Diagnostics</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h14a2 2 0 002-2v-2a2 2 0 00-2-2H5zM5 19a2 2 0 00-2 2v2a2 2 0 002 2h14a2 2 0 002-2v-2a2 2 0 00-2-2H5z"/></svg>
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">Virtual Machines</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a8.966 8.966 0 01-5.965-2.258m0 0A8.988 8.988 0 013 12m0 0A8.988 8.988 0 018.035 3.742m0 0A8.966 8.966 0 0112 3m0 0a8.966 8.966 0 015.965 2.258m0 0A8.988 8.988 0 0121 12z"/></svg>
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">IP Config & Remote</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">Client-Server Arch</span>
                                </div>
                            </div>
                        </div>

                        <!-- Languages -->
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Languages & Soft Skills</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://flagcdn.com/kh.svg" class="w-5 h-auto rounded-[2px]" alt="Cambodia">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">Khmer (Native)</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-2 bg-slate-800/80 border border-slate-600 rounded-lg hover:bg-slate-700 hover:border-indigo-500/50 transition-colors shadow-sm cursor-default">
                                    <img src="https://flagcdn.com/gb.svg" class="w-5 h-auto rounded-[2px]" alt="English">
                                    <span class="text-xs md:text-sm font-semibold text-slate-200">English (Proficient)</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>

    <!-- 2. Ta Prohm Projects Section -->
    <section id="projects" class="py-24 relative bg-cover bg-center bg-fixed border-t border-slate-800" style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhqoWqz_MBg-clu8U2aIoMdhpVQ08hMZ0j_0u2T-roOTN7dXbUNH3SJoD-JA5aaUl-NaOlbxDaP8tn4y1K2aFdCAND4BR7UMNrBP_vZf6xWUfxV2a4yb3Wv6jO-lWnGVcYWisfvtAlhQ2CbnkMPbiKaK3bNXTTco3WjSBHY92ghSTmH5s98J2mkKTc9/s1282/2.jpg');">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-900/60 to-slate-950"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 drop-shadow-xl">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Featured Projects</h2>
                <p class="text-lg text-slate-200 max-w-2xl mx-auto font-medium">Built from the ground up, much like the intricate root structures of Ta Prohm.</p>
            </div>

            <!-- UPDATED 4 PROJECTS GRID WITH REAL IMAGES -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Project 1: PC Parts Inventory System -->
                <div class="bg-slate-900/90 backdrop-blur-md rounded-xl overflow-hidden shadow-xl transition-shadow border border-slate-700 flex flex-col hover:border-indigo-500/50">
                    <div class="h-48 bg-slate-950 relative overflow-hidden border-b border-slate-700">
                        <img src="{{ asset('images/pc-parts.jpg') }}" alt="PC Hardware Dashboard" class="w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-2">Desktop App</span>
                        <h3 class="text-xl font-bold text-slate-100 mb-2">PC Parts Inventory System</h3>
                        <p class="text-slate-400 text-sm mb-4 flex-grow">A robust Windows Forms application designed to track, manage, and inventory computer hardware components efficiently.</p>
                        <a href="https://github.com/SeverovX/pc-parts-inventory-csharp" target="_blank" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 text-sm font-bold mb-4 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            View on GitHub
                        </a>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">C#</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">WinForms</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">SQL Server</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2: C# Client System -->
                <div class="bg-slate-900/90 backdrop-blur-md rounded-xl overflow-hidden shadow-xl transition-shadow border border-slate-700 flex flex-col hover:border-indigo-500/50">
                    <div class="h-48 bg-slate-950 relative overflow-hidden border-b border-slate-700">
                        <img src="{{ asset('images/client-system.png') }}" alt="Client Management System" class="w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-2">Desktop App</span>
                        <h3 class="text-xl font-bold text-slate-100 mb-2">Client Management System</h3>
                        <p class="text-slate-400 text-sm mb-4 flex-grow">A client-server architecture application built for secure data handling and remote client management operations.</p>
                        <a href="https://github.com/SeverovX/csharp-client-system" target="_blank" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 text-sm font-bold mb-4 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            View on GitHub
                        </a>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">C#</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">WinForms</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Laravel Attendance System -->
                <div class="bg-slate-900/90 backdrop-blur-md rounded-xl overflow-hidden shadow-xl transition-shadow border border-slate-700 flex flex-col hover:border-indigo-500/50">
                    <div class="h-48 bg-slate-950 relative overflow-hidden border-b border-slate-700">
                        <img src="{{ asset('images/attendance.jpg') }}" alt="Attendance QR Dashboard" class="w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-2">Web Application</span>
                        <h3 class="text-xl font-bold text-slate-100 mb-2">Smart Attendance System</h3>
                        <p class="text-slate-400 text-sm mb-4 flex-grow">A full-stack Laravel application featuring secure Admin and User roles for tracking daily scan-in and scan-out records via QR.</p>
                        <a href="https://github.com/SeverovX/laravel-attendance-system" target="_blank" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 text-sm font-bold mb-4 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            View on GitHub
                        </a>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">Laravel</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">PHP</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4: Laravel Employee Info -->
                <div class="bg-slate-900/90 backdrop-blur-md rounded-xl overflow-hidden shadow-xl transition-shadow border border-slate-700 flex flex-col hover:border-indigo-500/50">
                    <div class="h-48 bg-slate-950 relative overflow-hidden border-b border-slate-700">
                        <img src="{{ asset('images/employee-info.jpg') }}" alt="Employee Management List" class="w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-2">Web Application</span>
                        <h3 class="text-xl font-bold text-slate-100 mb-2">Employee Info Directory</h3>
                        <p class="text-slate-400 text-sm mb-4 flex-grow">A centralized database management system for HR, handling employee records, departments, and dynamic data filtering.</p>
                        <a href="https://github.com/SeverovX/laravel-employee-directory" target="_blank" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 text-sm font-bold mb-4 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            View on GitHub
                        </a>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">Laravel</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5: Kla Klouk Game -->
                <div class="bg-slate-900/90 backdrop-blur-md rounded-xl overflow-hidden shadow-xl transition-shadow border border-slate-700 flex flex-col hover:border-indigo-500/50">
                    <div class="h-48 bg-slate-950 relative overflow-hidden border-b border-slate-700">
                        <!-- Game Image -->
                        <img src="{{ asset('images/kla-klouk.png') }}" alt="Kla Klouk Game" class="w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-2">Desktop Game</span>
                        <h3 class="text-xl font-bold text-slate-100 mb-2">Kla Klouk Traditional Game</h3>
                        <p class="text-slate-400 text-sm mb-4 flex-grow">A digital recreation of the traditional Cambodian betting game, featuring an interactive UI, coin betting mechanics, and randomized dice logic.</p>
                        <a href="https://github.com/SeverovX/csharp-kla-klouk-game" target="_blank" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 text-sm font-bold mb-4 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            View on GitHub
                        </a>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">C#</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">WinForms</span>
                            <span class="px-2 py-1 bg-slate-800 text-slate-300 text-xs rounded border border-slate-700">Game Logic</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Education Section -->
    <section id="education" class="relative py-24 bg-cover bg-center bg-fixed border-t border-slate-800" style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg0f65Snlfs_cL99jtjEGwj5ovihkMKVeJjTX-8KMaqitmwUmEkVx8g3Z4h_4AuwzBGwarOdTbCy_tX9lerh3-M10zasbcDpl-BnjoCZcul4Vio-nvNlwuaX8txQZwy4emUKr_orbnXFfZMU9JqFz5q17J0ivmGbSliuGpE0ezaP5jL_QUzBK69n75M/s1536/16.jpg');">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950/60 to-slate-900"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 drop-shadow-xl">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Education</h2>
                <p class="text-lg text-slate-200 max-w-2xl mx-auto font-medium">Like the wisdom of Bayon, looking back at the roots of my knowledge.</p>
            </div>

            <div class="relative border-l-2 border-indigo-500/50 ml-3 md:ml-6 space-y-12">

                <!-- University -->
                <div class="relative pl-8 md:pl-12 drop-shadow-xl">
                    <div class="absolute left-[-9px] top-1 w-4 h-4 rounded-full bg-indigo-500 ring-4 ring-slate-900"></div>
                    <div class="bg-slate-900/85 backdrop-blur-md p-6 md:p-8 rounded-xl border border-slate-700 shadow-xl">
                        <span class="text-indigo-400 text-sm font-bold tracking-wider uppercase mb-2 block">2024 - Present (Year 3, Semester 1)</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Bachelor of Software Engineering</h3>

                        <a href="https://maps.app.goo.gl/54twmoTv2MZ5Mhqy5" target="_blank" class="inline-flex items-center gap-2 text-slate-300 font-medium hover:text-indigo-400 transition mb-1">
                            <span>BELTEI International University (Toul Sleng Campus)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>

                        <p class="text-slate-400 mb-6 text-sm">Faculty of Information Technology and Science</p>

                        <a href="https://uqr.beltei.edu.kh/s/VGYGKj" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-800 hover:bg-slate-700 border border-slate-600 rounded-lg text-sm font-medium text-slate-200 transition">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            View Student ID
                        </a>
                    </div>
                </div>

                <!-- High School -->
                <div class="relative pl-8 md:pl-12 drop-shadow-xl">
                    <div class="absolute left-[-9px] top-1 w-4 h-4 rounded-full bg-slate-800 border-2 border-indigo-500/50 ring-4 ring-slate-900"></div>
                    <div class="bg-slate-900/60 backdrop-blur-md p-6 md:p-8 rounded-xl border border-slate-700/50 shadow-lg">
                        <span class="text-slate-400 text-sm font-bold tracking-wider uppercase mb-2 block">2020 - 2023</span>
                        <h3 class="text-xl font-bold text-slate-200 mb-2">Baccalauréat (Bac II)</h3>

                        <a href="https://maps.app.goo.gl/hseRwb7k3uVKxWqo9?g_st=ac" target="_blank" class="inline-flex items-start gap-2 text-slate-300 font-medium hover:text-indigo-400 transition mb-6">
                            <span>Samdech Hun Sen Prek Kampeus High School<br><span class="text-sm text-slate-400 font-normal">វិទ្យាល័យសម្តេច ហ៊ុន សែន ព្រែកកំពឹស</span></span>
                            <svg class="w-4 h-4 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                        <br>
                        <a href="https://verify.gov.kh/verify/7cc096510049cdd390ac15d4afe552be9e2eab62c16c48b4b6b6474751b141de?key=21d1f91c8df0f6c6567addeb204531d6e7e0e80da4ca108aa8d272e5289a40b9" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-800/50 hover:bg-slate-700/50 border border-slate-600/50 rounded-lg text-sm font-medium text-slate-300 transition">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Verify Official Bac II Result
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Work Experience -->
    <section id="experience" class="relative py-24 bg-cover bg-center bg-fixed border-t border-slate-800" style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjdFBExnToo9DqSOutsBzwnwd6-NfpCAdEOl2TiBiLOGOpG2IY3Aqzloab7JLaoHnSXYSkj2yIZgaXP7PwrlaJrdW2HMEkV36Zwq-X8NhT91d5BmOnqESc5POY94NnzEolLSTUm3ZxX-ujJAM1s_Ors6MOiwRXVvRDShI72vHq8EWGPHSsTfNrNJ_mA/s960/11.jpg');">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-900/60 to-slate-950"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 drop-shadow-xl">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Work Experience</h2>
                <p class="text-lg text-slate-200 max-w-2xl mx-auto font-medium">Crafting robust solutions with the precision and intricate detail of Banteay Srei.</p>
            </div>

            <div class="relative border-l-2 border-indigo-500/50 ml-3 md:ml-6 space-y-12">
                <div class="relative pl-8 md:pl-12 drop-shadow-xl">
                    <div class="absolute left-[-9px] top-1 w-4 h-4 rounded-full bg-indigo-500 ring-4 ring-slate-900"></div>
                    <div class="bg-slate-800/90 backdrop-blur-md p-6 md:p-8 rounded-xl border border-slate-700 shadow-xl">
                        <span class="text-indigo-400 text-sm font-bold tracking-wider uppercase mb-1 block">2024 - Present</span>
                        <h3 class="text-2xl font-bold text-white mb-1">Freelance Software Engineer</h3>
                        <p class="text-slate-300 font-medium mb-4">Self-Employed, Phnom Penh</p>
                        <p class="text-slate-400">Developing custom web applications, APIs, and business solutions using Laravel, PHP, and modern frontend frameworks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5 & 6. Unified Contact and Footer Section -->
    <div class="relative bg-cover bg-center bg-fixed border-t border-slate-700" style="background-image: url('https://angkorwatadventures.com/wp-content/uploads/2025/02/What-Is-the-South-Gates-Significance-at-Angkor-Thom.jpg');">

        <!-- Unified Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-900/70 to-slate-950/90"></div>

        <!-- Contact Section -->
        <section id="contact" class="py-24 relative z-10">
            <div class="max-w-4xl mx-auto px-6">
                <div class="text-center mb-16 drop-shadow-xl">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Open the Gates</h2>
                    <p class="text-lg text-slate-200 max-w-2xl mx-auto font-medium">Like the welcoming South Gate of Angkor Thom, I'm always open to new opportunities.</p>
                </div>

                <div class="bg-slate-900/85 backdrop-blur-xl p-8 md:p-12 rounded-2xl shadow-2xl border border-slate-700">

                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-500/20 border border-emerald-500/50 rounded-lg text-emerald-400 font-medium text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">First Name</label>
                                <input type="text" name="first_name" required class="w-full px-4 py-3 rounded-lg bg-slate-800/80 border border-slate-600 text-slate-100 placeholder-slate-500 focus:border-indigo-500 outline-none transition" placeholder="Mony Pich">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">Last Name</label>
                                <input type="text" name="last_name" required class="w-full px-4 py-3 rounded-lg bg-slate-800/80 border border-slate-600 text-slate-100 placeholder-slate-500 focus:border-indigo-500 outline-none transition" placeholder="San">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">Email Address</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg bg-slate-800/80 border border-slate-600 text-slate-100 placeholder-slate-500 focus:border-indigo-500 outline-none transition" placeholder="your@email.com">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">Who are you?</label>
                                <select name="role" required class="w-full px-4 py-3 rounded-lg bg-slate-800/80 border border-slate-600 text-slate-100 focus:border-indigo-500 outline-none transition">
                                    <option value="" disabled selected>Select an option...</option>
                                    <option value="recruiter">Recruiter</option>
                                    <option value="company">Company</option>
                                    <option value="student">Fellow Student</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-300 mb-2">Message</label>
                            <textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-lg bg-slate-800/80 border border-slate-600 text-slate-100 placeholder-slate-500 focus:border-indigo-500 outline-none transition resize-none" placeholder="Let's build something great together..."></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-lg shadow-lg transition-all">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="border-t border-slate-800/60 py-16 relative z-10">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

                    <!-- Brand & Location -->
                    <div>
                        <a href="#home" class="flex items-center gap-3 group mb-6 w-fit">
                            <div class="flex items-center justify-center w-8 h-8 rounded bg-indigo-600 text-white font-bold text-lg group-hover:bg-indigo-500 transition-colors shadow-lg">
                                P
                            </div>
                            <span class="font-bold text-xl tracking-wide text-slate-100 group-hover:text-indigo-400 transition-colors">MonyPich</span>
                        </a>

                        <p class="text-slate-400 text-sm leading-relaxed mb-6">
                            A software engineer passionate about clean code, robust backend architecture, and building modern digital solutions.
                        </p>
                        <a href="https://maps.app.goo.gl/DjiYWkgQHfrKa5Gc9?g_st=ac" target="_blank" class="inline-flex items-center gap-2 px-3 py-2 bg-slate-900 border border-slate-700/50 rounded-lg text-slate-300 text-sm font-medium shadow-sm hover:bg-slate-800 hover:border-slate-500 hover:text-indigo-400 transition-all">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_Cambodia.svg" alt="Cambodia Flag" class="w-5 h-3.5 object-cover rounded-[2px] shadow-sm">
                            Proudly based in the Kingdom of Cambodia
                        </a>
                    </div>

                    <!-- Contact Details -->
                    <div>
                        <h3 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Contact Details</h3>
                        <ul class="space-y-4 text-slate-400 text-sm">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <a href="mailto:pich.devkh@gmail.com" class="hover:text-indigo-400 transition">pich.devkh@gmail.com</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-indigo-500 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.06-.2-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.62-.2-1.12-.31-1.1-.66.01-.18.27-.36.78-.55 3.05-1.33 5.09-2.21 6.12-2.64 2.91-1.22 3.51-1.43 3.91-1.44.09 0 .28.02.4.11.1.08.13.19.14.3z"/></svg>
                                <a href="https://t.me/Sanmonypich" target="_blank" class="hover:text-indigo-400 transition">@Sanmonypich on Telegram</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>090 383 598 (Metfone)</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>092 383 598 (Cellcard)</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Social Links -->
                    <div>
                        <h3 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Social Profiles</h3>
                        <div class="flex flex-col space-y-4">
                            <a href="https://github.com/SeverovX" target="_blank" class="flex items-center gap-3 text-slate-400 hover:text-indigo-400 transition text-sm">
                                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                GitHub Profile
                            </a>
                            <a href="https://www.facebook.com/Mony.Pich.KH/" target="_blank" class="flex items-center gap-3 text-slate-400 hover:text-indigo-400 transition text-sm">
                                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg>
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Copyright Box -->
                <div class="border-t border-slate-800/60 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500">
                    <p>&copy; 2026 San MonyPich. All rights reserved.</p>
                    <p>Designed with <span class="text-indigo-500">&hearts;</span> in Phnom Penh</p>
                </div>
            </div>
        </footer>
    </div>

   <!-- Floating Spotify-Style Audio Player (UPGRADED) -->
    <div class="fixed z-40 bottom-4 left-1/2 -translate-x-1/2 w-[90%] max-w-[320px] md:bottom-6 md:left-auto md:-translate-x-0 md:right-6 md:w-80 bg-slate-900/95 backdrop-blur-md border border-slate-700 shadow-2xl rounded-xl p-3 flex flex-col gap-2 group transition-all">

        <!-- Hidden Audio Element (Source is injected by JS) -->
        <audio id="bg-music" preload="metadata"></audio>

        <div class="flex items-center gap-3">
            <!-- Album Art -->
            <div class="w-12 h-12 flex-shrink-0 rounded-md overflow-hidden bg-slate-800 border border-slate-700 shadow-inner">
                <img id="album-art" src="" alt="Album Art" class="w-full h-full object-cover transition-transform duration-700">
            </div>

            <!-- Track Info -->
            <div class="flex-grow min-w-0">
                <h4 id="track-title" class="text-slate-100 text-sm font-bold truncate">Loading...</h4>
                <p id="track-artist" class="text-slate-400 text-xs truncate">Please wait</p>
            </div>

            <!-- Player Controls -->
            <div class="flex items-center gap-2 flex-shrink-0">
                <!-- Previous Button -->
                <button id="prev-btn" class="text-slate-400 hover:text-white transition focus:outline-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/></svg>
                </button>

                <!-- Play/Pause Button -->
                <button id="play-pause-btn" class="w-9 h-9 flex items-center justify-center rounded-full bg-indigo-500 hover:bg-indigo-400 hover:scale-105 text-white transition-all shadow-md focus:outline-none">
                    <svg id="play-icon" class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    <svg id="pause-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                </button>

                <!-- Next Button -->
                <button id="next-btn" class="text-slate-400 hover:text-white transition focus:outline-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/></svg>
                </button>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="w-full flex items-center gap-2 mt-1">
            <span id="current-time" class="text-[10px] text-slate-500 font-medium tabular-nums w-8 text-right">0:00</span>
            <div class="relative flex-grow h-1.5 bg-slate-800 rounded-full overflow-hidden cursor-pointer" id="progress-container">
                <div id="progress-bar" class="absolute top-0 left-0 h-full bg-indigo-500 w-0 pointer-events-none transition-all duration-75"></div>
            </div>
            <span id="total-time" class="text-[10px] text-slate-500 font-medium tabular-nums w-8">0:00</span>
        </div>
    </div>

    <!-- Script Logic -->
    <script>
        // Mobile Menu Logic
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const links = document.querySelectorAll('.mobile-link');

        btn.addEventListener('click', () => menu.classList.toggle('hidden'));
        links.forEach(link => link.addEventListener('click', () => menu.classList.add('hidden')));

        // Upgraded Audio Player Logic
        document.addEventListener('DOMContentLoaded', () => {

            // --- YOUR PLAYLIST GOES HERE ---
            const playlist = [
                {
                    title: "First Song",
                    artist: "Roga",
                    src: "{{ asset('music/song1.mp3') }}", // CHANGE THIS TO YOUR ACTUAL MP3 NAME
                    cover: "https://is1-ssl.mzstatic.com/image/thumb/Music211/v4/e6/9f/9b/e69f9b04-b749-da22-13cd-24c76d210d94/4550706790447_cover.png/600x600cc.webp"
                },
                {
                    title: "Society",
                    artist: "pathetic240px",
                    src: "{{ asset('music/song2.mp3') }}", // CHANGE THIS TO YOUR ACTUAL MP3 NAME
                    cover: "https://imgs.search.brave.com/7GRgTcZ1GaRXxHT-S5crptu1IyrJMbp1KsvDoMmgN0w/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnl0/aW1nLmNvbS92aS8w/bEQtYU51dkRoQS9t/YXhyZXNkZWZhdWx0/LmpwZw"
                },
                {
                    title: "Mentamorphosis",
                    artist: "Interworld",
                    src: "{{ asset('music/song3.mp3') }}", // CHANGE THIS TO YOUR ACTUAL MP3 NAME
                    cover: "https://upload.wikimedia.org/wikipedia/en/1/15/Metamorphosis_-_Interworld.jpg"
                },
                {
                    title: "dancing nihilist",
                    artist: "pathetic240px",
                    src: "{{ asset('music/song4.mp3') }}",
                    cover: "https://imgs.search.brave.com/ywxEixTJSrdU7PGtf9FgWrgNb31RPAjuKUTepNmfO6Y/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnNj/ZG4uY28vaW1hZ2Uv/YWI2NzYxNmQwMDAw/MWUwMmQ0MWI1ZDg3/NTkyNjA1ODgyNDM5/NjM0Nw"
                }
            ];

            let currentTrackIndex = 0;
            let isPlaying = false;

            // DOM Elements
            const audio = document.getElementById('bg-music');
            const playBtn = document.getElementById('play-pause-btn');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const playIcon = document.getElementById('play-icon');
            const pauseIcon = document.getElementById('pause-icon');
            const progressBar = document.getElementById('progress-bar');
            const progressContainer = document.getElementById('progress-container');
            const currentTimeEl = document.getElementById('current-time');
            const totalTimeEl = document.getElementById('total-time');
            const albumArt = document.getElementById('album-art');
            const trackTitle = document.getElementById('track-title');
            const trackArtist = document.getElementById('track-artist');

            // Format time (seconds to m:ss)
            const formatTime = (time) => {
                if (isNaN(time)) return "0:00";
                const minutes = Math.floor(time / 60);
                const seconds = Math.floor(time % 60);
                return `${minutes}:${seconds.toString().padStart(2, '0')}`;
            };

            // Load a track into the player
            const loadTrack = (index) => {
                const track = playlist[index];
                audio.src = track.src;
                trackTitle.textContent = track.title;
                trackArtist.textContent = track.artist;
                albumArt.src = track.cover;

                // Reset progress bar visually
                progressBar.style.width = "0%";
                currentTimeEl.textContent = "0:00";
            };

            // Play / Pause Logic
            const togglePlay = () => {
                if (isPlaying) {
                    audio.pause();
                    playIcon.classList.remove('hidden');
                    pauseIcon.classList.add('hidden');
                    albumArt.classList.remove('scale-110');
                } else {
                    audio.play();
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                    albumArt.classList.add('scale-110');
                }
                isPlaying = !isPlaying;
            };

            // Next Track Logic
            const nextTrack = () => {
                currentTrackIndex = (currentTrackIndex + 1) % playlist.length;
                loadTrack(currentTrackIndex);
                if (isPlaying) audio.play();
            };

            // Prev Track Logic
            const prevTrack = () => {
                currentTrackIndex = (currentTrackIndex - 1 + playlist.length) % playlist.length;
                loadTrack(currentTrackIndex);
                if (isPlaying) audio.play();
            };

            // Event Listeners
            playBtn.addEventListener('click', togglePlay);
            nextBtn.addEventListener('click', nextTrack);
            prevBtn.addEventListener('click', prevTrack);

            // Auto-play next song when current finishes
            audio.addEventListener('ended', nextTrack);

            audio.addEventListener('loadedmetadata', () => {
                totalTimeEl.textContent = formatTime(audio.duration);
            });

            audio.addEventListener('timeupdate', () => {
                const progressPercent = (audio.currentTime / audio.duration) * 100;
                progressBar.style.width = `${progressPercent}%`;
                currentTimeEl.textContent = formatTime(audio.currentTime);
            });

            progressContainer.addEventListener('click', (e) => {
                const width = progressContainer.clientWidth;
                const clickX = e.offsetX;
                audio.currentTime = (clickX / width) * audio.duration;
            });

            // Initialize the first song on page load
            loadTrack(currentTrackIndex);
        });
    </script>

</body>
</html>
