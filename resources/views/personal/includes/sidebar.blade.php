
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <ul class="pt-4 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('main.index')}}" class="nav-link">
             <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Войти на сайт
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('personal.main.index')}}" class="nav-link">
             <i class="nav-icon fas fa-home"></i>
              <p>
                Главная
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('personal.liked.index')}}" class="nav-link">
            <i class=" nav-icon fas fa-thumbs-up"></i>
              <p>
                Понравившиеся посты
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('personal.comment.index')}}" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
              <p>
                Коментарии
              </p>
            </a>
          </li>

        </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
