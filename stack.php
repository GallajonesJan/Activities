<?php
session_start();

// Initialize stack
if (!isset($_SESSION['stack'])) {
    $_SESSION['stack'] = [];
}

// Handle push and pop operations
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['push']) && isset($_POST['value']) && $_POST['value'] !== "") {
        $new_value = intval($_POST['value']);
        $_SESSION['stack'][count($_SESSION['stack'])] = $new_value;
        $message = "Value $new_value pushed to stack successfully!";
        $messageType = 'success';
    }

    if (isset($_POST['pop']) && count($_SESSION['stack']) > 0) {
        $popped_value = $_SESSION['stack'][count($_SESSION['stack']) - 1];
        $new_stack = [];
        for ($i = 0; $i < count($_SESSION['stack']) - 1; $i++) {
            $new_stack[$i] = $_SESSION['stack'][$i];
        }
        $_SESSION['stack'] = $new_stack;
        $message = "Value $popped_value popped from stack successfully!";
        $messageType = 'warning';
    } elseif (isset($_POST['pop']) && count($_SESSION['stack']) == 0) {
        $message = "Cannot pop from empty stack!";
        $messageType = 'danger';
    }

    if (isset($_POST['clear'])) {
        $_SESSION['stack'] = [];
        $message = "Stack cleared successfully!";
        $messageType = 'info';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack Implementation - Jan Lauren Gallajones</title>
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
        echo '<h1 class="display-4 main-header mb-3">Stack of Integers</h1>';
        echo '<p class="lead text-white-50">Part 2 - Stack Data Structure Using Array</p>';
        echo '</div>';
        ?>

        <div class="content-card p-4 p-md-5">
            <!-- Exercise Information -->
            <div class="exercise-info">
                <h3 class="h5 mb-3">
                    <i class="fas fa-layer-group text-primary me-2"></i>
                    Exercise Description
                </h3>
                <p class="mb-2"><strong>Objective:</strong> Implement a stack data structure using PHP arrays</p>
                <p class="mb-2"><strong>Method:</strong> LIFO (Last In, First Out) operations with push and pop</p>
                <p class="mb-0"><strong>Features:</strong> Push integers, pop elements, visual stack representation</p>
            </div>

            <!-- Alert Messages -->
            <?php if ($message): ?>
            <div class="alert alert-<?php echo $messageType; ?> alert-dismissible fade show" role="alert">
                <i class="fas fa-info-circle me-2"></i>
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>

            <div class="row">
                <!-- Stack Operations -->
                <div class="col-lg-6">
                    <div class="card border-primary mb-4">
                        <div class="card-header bg-primary text-white">
                            <h4 class="h6 mb-0">
                                <i class="fas fa-cogs me-2"></i>
                                Stack Operations
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" class="mb-3">
                                <div class="mb-3">
                                    <label for="value" class="form-label fw-bold">Enter Integer Value:</label>
                                    <div class="input-group">
                                        <input type="number" 
                                               name="value" 
                                               id="value"
                                               class="form-control" 
                                               placeholder="Enter integer value"
                                               style="font-family: 'JetBrains Mono', monospace;">
                                        <button type="submit" name="push" class="btn btn-success">
                                            <i class="fas fa-plus me-1"></i>
                                            Push
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <button type="submit" name="pop" class="btn btn-warning flex-fill">
                                        <i class="fas fa-minus me-1"></i>
                                        Pop
                                    </button>
                                    <button type="submit" name="clear" class="btn btn-danger flex-fill">
                                        <i class="fas fa-trash me-1"></i>
                                        Clear Stack
                                    </button>
                                </div>
                            </form>

                            <!-- Stack Information -->
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="border rounded p-2">
                                        <h6 class="text-primary mb-1"><?php echo count($_SESSION['stack']); ?></h6>
                                        <small class="text-muted">Stack Size</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="border rounded p-2">
                                        <h6 class="text-info mb-1">
                                            <?php echo empty($_SESSION['stack']) ? 'N/A' : $_SESSION['stack'][count($_SESSION['stack']) - 1]; ?>
                                        </h6>
                                        <small class="text-muted">Top Element</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stack Visualization -->
                <div class="col-lg-6">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">
                            <h4 class="h6 mb-0">
                                <i class="fas fa-eye me-2"></i>
                                Stack Visualization
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="mb-3">Current Stack (LIFO Order):</h6>
                                
                                <?php if (empty($_SESSION['stack'])): ?>
                                    <div class="alert alert-light border">
                                        <i class="fas fa-inbox text-muted me-2"></i>
                                        <em>Stack is empty</em>
                                    </div>
                                <?php else: ?>
                                    <div class="stack-visualization" style="max-height: 300px; overflow-y: auto;">
                                        <?php for ($i = count($_SESSION['stack']) - 1; $i >= 0; $i--): ?>
                                            <div class="stack-element mb-2 p-2 border rounded <?php echo $i == count($_SESSION['stack']) - 1 ? 'bg-warning bg-opacity-25 border-warning' : 'bg-light'; ?>" 
                                                 style="font-family: 'JetBrains Mono', monospace; font-weight: bold;">
                                                <?php if ($i == count($_SESSION['stack']) - 1): ?>
                                                    <i class="fas fa-arrow-left text-warning me-2"></i>
                                                <?php endif; ?>
                                                <?php echo $_SESSION['stack'][$i]; ?>
                                                <?php if ($i == count($_SESSION['stack']) - 1): ?>
                                                    <span class="badge bg-warning text-dark ms-2">TOP</span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endfor; ?>
                                        
                                        <div class="mt-3">
                                            <div class="border-top border-dark border-3 pt-2">
                                                <small class="text-muted">
                                                    <i class="fas fa-layer-group me-1"></i>
                                                    Stack Base
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stack Operations Guide -->
            <div class="mt-4">
                <h4 class="h6 text-dark mb-3">
                    <i class="fas fa-book text-secondary me-2"></i>
                    Stack Operations Guide
                </h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100 border-success">
                            <div class="card-body text-center">
                                <i class="fas fa-plus fa-2x text-success mb-2"></i>
                                <h6 class="text-success">PUSH</h6>
                                <small>Adds element to the top of the stack</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-warning">
                            <div class="card-body text-center">
                                <i class="fas fa-minus fa-2x text-warning mb-2"></i>
                                <h6 class="text-warning">POP</h6>
                                <small>Removes and returns the top element</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-danger">
                            <div class="card-body text-center">
                                <i class="fas fa-trash fa-2x text-danger mb-2"></i>
                                <h6 class="text-danger">CLEAR</h6>
                                <small>Removes all elements from stack</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Implementation -->
            <div class="mt-4">
                <h4 class="h6 text-dark mb-3">
                    <i class="fas fa-code text-secondary me-2"></i>
                    Technical Implementation
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-success me-2"></i>PHP Session-based persistence</li>
                            <li><i class="fas fa-check text-success me-2"></i>Array-based stack implementation</li>
                            <li><i class="fas fa-check text-success me-2"></i>LIFO (Last In, First Out) principle</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-success me-2"></i>Input validation and error handling</li>
                            <li><i class="fas fa-check text-success me-2"></i>Real-time visual feedback</li>
                            <li><i class="fas fa-check text-success me-2"></i>Responsive design and user interface</li>
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