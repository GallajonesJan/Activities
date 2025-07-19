<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asterisk Pattern - Jan Lauren Gallajones</title>
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
        echo '<h1 class="display-4 main-header mb-3">Asterisk Pattern</h1>';
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
                <p class="mb-2"><strong>Objective:</strong> Create a diamond-shaped pattern using asterisks (*)</p>
                <p class="mb-2"><strong>Method:</strong> Using predefined coordinates to place asterisks in a 40x40 grid</p>
                <p class="mb-0"><strong>Pattern:</strong> Diamond shape with strategic asterisk placement</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-star text-warning me-2"></i>
                    Generated Pattern
                </h2>
            </div>
            
            <div class="pattern-container">
                <?php
                // Define the diamond shape using row and column coordinates
                $stars = [
                    [0,19], [3,11], [3,26],
                    [6,5], [6,32],
                    [9,1], [9,37],
                    [12,5], [12,32],
                    [13,9], [13,28],
                    [17,19],
                    [20,11], [20,26],
                    [23,5], [23,32],
                    [26,1], [26,37],
                    [29,5], [29,32],
                    [32,9], [32,28],
                    [35,19]
                ];

                // Number of rows and columns to match pattern size
                $rows = 40;
                $cols = 40;

                // Output pattern
                echo '<div class="pattern-output">';
                for ($i = 0; $i < $rows; $i++) {
                    for ($j = 0; $j < $cols; $j++) {
                        $found = false;
                        foreach ($stars as $s) {
                            if ($s[0] === $i && $s[1] === $j) {
                                echo "*";
                                $found = true;
                                break;
                            }
                        }
                        echo $found ? "" : " ";
                    }
                    echo "\n";
                }
                echo '</div>';
                ?>
            </div>

            <!-- Pattern Statistics -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-primary mb-1">
                            <?php echo count($stars); ?>
                        </h5>
                        <small class="text-muted">Total Asterisks</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-success mb-1"><?php echo $rows; ?>x<?php echo $cols; ?></h5>
                        <small class="text-muted">Grid Size</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-info mb-1">Diamond</h5>
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