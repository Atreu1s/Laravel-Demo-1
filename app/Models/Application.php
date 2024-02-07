<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;


    protected $fillable = [
        'gosRegNumber','description','status','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getStatus(){
        if($this->status == 2){
            return 'Подтвержден';
        } 
        if($this->status == 3){
            return 'Отменен';
        }
        return 'Новый';
    }
}
