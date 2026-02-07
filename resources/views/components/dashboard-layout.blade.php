<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kanara House - Admin Dashboard</title>
    
    @vite('resources/css/app.css')

    
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#2e4837",
                        "primary-dark": "#1f3326",
                        "cream": "#F5F1E3",
                        "cream-dark": "#e8e2cd",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.filled { font-variation-settings: 'FILL' 1; }
    </style>
</head>

<body class="bg-cream font-display antialiased text-gray-800 overflow-hidden" 
      x-data="{ 
          sidebarOpen: false, 
          searchQuery: '',
          notificationsOpen: false
      }">

<div class="flex h-screen w-full relative">

    <x-dashboard-sidebar/>

    <main class="flex-1 flex flex-col h-full overflow-hidden relative bg-cream">
                @if(session('success'))
                    <div 
                        x-data="{ show: true }" 
                        x-init="setTimeout(() => show = false, 4000)" 
                        x-show="show"
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed top-5 right-5 z-[100] max-w-sm w-full bg-white border-l-4 border-primary shadow-xl rounded-lg pointer-events-auto overflow-hidden"
                    >
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm font-medium text-gray-900">Berhasil!</p>
                                    <p class="mt-1 text-sm text-gray-500">{{ session('success') }}</p>
                                </div>
                                <div class="ml-4 flex-shrink-0 flex">
                                    <button @click="show = false" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none">
                                        <span class="sr-only">Close</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-primary h-1 ad-progress"></div>
                    </div>

                    <style>
                        .ad-progress {
                            animation: progress 4s linear forwards;
                        }
                        @keyframes progress {
                            from { width: 100%; }
                            to { width: 0%; }
                        }
                    </style>
                @endif
                @yield('content')
        <x-dashboard-header/>
        {{ $slot }}
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        
        // Gradient Fill untuk Chart
        let gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(46, 72, 55, 0.2)'); // Primary color transparant
        gradient.addColorStop(1, 'rgba(46, 72, 55, 0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Revenue',
                    data: [4200, 6800, 5500, 8900, 6200, 10200, 5000],
                    backgroundColor: gradient,
                    borderColor: '#2e4837',
                    borderWidth: 2,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#2e4837',
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4 // Membuat garis melengkung halus
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#1f3326',
                        padding: 12,
                        titleFont: { family: 'Work Sans', size: 13 },
                        bodyFont: { family: 'Work Sans', size: 13 },
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(context.parsed.y);
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            borderDash: [5, 5],
                            color: '#f0f0f0'
                        },
                        ticks: {
                            font: { family: 'Work Sans', size: 11 },
                            color: '#9ca3af',
                            callback: function(value) {
                                return '$' + value / 1000 + 'k';
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: { family: 'Work Sans', size: 11 },
                            color: '#9ca3af'
                        }
                    }
                }
            }
        });
    });
</script>

</body>
</html>