<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Event;

class ReviewController extends Controller
{
    public function showReviewForm($eventId)
    {
        $event = Event::find($eventId);
        return view('penilaian', compact('event'));
    }

    public function submitReview(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        $review = new Review();
        $review->event_id = $request->event_id;
        $review->user_id = auth()->user()->id;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return redirect()->route('riwayat', auth()->user()->id)->with('success', 'Review berhasil dikirim!');
    }
}
