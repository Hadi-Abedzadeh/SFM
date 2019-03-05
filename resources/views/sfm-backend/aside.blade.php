<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
     m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__section m-menu__section--first">
            <h4 class="m-menu__section-text">Departments</h4>
            <i class="m-menu__section-icon flaticon-more-v2"></i>
        </li>

        @if(moduleState('blog'))
            {{-- Blog --}}
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text">Blog</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                class="m-menu__link"><span class="m-menu__link-text">Resources</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('backend.blog.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Add a new post</span></a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.blog.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">All posts</span>
                            </a>
                        </li>


                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.blog.comment.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Comments</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Categories --}}
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-share"></i>
                    <span class="m-menu__link-text">Categories</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                class="m-menu__link"><span class="m-menu__link-text">Resources</span></span>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.blog.category.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Add category</span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.blog.category.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">All categories</span>
                            </a>
                        </li>




                    </ul>
                </div>
            </li>

        @endif

        @if(moduleState('card'))
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-graphic"></i>
                    <span class="m-menu__link-text">card</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('backend.card.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Add a new card</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.card.index') }}" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">All cards</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-light"></i>
                    <span class="m-menu__link-text">Pages</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('backend.page.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Add a page</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.page.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">All pages</span></a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-network"></i>
                <span class="m-menu__link-text">Products</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="##" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">Add a product</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="##" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">All products</span></a>
                    </li>
                </ul>
            </div>
        </li>

        @if(moduleState('news'))
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-graphic"></i>
                    <span class="m-menu__link-text">News</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('backend.news.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">All news</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="{{ route('backend.news.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Add news</span></a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        @if(moduleState('faq'))
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-share"></i>
                <span class="m-menu__link-text">FAQ</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{ route('faq.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">All FAQ</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="{{ route('faq.create') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">Add FAQ</span></a>
                    </li>
                </ul>
            </div>
        </li>
        @endif

        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">Reports</h4>
            <i class="m-menu__section-icon flaticon-more-v2"></i>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="{{ route('contact-us.index') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-graphic">
                </i><span class="m-menu__link-text">Contact us</span></a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="{{ route('about-us.index') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-share"></i>
                </i><span class="m-menu__link-text">About us</span></a>
        </li>
    </ul>
</div>
