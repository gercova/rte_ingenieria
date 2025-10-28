<?php

namespace App\Http\Controllers\Admin\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductValidate;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductManufacturer;
use App\Models\ProductType;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function __construct(){
        
    }

    public function index(): View {
        $categories = ProductCategory::all();
        $brands     = ProductBrand::all();
        $manofacturers = ProductManufacturer::all();
        $types      = ProductType::all();
        return view('admin.maintenance.products.index', compact('categories', 'brands', 'manofacturers', 'types'));
    }

    public function store(ProductValidate $request): JsonResponse {
        $validated  = $request->validated();
        $id         = $request->input('id');
        // Inicializamos $path como null para evitar "Undefined variable"
        $path       = null;
        // Procesar la imagen si existe
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Eliminar imagen anterior si estamos actualizando
            if ($id) {
                $product = Product::find($id);
                if ($product && $product->image) {
                    Storage::disk('public')->delete($product->image);
                }
            }
            // Limpiar nombre del archivo
            $originalName   = $image->getClientOriginalName();
            $cleanName      = $this->cleanFileName($originalName);
            // Subir la imagen al disco público, dentro de la carpeta 'users'
            $path           = $image->storeAs('users', $cleanName, 'public');
        }
        
        DB::beginTransaction();
        try {
            $result = Product::updateOrCreate(['id' => $id], $validated);
            
            DB::commit();
            return response()->json([
                'status'    => true,
                'type'      => 'success',
                'message'   => $result->wasChanged() ? 'Datos del producto actualizados correctamente' : 'Datos del producto guardados correctamente',
                'redirect'  => route('maintenance.products.home'),
            ], 200);

        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status'    => false,
                'type'      => 'error',
                'message'   => 'Ocurrió un problema al intentar guardar',
                'error'     => $th->getMessage(),
            ], 500);
        }
    }

    public function list(): JsonResponse {
        $results 		= Product::join('product_manufacturer as pm', 'product.product_manufacturer_id', '=', 'pm.id')
            ->join('product_category as pc', 'product.product_category_id', '=', 'pc.id')
            ->selectRaw('product.image, product.description, product.price_max, product.stock, pm.name as manufacturer, pc.name as category, product.is_active, product.id')
            ->get();
		$data 			= $results->map(function ($item, $index) {
            //$user 		= auth()->user();
			$buttons 	= '';
            $status     = $item->is_active == 1 ? 
                '<label class="label label-success">Disponible</label>' : 
                '<label class="label label-danger">No disponible</label>';
			//if($user->can('examen_borrar')){
				$buttons .= sprintf('
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Acción <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a type="button" data-toggle="modal" id="editProductModalBtn" data-target="#editProductModal" onclick="editProduct(%s)"> <i class="glyphicon glyphicon-edit"></i> Editar</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#removeProductModal" id="removeProductModalBtn" onclick="removeProduct(%s)"> <i class="glyphicon glyphicon-trash"></i> Eliminar</a></li>       
                            </ul>
                        </div>
                    ',
					$item->id,
                    $item->id
				);
			//}
			return [
                asset('storage/'.$item->image),
                $item->name,
                $item->price_max,
                $item->manufacturer,
                $item->category,
                $status,
                $buttons ?: '<span class="text-muted">No autorizado</span>',
			];
		});

		return response()->json([
			"sEcho"					=> 1,
			"iTotalRecords"			=> $data->count(),
			"iTotalDisplayRecords"	=> $data->count(),
			"aaData"				=> $data ?? [],
		], 200);
    }

    public function show(): JsonResponse {
        return response()->json([]);
    }

    public function destroy(): JsonResponse {
        return response()->json([]);
    }
}
