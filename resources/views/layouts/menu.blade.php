<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('posts.create') }}" class="nav-link {{ Request::is('posts/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-plus"></i>
        <p>Create post</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('posts.index') }}" class="nav-link {{ Request::is('posts') ? 'active' : '' }}">
        <i class="nav-icon fas fa-image"></i>
        <p>Posts</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bookmark"></i>
        <p>Categories</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('news.index') }}" class="nav-link {{ Request::is('news') ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>News</p>
    </a>
</li>