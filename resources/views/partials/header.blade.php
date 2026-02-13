<header style="background:#fff;box-shadow:0 2px 10px rgba(0,0,0,.05);">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;gap:16px;">
        <a href="{{ route('home') }}" style="text-decoration:none;color:#111;font-weight:700;font-size:18px;">
            MiniEcom
        </a>

        <nav style="display:flex;gap:14px;align-items:center;">
            <a href="{{ route('home') }}" style="text-decoration:none;color:#111;">Home</a>
            <a href="/products" style="text-decoration:none;color:#111;">Products</a>
            <a href="#" style="text-decoration:none;color:#111;">Categories</a>
            <a href="#" style="text-decoration:none;color:#111;">Contact</a>
        </nav>

        <div style="display:flex;gap:10px;align-items:center;">
            <a class="btn" href="#" style="border-color:#ddd;">Cart (0)</a>
            <a class="btn btn-dark" href="#">Login</a>
        </div>
    </div>
</header>
