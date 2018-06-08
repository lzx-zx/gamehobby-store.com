<ul class="sidebar-nav">
    <li>
        <a class="nav-link" href="{{ route('admin.dashboard') }}"><span class="fa fa-tachometer-alt"></span> Dashboard</a>
    </li>
    <li>
        <a class="nav-link" href="#"><span class="fa fa-shopping-cart"></span> Order</a>
    </li>
    <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#inventory" role="button" data-toggle="collapse" aria-expanded="false" target="">
            <span class="fa fa-shopping-bag"></span>  Inventory<span class="caret"></span>
        </a>

        <div id="inventory" class="collapse">
            <ul class="ml-auto" style="list-style-type: none">
                <li>
                    <a class="nav-link" href="{{ route('admin.product.index') }}">Product</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('admin.category.index') }}">Category</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Stock</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <a class="nav-link dropdown-toggle" href="#users" role="button" data-toggle="collapse" aria-expanded="false" target="">
            <span class="fa fa-user"></span>  User<span class="caret"></span>
        </a>

        <div id="users" class="collapse">
            <ul class="ml-auto" style="list-style-type: none">
                <li>
                    <a class="nav-link" href="#">Permission</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Customer</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Seller</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        {{--<a class="nav-link dropdown-toggle" href="#submenu2" role="button" data-toggle="collapse" aria-expanded="false" target="">--}}
            {{--<span class="fa fa-user"></span>  User--}}
            {{--<span class="caret"></span>--}}
        {{--</a>--}}

        {{--<div id="submenu2" class="collapse">--}}
            {{--<ul>--}}
                {{--<li>--}}
                    <a class="nav-link" href="#"><span class="fa fa-building"></span> Companies</a>
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="nav-link" href="#">Customer</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="nav-link" href="#">Seller</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </li>
    <li>
        <a class="nav-link" href="#"><span class="fa fa-cog"></span> Settings</a>
    </li>
</ul>