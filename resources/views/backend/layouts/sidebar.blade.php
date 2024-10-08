<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">||</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Quản lý quần áo</li>
            <li
                class="dropdown {{ setActive([
                    'brands.*',
                    'products.*',
                    'admin.products-image-gallery.*',
                    'admin.products-variant.*',
                    'admin.products-variant-item.*',
                    'admin.seller-products.*',
                    'admin.seller-pending-products.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-box"></i>
                    <span>Manage Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['brands.index']) }}"><a class="nav-link"
                            href="{{ route('brands.index') }}">Brands</a></li>
                    <li
                        class="{{ setActive([
                            'products.*',
                            'admin.products-image-gallery.*',
                            'admin.products-variant.*',
                            'admin.products-variant-item.*',
                            'admin.reviews.*',
                        ]) }}">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="{{ setActive(['admin.seller-products.*']) }}"><a class="nav-link"
                            href="">Seller Products</a></li>
                    <li class="{{ setActive(['admin.seller-pending-products.*']) }}"><a class="nav-link"
                            href="">Seller Pending Products</a></li>

                    <li class="{{ setActive(['admin.reviews.*']) }}"><a class="nav-link"
                            href="">Product Reviews</a></li>

                </ul>
            </li>



            <li
                class="dropdown {{ setActive([
                    'admin.order.*',
                    'admin.pending-orders',
                    'admin.processed-orders',
                    'admin.dropped-off-orders',
                    'admin.shipped-orders',
                    'admin.out-for-delivery-orders',
                    'admin.delivered-orders',
                    'admin.canceled-orders',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cart-plus"></i>
                    <span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.order.*']) }}"><a class="nav-link"
                            href="">All Orders</a></li>
                    <li class="{{ setActive(['admin.pending-orders']) }}"><a class="nav-link"
                            href="">All Pending Orders</a></li>
                    <li class="{{ setActive(['admin.processed-orders']) }}"><a class="nav-link"
                            href="">All processed Orders</a></li>
                    <li class="{{ setActive(['admin.dropped-off']) }}"><a class="nav-link"
                            href="">All Dropped Off Orders</a></li>

                    <li class="{{ setActive(['admin.shipped-orders']) }}"><a class="nav-link"
                            href="">All Shipped Orders</a></li>
                    <li class="{{ setActive(['admin.out-for-delivery-orders']) }}"><a class="nav-link"
                            href="">All Out For Delivery Orders</a></li>


                    <li class="{{ setActive(['admin.delivered-orders']) }}"><a class="nav-link"
                            href="">All Delivered Orders</a></li>

                    <li class="{{ setActive(['admin.canceled-orders']) }}"><a class="nav-link"
                            href="">All Canceled Orders</a></li>

                </ul>
            </li>

            <li class="{{ setActive(['admin.transaction']) }}"><a class="nav-link"
                    href=""><i class="fas fa-money-bill-alt"></i>
                    <span>Transactions</span></a>
            </li>

            <li
                class="dropdown {{ setActive([
                    'admin.vendor-profile.*',
                    'admin.coupons.*',
                    'admin.shipping-rule.*',
                    'admin.payment-settings.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Ecommerce</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}"><a class="nav-link"
                            href="">Flash Sale</a></li>
                    <li class="{{ setActive(['admin.coupons.*']) }}"><a class="nav-link"
                            href="">Coupons</a></li>
                    <li class="{{ setActive(['admin.shipping-rule.*']) }}"><a class="nav-link"
                            href="">Shipping Rule</a></li>
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}"><a class="nav-link"
                            href="">Vendor Profile</a></li>
                    <li class="{{ setActive(['admin.payment-settings.*']) }}"><a class="nav-link"
                            href="">Payment Settings</a></li>

                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.withdraw-method.*', 'admin.withdraw.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-wallet"></i>
                    <span>Withdraw Payments</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ setActive(['admin.withdraw-method.*']) }}"><a class="nav-link"
                            href="">Withdraw Mehtod</a></li>

                    <li class="{{ setActive(['admin.withdraw.index']) }}"><a class="nav-link"
                            href="">Withdraw List</a></li>

                </ul>
            </li>

            <li
                class="dropdown {{ setActive([
                    'admin.slider.*',
                    'admin.vendor-condition.index',
                    'admin.about.index',
                    'admin.terms-and-conditions.index',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="">Slider</a></li>

                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="">Home Page Setting</a></li>

                    <li class="{{ setActive(['admin.vendor-condition.index']) }}"><a class="nav-link"
                            href="">Vendor Condition</a></li>
                    <li class="{{ setActive(['admin.about.index']) }}"><a class="nav-link"
                            href="">About page</a></li>
                    <li class="{{ setActive(['admin.terms-and-conditions.index']) }}"><a class="nav-link"
                            href="">Terms Page</a></li>

                </ul>
            </li>

            <li><a class="nav-link {{ setActive(['admin.advertisement.*']) }}"
                    href=""><i class="fas fa-ad"></i>
                    <span>Advertisement</span></a></li>

            <li
                class="dropdown {{ setActive(['admin.blog-category.*', 'admin.blog.*', 'admin.blog-comments.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fab fa-blogger-b"></i> <span>Manage Blog</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ setActive(['admin.blog-category.*']) }}"><a class="nav-link"
                            href="">Categories</a></li>
                    <li class="{{ setActive(['admin.blog.*']) }}"><a class="nav-link"
                            href="">Blogs</a></li>
                    <li class="{{ setActive(['admin.blog-comments.index']) }}"><a class="nav-link"
                            href="">Blog Comments</a></li>
                </ul>
            </li>

            <li><a class="nav-link {{ setActive(['admin.messages.index']) }}"
                    href=""><i class="fas fa-user"></i>
                    <span>Messages</span></a></li>



            <li class="menu-header">Settings & More</li>


            <li
                class="dropdown {{ setActive([
                    'admin.footer-info.index',
                    'admin.footer-socials.*',
                    'admin.footer-grid-two.*',
                    'admin.footer-grid-three.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-th-large"></i><span>Footer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.footer-info.index']) }}"><a class="nav-link"
                            href="">Footer Info</a></li>

                    <li class="{{ setActive(['admin.footer-socials.*']) }}"><a class="nav-link"
                            href="">Footer Socials</a></li>

                    <li class="{{ setActive(['admin.footer-grid-two.*']) }}"><a class="nav-link"
                            href="">Footer Grid Two</a></li>

                    <li class="{{ setActive(['admin.footer-grid-three.*']) }}"><a class="nav-link"
                            href="">Footer Grid Three</a></li>

                </ul>
            </li>
            <li
                class="dropdown {{ setActive([
                    'admin.vendor-requests.index',
                    'admin.customer.index',
                    'admin.vendor-list.index',
                    'admin.manage-user.index',
                    'admin-list.index',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.customer.index']) }}"><a class="nav-link"
                            href="">Customer list</a></li>
                    <li class=""><a class="nav-link"
                            href="">Vendor list</a></li>

                    <li class="{{ setActive(['admin.vendor-requests.index']) }}"><a class="nav-link"
                            href="">Pending vendors</a></li>

                    <li class="{{ setActive(['admin.admin-list.index']) }}"><a class="nav-link"
                            href="">Admin Lists</a></li>

                    <li class="{{ setActive(['admin.manage-user.index']) }}"><a class="nav-link"
                            href="">Manage user</a></li>

                </ul>
            </li>


            <li><a class="nav-link {{ setActive(['admin.subscribers.*']) }}"
                    href=""><i class="fas fa-user"></i>
                    <span>Subscribers</span></a></li>

            <li><a class="nav-link" href=""><i class="fas fa-wrench"></i>
                    <span>Settings</span></a></li>

        </ul>

    </aside>
</div>
