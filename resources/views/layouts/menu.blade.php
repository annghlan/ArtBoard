




<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('colors*') ? 'active' : '' }}">
    <a href="{!! route('colors.index') !!}"><i class="fa fa-edit"></i><span>Colors</span></a>
</li>

<li class="{{ Request::is('clothes*') ? 'active' : '' }}">
    <a href="{!! route('clothes.index') !!}"><i class="fa fa-edit"></i><span>Clothes</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('prints*') ? 'active' : '' }}">
    <a href="{!! route('prints.index') !!}"><i class="fa fa-edit"></i><span>Prints</span></a>
</li>

