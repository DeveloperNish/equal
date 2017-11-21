<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Group extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_count',
    ];

    public function users(){
    	return $this->belongsToMany('App\User','GroupUser')->withPivot('role','current')->using('App\GroupUser')->withTimestamps();
    }

    public function getCurrentUsers() {
        $result = array();
        foreach($this->users as $user) {
            if($user->pivot->current) {
                array_push($result, $user);
            }
        }
        return $result;
    }

    public function transactions(){
        return $this->belongsToMany('App\User','Transactions')->withPivot('id','date','location','description','amount')->using('App\Transaction')->withTimeStamps();
    }

    public function payables() {
        return $this->belongsToMany('App\Group','Payables','group_id','payer_id')->withPivot('id','payee_id','payer_id','amount','paid_amount','cleared')->using('App\Payable')->withTimeStamps();
    }

    public function payable_array() {
        $result = array();
        foreach($this->payables as $payable) {
            array_push($result,$payable->pivot);
        }
        return $result;
    }
    
}
