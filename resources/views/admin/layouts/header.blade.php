<header class="header-main">
    <section class="sidebar-header bg-gray">
        <section class="d-flex justify-content-between flex-md-row-reverse px-2">
            <span id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
            <span id="sidebar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
            <span><img class="logo" src="{{ asset('admin-assets/images/logo.png')  }}" alt="logo" width="50"></span>
            <span id="menu-toggle" class="d-md-none"><i class="fas fa-ellipsis-h"></i></span>
        </section>
    </section>
    <section id="body-header" class="body-header">
        <section class="d-flex justify-content-between">
            <section>
                    <span class="me-5">
                        <span id="search-area" class="search-area d-none">
                            <i id="search-area-hide" class="fas fa-times pointer"></i>
                            <input id="search-input" type="text" name="search" class="search-input">
                            <i class="fas fa-search pointer"></i>
                        </span>
                        <i id="search-toggle" class="fas fa-search p-1 d-none d-md-inline pointer"></i>
                    </span>
                <span id="full-screen" class="d-none d-md-inline p-1 me-5">
                        <i id="screen-compress" class="fas fa-compress pointer d-none"></i>
                        <i id="screen-expand" class="fas fa-expand pointer"></i>
                    </span>
            </section>
            <section>
                    <span id="header-notification-toggle" class="position-relative pointer ms-2 ms-md-4">
                            <i class="far fa-bell"></i>
                            <sup class="badge bg-danger">4</sup>
                            <section class="notification-container rounded">
                                <section class="d-flex justify-content-between">
                                    <span class="px-2">
                                        نوتیفیکیشن ها
                                    </span>
                                    <span class="px-2">
                                        <span class="badge bg-danger">
                                            جدید
                                        </span>
                                    </span>
                                </section>
                                <ul class="list-group rounded px-0">
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar">
                                            <section class="media-body pe-1">
                                                <h5 class="notification-user">طاها زرگر</h5>
                                                <p class="notification-text">سلام چطوری</p>
                                                <p class="notification-time">30 دقیقه</p>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar">
                                            <section class="media-body pe-1">
                                                <h5 class="notification-user">طاها زرگر</h5>
                                                <p class="notification-text">سلام چطوری</p>
                                                <p class="notification-time">30 دقیقه</p>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar">
                                            <section class="media-body pe-1">
                                                <h5 class="notification-user">طاها زرگر</h5>
                                                <p class="notification-text">سلام چطوری</p>
                                                <p class="notification-time">30 دقیقه</p>
                                            </section>
                                        </section>
                                    </li>
                                </ul>
                            </section>
                    </span>
                <span id="comment-show-me" class="position-relative pointer ms-2 ms-md-4">
                        <span><i class="far fa-comment-alt"><sup class="badge bg-danger mx-1">3</sup></i>
                        </span>
                        <section class="header-comment">
                            <section class="border-bottom px-4">
                                <input type="text" class="form-control form-control-sm my-4" placeholder="جستجو ...">
                            </section>
                            <section class="header-comment-wrapper">
                                <ul class="list-group rounded px-0">
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="avatar" class="notification-img">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">محمد هاشمی</h5>
                                                    <span><i class="fas fa-circle"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                </ul>
                            </section>
                        </section>
                    </span>
                <span id="profile-show" class="position-relative pointer ms-3 ms-md-5">
                        <span>
                            <img class="header-avatar pointer" src="{{ asset('admin-assets/images/avatar1.webp')  }}" alt="profile">
                            <span class="header-username pointer">کامران محمدی</span>
                            <i class="fas fa-angle-down"></i>
                        </span>
                        <section class="header-profile rounded">
                            <section class="list-group rounded">
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-cog"></i>
                                    <span class="header-profile-text">تنظیمات</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-user"></i>
                                    <span class="header-profile-text">کاربر</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-envelope"></i>
                                    <span class="header-profile-text">پیام ها</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-lock"></i>
                                    <span class="header-profile-text">قفل صفحه</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="header-profile-text">خروج</span>
                                </a>
                            </section>
                        </section>
                    </span>
            </section>
        </section>
    </section>
</header>

