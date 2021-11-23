<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCard extends Model
{
    protected $fillable = [
        'name',
        'url',
        'port',
        'status',
    ];

    /**
     * @return string
     */
    public function generateRoute(): string
    {
        $output = '';

        if (!$this->url && !config('app.appIp')) {
            return '';
        }

        if ($this->url) {
            $output .= $this->url;
        } else {
            $output .= config('app.appIp');
        }

        if ($this->port) {
            $output .= ':'.$this->port;
        }

        return $output;
    }
}
