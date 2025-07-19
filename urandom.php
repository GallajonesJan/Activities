<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array Manipulation - Jan Lauren Gallajones</title>
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

        <?php
        // Page header
        echo '<div class="text-center mb-5">';
        echo '<h1 class="display-4 main-header mb-3">Multidimensional Array</h1>';
        echo '<p class="lead text-white-50">Part 2 - Manipulation of Multidimensional Array</p>';
        echo '</div>';
        ?>

        <div class="content-card p-4 p-md-5">
            <!-- Exercise Information -->
            <div class="exercise-info">
                <h3 class="h5 mb-3">
                    <i class="fas fa-table text-primary me-2"></i>
                    Exercise Description
                </h3>
                <p class="mb-2"><strong>Objective:</strong> Generate a 4x4 grid with unique random numbers (1-100)</p>
                <p class="mb-2"><strong>Method:</strong> Create multidimensional array and calculate row/column sums</p>
                <p class="mb-0"><strong>Features:</strong> Unique number generation, sum calculations, and grid visualization</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-dice text-secondary me-2"></i>
                    Random Number Grid
                </h2>
                <!-- Generate New Grid Button -->
                <button onclick="window.location.reload()" class="generate-btn mb-4">
                    <i class="fas fa-sync-alt me-2"></i>
                    Generate New Grid
                </button>
            </div>
            
            <div class="pattern-container">
                <?php
                $rows = 4;
                $cols = 4;
                $totalCells = $rows * $cols;

                // Generate unique random numbers
                $numbers = range(1, 100);
                shuffle($numbers);
                $uniqueNumbers = array_slice($numbers, 0, $totalCells);

                // Build the 2D array
                $table = [];
                $index = 0;
                for ($i = 0; $i < $rows; $i++) {
                    for ($j = 0; $j < $cols; $j++) {
                        $table[$i][$j] = $uniqueNumbers[$index++];
                    }
                }

                // Calculate column sums
                $colSums = array_fill(0, $cols, 0);
                $grandTotal = 0;

                echo '<div class="table-responsive">';
                echo '<table class="table table-bordered table-hover mx-auto" style="width: auto; font-family: \'JetBrains Mono\', monospace;">';
                echo '<thead class="table-dark">';
                echo '<tr>';
                echo '<th class="text-center">Col 1</th>';
                echo '<th class="text-center">Col 2</th>';
                echo '<th class="text-center">Col 3</th>';
                echo '<th class="text-center">Col 4</th>';
                echo '<th class="text-center bg-warning text-dark">Row Sum</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                for ($i = 0; $i < $rows; $i++) {
                    echo '<tr>';
                    $rowSum = 0;
                    for ($j = 0; $j < $cols; $j++) {
                        $val = $table[$i][$j];
                        echo '<td class="text-center fw-bold" style="min-width: 80px; font-size: 16px;">' . $val . '</td>';
                        $rowSum += $val;
                        $colSums[$j] += $val;
                    }
                    echo '<td class="text-center bg-warning fw-bold" style="font-size: 16px;">' . $rowSum . '</td>';
                    $grandTotal += $rowSum;
                    echo '</tr>';
                }

                // Footer row for column sums
                echo '</tbody>';
                echo '<tfoot class="table-success">';
                echo '<tr>';
                echo '<th class="text-center">Col Sum</th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '<th class="text-center">Grand Total</th>';
                echo '</tr>';
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    echo '<td class="text-center fw-bold" style="font-size: 16px;">' . $colSums[$j] . '</td>';
                }
                echo '<td class="text-center bg-info fw-bold text-white" style="font-size: 16px;">' . $grandTotal . '</td>';
                echo '</tr>';
                echo '</tfoot>';
                echo '</table>';
                echo '</div>';
                ?>
            </div>

            <!-- Array Statistics -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-primary mb-1"><?php echo $totalCells; ?></h5>
                        <small class="text-muted">Unique Numbers</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-success mb-1"><?php echo $rows; ?>x<?php echo $cols; ?></h5>
                        <small class="text-muted">Grid Size</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-warning mb-1"><?php echo min($uniqueNumbers) . '-' . max($uniqueNumbers); ?></h5>
                        <small class="text-muted">Number Range</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-info mb-1"><?php echo $grandTotal; ?></h5>
                        <small class="text-muted">Grand Total</small>
                    </div>
                </div>
            </div>

            <!-- Technical Details -->
            <div class="mt-4">
                <h4 class="h6 text-dark mb-3">
                    <i class="fas fa-cogs text-secondary me-2"></i>
                    Technical Implementation
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-success me-2"></i>Random number generation (1-100)</li>
                            <li><i class="fas fa-check text-success me-2"></i>Unique value validation</li>
                            <li><i class="fas fa-check text-success me-2"></i>2D array construction</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-success me-2"></i>Row and column sum calculations</li>
                            <li><i class="fas fa-check text-success me-2"></i>Grand total computation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Responsive table design</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php
        // Footer
        echo '<div class="text-center mt-4">';
        echo '<p class="text-white-50 mb-0">&copy; ' . date('Y') . ' Jan Lauren Gallajones</p>';
        echo '</div>';
        ?>
    </div>

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>