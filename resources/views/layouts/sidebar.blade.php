@php
    $nav_items[__('Dashboard')] = [
        'icon' => 'fa fa-home',
        'route' => '#'
    ];
    $nav_items[__('Messages')] = [
        'icon' => 'fa fa-envelope',
        'route' => '#'
    ];
    $nav_items[__('Notifications')] = [
        'icon' => 'fa fa-bell',
        'route' => '#'
    ];
    $nav_items[__('Product Management')] = [
        'icon' => 'fa fa-product-hunt',
        'data' => [
          __('Add Product') => '#',
          __('All Product') => '#',
          __('Hot Deals Product') => '#',
          __('Product color') => '#'
        ]
    ];
    $user = auth()->user();
@endphp
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    @auth
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://365psd.com/images/istock/previews/9081/90819297-spontaneous-laughing-bearded-man-face-clip-art.jpg" alt="User Image" height="50px">
            <div>
                <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
                <p class="app-sidebar__user-designation">{{'( Designation )'}}</p>
            </div>
        </div>
    @endauth
    <ul class="app-menu">
        @foreach ($nav_items as $i => $item)
            @if(isset($item['data']))
                <li class="treeview @if(($is_open = in_array(url(Route::current()->uri()), $item['data']))) is-expanded @endif">
                    <a class="app-menu__item" href="#" data-toggle="treeview">
                        <i class="app-menu__icon {{ $item['icon'] }}"></i>
                        <span class="app-menu__label">{{ $i }}</span>
                        <i class="treeview-indicator fa fa-angle-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @foreach ($item['data'] as $name => $url)
                            @if($url)
                                <li>
                                    <a class="treeview-item @if(url(Route::current()->uri()) == $url) active @endif" href="{{ $url }}">
                                        <i class="icon fa fa-angle-right"></i> {{$name}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @else
                <li>
                    <a class="app-menu__item @if (url(Route::current()->uri()) == $item['route']) active @endif" href="{{ $item['route'] }}">
                        <i class="app-menu__icon {{ $item['icon'] }}"></i>
                        <span class="app-menu__label">{{ $i }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</aside>
