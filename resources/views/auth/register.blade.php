
<x-auth-layout>

    <x-slot:title>
        register
    </x-slot:title>

    <main class="w-full max-w-5xl h-auto md:h-[850px] max-h-[95vh] bg-surface-light dark:bg-surface-dark rounded-2xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
        
        <div class="hidden md:block relative overflow-hidden h-64 md:h-auto">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-[20s] hover:scale-110" 
                 style='background-image: url("https://images.unsplash.com/photo-1511537632536-b7a4896848a5?q=80&w=2070&auto=format&fit=crop");'>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent opacity-90"></div>
            
            <div class="absolute bottom-0 left-0 p-12 text-white z-10 w-full">
                <span class="material-symbols-outlined text-5xl mb-4 opacity-80">eco</span>
                <h2 class="font-serif text-4xl mb-4">Be Part of the Cycle</h2>
                <ul class="space-y-3 font-light text-white/90">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> Exclusive early access to new beans</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> Invites to cupping workshops</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> 10% off your first online order</li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col justify-center p-8 md:p-12 lg:p-16 relative">
            
            <div class="max-w-sm mx-auto w-full flex flex-col gap-6">
                <div class="space-y-2">
                    <span class="text-xs font-bold tracking-widest uppercase text-primary/60 dark:text-white/60">New Membership</span>
                    <h1 class="font-serif text-4xl text-primary dark:text-white">Create Account</h1>
                    <p class="text-gray-500 dark:text-gray-400 font-light">Join the Kanara House community today.</p>
                </div>

                <form class="flex flex-col gap-5 mt-4" method="POST" action="{{ route('auth.register') }}">
                    @csrf
                    <div class="relative group">
                        <input type="text" id="fullname" name="name" value="{{ old('name') }}" class="custom-input peer w-full border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent py-3 px-0 text-primary dark:text-white placeholder-transparent focus:border-primary dark:focus:border-[#F5F1E3] focus:ring-0 transition-colors" placeholder="Full Name" required />
                        <label for="fullname" class="absolute left-0 top-3 text-gray-500 dark:text-gray-400 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-3.5 peer-focus:text-xs">Full Name</label>
                        @error('name')
                            <div class="text-sm text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="relative group"> 
                        <input type="email" id="reg-email" name = "email" value="{{ old('email') }}" class="custom-input peer w-full border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent py-3 px-0 text-primary dark:text-white placeholder-transparent focus:border-primary dark:focus:border-[#F5F1E3] focus:ring-0 transition-colors" placeholder="Email" required />
                        <label for="reg-email" class="absolute left-0 top-3 text-gray-500 dark:text-gray-400 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-3.5 peer-focus:text-xs">Email Address</label>
                        @error('email')
                            <div class="text-sm text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    {{-- PASSWORD --}}
                    <div class="relative group">
                        <input 
                            type="password" 
                            id="reg-password" 
                            name="password"
                            value="{{ old('password') }}"
                            class="custom-input peer w-full border-0 border-b-2 
                            {{ $errors->has('password') ? 'border-red-500 focus:border-red-500' : 'border-gray-200 dark:border-gray-700 focus:border-primary dark:focus:border-[#F5F1E3]' }}
                            bg-transparent py-3 px-0 text-primary dark:text-white placeholder-transparent 
                            focus:ring-0 transition-colors"
                            placeholder="Password"
                            required
                            aria-invalid="{{ $errors->has('password') ? 'true' : 'false' }}"
                        />
                        <label 
                            for="reg-password" 
                            class="absolute left-0 top-3 text-gray-500 dark:text-gray-400 transition-all 
                            peer-placeholder-shown:top-3 peer-placeholder-shown:text-base 
                            peer-focus:-top-3.5 peer-focus:text-xs">
                            Create Password
                        </label>

                        @error('password')
                            <div class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- PASSWORD CONFIRMATION --}}
                    <div class="relative group mt-4">
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation"
                            class="custom-input peer w-full border-0 border-b-2 
                            {{ $errors->has('password_confirmation') ? 'border-red-500 focus:border-red-500' : 'border-gray-200 dark:border-gray-700 focus:border-primary dark:focus:border-[#F5F1E3]' }}
                            bg-transparent py-3 px-0 text-primary dark:text-white placeholder-transparent 
                            focus:ring-0 transition-colors"
                            placeholder="Password Confirmation"
                            required
                            aria-invalid="{{ $errors->has('password_confirmation') ? 'true' : 'false' }}"
                        />
                        <label 
                            for="password_confirmation" 
                            class="absolute left-0 top-3 text-gray-500 dark:text-gray-400 transition-all 
                            peer-placeholder-shown:top-3 peer-placeholder-shown:text-base 
                            peer-focus:-top-3.5 peer-focus:text-xs">
                            Password Confirmation
                        </label>

                        @error('password_confirmation')
                            <div class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <button class="w-full h-14 mt-2 bg-primary dark:bg-white text-white dark:text-primary rounded-xl font-bold tracking-wide hover:bg-primary-dark dark:hover:bg-gray-200 transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        Create My Account
                    </button>
                    
                    <div class="relative flex items-center justify-center my-2">
                        <span class="absolute px-4 bg-surface-light dark:bg-surface-dark text-xs text-gray-400 uppercase tracking-widest">Or join with</span>
                        <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <button type="button" class="flex items-center justify-center gap-2 h-10 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <span class="font-bold text-lg">G</span>
                            <span class="text-xs font-bold uppercase">Google</span>
                        </button>
                        <button type="button" class="flex items-center justify-center gap-2 h-10 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <span class="material-symbols-outlined text-lg">apple</span>
                            <span class="text-xs font-bold uppercase">Apple</span>
                        </button>
                    </div>
                </form>

                <div class="text-center text-sm text-gray-500 dark:text-gray-400 mt-2">
                    Already a member? 
                    <a href="{{route('login')}}Z" class="font-bold text-primary dark:text-white hover:underline decoration-1 underline-offset-4 ml-1">Log In</a>
                </div>
            </div>
        </div>
    </main>

</x-auth-layout>


