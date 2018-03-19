<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * Поля, разрешённые для заполнения
     * 
     * @var 
     */
    protected $fillable = [
        'programId',
        'ean',
        'merchantEmail',
        'merchantCategory',
        'manufacturer',
        'programName',
        'image',
        'name',
        'price',
        'priceOld',
        'shippingCosts',
        '@id',
        'currency',
        'description',
        'modified',
    ];
    
    /**
     * Добавление поля 'modified' к экземпляру Carbon
     * 
     * @var 
     */
    protected $dates = ['modified'];
    
    /**
     * Отмена использования отметок времени для модели
     * 
     * @var 
     */
    public $timestamps = false;
    
    /**
     * Принадлежность статьи пользователю
     * 
     * @return
     */
    public function user()
    {
        return $this->belongsTo('App\Shop');
    }
}
