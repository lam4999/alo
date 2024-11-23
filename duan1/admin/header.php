<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/onOff.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <header>
        <div class="row mb header_admin">
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>          
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="index.php?act=listdm">Danh mục</a></li>
              <li><a href="index.php?act=listProducts">Hàng hóa</a></li>
              <li><a href="index.php?act=dskh">Khách hàng</a></li>
              <li><a href="index.php?act=listComment">Bình luận</a></li>
              <li><a href="index.php?act=thongke">Thống kê</a></li>
            </ul>
        </div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      </header>