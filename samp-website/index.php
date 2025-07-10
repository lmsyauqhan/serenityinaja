<?php
include 'includes/functions.php';
include 'includes/samp_query.php';
include 'includes/config.php';
$status = query_samp($server_ip, $server_port);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - SA-MP Server</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>
<div class="container mt-4">
    <h1>Welcome!</h1>
    <div class="alert <?php echo ($status && $status['online']) ? 'alert-success' : 'alert-danger'; ?>">
        <?php 
        echo ($status && $status['online']) ? "✅ Online | Players: {$status['players']}/{$status['max_players']}" : "❌ Offline";
        ?>
    </div>
    <p>Website status, store, news & dashboard sederhana.</p>
</div>
</body>
</html>