<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Pyramid Pattern - Jan Lauren Gallajones</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Custom Styles for Jan Lauren Gallajones Portfolio */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .main-header {
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            font-weight: 300;
            letter-spacing: 2px;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .pattern-container {
            background: #1a1a1a;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: inset 0 2px 10px rgba(0,0,0,0.3);
            overflow-x: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pattern-output {
            font-family: 'JetBrains Mono', monospace;
            font-size: 16px;
            line-height: 1.5;
            color: #00ff00;
            text-shadow: 0 0 10px rgba(0,255,0,0.3);
            white-space: pre;
            margin: 0;
            text-align: left;
        }

        .home-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .home-btn:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            text-decoration: none;
        }

        .exercise-info {
            background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-left: 4px solid #667eea;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-header {
                font-size: 2.5rem !important;
            }
            
            .content-card {
                margin: 0 10px;
            }

            .pattern-output {
                font-size: 12px;
            }
            
            .pattern-container {
                padding: 1rem;
            }
        }

        @media (max-width: 576px) {
            .pattern-output {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Navigation -->
        <div class="mb-4">
            <a href="index.php" class="home-btn">
                <i class="fas fa-arrow-left"></i>
                Back to Home
            </a>
        </div>

        <div class="text-center mb-5">
            <h1 class="display-4 main-header mb-3">Right-Pointing Triangle Pattern</h1>
            <p class="lead text-white-50">Part 1 - Pattern Generation Exercise</p>
        </div>

        <div class="content-card p-4 p-md-5">
            <!-- Exercise Information -->
            <div class="exercise-info">
                <h3 class="h5 mb-3">
                    <i class="fas fa-info-circle text-primary me-2"></i>
                    Exercise Description
                </h3>
                <p class="mb-2"><strong>Objective:</strong> Create a symmetric pyramid pattern</p>
                <p class="mb-2"><strong>Method:</strong> Build expanding then contracting rows using multiples</p>
                <p class="mb-0"><strong>Pattern:</strong> Triangle with tip pointing to the right</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-caret-up text-success me-2"></i>
                    Generated Pyramid
                </h2>
            </div>
            
            <div class="pattern-container">
                <div class="pattern-output" id="pyramidPattern"></div>
            </div>

            <!-- Pattern Analysis -->
            <div class="mt-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">
                        <h5 class="mb-0"><i class="fas fa-calculator text-warning me-2"></i>Pattern Logic</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-primary">Formula:</h6>
                                <p><code>value = row_number × position</code></p>
                                <p class="text-muted small">Each number is calculated by multiplying the current row number with the position within that row.</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-success">Structure:</h6>
                                <ul class="list-unstyled">
                                    <li><strong>Top Half:</strong> Expanding from 1 to 5 elements</li>
                                    <li><strong>Bottom Half:</strong> Contracting from 4 to 1 element</li>
                                    <li><strong>Total Rows:</strong> 9 (5 + 4)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pattern Statistics -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-primary mb-1">9</h5>
                        <small class="text-muted">Total Rows</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-success mb-1">25</h5>
                        <small class="text-muted">Total Numbers</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-info mb-1">5</h5>
                        <small class="text-muted">Max Width</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-warning mb-1">Right-Triangle</h5>
                        <small class="text-muted">Shape Type</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-white-50 mb-0">&copy; 2025 Jan Lauren Gallajones</p>
        </div>
    </div>

    <script>
        function generatePyramid() {
            let rows = 5; // Number of rows in the top half
            let pattern = '';
            
            // Top half (expanding pyramid - upward facing)
            for (let i = 1; i <= rows; i++) {
                let line = '';
                for (let j = 1; j <= i; j++) {
                    line += (i * j);
                    if (j < i) line += '\t'; // Tab spacing between numbers
                }
                pattern += line + '\n';
            }

            // Bottom half (contracting pyramid - downward facing)
            for (let i = rows - 1; i >= 1; i--) {
                let line = '';
                for (let j = 1; j <= i; j++) {
                    line += (i * j);
                    if (j < i) line += '\t'; // Tab spacing between numbers
                }
                pattern += line + '\n';
            }
            
            document.getElementById('pyramidPattern').textContent = pattern;
        }

        // Generate the pyramid when the page loads
        generatePyramid();
    </script>

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html> 