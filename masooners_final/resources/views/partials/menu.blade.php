<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('professional_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/categories*") ? "c-show" : "" }} {{ request()->is("admin/pro-sub-categories*") ? "c-show" : "" }} {{ request()->is("admin/product-styles*") ? "c-show" : "" }} {{ request()->is("admin/awards*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fas fa-user-tie c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.professional.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "c-active" : "" }}">
                                <i class="fas fa-sitemap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.category.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('pro_sub_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.pro-sub-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/pro-sub-categories") || request()->is("admin/pro-sub-categories/*") ? "c-active" : "" }}">
                                <i class="fas fa-chalkboard c-sidebar-nav-icon">
                                </i>
                                {{ trans('cruds.proSubCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_style_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.product-styles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-styles") || request()->is("admin/product-styles/*") ? "c-active" : "" }}">
                                <i class="fas fa-cookie-bite c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.productStyle.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('award_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.awards.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/awards") || request()->is("admin/awards/*") ? "c-active" : "" }}">
                                <i class="fas fa-trophy c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.award.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('professional_detail_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.professional-details.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/professional-details") || request()->is("admin/professional-details/*") ? "c-active" : "" }}">
                    <i class="fas fa-info-circle c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.professionalDetail.title') }}
                </a>
            </li>
        @endcan
        @can('professional_profile_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.professional-profiles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/professional-profiles") || request()->is("admin/professional-profiles/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.professionalProfile.title') }}
                </a>
            </li>
        @endcan
        @can('portfolio_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.portfolios.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/portfolios") || request()->is("admin/portfolios/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.portfolio.title') }}
                </a>
            </li>
        @endcan
        @can('shop_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/product-categories*") ? "c-show" : "" }} {{ request()->is("admin/products*") ? "c-show" : "" }} {{ request()->is("admin/product-sub-categories*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.shop.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('product_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.product-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "c-active" : "" }}">
                                <i class="fab fa-expeditedssl c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.productCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                                <i class="fas fa-cart-plus c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.product.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_sub_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.product-sub-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-sub-categories") || request()->is("admin/product-sub-categories/*") ? "c-active" : "" }}">
                                <i class="fas fa-assistive-listening-systems c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.productSubCategory.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('blog_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/blog-categories*") ? "c-show" : "" }} {{ request()->is("admin/create-blogs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fab fa-blogger-b c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.blog.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('blog_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.blog-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blog-categories") || request()->is("admin/blog-categories/*") ? "c-active" : "" }}">
                                <i class="fas fa-sitemap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blogCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('create_blog_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.create-blogs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/create-blogs") || request()->is("admin/create-blogs/*") ? "c-active" : "" }}">
                                <i class="fab fa-shopware c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.createBlog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('get_idea_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/idea-categories*") ? "c-show" : "" }} {{ request()->is("admin/idea-styles*") ? "c-show" : "" }} {{ request()->is("admin/ideas*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fas fa-lightbulb c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.getIdea.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('idea_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.idea-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/idea-categories") || request()->is("admin/idea-categories/*") ? "c-active" : "" }}">
                                <i class="fas fa-sitemap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.ideaCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('idea_style_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.idea-styles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/idea-styles") || request()->is("admin/idea-styles/*") ? "c-active" : "" }}">
                                <i class="fas fa-divide c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.ideaStyle.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('idea_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.ideas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/ideas") || request()->is("admin/ideas/*") ? "c-active" : "" }}">
                                <i class="fas fa-fingerprint c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.idea.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('comment_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.comments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/comments") || request()->is("admin/comments/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.comment.title') }}
                </a>
            </li>
        @endcan
        @can('profile_comment_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.profile-comments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/profile-comments") || request()->is("admin/profile-comments/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.profileComment.title') }}
                </a>
            </li>
        @endcan
        @can('product_comment_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.product-comments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-comments") || request()->is("admin/product-comments/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.productComment.title') }}
                </a>
            </li>
        @endcan
        @can('cart_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.carts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/carts") || request()->is("admin/carts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.cart.title') }}
                </a>
            </li>
        @endcan
        @can('order_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "c-active" : "" }}">
                    <i class="fas fa-sort c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.order.title') }}
                </a>
            </li>
        @endcan
        {{--  @can('order_access')  --}}
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.suggesttion.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "c-active" : "" }}">
                <i class="fas fa-sort c-sidebar-nav-icon">

                </i>
                Suggestion Request
            </a>
        </li>
    {{--  @endcan  --}}
        {{-- ======================== --}}
        @can('query')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.query.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/query") || request()->is("admin/query/*") ? "c-active" : "" }}">
                    <i class="fas fa-chart-line c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.query.title') }}
                </a>
            </li>
        @endcan
        {{-- ========================= --}}
        @can('order_product_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.order-products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-products") || request()->is("admin/order-products/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.orderProduct.title') }}
                </a>
            </li>
        @endcan
        @can('wishlist_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.wishlists.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/wishlists") || request()->is("admin/wishlists/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.wishlist.title') }}
                </a>
            </li>
        @endcan
        @can('customer_login_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.customer-logins.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customer-logins") || request()->is("admin/customer-logins/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customerLogin.title') }}
                </a>
            </li>
        @endcan
        @can('profile_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.profiles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/profiles") || request()->is("admin/profiles/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.profile.title') }}
                </a>
            </li>
        @endcan
        @can('customer_contact_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.customer-contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customer-contacts") || request()->is("admin/customer-contacts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customerContact.title') }}
                </a>
            </li>
        @endcan
        @can('message_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/messages") || request()->is("admin/messages/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.message.title') }}
                </a>
            </li>
        @endcan
        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
    </ul>

</div>
