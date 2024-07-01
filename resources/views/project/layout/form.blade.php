 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
  }

  .form-container input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }

  .form-container input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  .form-container input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
  <div class="form-container">
    <form action="#">
      <label for="inputField">Enter something:</label><br>
      <input type="text" id="inputField" name="inputField" placeholder="Type something...">
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
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
</head>
<body>
    <div class="charts-container" id="chartsContainer"></div>
    <script>
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
            container.className = 'chart-container';

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
</body>
</html>