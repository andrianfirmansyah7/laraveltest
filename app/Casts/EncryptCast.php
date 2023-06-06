<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Facades\Crypt;
class EncryptCast implements CastsAttributes
{
/**
* Cast the given value.
*
* @param \Illuminate\Database\Eloquent\Model $model
* @param string $key
* @param mixed $value
* @param array $attributes
* @return mixed
*/
public function get($model, string $key, $value, array $attributes)
{
return !is_null($value) ? Crypt::decryptString($value) : null;
}
/**
* Prepare the given value for storage.
*
* @param \Illuminate\Database\Eloquent\Model $model
* @param string $key
* @param mixed $value
* @param array $attributes
* @return mixed
*/
public function set($model, string $key, $value, array $attributes)
{
return [$key => ! is_null($value) ? Crypt::encryptString($value) : null];
}
}
