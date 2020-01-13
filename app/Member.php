<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $table = 'users';
    
    protected $fillable = [
        'national_id', 'church_reg_number', 'first_name', 'second_name', 'surname', 'date_of_birth', 'phone_number', 
        'email', 'occupation', 'organization_name', 'school', 'course', 'year', 'hbc', 'youth_group', 'location'
    ];
}
