<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{route('backend.dashboard')}}" class="simple-text logo-normal">
            {{ __('Solid Water Backend') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
                <a href="{{ route('backend.dashboard') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'projects') active @endif">
                <a href="{{ route('backend.projects.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Projects') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'customers') active @endif">
                <a href="{{ route('backend.customers.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Customers') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'mainImages') active @endif">
                <a href="{{ route('backend.mainImages.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Main Images') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'services') active @endif">
                <a href="{{ route('backend.services.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Services') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'contactDetails') active @endif">
                <a href="{{ route('backend.contactDetails.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Contact Details') }}</p>
                </a>
            </li>
            {{-- <li class="@if ($activePage == 'orders') active @endif">
                <a href="{{ route('backend.getTodayOreder') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Today Orders') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'cancelledOrders') active @endif">
                <a href="{{ route('backend.cancelOrders.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Cancelled Orders') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'items') active @endif">
                <a href="{{ route('backend.items.index') }}">
                    <i class="fas fa-spray-can"></i>
                    <p>{{ __('Items') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'shops') active @endif">
                <a href="{{ route('backend.shops.index') }}">
                    <i class="fas fa-home"></i>
                    <p>{{ __('Shops') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'categories') active @endif">
                <a href="{{ route('backend.categories.index') }}">
                    <i class="fas fa-tags"></i>
                    <p>{{ __('Categories') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'quantityTypes') active @endif">
                <a href="{{ route('backend.quantityTypes.index') }}">
                    <i class="fas fa-tags"></i>
                    <p>{{ __('QuantityTypes') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
                <a href="{{ route('backend.users.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Users') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'customers') active @endif">
                <a href="{{ route('backend.getcustomers') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Customers') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'delivery_charges') active @endif">
                <a href="{{ route('backend.editDeliveryCharges') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Delivery Charges') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'coupons') active @endif">
                <a href="{{ route('backend.coupons.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Genarate Coupons') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'feedbacks') active @endif">
                <a href="{{ route('backend.feedbacks.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Feedbacks') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'bannerImages') active @endif">
                <a href="{{ route('backend.bannerImages.index') }}">
                    <i class="fas fa-image"></i>
                    <p>{{ __('Banner Images') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
