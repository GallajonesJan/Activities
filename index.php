<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jan Lauren Gallajones - PHP Programming Portfolio</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container py-5">
        <?php
        // Your name as the header/title
        echo '<div class="text-center mb-5">';
        echo '<h1 class="display-2 main-header mb-3">Jan Lauren Gallajones</h1>';
        echo '<p class="lead text-white-50 fs-4">PHP Programming Portfolio</p>';
        echo '</div>';
        ?>

        <div class="content-card p-4 p-md-5">
            <div class="text-center mb-5">
                <h2 class="display-5 text-dark mb-3">Programming Exercises</h2>
                <div class="mx-auto" style="width: 80px; height: 3px; background: linear-gradient(45deg, #667eea, #764ba2); border-radius: 2px;"></div>
            </div>
            
            <div class="row g-4">
                <!-- Part 1 -->
                <div class="col-lg-6">
                    <div class="card h-100 part-card border-0 shadow">
                        <div class="card-body p-4">
                            <h3 class="card-title h4 mb-4 d-flex align-items-center">
                                <span class="part-number">1</span>
                                Pattern Generation
                            </h3>
                            <div class="list-group list-group-flush">
                                <a href="asterisk.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-star text-warning me-3"></i>
                                    Asterisk Pattern
                                </a>
                                <a href="xpattern.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-times text-danger me-3"></i>
                                    Numeric X Pattern
                                </a>
                                <a href="sideways.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-caret-up text-success me-3"></i>
                                    Numeric Pyramid Pattern
                                </a>
                                <a href="numbers.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-list-ol text-info me-3"></i>
                                    Numeric Series Pattern
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 2 -->
                <div class="col-lg-6">
                    <div class="card h-100 part-card border-0 shadow">
                        <div class="card-body p-4">
                            <h3 class="card-title h4 mb-4 d-flex align-items-center">
                                <span class="part-number">2</span>
                                Data Structures & Algorithms
                            </h3>
                            <div class="list-group list-group-flush">
                                <a href="random.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-dice text-primary me-3"></i>
                                    Generating Random Char from A–K
                                </a>
                                <a href="urandom.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-table text-secondary me-3"></i>
                                    Manipulation of Multidimensional Array
                                </a>
                                <a href="stack.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-layer-group text-dark me-3"></i>
                                    Stack of Integers Using Array
                                </a>
                                <a href="queue.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-arrows-alt-h text-warning me-3"></i>
                                    Queue of Integers
                                </a>
                                <a href="consonant.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-keyboard text-success me-3"></i>
                                    Input Two Numbers
                                </a>
                                <a href="bubble.php" class="list-group-item list-group-item-action exercise-link border-0 mb-2 p-3">
                                    <i class="fas fa-sort-amount-up text-info me-3"></i>
                                    Bubble Sort
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        // Footer
        echo '<div class="text-center mt-5">';
        echo '<p class="text-white-50">&copy; ' . date('Y') . ' Jan Lauren Gallajones. All rights reserved.</p>';
        echo '</div>';
        ?>
    </div>

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>