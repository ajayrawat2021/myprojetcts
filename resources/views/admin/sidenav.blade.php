@section('sidenav')
<aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="/dashboard"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item @yield('docker')">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/add-docker-content" aria-expanded="false"
                  ><i class="mdi mdi-pencil"></i><span class="hide-menu">Docker</span></a>
              </li>
              <li class="sidebar-item @yield('elastic')">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="add-elasticsearch-content" aria-expanded="false" ><i class="mdi mdi-move-resize-variant"></i
                  ><span class="hide-menu">Elastic Search</span></a
                >
              </li>
              <li class="sidebar-item @yield('kubernets')">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="add-kubernet-content" aria-expanded="false"
                  ><i class="mdi mdi-pencil"></i
                  ><span class="hide-menu">Kubernetes</span></a
                >
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"
                  ><i class="mdi mdi-pencil"></i><span class="hide-menu">CI/CD</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"
                  ><i class="mdi mdi-move-resize-variant"></i
                  ><span class="hide-menu">Logs</span></a
                >
              </li>
              
            
            </ul>
          </nav>

          @endsection