<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="nav-icon la la-home"></i>{{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->can(config('permission.admin')) || backpack_user()->can(config('permission.demo')))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'>
        <i class="nav-icon las la-folder"></i>Category</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('layanan') }}'>
        <i class='nav-icon la la-question'></i> Layanans</a></li>
@endif
<!-- Super Admin -->
@if (backpack_user()->id === 1 || backpack_user()->can(config('permission.demo')))
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Authentication</a>
        <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
        </ul>
</li>
@endif