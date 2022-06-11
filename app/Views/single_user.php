<!DOCTYPE html>
<html>
<head>
  <title>User | <?php echo $single_user['name']; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <?php include 'layouts/navigation.php'; ?>
    <div class="container mt-5 pt-4">
        <h1 class="text-center my-5"><?php echo $single_user['name']; ?></h1>
        <h1 class="text-center my-5"><?php echo $single_user['email']; ?></h1>
    </div>
</body>
</html>