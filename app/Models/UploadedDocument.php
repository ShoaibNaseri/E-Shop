<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedDocument extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
    public function documentlists()
    {
        return $this->hasMany(DocumentList::class);
    }
}
