<nav class="sidebar">
  <ul class="nav flex-column accordion" id="nav_accordion">
    <li class="nav-item">
      <a class="nav-link" href="#">メニュー1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#menu_item1" aria-controls="menu_item2" aria-expanded="true" href="#">
        メニュー2<i class="bi bi-caret-down-fill ms-1"></i>
      </a>
      <ul id="menu_item1" class="submenu collapse accordion-collapse" data-bs-parent="#nav_accordion">
        <li><a class="nav-link" href="#"><i class="bi bi-chevron-right me-1"></i>サブメニュー1</a></li>
        <li><a class="nav-link" href="#"><i class="bi bi-chevron-right me-1"></i>サブメニュー2</a></li>
        <li><a class="nav-link" href="#"><i class="bi bi-chevron-right me-1"></i>サブメニュー3</a> </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" aria-controls="menu_item2" aria-expanded="true" href="#">
        メニュー3<i class="bi bi-caret-down-fill ms-1"></i>
      </a>
      <ul id="menu_item2" class="submenu collapse accordion-collapse show" data-bs-parent="#nav_accordion">
        <li><a class="nav-link" href="#"><i class="bi bi-chevron-right me-1"></i>サブメニュー1</a></li>
        <li><a class="nav-link" href="#"><i class="bi bi-chevron-right me-1"></i>サブメニュー2</a></li>
        <li><a class="nav-link" href="#"><i class="bi bi-chevron-right me-1"></i>サブメニュー3</a></li>
      </ul>
    </li>
  </ul>
</nav>