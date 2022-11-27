<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tradeId()
    {
        return "EL8-".$this->id."54";
    }

    public function order()
    {
        if ($this->type == "BUY")
        {
            return "<span class='badge bg-primary'>BUY ORDER</span>";
        }
        return "<span class='badge bg-danger'>SELL ORDER</span>";
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge badge-success'>Closed</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning'>Open</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success'>Closed</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Cancelled</span>";
        }
    }

}
