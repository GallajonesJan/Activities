<?php
session_start();

// Initialize queue
if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = [];
}

// Handle push
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Insert new value
    if (isset($_POST['push']) && isset($_POST['value']) && $_POST['value'] !== "") {
        $new_value = intval($_POST['value']);
        $_SESSION['queue'][count($_SESSION['queue'])] = $new_value;
    }

    // Remove oldest value manually (FIFO)
    if (isset($_POST['pop']) && count($_SESSION['queue']) > 0) {
        $new_queue = [];
        for ($i = 1; $i < count($_SESSION['queue']); $i++) {
            $new_queue[$i - 1] = $_SESSION['queue'][$i];
        }
        $_SESSION['queue'] = $new_queue;
    }

    // Clear all
    if (isset($_POST['clear'])) {
        $_SESSION['queue'] = [];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queue Implementation - Jan Lauren Gallajones</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .queue-item {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 15px;
            margin: 5px;
            border-radius: 8px;
            display: inline-block;
            min-width: 60px;
            text-align: center;
            font-weight: bold;
            font-family: 'JetBrains Mono', monospace;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s ease;
        }
        .queue-item:hover {
            transform: translateY(-2px);
        }
        .queue-container {
            background: rgba(255,255,255,0.05);
            border: 2px dashed #dee2e6;
            border-radius: 10px;
            padding: 20px;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        .empty-queue {
            color: #6c757d;
            font-style: italic;
        }
        .queue-arrow {
            font-size: 1.5rem;
            color: #28a745;
            margin: 0 10px;
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

        <?php
        // Page header
        echo '<div class="text-center mb-5">';
        echo '<h1 class="display-4 main-header mb-3">Queue of Integers</h1>';
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
                <p class="mb-2"><strong>Objective:</strong> Implement a Queue data structure using FIFO (First In, First Out) principle</p>
                <p class="mb-2"><strong>Operations:</strong> Insert (enqueue), Remove (dequeue), and Clear</p>
                <p class="mb-0"><strong>Behavior:</strong> First element added is the first one to be removed</p>
            </div>

            <div class="text-center mb-4">
                <h2 class="h4 text-dark mb-3">
                    <i class="fas fa-arrows-alt-h text-warning me-2"></i>
                    Queue Operations
                </h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">
                            <h5 class="mb-0"><i class="fas fa-plus text-success me-2"></i>Queue Controls</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="value" class="form-label">Enter integer value:</label>
                                    <input type="number" 
                                           class="form-control" 
                                           name="value" 
                                           id="value"
                                           placeholder="Enter a number">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" name="push" class="btn" style="background: linear-gradient(45deg, #28a745, #20c997); color: white; border: none;">
                                        <i class="fas fa-plus me-2"></i>Insert (Enqueue)
                                    </button>
                                    <button type="submit" name="pop" class="btn" style="background: linear-gradient(45deg, #dc3545, #e83e8c); color: white; border: none;">
                                        <i class="fas fa-minus me-2"></i>Remove (Dequeue)
                                    </button>
                                    <button type="submit" name="clear" class="btn btn-secondary">
                                        <i class="fas fa-trash me-2"></i>Clear All
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header" style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); border: none;">
                            <h5 class="mb-0"><i class="fas fa-list text-info me-2"></i>Queue Status</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <small class="text-muted">Queue Size: <?php echo count($_SESSION['queue']); ?></small>
                            </div>
                            
                            <!-- Queue Visualization -->
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <small class="text-success me-2">Front</small>
                                    <i class="fas fa-arrow-right queue-arrow"></i>
                                    <small class="text-danger">Rear</small>
                                </div>
                                
                                <div class="queue-container">
                                    <?php if (empty($_SESSION['queue'])): ?>
                                        <span class="empty-queue">Queue is empty</span>
                                    <?php else: ?>
                                        <?php foreach ($_SESSION['queue'] as $index => $value): ?>
                                            <div class="queue-item">
                                                <?php echo $value; ?>
                                            </div>
                                            <?php if ($index < count($_SESSION['queue']) - 1): ?>
                                                <i class="fas fa-arrow-right text-muted mx-1"></i>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Queue Details -->
                            <div class="mt-3">
                                <h6>Queue Details:</h6>
                                <ul class="list-unstyled">
                                    <li><strong>Front:</strong> 
                                        <?php echo !empty($_SESSION['queue']) ? $_SESSION['queue'][0] : 'N/A'; ?>
                                    </li>
                                    <li><strong>Rear:</strong> 
                                        <?php echo !empty($_SESSION['queue']) ? end($_SESSION['queue']) : 'N/A'; ?>
                                    </li>
                                    <li><strong>Size:</strong> <?php echo count($_SESSION['queue']); ?></li>
                                </ul>
                            </div>

                            <!-- Queue Content as Array -->
                            <div class="mt-3">
                                <h6>Array Representation:</h6>
                                <div class="bg-light p-2 rounded" style="font-family: 'JetBrains Mono', monospace;">
                                    [<?php echo empty($_SESSION['queue']) ? '' : implode(', ', $_SESSION['queue']); ?>]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FIFO Demonstration -->
            <div class="mt-4">
                <div class="alert alert-info">
                    <h6><i class="fas fa-lightbulb me-2"></i>FIFO Principle:</h6>
                    <p class="mb-0">
                        In a queue, elements are added at the <strong>rear</strong> and removed from the <strong>front</strong>. 
                        The first element you insert will be the first one to be removed when you dequeue.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>