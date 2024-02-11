<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        @php $id = Auth::user()->id; $adminData = App\Models\User::find($id);
        @endphp

        <!--- Sidemenu -->

        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i
                        ><span class="badge rounded-pill bg-success float-end"
                            >3</span
                        >
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li class="menu-title">User</li>

                <li>
                    <a href="{{ route('supplier.all') }}" class="waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Manage Supplier</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customer.all') }}" class="waves-effect">
                        <i class="ri-group-line"></i>
                        <span>Manage Customer</span>
                    </a>
                </li>

                <li class="menu-title">Master Data</li>
                <li>
                    <a href="{{ route('unit.all') }}" class="waves-effect">
                        <i class="ri-ruler-2-line"></i>
                        <span>Manage Unit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.all') }}" class="waves-effect">
                        <i class="ri-stack-line"></i>
                        <span>Manage Category</span>
                    </a>
                </li>

                <li>
                    <a
                        href="javascript: void(0);"
                        class="has-arrow waves-effect"
                    >
                        <i class="ri-box-3-line"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('product.all') }}">All Product</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a
                        href="javascript: void(0);"
                        class="has-arrow waves-effect"
                    >
                        <i class="ri-exchange-2-line"></i>
                        <span>Manage Purchase</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('purchase.all') }}"
                                >All Purchase</a
                            >
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-eraser-fill"></i>
                        <span class="badge rounded-pill bg-danger float-end"
                            >8</span
                        >
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="form-elements.html">Form Elements</a>
                        </li>
                        <li>
                            <a href="form-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="form-advanced.html"
                                >Form Advanced Plugins</a
                            >
                        </li>
                        <li>
                            <a href="form-editors.html">Form Editors</a>
                        </li>
                        <li>
                            <a href="form-uploads.html">Form File Upload</a>
                        </li>
                        <li>
                            <a href="form-xeditable.html">Form X-editable</a>
                        </li>
                        <li>
                            <a href="form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="form-mask.html">Form Mask</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a
                        href="javascript: void(0);"
                        class="has-arrow waves-effect"
                    >
                        <i class="ri-share-line"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);">Level 1.1</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                >Level 1.2</a
                            >
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);">Level 2.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Level 2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
