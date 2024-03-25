<?php

namespace App\Models\Api;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;


class Project extends \App\Models\Project
{
    public function getRouteKeyName()
    {
        return 'id';
    }
}
