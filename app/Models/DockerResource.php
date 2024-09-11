<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DockerResource extends Model
{
    use \Sushi\Sushi;

    public function getRows()
    {
        return [
            [
                'id' => 1,
                'author' => 'Chris Fidao',
                'social_handle' =>  'https://x.com/fideloper',
                'title' => 'serversforhackers',
                'link' => 'https://serversforhackers.com/'
            ],
            [
                'id' => 2,
                'author' => 'Jay Rogers',
                'social_handle' =>  'https://x.com/jaydrogers',
                'title' => 'serversideup',
                'link' => 'https://serversideup.net/open-source/docker-php/'
            ],
            [
                'id' => 3,
                'author' => 'Andrew Schmelyun',
                'social_handle' =>  'https://x.com/aschmelyun',
                'title' => 'laraveldocker.com',
                'link' => 'https://laraveldocker.com/'
            ],

        ];
    }
}
