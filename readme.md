##### Uses
At first let's define a `FormRequest` class
```php
use Aammui\FormRequest\FormRequest;

class StorePostFormRequest extends FormRequest
{
    public string $email;
    public string $name;

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'name'  => 'required'
        ];
    }

    protected function passedValidation(): void
    {
        $this->name  = $this->input('name');
        $this->email = $this->input('email');
    }
}
```
