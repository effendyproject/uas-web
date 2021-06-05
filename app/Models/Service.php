<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','image_name','price','day_min','day_max'];
    protected $appends = ['format_price','format_day'];

    public function getFormatPriceAttribute(){
        return 'Rp. '.number_format( $this->price);
    }

    public function getFormatDayAttribute(){
        if ($this->day_min === $this->day_max) {
            return $this->day_min . ' Day';
        }
        return $this->day_min . '-'. $this->day_max . ' Day';
    }
}
