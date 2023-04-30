  <div class="app-sidebar">
      <div class="logo">
          <a href="index-2.html" class="logo-icon"><span class="logo-text">AdminPanel</span></a>
      </div>
      <div class="app-menu">
          <ul class="accordion-menu">
              <li class="sidebar-title">
                  Apps
              </li>
              <li class="{{ request()->routeIs('adminDashboard*') ? 'active-page' : '' }}">
                  <a href="{{route('adminDashboard')}}"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
              </li>
              <li>
                  <a href="mailbox.html"><i class="material-icons-two-tone">inbox</i>Mailbox<span class="badge rounded-pill badge-danger float-end"></span></a>
              </li>
              <li>
                  <a href="#"><i class="material-icons-two-tone">star</i>Front End<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                  <ul class="sub-menu">
                      <li>
                          <a href="{{route('slider.index')}}">Home Page Slider</a>
                      </li>
                      <li>
                          <a href="{{route('contact.index')}}">Contact</a>
                      </li>
                      <li>
                          <a href="{{route('about.index')}}">About</a>
                      </li>


                  </ul>
              </li>
              <li class="sidebar-title">
                  Products
              </li>
              <li class="{{ request()->routeIs('category.index*') ? 'active-page' : '' }}">
                  <a href="{{route('category.index')}}"><i class="material-icons-two-tone">category</i>Categories</a>
              </li>
              <li class="{{ request()->routeIs('product.index*') ? 'active-page' : '' }}">
                  <a href="{{route('product.index')}}"><i class="material-icons-two-tone">square</i>Products</a>
              </li>



          </ul>
      </div>
  </div>
  <div class="app-container">
      <div class="search">
          <form>
              <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
          </form>
          <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
      </div>
      <div class="app-header">
          <nav class="navbar navbar-light navbar-expand-lg">
              <div class="container-fluid">
                  <div class="navbar-nav" id="navbarNav">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                          </li>

                          <li class="nav-item dropdown hidden-on-mobile">
                              <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="material-icons-outlined">explore</i>
                              </a>
                              <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                  <li>
                                      <h6 class="dropdown-header">Repositories</h6>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <h5 class="dropdown-item-title">
                                              Neptune iOS
                                              <span class="badge badge-warning">1.0.2</span>
                                              <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                          </h5>
                                          <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <h5 class="dropdown-item-title">
                                              Neptune Android
                                              <span class="badge badge-info">dev</span>
                                              <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                          </h5>
                                          <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                      </a>
                                  </li>
                                  <li class="dropdown-btn-item d-grid">
                                      <button class="btn btn-primary">Create new repository</button>
                                  </li>
                              </ul>
                          </li>
                      </ul>

                  </div>
                  <div class="d-flex">
                      <ul class="navbar-nav">



                          <li class="nav-item">
                              <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                          </li>
                          <li class="nav-item hidden-on-mobile">
                              <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="{{ url('cms/assets')}}/images/flags/us.png" alt=""></a>

                          </li>
                          <li class="nav-item hidden-on-mobile">
                              <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">4</a>
                              <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                  <h6 class="dropdown-header">Notifications</h6>
                                  <div class="notifications-dropdown-list">
                                      <a href="#">
                                          <div class="notifications-dropdown-item">
                                              <div class="notifications-dropdown-item-image">
                                                  <span class="notifications-badge bg-info text-white">
                                                      <i class="material-icons-outlined">campaign</i>
                                                  </span>
                                              </div>
                                              <div class="notifications-dropdown-item-text">
                                                  <p class="bold-notifications-text">Donec tempus nisi sed erat vestibulum, eu suscipit ex laoreet</p>
                                                  <small>19:00</small>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="#">
                                          <div class="notifications-dropdown-item">
                                              <div class="notifications-dropdown-item-image">
                                                  <span class="notifications-badge bg-danger text-white">
                                                      <i class="material-icons-outlined">bolt</i>
                                                  </span>
                                              </div>
                                              <div class="notifications-dropdown-item-text">
                                                  <p class="bold-notifications-text">Quisque ligula dui, tincidunt nec pharetra eu, fringilla quis mauris</p>
                                                  <small>18:00</small>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="#">
                                          <div class="notifications-dropdown-item">
                                              <div class="notifications-dropdown-item-image">
                                                  <span class="notifications-badge bg-success text-white">
                                                      <i class="material-icons-outlined">alternate_email</i>
                                                  </span>
                                              </div>
                                              <div class="notifications-dropdown-item-text">
                                                  <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                  <small>yesterday</small>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="#">
                                          <div class="notifications-dropdown-item">
                                              <div class="notifications-dropdown-item-image">
                                                  <span class="notifications-badge">
                                                      <img src="{{ url('cms/assets')}}/images/avatars/avatar1.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="notifications-dropdown-item-text">
                                                  <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                  <small>yesterday</small>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="#">
                                          <div class="notifications-dropdown-item">
                                              <div class="notifications-dropdown-item-image">
                                                  <span class="notifications-badge">
                                                      <img src="{{ url('cms/assets')}}/images/avatars/avatar7.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="notifications-dropdown-item-text">
                                                  <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin velit sit amet auctor porta</p>
                                                  <small>yesterday</small>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item hidden-on-mobile">
                              <a class="nav-link" href="{{route('adminLogout')}}">Logout</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
      </div>