@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">My Wishlist</h2>

        @if ($wishlistItems->isEmpty())
            <div class="alert alert-info">
                Your wishlist is currently empty.
            </div>
        @else
            <div class="row">
                @foreach ($wishlistItems as $item)
                    <div class="col-12 mb-4">
                        <div class="property-list-item card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="position-relative h-100">
                                        <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : 'https://via.placeholder.com/500x300?text=No+Image' }}"
                                            class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
                                        @if ($item->featured)
                                            <div class="position-absolute top-0 start-0 m-2">
                                                <span class="badge bg-primary">Verified</span>
                                            </div>
                                        @endif
                                        <div class="position-absolute top-0 end-0 m-2">
                                            <button
                                                class="btn btn-sm btn-light rounded-circle wishlist-btn {{ in_array($item->id, $wishlistIds ?? []) ? 'active' : '' }}"
                                                data-id="{{ $item->id }}">
                                                <i class="fas fa-heart"
                                                    style="color: purple;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title text-primary">
                                                {{ $item->property_type_one ?? 'Property' }}
                                            </h4>
                                            <span
                                                class="badge bg-success d-flex align-items-center justify-content-center">{{ $item->category->name ?? 'Auction' }}</span>
                                        </div>
                                        <p class="text-muted mb-2">
                                            <i class="fas fa-map-marker-alt text-primary me-1"></i> {{ $item->locality }},
                                            {{ $item->district }}
                                        </p>

                                        @if ($item->auction_start_datetime)
                                            <div class="mb-2">
                                                <i class="fas fa-calendar-alt text-primary me-1"></i>
                                                <span class="text-muted">
                                                    {{ \Carbon\Carbon::parse($item->auction_start_datetime)->format('d M Y') }}
                                                </span>
                                            </div>
                                        @endif


                                        <div class="property-features mb-3">
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">Area</small>
                                                        <span class="fw-bold">{{ $item->area ?? '-' }} Sq Ft</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">EMD</small>
                                                        <span
                                                            class="fw-bold">₹{{ number_format($item->emd_amount) }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">Possession</small>
                                                        <span
                                                            class="fw-bold">{{ $item->possession == '1' ? 'Physical' : 'Symbolic' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $item->bank->icon) ?? 'https://via.placeholder.com/24' }}"
                                                    alt="Bank" width="24" class="me-2">
                                                <span>{{ $item->bank->bank_name ?? $item->bank_name }}</span>
                                            </div>
                                            <div>
                                                <h4 class="text-primary mb-0">₹{{ number_format($item->property_price) }}
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <a href="{{ route('auction.details', $item->slug) }}" class="btn btn-primary px-4">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                    {{ $wishlistItems->links() }}
                </div>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.wishlist-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const auctionId = this.getAttribute('data-id');
                    const btn = this;
                    const icon = btn.querySelector('i');

                    fetch("{{ route('wishlist.toggle') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({
                                auction_id: auctionId
                            })
                        })
                        .then(response => {
                            if (response.redirected) {
                                window.location.href = response.url;
                                return;
                            }

                            return response.json();
                        })
                        .then(data => {
                            if (data && data.status === 'added') {
                                icon.classList.remove('far');
                                icon.classList.add('fas');
                                icon.style.color = 'purple';
                            } else if (data && data.status === 'removed') {
                                button.querySelector('i').classList.remove('fas');
                                button.querySelector('i').classList.add('far');
                            }
                        });
                });
            });
        });
    </script>
@endsection
