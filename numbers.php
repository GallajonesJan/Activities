<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Series Pattern - Jan Lauren Gallajones</title>
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
        echo '<h1 class="display-4 main-header mb-3">Numeric Series Pattern</h1>';
        echo '<p class="lead text-white-50">Part 1 - Pattern Generation Exercise</p>';
        echo '</div>';
        ?>

        <div class="content-card p-4 p-md-5">
            <!-- Exercise Information -->
            <div class="exercise-info">
                <h3 class="h5 mb-3">
                    <i class="fas fa-info-circle text-primary me-2"></i>
                    Exercise Description
                </h3>
                <p class="mb-2"><strong>Objective:</strong> Generate a multiplicative pattern with exponential progression</p>
                <p class="mb-2"><strong>Method:</strong> Each row follows formula: row_number × base^(column-1)</p>
                <p class="mb-0"><strong>Pattern:</strong> 6 rows × 5 columns with increasing bases per row</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-list-ol text-info me-2"></i>
                    Generated Pattern
                </h2>
            </div>
            
            <div class="pattern-container">
                <?php
                $rows = 6;
                $cols = 5;

                echo '<div class="pattern-output">';
                
                for ($i = 1; $i <= $rows; $i++) {
                    for ($j = 1; $j <= $cols; $j++) {
                        // Pattern logic: each row follows a unique progression
                        switch ($i) {
                            case 1:
                                $val = pow(2, $j - 1);
                                break;
                            case 2:
                                $val = 2 * pow(3, $j - 1);
                                break;
                            case 3:
                                $val = 3 * pow(4, $j - 1);
                                break;
                            case 4:
                                $val = 4 * pow(5, $j - 1);
                                break;
                            case 5:
                                $val = 5 * pow(6, $j - 1);
                                break;
                            case 6:
                                $val = 6 * pow(7, $j - 1);
                                break;
                            default:
                                $val = 0;
                        }
                        echo str_pad($val, 6, " ", STR_PAD_LEFT);
                    }
                    echo "\n";
                }
                
                echo '</div>';
                ?>
            </div>

            <!-- Pattern Analysis -->
            <div class="mt-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">
                        <h5 class="mb-0"><i class="fas fa-calculator text-warning me-2"></i>Pattern Formula</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-primary">Row Formulas:</h6>
                                <ul class="list-unstyled">
                                    <li><strong>Row 1:</strong> 1 × 2^(col-1)</li>
                                    <li><strong>Row 2:</strong> 2 × 3^(col-1)</li>
                                    <li><strong>Row 3:</strong> 3 × 4^(col-1)</li>
                                    <li><strong>Row 4:</strong> 4 × 5^(col-1)</li>
                                    <li><strong>Row 5:</strong> 5 × 6^(col-1)</li>
                                    <li><strong>Row 6:</strong> 6 × 7^(col-1)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-success">General Pattern:</h6>
                                <p><code>value = row × (row+1)^(column-1)</code></p>
                                <p class="text-muted small">Each row multiplies by an increasing base raised to the power of column position minus 1.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pattern Statistics -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-primary mb-1"><?php echo $rows; ?></h5>
                        <small class="text-muted">Rows</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-success mb-1"><?php echo $cols; ?></h5>
                        <small class="text-muted">Columns</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-info mb-1"><?php echo ($rows * $cols); ?></h5>
                        <small class="text-muted">Total Numbers</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-warning mb-1">Exponential</h5>
                        <small class="text-muted">Pattern Type</small>
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