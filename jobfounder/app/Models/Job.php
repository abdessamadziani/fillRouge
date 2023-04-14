<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Support\Facades\DB;




class Job extends Model
{
    use HasFactory;
    use softDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }


    protected $fillable = [
        'title',
        'address',
        'user_id',
        'company_id',
        'category_id',
        'roles',
        'description',
        'position',
        'slug',
        'type',
        'status',
        'last_date',

    ];
    public function company()
    {
       return  $this->belongsTo(Company::class);
    }

    public function categories()
    {
       return  $this->belongsTo(Category::class);
    }

    // always job can created by one user
    public function user()
    {
       return  $this->belongsTo(User::class);
    }
    // end


    public function users()
    {
       return  $this->belongsToMany(User::class)->withTimeStamps();
    }
    

    public function checkapply()
    {
      return DB::table('job_user')->where('user_id',auth()->user()->id)->where('job_id',$this->id)->exists();

    }



}
