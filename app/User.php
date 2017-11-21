<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password','remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Group Methods
     */

    public function groups(){
        return $this->belongsToMany('App\Group','GroupUser')->withPivot('role','current')->using('App\GroupUser');
    }

    public function getCurrentGroup() {
        foreach($this->groups as $group) {
            if($group->pivot->current) {
                return $group;
            }
        }
    }

    public function existsInGroup(Group $group) {
        foreach($group->users as $user) {
            if($user == $this) {
                return true;
            }
        }
        return false;
    }

    public function changeCurrentGroup(Group $group) {
        if($this->existsInGroup) {
            
        }
    }

    public function getCurrentGroupId() {
        return $this->getCurrentGroup()->id;
    }

    public function changeCurrentGroup(Group $group) {
        //check if the user is in the group provided
        if($this->existsInGroup($group)) {

        }

        //if it exists then change its current value to 1
        
        //get current group
        $curGroup = $this->getCurrentGroup();
        //find the current realtional data column

        //change the current group field to false = 0

    }

    public function getGroupsOtherThanCurrent(){
        $result = array();
        foreach($this->groups as $group) {
            if(!$group->pivot->current) {
                array_push($result,$group);
            }
        }
        return $result;
    }

    /**
     *  Transactions Methods
     */

    public function transactions() {
        return $this->belongsToMany('App\Group','Transactions')->withPivot('id','date','location','description','amount')->using('App\Transaction')->withTimeStamps();
    }

    public function getCurrentGroupTransactions() {
        $result = array();
        foreach($this->transactions as $transaction) {
            if($transaction->pivot->group_id == $this->getCurrentGroupId()) {
                array_push($result,$transaction->pivot);
            }
        }
        return $result;
    }

    public function getOtherGroupTransactions() {
        $result = array();
        foreach($this->transactions as $transaction) {
            if($transaction->pivot->group_id != $this->getCurrentGroupId()) {
                array_push($result,$transaction->pivot);
            }
        }
        return $result;
    }

    public function test() {
        return "test";
    }

    /**     
     * Payable Methods
     */

    public function toRecieve() {
        return $this->belongsToMany('App\User','Payables','payee_id','payer_id')->withPivot('id','payee_id','group_id','amount','paid_amount','cleared')->using('App\Payable')->withTimeStamps();
    }

    public function toPay() {
        return $this->belongsToMany('App\User','Payables','payer_id','payee_id')->withPivot('id','payee_id','group_id','amount','paid_amount','cleared')->using('App\Payable')->withTimeStamps();

    }

    public function toRecieve_array() {
        $result = array();
        foreach($this->toRecieve as $payable) {
            if(!$payable->pivot->cleared) {
                array_push($result,$payable->pivot);
            }
        }
        return $result;
    }

    public function toPay_array() {
        $result = array();
        foreach($this->toPay as $payable) {
            if(!$payable->pivot->cleared) {
                array_push($result,$payable->pivot);
            }
        }
        return $result;
    }
}
