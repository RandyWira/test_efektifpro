
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Efektifpro</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">ePro</a>
            </div>
            <ul class="sidebar-menu">
                <li class="{{ Request::is('jenis*' , '/') ? 'active' : '' }}">
                    <a class="nav-link" href="/jenis">
                        <i class="fas fa-box"></i><span>Jenis Barang</span>
                    </a>
                </li>
                <li class="{{ Request::is('brand*') ? 'active' : '' }}">
                    <a class="nav-link" href="/brand">
                        <i class="fas fa-copyright"></i><span>Brand</span>
                    </a>
                </li>
                <li class="{{ Request::is('stock*') ? 'active' : '' }}">
                    <a class="nav-link" href="/stock">
                        <i class="fas fa-boxes"></i><span>Stock</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>