<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Posts Model protected submitted array forms -> avoid getting mass assignment error
    protected $guarded = [];


    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, $filters){
        if(isset($filters['month'])){
            $month = $filters['month'];
            $query->whereMonth('created_at', date('n', strtotime($month)));
        }
        if(isset($filters['year'])){
            $year = $filters['year'];
            $query->whereYear('created_at', $year);
        }
        //dd( date('o', strtotime($year)));
    }
    public static function archives(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

}
