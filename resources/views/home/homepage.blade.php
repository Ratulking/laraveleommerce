@extends('layouts.app')

@section('title', 'Home - Mini Ecommerce')

@section('content')

    <section class="hero">
        <div>
            <h1>Shop Smart, Live Better</h1>
            <p>Featured deals + quality products. Built with Laravel.</p>
            <div style="margin-top:14px;display:flex;gap:10px;flex-wrap:wrap;">
                <a class="btn btn-dark" href="/products">Browse Products</a>
                <a class="btn" href="#" style="border-color:#fff;color:#fff;">View Offers</a>
            </div>
        </div>
        <div style="background:#1c1c1c;border-radius:14px;padding:16px;min-width:260px;">
            <div style="font-weight:700;margin-bottom:6px;">Today’s Highlights</div>
            <div class="muted" style="color:#cfcfcf;">Fast delivery • Secure payment • Easy return</div>
        </div>
    </section>

    <section style="margin-top:22px;">
        <div style="display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap;">
            <h2 style="margin:0;">Categories</h2>
            <span class="muted">Browse by category</span>
        </div>

        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
            @foreach($categories as $cat)
                <span class="badge">{{ $cat }}</span>
            @endforeach
        </div>
    </section>

    <section style="margin-top:22px;">
        <div style="display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap;">
            <h2 style="margin:0;">Featured Products</h2>
            <a href="/products" style="text-decoration:none;">View all →</a>
        </div>

        <div class="grid" style="margin-top:12px;">
            @foreach($featuredProducts as $p)
                <div class="card">
                    <div style="display:flex;justify-content:space-between;align-items:center;">
                        <strong>{{ $p['name'] }}</strong>
                        @if($p['price'] >= 500)
                            <span class="badge">Premium</span>
                        @endif
                    </div>
                    <div class="muted" style="margin-top:6px;">High quality product for daily use.</div>

                    <div style="margin-top:12px;font-size:18px;font-weight:700;">
                        ${{ $p['price'] }}
                    </div>

                    <div style="margin-top:12px;display:flex;gap:10px;">
                        <a class="btn btn-dark" href="#">Add to Cart</a>
                        <a class="btn" href="#" style="border-color:#ddd;">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
