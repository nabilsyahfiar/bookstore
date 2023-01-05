<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BooksAPI</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Data Author -->
  <li class="nav-item @active('authors')">
    <a class="nav-link" href="{{ route('authors') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Authors</span>
    </a>
  </li>

  <!-- Nav Item - Data Book -->
  <li class="nav-item @active('books') ">
    <a class="nav-link" href="{{ route('books') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Books</span>
    </a>
  </li>

  <!-- Nav Item - Data Book Author -->
  <li class="nav-item @active('book_authors') ">
    <a class="nav-link" href="{{ route('book_authors') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Book Authors</span>
    </a>
  </li>

  <!-- Nav Item - Data Book Language -->
  <li class="nav-item @active('book_languages') ">
    <a class="nav-link" href="{{ route('book_languages') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Book Languages</span>
    </a>
  </li>

  <!-- Nav Item - Data Customer -->
  <li class="nav-item @active('customers') ">
    <a class="nav-link" href="{{ route('customers') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Customers</span>
    </a>
  </li>

  <!-- Nav Item - Data Invoice -->
  <li class="nav-item @active('invoices') ">
    <a class="nav-link" href="{{ route('invoices') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Invoices</span>
    </a>
  </li>

  <!-- Nav Item - Data Order History -->
  <li class="nav-item @active('order_histories') ">
    <a class="nav-link" href="{{ route('order_histories') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Order Hisotries</span>
    </a>
  </li>

  <!-- Nav Item - Data Order Status -->
  <li class="nav-item @active('order_statuses') ">
    <a class="nav-link" href="{{ route('order_statuses') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Order Statuses</span>
    </a>
  </li>

  <!-- Nav Item - Data Publisher -->
  <li class="nav-item @active('publishers') ">
    <a class="nav-link" href="{{ route('publishers') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Publishers</span>
    </a>
  </li>

  <!-- Nav Item - Data Shipping Method -->
  <li class="nav-item @active('shipping_methods')">
    <a class="nav-link" href="{{ route('shipping_methods') }}">
      <i class="fas fa-fw fa-table"></i>
      <span>Shipping Methods</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid mt-4">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">{{ ucfirst($page) }}</h1>