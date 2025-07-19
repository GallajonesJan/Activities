<?php
function getRandomChar() {
    $letters = range('a', 'k');
    return strtoupper($letters[array_rand($letters)]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Character Generator - Jan Lauren Gallajones</title>
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
        echo '<h1 class="display-4 main-header mb-3">Random Character Table</h1>';
        echo '<p class="lead text-white-50">Part 2 - Data Structures & Algorithms</p>';
        echo '</div>';
        ?>

        <div class="content-card p-4 p-md-5">
            <!-- Exercise Information -->
            <div class="exercise-info">
                <h3 class="h5 mb-3">
                    <i class="fas fa-info-circle text-primary me-2"></i>
                    Exercise Description
                </h3>
                <p class="mb-2"><strong>Objective:</strong> Generate a table with random characters from A-K</p>
                <p class="mb-2"><strong>Method:</strong> 4x5 grid with highlighted even columns</p>
                <p class="mb-0"><strong>Pattern:</strong> Random character distribution with visual highlighting</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-dice text-primary me-2"></i>
                    Generated Character Table
                </h2>
                <!-- Generate New Characters Button -->
                <button onclick="window.location.reload()" class="generate-btn mb-4">
                    <i class="fas fa-sync-alt me-2"></i>
                    Generate New Characters
                </button>
            </div>
            
            <div class="d-flex justify-content-center">
                <table class="table table-bordered character-table">
                    <?php
                    $rows = 4;
                    $cols = 5;
                    
                    for ($i = 0; $i < $rows; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $cols; $j++) {
                            $char = getRandomChar();
                            
                            // Highlight even-numbered columns (1-based index)
                            $class = (($j + 1) % 2 == 0) ? "table-warning" : "";
                            
                            echo "<td class='text-center p-3 $class' style='font-family: \"JetBrains Mono\", monospace; font-size: 1.5rem; font-weight: bold; width: 60px; height: 60px; color: #667eea;'>";
                            echo $char;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <!-- Table Information -->
            <div class="mt-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">
                        <h5 class="mb-0"><i class="fas fa-lightbulb text-warning me-2"></i>Highlighting Logic</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">Even-numbered columns (2nd and 4th) are highlighted in yellow to demonstrate conditional formatting based on column position.</p>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
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
                        <small class="text-muted">Total Cells</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded">
                        <h5 class="text-warning mb-1">11</h5>
                        <small class="text-muted">Character Range (A-K)</small>
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