<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCard extends Model
{
    protected $fillable = [
        'name',
        'host',
        'port',
        'status',
    ];

    public function generateRoute()
    {
        $output = '';

        if (!$this->host && !config('app.appUrl')){
            return '';
        }

        if ($this->host){
            $output.= $this->host;
        }else{
            $output.= config('app.appUrl');
        }

        if ($this->port){
            $output.=':'.$this->port;
        }

        return $output;
    }
}
