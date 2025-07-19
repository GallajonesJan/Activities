<?php
function bubbleSort($lists) {
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                // Correct swapping logic using a temporary variable
                $temp = $lists[$child];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
    return $lists;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort - Jan Lauren Gallajones</title>
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
        echo '<h1 class="display-4 main-header mb-3">Bubble Sort Algorithm</h1>';
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
                <p class="mb-2"><strong>Objective:</strong> Implement and demonstrate bubble sort algorithm</p>
                <p class="mb-2"><strong>Method:</strong> Compare adjacent elements and swap if they're in wrong order</p>
                <p class="mb-0"><strong>Input:</strong> Comma-separated numbers</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-sort-amount-up text-info me-2"></i>
                    Bubble Sort Demo
                </h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" class="mb-4">
                        <div class="mb-3">
                            <label for="numbers" class="form-label">Enter comma-separated numbers:</label>
                            <input type="text" 
                                   class="form-control form-control-lg" 
                                   name="numbers" 
                                   id="numbers"
                                   placeholder="e.g., 9,3,7,1,5" 
                                   required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg px-5" style="background: linear-gradient(45deg, #667eea, #764ba2); color: white; border: none;">
                                <i class="fas fa-sort me-2"></i>
                                Sort Numbers
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["numbers"])) {
                $input = $_POST["numbers"];
                $array = array_map('intval', explode(",", $input));
                $sorted = bubbleSort($array);

                echo '<div class="row mt-4">';
                echo '<div class="col-md-6">';
                echo '<div class="card border-0 shadow-sm">';
                echo '<div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">';
                echo '<h5 class="mb-0"><i class="fas fa-list text-primary me-2"></i>Original Array</h5>';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<p class="h5 text-center">' . implode(", ", $array) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '<div class="col-md-6">';
                echo '<div class="card border-0 shadow-sm">';
                echo '<div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">';
                echo '<h5 class="mb-0"><i class="fas fa-sort-amount-up text-success me-2"></i>Sorted Array</h5>';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<p class="h5 text-center">' . implode(", ", $sorted) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '<div class="mt-4">';
                echo '<div class="card border-0 shadow-sm">';
                echo '<div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">';
                echo '<h5 class="mb-0"><i class="fas fa-code text-warning me-2"></i>Algorithm Explanation</h5>';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<div class="pattern-container">';
                echo '<div class="pattern-output" style="color: #00ff00; text-align: left;">';
                echo "Bubble Sort Algorithm:\n";
                echo "1. Compare adjacent elements in the array\n";
                echo "2. If a pair is out of order, swap them using a temporary variable\n";
                echo "3. Repeat this process in multiple passes until the array is sorted\n\n";

                echo "Original buggy code:\n";
                echo "\$temp = \$lists[\$child + 1];     // Wrong: saves second element\n";
                echo "\$lists[\$child] = \$lists[\$child + 1];  // Overwrites first\n";
                echo "\$lists[\$child + 1] = \$temp;    // Both become same value\n\n";

                echo "Corrected code:\n";
                echo "\$temp = \$lists[\$child];        // Correct: saves first element\n";
                echo "\$lists[\$child] = \$lists[\$child + 1];  // Move second to first\n";
                echo "\$lists[\$child + 1] = \$temp;    // Move saved first to second\n";
                echo '</div>';
                echo '</div>';
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