<?php

namespace Aammui\FormRequest;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Routing\Redirector;

class FormRequest extends BaseFormRequest
{
    public static function from(array $data): static
    {
        $request = new static();
        $request->merge($data);

        $request->setContainer(app())->setRedirector(app()->make(Redirector::class));

        $request->validateResolved();

        return $request;
    }
}
