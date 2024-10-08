@extends('layouts.app')

@section('title', 'Election Results')

@section('content')

<div class="container mx-auto p-4 relative">
<div class="absolute top-10 left-0">
    <a href="/" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-indigo-950 text-center mb-6">
            <i class="fas fa-chart-line"></i> Election Results
        </h1>

     
        <p class="text-lg  mb-6 text-center">
            Here are the election results for the participating parties. The chart below shows the number of votes each party received.
        </p>


        <div class="relative w-full h-96 mb-8">
            <canvas id="voteChart"></canvas>
        </div>


        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Total Vote Count</h2>
            <p class="text-lg">
                The total number of votes counted for this election is: 
                <span class="font-semibold">12,345</span>.
            </p>
            <p class="text-lg">
                Party A received: <span class="font-semibold">4,567</span> votes.
            </p>
            <p class="text-lg">
                Party B received: <span class="font-semibold">3,890</span> votes.
            </p>
            <p class="text-lg">
                Party C received: <span class="font-semibold">3,888</span> votes.
            </p>
        </div>

        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    
    const voteData = {
        labels: ['Party A', 'Party B', 'Party C'],
        datasets: [{
            label: 'Vote Count',
            data: [6567, 3890, 4888], 
            backgroundColor: [
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 99, 132, 0.7)',
                'rgba(75, 192, 192, 0.7)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    };

    
    const config = {
        type: 'bar',
        data: voteData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };


    const voteChart = new Chart(
        document.getElementById('voteChart'),
        config
    );
</script>

@endsection
