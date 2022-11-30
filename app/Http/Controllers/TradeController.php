<?php

namespace App\Http\Controllers;

use App\Trade;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function history()
    {
        $counts = Trade::whereUserId(\auth()->id())->where('status', 0)->count();
        $close_counts = Trade::whereUserId(\auth()->id())->where('status', 1)->count();
        $trades = Trade::whereUserId(\auth()->id())->where('status', 1)->latest()->paginate(12);
        return view('dashboard.trade.tradehistory', compact('trades', 'counts', 'close_counts'));
    }

    public function closeTrades()
    {
        $counts = Trade::whereUserId(\auth()->id())->where('status', 0)->count();
        $close_counts = Trade::whereUserId(\auth()->id())->where('status', 1)->count();
        $close_trades = Trade::whereUserId(\auth()->id())->where('status', 1)->latest()->paginate(10);
        return view('dashboard.trade.close-trades', compact('close_trades', 'close_counts', 'counts'));
    }
    public function trade()
    {
        $trades = Trade::whereUserId(\auth()->id())->where('status', 0)->latest()->paginate(8);
        return view('dashboard.trade.live-trading', compact('trades'));
    }

    public function buyOrder(Request $request)
    {
        if ($request->amount < auth()->user()->balance){
            $data = $this->getData($request);
            $data['user_id'] = Auth::id();
            $data['type'] = $request->order;
            $trade = Trade::create($data);
            $user = User::findOrFail($trade->user_id);
            $user->balance -= $trade->amount;
            $user->save();
            return redirect()->back()->with('success', "Your Order Has Been Created");
        }
        return redirect()->back()->with('declined', "Insufficient Balance, fund your account to continue");

    }

    public function sellOrder(Request $request)
    {
        if ($request->amount < auth()->user()->balance){
            $data = $this->getData($request);
            $data['type'] = $request->order;
            $data['user_id'] = Auth::id();
            $trade = Trade::create($data);
            $user = User::findOrFail($trade->user_id);
            $user->balance -= $trade->amount;
            $user->save();
            return redirect()->back()->with('success', "Your Order Has Been Created");
        }
        return redirect()->back()->with('declined', "Insufficient Balance, fund your account to continue");

    }

    protected function getData(Request $request)
    {
        $rules = [
          'symbol' => 'required',
          'amount' => 'required',
          'sl' => 'nullable',
          'tp' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
