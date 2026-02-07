<x-auth-layout>
    <x-slot:title>
        Sign In - Kanara House
    </x-slot:title>

    <div class="min-h-screen flex items-center justify-center p-4 md:p-6 bg-[#f8f9fa] dark:bg-[#121212]">
        
        <main class="w-full max-w-6xl bg-surface-light dark:bg-surface-dark rounded-3xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2 min-h-[600px]">
            
            <div class="hidden md:block relative overflow-hidden order-2 md:order-1">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-[40s] hover:scale-110" 
                     style='background-image: url("https://images.unsplash.com/photo-1507133750069-69d3cdad863a?q=80&w=1974&auto=format&fit=crop");'>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent mix-blend-multiply"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-12 text-white z-10">
                    <span class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-widest uppercase border border-white/30 rounded-full backdrop-blur-sm">
                        Kanara Experience
                    </span>
                    <p class="font-serif text-3xl lg:text-4xl italic leading-tight text-shadow-sm">
                        "The morning cup of coffee has an exhilaration about it which the cheering influence of the afternoon or evening cup of tea cannot be expected to reproduce."
                    </p>
                    <div class="flex items-center gap-4 mt-6">
                        <div class="h-px w-12 bg-white/60"></div>
                        <p class="text-sm uppercase tracking-widest opacity-90">Oliver Wendell Holmes</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center p-8 md:p-12 lg:p-16 order-1 md:order-2 bg-white dark:bg-[#1e1e1e] relative">
                
                <div class="max-w-md mx-auto w-full flex flex-col gap-6">
                    
                    <div class="space-y-2 text-center md:text-left">
                        <span class="text-xs font-bold tracking-[0.2em] uppercase text-primary/70 dark:text-primary/80">Welcome Back</span>
                        <h1 class="font-serif text-3xl md:text-4xl text-gray-900 dark:text-white">Sign In</h1>
                        <p class="text-gray-500 dark:text-gray-400 font-light text-sm md:text-base">Enter your details to access your account.</p>
                    </div>

                    @if(session('error'))
    <div class="mb-4 p-4 rounded-lg bg-red-100 border border-red-300 text-red-700">
        <strong>Login gagal!</strong><br>
        {{ session('error') }}
    </div>
@endif


                    <form class="flex flex-col gap-5 mt-2" method="POST" action="{{ route('auth.login') }}">
                        @csrf
                        
                        <div class="relative group">
                            <input type="email" id="email" name="email" 
                                class="peer w-full border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent py-2.5 px-0 text-gray-900 dark:text-white placeholder-transparent focus:border-primary dark:focus:border-primary focus:ring-0 transition-all duration-300" 
                                placeholder="Email" required />
                            <label for="email" 
                                class="absolute left-0 top-2.5 text-gray-500 dark:text-gray-400 text-base transition-all duration-300 peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-primary dark:peer-focus:text-primary font-medium">
                                Email Address
                            </label>
                        </div>
                        @error('email')
                            <div class="text-xs font-medium text-red-500 mt-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">error</span> {{$message}}
                            </div>
                        @enderror

                        <div class="relative group mt-2">
                            <input type="password" id="password" name="password" 
                                class="peer w-full border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent py-2.5 px-0 text-gray-900 dark:text-white placeholder-transparent focus:border-primary dark:focus:border-primary focus:ring-0 transition-all duration-300" 
                                placeholder="Password" required />
                            <label for="password" 
                                class="absolute left-0 top-2.5 text-gray-500 dark:text-gray-400 text-base transition-all duration-300 peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-primary dark:peer-focus:text-primary font-medium">
                                Password
                            </label>
                            <button type="button" onclick="togglePassword()" class="absolute right-0 top-2.5 text-gray-400 hover:text-primary dark:hover:text-white transition-colors focus:outline-none">
                                <span class="material-symbols-outlined text-[20px]" id="eye-icon">visibility</span>
                            </button>
                        </div>
                        @error('password')
                            <div class="text-xs font-medium text-red-500 mt-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">error</span> {{$message}}
                            </div>
                        @enderror

                        <div class="flex items-center justify-between text-sm mt-2">
                            <label class="flex items-center gap-2 cursor-pointer group select-none">
                                <div class="relative flex items-center">
                                    <input type="checkbox" class="peer h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary/20 bg-transparent transition-colors cursor-pointer" />
                                </div>
                                <span class="text-gray-500 dark:text-gray-400 group-hover:text-primary dark:group-hover:text-white transition-colors">Remember me</span>
                            </label>
                            <a href="#" class="font-medium text-primary dark:text-white hover:text-primary-dark hover:underline decoration-1 underline-offset-4 transition-colors">Forgot Password?</a>
                        </div>

                        <button class="w-full h-12 mt-4 bg-primary dark:bg-white text-white dark:text-gray-900 rounded-xl font-bold tracking-wide hover:bg-primary-dark dark:hover:bg-gray-200 active:scale-[0.98] transition-all duration-200 shadow-lg hover:shadow-primary/30 flex items-center justify-center gap-2 group">
                            Sign In <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </button>
                    </form>

                    <div class="relative flex py-2 items-center">
                        <div class="flex-grow border-t border-gray-200 dark:border-gray-700"></div>
                        <span class="flex-shrink mx-4 text-xs uppercase text-gray-400 font-semibold tracking-wider">Or continue with</span>
                        <div class="flex-grow border-t border-gray-200 dark:border-gray-700"></div>
                    </div>

                    <a href="{{ route('google.redirect') }}" class="w-full h-12 bg-white dark:bg-[#2a2a2a] border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-white rounded-xl font-semibold tracking-wide hover:bg-gray-50 dark:hover:bg-[#333] hover:border-gray-300 transition-all duration-200 flex items-center justify-center gap-3 shadow-sm hover:shadow-md active:scale-[0.98]">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        <span>Google</span>
                    </a>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 mt-2">
                        Not a member yet? 
                        <a href="{{route('register')}}" class="font-bold text-primary dark:text-white hover:text-primary-dark hover:underline decoration-1 underline-offset-4 ml-1 transition-colors">Create an account</a>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                eyeIcon.textContent = 'visibility';
            }
        }
    </script>

</x-auth-layout>