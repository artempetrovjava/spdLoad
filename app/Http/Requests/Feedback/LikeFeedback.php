<?php

namespace App\Http\Requests\Feedback;

use App\Http\Requests\FormRequest;

/**
 * @property string $id
 */
class LikeFeedback extends FormRequest
{
    public function getId(): int
    {
        return (int) $this->id;
    }
}
