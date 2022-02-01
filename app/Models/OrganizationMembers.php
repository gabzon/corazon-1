<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrganizationMembers extends Pivot
{
    use HasFactory;

    protected $table = 'organization_user';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id')->withDefault();
    }
}