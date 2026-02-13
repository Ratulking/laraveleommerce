<footer style="margin-top:30px;background:#111;color:#ddd;">
    <div class="container" style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;">
        <div>
            <div style="font-weight:700;color:#fff;">MiniEcom</div>
            <div class="muted" style="color:#bbb;margin-top:6px;">Simple Laravel ecommerce starter.</div>
        </div>

        <div>
            <div style="font-weight:700;color:#fff;">Quick Links</div>
            <div style="margin-top:6px;display:flex;flex-direction:column;gap:6px;">
                <a href="{{ route('home') }}" style="color:#ddd;text-decoration:none;">Home</a>
                <a href="/products" style="color:#ddd;text-decoration:none;">Products</a>
                <a href="#" style="color:#ddd;text-decoration:none;">Privacy</a>
            </div>
        </div>

        <div>
            <div style="font-weight:700;color:#fff;">Support</div>
            <div style="margin-top:6px;color:#bbb;">support@miniecom.test</div>
        </div>
    </div>

    <div style="text-align:center;padding:10px 0;color:#aaa;border-top:1px solid #222;margin-top:16px;">
        © {{ date('Y') }} MiniEcom. All rights reserved.
    </div>
</footer>
