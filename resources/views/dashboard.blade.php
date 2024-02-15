<x-layout>


<div class="h-full m-5 ">
    <div class="p-4 text-center font-bold text-3xl">
        <h3>Dashboard</h3>
    </div>
    <div class="grid gap-2 grid-cols-3 grid-rows-1 w-full h-auto ">

        <a href="{{route('settings.account')}}" class="space-y-3 font-semibold h-28 p-3 rounded-lg items-center text-start shadow-xl border border-black hover:bg-slate-300 bg-emerald-500   hover:text-gray-700">
            <h2>Total Cost</h2>
            <div class="text-center text-4xl font-mono">
                <h3>2,145</h3>
            </div>
        </a>

        <a href="{{route('settings.account')}}" class="space-y-3 font-semibold h-28 p-3 rounded-lg items-center text-start shadow-xl border border-black hover:bg-slate-300 bg-purple-500   hover:text-gray-700">
            <h2>Total Cost</h2>
            <div class="text-center text-4xl font-mono">
                <h3>2,145</h3>
            </div>
        </a>

        <a href="{{route('settings.account')}}" class="space-y-3 font-semibold h-28 p-3 rounded-lg items-center text-start shadow-xl border border-black hover:bg-slate-300 bg-blue-400   hover:text-gray-700">
            <h2>Total Cost</h2>
            <div class="text-center text-4xl font-mono">
                <h3>2,145</h3>
            </div>
        </a>
    </div>

    <div class="p-5 grid gap-2 grid-cols-2 grid-rows-1 w-full ">
        <div class="h-auto p-3 rounded-lg shadow-xl border border-black hover:bg-slate-300   hover:text-gray-700">
        <div>
            <canvas id="myChart"></canvas>
        </div>
          
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
         
        <script>

            const ctx = document.getElementById('myChart');
          
            new Chart(ctx, {
              type: 'line',
              data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December' ],
                datasets: [{
                  label: 'Consumption',
                  data: [12, 19, 3, 5, 2, 3],
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
          </script>
        </div>
        <div class="h-auto p-3 rounded-lg shadow-xl border border-black hover:bg-slate-300   hover:text-gray-700">          
            
            <div>
                <canvas id="Myfirstchart"></canvas>
            </div>

        <script>
            const cty = document.getElementById('Myfirstchart');
          
            new Chart(cty, {
              type: 'bar',
              data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December' ],
                datasets: [{
                  label: 'Consumption',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
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
          </script>
        </div>
    </div>

    <div class="p-5 grid gap-2 grid-cols-2 grid-rows-1 w-full ">
        <div class="h-auto p-3 rounded-lg shadow-xl border border-black hover:bg-slate-300   hover:text-gray-700">
        <div>
            <canvas id="myCharts"></canvas>
        </div>
          
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
         
        <script>

            const ctz = document.getElementById('myCharts');
          
            new Chart(ctz, {
              type: 'doughnut',
              data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December' ],
                datasets: [{
                  label: 'Consumption',
                  data: [12, 19, 3, 5, 2, 3],
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
          </script>
        </div>
        <div class="h-auto p-3 rounded-lg shadow-xl border border-black hover:bg-slate-300   hover:text-gray-700">          
            
            <div>
                <canvas id="Myfirstcharts"></canvas>
            </div>

        <script>
            const cta = document.getElementById('Myfirstcharts');
          
            new Chart(cta, {
              type: 'pie',
              data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December' ],
                datasets: [{
                  label: 'Consumption',
                  data: [12, 19, 3, 5, 2, 3],
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
          </script>
        </div>
    </div>
</div>
</x-layout>