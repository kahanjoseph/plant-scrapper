<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Popular States - Analytics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .results-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .results-table th,
        .results-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .results-table th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #495057;
        }
        .results-table tr:hover {
            background-color: #f5f5f5;
        }
        .rank {
            font-weight: bold;
            color: #007bff;
        }
        .no-data {
            text-align: center;
            color: #6c757d;
            font-style: italic;
            padding: 40px;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="back-link">← Back to Home</a>
        
        <h1>Top 5 Most Popular States by Order Count</h1>
        
        <!-- Debug: Print the data being passed to the view -->
        <div style="margin-bottom: 20px; padding: 15px; background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px;">
            <h3>Debug - Data Structure:</h3>
            <pre style="background-color: #e9ecef; padding: 10px; border-radius: 4px; overflow-x: auto;">{{ print_r($popularStates, true) }}</pre>
        </div>
        
        @if(count($popularStates) > 0)
            <table class="results-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>State</th>
                        <th>Order Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($popularStates as $index => $state)
                        <tr>
                            <td class="rank">#{{ $index + 1 }}</td>
                            <td>{{ $state->state ?? 'N/A' }}</td>
                            <td>{{ $state->orders ?? 0 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="no-data">
                No data available. Make sure to implement your Eloquent query in the controller!
            </div>
        @endif
        
        <div style="margin-top: 30px; padding: 20px; background-color: #e9ecef; border-radius: 4px;">
            <h3>Implementation Notes:</h3>
            <p>This view expects the <code>$popularStates</code> variable to contain:</p>
            <ul>
                <li>Objects with a <code>state</code> property (the state abbreviation)</li>
                <li>Objects with an <code>order_count</code> property (the number of orders)</li>
                <li>Results should be ordered by order count (highest first)</li>
                <li>Limited to 5 results</li>
            </ul>
        </div>
    </div>
</body>
</html>
