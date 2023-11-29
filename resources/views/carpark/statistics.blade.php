<!-- resources/views/carpark/statistics.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Car Park Statistics
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Today's Statistics:</h3>
                    <p>Revenue Earned: ${{ $revenue }}</p>
                    <p>Number of Cars Parked Today: {{ $carsParked }}</p>

                    <!-- Chart.js graph container -->
                    <canvas id="carParkChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- JavaScript to render the graph -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Retrieve data from the Blade view
            var revenue = @json($revenue);
            var carsParked = @json($carsParked);

            // Get the canvas element
            var ctx = document.getElementById('carParkChart').getContext('2d');

            // Create a bar chart
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Revenue', 'Cars Parked'],
                    datasets: [{
                        label: 'Car Park Statistics',
                        data: [revenue, carsParked],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>
