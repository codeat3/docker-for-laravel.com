<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DockerResource extends Model
{
    use \Sushi\Sushi;

    public function getRows()
    {
        return json_decode(file_get_contents(config('dfl.data_json')), true);
    }
}
