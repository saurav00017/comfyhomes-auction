<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Auction;

class WishlistController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $wishlistAuctionIds = $user->wishlists()->pluck('auction_id');
        $wishlistItems = Auction::whereIn('id', $wishlistAuctionIds)->paginate(10); // depends on your relation

        return view('wishlist', compact('wishlistItems'));
    }

    public function toggle(Request $request)
    {
        $user = auth()->user();
        $auctionId = $request->input('auction_id');

        $exists = $user->wishlists()->where('auction_id', $auctionId)->first();

        if ($exists) {
            $exists->delete();
            return response()->json(['status' => 'removed']);
        } else {
            $user->wishlists()->create(['auction_id' => $auctionId]);
            return response()->json(['status' => 'added']);
        }
    }
}
