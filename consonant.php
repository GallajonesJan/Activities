<?php
function getRandomConsonant() {
    $consonants = str_split("bcdfghjklmnpqrstvwxyz");
    return strtoupper($consonants[array_rand($consonants)]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonant Grid Generator - Jan Lauren Gallajones</title>
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
        echo '<h1 class="display-4 main-header mb-3">Random Consonant Grid</h1>';
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
                <p class="mb-2"><strong>Objective:</strong> Generate a grid filled with random consonants</p>
                <p class="mb-2"><strong>Method:</strong> User inputs dimensions, system generates random consonants (B-Z excluding vowels)</p>
                <p class="mb-0"><strong>Output:</strong> Visual grid display with random consonants</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-keyboard text-success me-2"></i>
                    Grid Generator
                </h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="POST" class="mb-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="length" class="form-label">Rows (Height):</label>
                                <input type="number" 
                                       class="form-control" 
                                       name="length" 
                                       id="length"
                                       min="1" 
                                       max="15"
                                       placeholder="e.g., 4"
                                       required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="width" class="form-label">Columns (Width):</label>
                                <input type="number" 
                                       class="form-control" 
                                       name="width" 
                                       id="width"
                                       min="1" 
                                       max="15"
                                       placeholder="e.g., 5"
                                       required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg px-5" style="background: linear-gradient(45deg, #667eea, #764ba2); color: white; border: none;">
                                <i class="fas fa-dice me-2"></i>
                                Generate Grid
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $length = intval($_POST['length']);
                $width = intval($_POST['width']);

                echo '<div class="text-center mb-4">';
                echo '<h3 class="h5 text-dark">' . $length . ' × ' . $width . ' Grid of Random Consonants</h3>';
                echo '</div>';

                echo '<div class="pattern-container">';
                echo '<div class="d-flex justify-content-center">';
                echo '<table class="table table-bordered" style="width: auto; max-width: 600px;">';
                
                for ($i = 0; $i < $length; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $width; $j++) {
                        $consonant = getRandomConsonant();
                        echo '<td class="text-center p-3" style="background: rgba(102, 126, 234, 0.1); font-family: \'JetBrains Mono\', monospace; font-size: 1.5rem; font-weight: bold; width: 60px; height: 60px; color: #667eea;">';
                        echo $consonant;
                        echo '</td>';
                    }
                    echo "</tr>";
                }
                
                echo '</table>';
                echo '</div>';
                echo '</div>';

                // Grid Statistics
                echo '<div class="row mt-4">';
                echo '<div class="col-md-4">';
                echo '<div class="text-center p-3 border rounded">';
                echo '<h5 class="text-primary mb-1">' . ($length * $width) . '</h5>';
                echo '<small class="text-muted">Total Cells</small>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-4">';
                echo '<div class="text-center p-3 border rounded">';
                echo '<h5 class="text-success mb-1">' . $length . ' × ' . $width . '</h5>';
                echo '<small class="text-muted">Grid Dimensions</small>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-4">';
                echo '<div class="text-center p-3 border rounded">';
                echo '<h5 class="text-info mb-1">21</h5>';
                echo '<small class="text-muted">Available Consonants</small>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
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