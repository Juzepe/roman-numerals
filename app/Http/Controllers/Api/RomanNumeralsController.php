<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntegerToRomanNumeralsRequest;
use App\Http\Resources\ConvertedIntegerResource;
use App\Models\ConvertedInteger;
use App\Services\RomanNumeralConverter;

class RomanNumeralsController extends Controller
{
    public function convertInteger(
        IntegerToRomanNumeralsRequest $request,
        RomanNumeralConverter $romanNumeralConverter
    ): array {
        $convertedInteger = ConvertedInteger::firstOrCreate(['integer' => $request->integer]);
        $convertedInteger->increment('converted');

        return [
            'status' => 'OK',
            'romanNumeral' => $romanNumeralConverter->convertInteger($request->integer),
        ];
    }

    public function latestConvertedIntegers(): array
    {
        $latestConvertedIntegers = ConvertedInteger::latest('updated_at')
            ->take(10)
            ->get();

        return [
            'status' => 'OK',
            'latestConvertedIntegers' => ConvertedIntegerResource::collection($latestConvertedIntegers),
        ];
    }

    public function frequentlyConvertedIntegers(): array
    {
        $frequentlyConvertedIntegers = ConvertedInteger::orderBy('converted', 'DESC')
            ->take(10)
            ->get();

        return [
            'status' => 'OK',
            'frequentlyConvertedIntegers' => ConvertedIntegerResource::collection($frequentlyConvertedIntegers),
        ];
    }
}
