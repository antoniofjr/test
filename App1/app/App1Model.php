<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class App1Model extends Model
{
    protected $table = 'vetor';
    
    protected $fillable = ['p1', 'p2', 'p3', 'p4', 'distancia_1_2', 'distancia_3_4'];
    
    public function distancia($a, $b)
    {
        return $a - $b;
        
        
    }
    
}
