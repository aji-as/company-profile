<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kanara House - Admin Dashboard</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
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