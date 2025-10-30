<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class StateAnalyticsController extends Controller
{
    /**
     * Display the 5 most popular states that had orders
     */
    public function mostPopularStates()
    {
        // TODO: Write your Eloquent query here
        // Hint: You'll need to use relationships and aggregation
        // The query should return states with their order counts, ordered by count DESC, limited to 5

        //$data = Order::all();



        $data = Order::join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('customers.state', Order::raw('count(*) as orders'))
            ->groupBy('customers.state')
            ->orderBy('orders', 'desc')
            ->limit(5)
            ->get();


        
        $popularStates = $data;




        
        
        // $popularStates = [
        //     (object)["state" => "CA", "orders" => 45],
        //     (object)["state" => "TX", "orders" => 38],
        //     (object)["state" => "NY", "orders" => 32],
        //     (object)["state" => "FL", "orders" => 28],
        //     (object)["state" => "IL", "orders" => 22]
        // ]; // Replace this with your Eloquent query
        
        return view('analytics.popular-states', compact('popularStates'));
    }
}
