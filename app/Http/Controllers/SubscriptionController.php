<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('subscription.overview');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $subscription = \App\Subscription::findOrFail($request->subscription);

        $user->member = true;

        $user
            ->subscription()
            ->associate($subscription)
            ->save();

        return redirect()->back()->with('status.success', 'Abonnement ændret');
    }

    public function unsubscribe(Request $request)
    {
        $user = auth()->user();

        $user
            ->subscription()
            ->dissociate()
            ->save();

        return redirect()->back()->with('status.success', 'Abonnement afbestilt');
    }
}
