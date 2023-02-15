<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * @param $new_result
     * @return void
     */
    public function addResult($new_result)
    {
        if ($new_result > $this->best_grade) {
            $this->best_grade = $new_result;

            $this->save();
            if ($this->best_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
            } else {
                $this->passed_at = null;
            }
            $this->save();
        } else {
            return;
        }
    }
}
