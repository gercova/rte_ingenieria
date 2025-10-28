<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidate extends FormRequest
{
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'product_category_id'   => 'required',
            'product_type_id'       => 'required',
            'product_model_id'      => 'required',
            'unit_measure_id'       => 'required',
            'code'                  => 'nullable|string',
            'product_color_id'      => 'required',
            'description'           => 'required|string|unique:product,description,'.$this->id,
            'detail'                => 'required|string',
            'characteristics'       => 'required|string',
            'specifications'        => 'required|string',
            'image'                 => 'required|string',
            'stock'                 => 'required|integer',
            'price_min'             => 'required|numeric',
            'price_max'             => 'required|numeric',
            'discount'              => 'required|numeric',
            'offer'                 => 'required|numeric',
            'batch'                 => 'required|string',
            'expiration_date'       => 'nullable|date',
        ];
    }

    public function messages(): array {
        return [
            'product_category_id.required'  => 'La Categoría es requerida',
            'product_type_id.required'      => 'El Tipo es requerido',
            'product_model_id.required'     => 'El Modelo es requerido',
            'unit_measure_id.required'      => 'La Unidad de Medida es requerida',
            'product_color_id.required'     => 'El Color es requerido',
            'description.required'          => 'La Descripción es requerida',
            'description.unique'            => 'La Descripción ya existe',
            'detail.required'               => 'El Detalle es requerido',
            'characteristics.required'      => 'Las Características son requeridas',
            'specifications.required'       => 'Las Especificaciones son requeridas',
            'image.required'                => 'La Imagen es requerida',
            'stock.required'                => 'El Stock es requerido',
            'price_min.required'            => 'El Precio Mínimo es requerido',
            'price_max.required'            => 'El Precio Máximo es requerido',
            'discount.required'             => 'El Descuento es requerido',
            'offer.required'                => 'La Oferta es requerida',
            'batch.required'                => 'El Lote es requerido',
        ];
    }
}
