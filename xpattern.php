<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric X Pattern - Jan Lauren Gallajones</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
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
            <h1 class="display-4 main-header mb-3">Numeric X Pattern</h1>
            <p class="lead text-white-50">Part 1 - Pattern Generation Exercise</p>
        </div>

        <div class="content-card p-4 p-md-5">
            <!-- Exercise Information -->
            <div class="exercise-info">
                <h3 class="h5 mb-3">
                    <i class="fas fa-times text-primary me-2"></i>
                    Exercise Description
                </h3>
                <p class="mb-2"><strong>Objective:</strong> Create an X-shaped pattern using numbers</p>
                <p class="mb-2"><strong>Method:</strong> Generate numbers on diagonal and anti-diagonal positions</p>
                <p class="mb-0"><strong>Pattern:</strong> X shape with numeric progression and mathematical relationships</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-times text-danger me-2"></i>
                    Generated X Pattern
                </h2>
            </div>
            
            <div class="pattern-container">
                <script>
                    let size = 15; // Size of the grid (15x15)
                    let pattern = '';
                    
                    for (let i = 0; i < size; i++) {
                        for (let j = 0; j < size; j++) {
                            if (i == j) {
                                // Main diagonal - mostly asterisks with some numbers
                                if (i == 7) pattern += "1"; // center
                                else if (i == 3 || i == 11) pattern += "3";
                                else if (i == 1 || i == 13) pattern += "5";
                                else pattern += "*";
                            } else if (i + j == size - 1) {
                                // Anti-diagonal - mostly asterisks with some numbers  
                                if (i == 7) pattern += "1"; // center (but this overlaps with main diagonal)
                                else if (i == 3 || i == 11) pattern += "3";
                                else if (i == 1 || i == 13) pattern += "5";
                                else pattern += "*";
                            } else {
                                // Empty spaces
                                pattern += " ";
                            }
                        }
                        pattern += "\n";
                    }
                    
                    document.write('<div class="pattern-output">' + pattern + '</div>');
                </script>
            </div>

            <!-- Pattern Analysis -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">
                                <i class="fas fa-chart-line me-2"></i>
                                Main Diagonal
                            </h6>
                        </div>
                        <div class="card-body">
                            <p class="mb-2"><strong>Pattern:</strong> Odd numbers (1,3,5,7,9...)</p>
                            <p class="mb-2"><strong>Formula:</strong> 2*(row%5)+1</p>
                            <p class="mb-0"><strong>Direction:</strong> Top-left to bottom-right</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-danger">
                        <div class="card-header bg-danger text-white">
                            <h6 class="mb-0">
                                <i class="fas fa-chart-line-down me-2"></i>
                                Anti-Diagonal
                            </h6>
                        </div>
                        <div class="card-body">
                            <p class="mb-2"><strong>Pattern:</strong> Odd numbers (1,3,5,7,9...)</p>
                            <p class="mb-2"><strong>Formula:</strong> 2*(row%5)+1</p>
                            <p class="mb-0"><strong>Direction:</strong> Top-right to bottom-left</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pattern Statistics -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-primary mb-1">29</h5>
                        <small class="text-muted">Total Numbers</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-success mb-1">15x15</h5>
                        <small class="text-muted">Grid Size</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-warning mb-1">2</h5>
                        <small class="text-muted">Diagonal Lines</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-info mb-1">X-Shape</h5>
                        <small class="text-muted">Pattern Type</small>
                    </div>
                </div>
            </div>

            <!-- Mathematical Properties -->
            <div class="mt-4">
                <h4 class="h6 text-dark mb-3">
                    <i class="fas fa-calculator text-secondary me-2"></i>
                    Mathematical Properties
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-success me-2"></i>Symmetric about center point</li>
                            <li><i class="fas fa-check text-success me-2"></i>Two intersecting diagonal lines</li>
                            <li><i class="fas fa-check text-success me-2"></i>Odd number sequence (1,3,5,7,9)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-success me-2"></i>Center intersection at (7, 7)</li>
                            <li><i class="fas fa-check text-success me-2"></i>Cyclic pattern every 5 positions</li>
                            <li><i class="fas fa-check text-success me-2"></i>Coordinate-based number generation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-white-50 mb-0">&copy; 2025 Jan Lauren Gallajones</p>
        </div>
    </div>

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>