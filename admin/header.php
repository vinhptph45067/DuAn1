<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/admin.css">
  <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>
  <style>
    .hoverLink > a > span {
      color: #038cf5 !important;
    }
    .hoverLink > a > i {
      color: #038cf5 !important;
    }
    .hoverLink:hover > a > span {
        color: red !important;
    }
    .hoverLink:hover > a > i {
        color: red !important;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper" style="flex-direction: column;">
      <nav style="background-color: #F0F4C3; width: 100vw; height: 128px; min-height: 128px; overflow: hidden" class="sidebar" id="sidebar">
      <li style="display: flex;gap: 20px;padding: 20px 50px;align-items: center;" class=" nav-profile">
        <div class="nav-profile-image">
          <img width="100px"  src="../view/images/Logotoco.png" alt="profile">
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2" style="font-size: 26px; color: #038cf5">Admin</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </li>
      <ul  class="nav" style="width: 100vw; height: 64px; min-height: 64px; overflow: hidden; flex-direction: row;
      margin-bottom: 0; justify-content: end; padding-right: 30px;">
          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="index.php?act=home">
              <span class="menu-title">Dashboard</span>
              <i style="margin-left: 35%;" class="fa-solid fa-house"></i>
            </a>
          </li>
          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="index.php?act=listdm">
              <span class="menu-title" style="color: #038cf5">Danh mục</span>
              <i style="margin-left: 38%;" class="fa-solid fa-list"></i>
            </a>
          </li>
          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="index.php?act=listsp">
              <span class="menu-title" style="color: #038cf5">Sản phẩm</span>
              <i style="margin-left: 38%;" class="fa-solid fa-folder"></i>
            </a>
          </li>
          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="index.php?act=dskh">
              <span class="menu-title" style="color: #038cf5">Khách hàng</span>
              <i style="margin-left: 33%;" class="fa-solid fa-person"></i>
            </a>
          </li>
          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="index.php?act=dsbl">
              <span class="menu-title" style="color: #038cf5">Bình luận</span>
              <i style="margin-left: 37%;" class="fa-solid fa-users"></i>
            </a>
          </li>
          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="index.php?act=thongke">
              <span class="menu-title" style="color: #038cf5">Thống kê</span>
              <i style="margin-left: 38%;" class="fa-solid fa-layer-group"></i>
            </a>
          </li>

          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href=" index.php?act=listbill">
              <span class="menu-title" style="color: #038cf5">Đơn hàng</span>
              <i style="margin-left: 35%;" class="fa-solid fa-cart-shopping"></i>
            </a>
          </li>

          <li style="background-color: #F0F4C3;" class="nav-item hoverLink">
            <a class="nav-link" href="http://localhost/PHP1/ky4/greenshop/">
              <span class="menu-title" style="color: #038cf5">Thoát</span>
              <i style="margin-left: 47%;" class="fa-solid fa-right-to-bracket"></i>
            </a>
          </li>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div style="background-color: white;" class="content-wrapper">

          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">

              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">

              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">

              </div>
            </div>
          </div>