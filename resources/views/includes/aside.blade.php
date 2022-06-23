<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                    href="../../../html/rtl/vertical-menu-template/index.html">
                    <div class="brand-logo"></div>
                    <p class="brand-text mb-0">Naxues Gate</p>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ request()->is('*/') ? 'active has-sub sidebar-group-active open' : '' }}">
                <a href="index.html"><i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">الرئيسية</span>
                </a>
            </li>

                <li class=" nav-item {{ request()->is('*Unversity*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-archive"></i><span class="menu-title"
                    data-i18n="User">الجامعات</span></a>
            <ul class="menu-content">
                <li ><a href="{{ route('Unversity.create') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">اضافة جامعة</span></a>
                </li>
                <li><a href="{{ route('Unversity.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">عرض الجامعات</span></a>
                </li>
            </ul>
                </li>

                <li class=" nav-item {{ request()->is('*Collage*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-book"></i><span class="menu-title"
                    data-i18n="User">الكليات</span></a>
            <ul class="menu-content">
                <li ><a href="{{ route('Collage.create') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">اضافة كلية</span></a>
                </li>
                <li><a href="{{ route('Collage.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">عرض الكليات</span></a>
                </li>
            </ul>
                </li>

                <li class=" nav-item {{ request()->is('*specializations*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-layers"></i><span class="menu-title"
                    data-i18n="User">التخصصات</span></a>    
            <ul class="menu-content">
                <li ><a href="{{ route('specialization.create') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">اضافة تخصص</span></a>
                </li>
                <li><a href="{{ route('specialization.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">عرض التخصصات</span></a>
                </li>
            </ul>
                </li>
                
            <li class=" nav-item {{ request()->is('*Subject*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-book-open"></i><span class="menu-title"
                data-i18n="User">المواد</span></a>
                <ul class="menu-content">
                    <li ><a href="{{ route('Subject.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">مادة جديدة</span></a>
                    </li>
                    <li ><a href="{{ route('Subject.create') }}"><i class="feather icon-circle"></i><span
                        class="menu-item" data-i18n="List">مواد جديدة</span></a>
                    </li>
                    <li><a href="{{ route('Subject.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">عرض المواد</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ request()->is('*Student*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                data-i18n="User">الطلاب</span></a>
        <ul class="menu-content">
            <li ><a href="{{ route('Student.create') }}"><i class="feather icon-circle"></i><span
                        class="menu-item" data-i18n="List">طالب جديد</span></a>
            </li>
            <li><a href="{{ route('Student.index') }}"><i class="feather icon-circle"></i><span
                        class="menu-item" data-i18n="View">عرض الطلاب</span></a>
            </li>
        </ul>
            </li>

            <li class=" nav-item  {{ request()->is('*User*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-users"></i><span class="menu-title"
                data-i18n="User">المستخدمين</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('User.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">مستخدم جديد</span></a>
                    </li>
                    <li><a href="{{ route('User.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">عرض المستخدمين</span></a>
                    </li>
                </ul>
            </li>
            

            <li class=" nav-item {{ request()->is('*Doctor*') ? 'active has-sub sidebar-group-active open' : '' }}"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                data-i18n="User">أعضاء هيئة التدريس</span></a>
                <ul class="menu-content">
                    <li ><a href="{{ route('Doctor.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">عضو هيئة تدريس جديدة</span></a>
                    </li>
                    <li><a href="{{ route('Doctor.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">عرض أعضاء هيئة تدريس</span></a>
                    </li>
                </ul>
            </li>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-mail"></i><span class="menu-title"
                        data-i18n="User">المراسلات</span></a>
                <ul class="menu-content">
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List"> البريد الوارد </span></a>
                    </li>
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List">الرسائل المقروءة</span></a>
                    </li>
                    <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="View"> الرسائل غير مقروءة </span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="page-account-settings.html"><i class="feather icon-settings"></i><span
                        class="menu-title" data-i18n="Account Settings">الإعدادات</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                        data-i18n="User">التقارير</span></a>
                <ul class="menu-content">
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List"> كشف درجات طالب </span></a>
                    </li>
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List">  درجات مادة</span></a>
                    </li>
                    <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="View"> تقرير المواد للعام الدراسي </span></a>
                    </li>
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List"> الطلاب </span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
