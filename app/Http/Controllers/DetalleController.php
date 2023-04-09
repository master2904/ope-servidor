<?php
namespace App\Http\Controllers;
use App\Models\Detalle;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DetalleController extends Controller
{
    public function index()
    {
        $lista=Detalle::get();
        return response()->json($lista,200);
        
    }
    public function listar($id){
        $lista=Detalle::where('id_tipo',$id)->get();
        return response()->json($lista);
    }
    public function lista_venta($id){
        $consulta=DB::select('SELECT d.codigo,concat(p.nombre," ",t.descripcion ," ", d.descripcion) as descripcion,d.cantidad,d.precio_compra,d.precio_venta,d.stock_minimo FROM products p,tipos t,detalles d WHERE t.id_producto=p.id and d.id_tipo=t.id and p.lugar=:id',['id'=> $id]);
        return response()->json($consulta);
    }
    public function store(Request $request)
    {
        $id_tipo=$request['id_tipo'];
        // return response()->json($id_tipo);
        Detalle::create($request->all());
        return $this->listar($id_tipo);
    }
    
    public function show($id)
    {
        return response()->json(Detalle::find($id));
    }
    public function update(Request $request, $id)
    {
        $problema=Detalle::find($id);
        if (!$problema) 
            return response()->json("Este producto no existe",400);
        $problema->update($request->all());
        return $this->listar($request->input('id_tipo'));
    }
    public function eliminar ($id,$id_p)
    {
        Detalle::find($id)->delete();
        return $this->listar($id_p);
    }
    
    public function destroy($id)
    {
        $lista = Detalle::find($id);
        $valor=$lista->id_tipo;
        $lista->delete();
        return $this->listar($valor);
    }
    
}
