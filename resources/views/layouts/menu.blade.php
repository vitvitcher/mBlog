<!-- need to remove -->
<li class="nav-item">
    <a href="/" class="nav-link {{ Request::is('news') ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>News</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('posts.index') }}" class="nav-link {{ Request::is('posts') ? 'active' : '' }}">
        <i class="nav-icon fas fa-image"></i>
        <p>Posts</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('posts.create') }}" class="nav-link {{ Request::is('posts/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-plus"></i>
        <p>Create post</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bookmark"></i>
        <p>Categories</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('categories.create') }}" class="nav-link {{ Request::is('categories/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-folder-plus"></i>
        <p>Create category</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Users</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.create') }}" class="nav-link {{ Request::is('users/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-plus"></i>
        <p>Create user</p>
    </a>
</li>