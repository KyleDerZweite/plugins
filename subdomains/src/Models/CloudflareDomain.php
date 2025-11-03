<?php

namespace Boy132\Subdomains\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 */
class CloudflareDomain extends Model
{
    protected $fillable = [
        'name',
    ];

    public function subdomains(): HasMany
    {
        return $this->hasMany(Subdomain::class, 'domain_id');
    }
}
