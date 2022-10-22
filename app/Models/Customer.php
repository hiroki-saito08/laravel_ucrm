<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kana',
        'tel',
        'email',
        'postcode',
        'address',
        'birthday',
        'gender',
        'memo',
    ];

    /**
     * 検索機能
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchCustomers($query, $input = null)
    {
        if (!empty($input)) {
            if (Customer::where('kana', 'like', $input . '%')
                ->orWhere('tel', 'like', $input . '%')->exists()
            ) {
                return $query->where('kana', 'like', $input . '%')
                    ->orWhere('tel', 'like', $input . '%');
            }
        }
    }
}
