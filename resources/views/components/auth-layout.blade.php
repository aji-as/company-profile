<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{$title}}</title>
    
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
     @vite('resources/css/app.css')
    


</head>

<body class="bg-background-light dark:bg-background-dark text-primary dark:text-background-light font-body antialiased min-h-screen flex items-center justify-center p-4">

    <a href="index.html" class="absolute top-6 left-6 md:top-10 md:left-10 flex items-center gap-2 text-sm font-medium hover:text-primary/70 dark:hover:text-white/70 transition-colors z-20">
        <span class="material-symbols-outlined text-lg">arrow_back</span>
        <span class="hidden sm:inline">Back to Sanctuary</span>
    </a>

    <main>
        {{ $slot }}
    </main>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('eye-icon');
            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "visibility_off";
            } else {
                input.type = "password";
                icon.textContent = "visibility";
            }
        }
    </script>
</body>
</html>