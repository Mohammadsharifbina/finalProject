<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percentage of Marks Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f0f2f5;
            padding: 20px;
        }

        .charts-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            width: 100%;
        }

        .chart-container {
            width: 220px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            text-align: center;
            font-size: 1.2em;
            margin: 10px 0;
        }

        .percentage {
            font-size: 1.1em;
            color: #555;
            margin: 10px 0;
        }

        canvas {
            width: 100%;
            height: 150px;
        }
    </style>
     <script defer>
        const subjects = [
            { name: 'Math', mark: 85 },
            { name: 'Science', mark: 90 },
            { name: 'English', mark: 78 },
            { name: 'History', mark: 88 },
            { name: 'Geography', mark: 92 }
        ];

        const colors = [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)'
        ];

        const chartsContainer = document.getElementById('chartsContainer');

        subjects.forEach((subject, index) => {
            const container = document.createElement('div');
            container.className = 'container';

            const title = document.createElement('h2');
            title.textContent = subject.name;
            container.appendChild(title);

            const percentage = document.createElement('div');
            percentage.className = 'percentage';
            percentage.textContent = Percentage: ${subject.mark}%;
            container.appendChild(percentage);

            const canvas = document.createElement('canvas');
            canvas.id = chart-${index};
            container.appendChild(canvas);

            chartsContainer.appendChild(container);

            const ctx = canvas.getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [${subject.name} Marks, 'Remaining'],
                    datasets: [{
                        data: [subject.mark, 100 - subject.mark],
                        backgroundColor: [colors[index % colors.length], 'rgba(211, 211, 211, 0.6)'],
                        borderColor: [colors[index % colors.length], 'rgba(211, 211, 211, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + '%';
                                }
                            }
                        }
                    },
                    // responsive: true,
                    // maintainAspectRatio: false
                }
            });
        });
    </script>
</head>
<body>
    <div class="charts-container" id="chartsContainer"> <p></p></div>
   
</body>
</html>