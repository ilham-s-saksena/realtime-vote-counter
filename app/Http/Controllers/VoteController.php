<?php

namespace App\Http\Controllers;

use App\Events\VoteUpdated;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function addVote(Request $request)
    {
        $candidateId = $request->input('candidateId');
        
        $vote = Vote::firstOrCreate(['candidate_id' => $candidateId], ['vote' => 0]);
        $vote->increment('vote');

        $candidateVotes = Vote::select('candidate_id', DB::raw('SUM(vote) as total_votes'))
            ->groupBy('candidate_id')
            ->pluck('total_votes', 'candidate_id');

        broadcast(new VoteUpdated($candidateVotes));
        return back();
    }
}
