<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Equipo;
use App\Models\Problema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DetalleController extends Controller
{
    public function index()
    {
        $lista=Detalle::get();
        return response()->json($lista,201);
        
    }

    public function score($id){
        // $consulta=DB::select('SELECT e.id as id_eq,p.color,p.id as id_prob,d.tiempo,d.intento,d.estado FROM equipos e, problemas p, detalles d WHERE d.id_equipo=e.id and d.id_problema=p.id and e.id_categoria=:id order by e.id',['id'=> $id]);
        $equipos=Equipo::select(['id','nombre','cuenta','id_categoria','posicion'])->where('id_categoria',$id)->get();
        $problemas=Problema::select(['id','alias','color'])->where('id_categoria',$id)->orderby('alias')->get();
        $detalles=[];
        $i=0;
        foreach($equipos as $e){
            $total=0;
            $resuelto=0;
            $v=[];
            $dato=new stdClass();
            $detalle=Detalle::where('id_equipo',$e->id)->get();
            $j=0;
            foreach($problemas as $p){
                $res=new stdClass();
                $res->id=0;
                $res->id_problema=$p->id;
                $res->id_equipo=$e->id;
                $res->estado=0;
                $res->intento=0;
                // $res->posicion=0;
                $res->color="#f0ffff";
                $res->tiempo=0;
                foreach($detalle as $d){
                    if($p->id==$d->id_problema){
                        $res->id=$d->id;
                        $res->estado=$d->estado;
                        $res->intento=$d->intento;
                        $res->tiempo=$d->tiempo;
                        $res->color=$p->color;
                        if($d->estado>0){
                            $resuelto++;
                            $total=$total+($d->tiempo+($d->intento-1)*20);
                        }
                    }
                }
                $v[$j]=$res;
                $j++;
            }
            $dato->resuelto=$resuelto;
            $dato->tiempo=$total;
            $detalles[$i]=array($e,$v,$dato);
            $i=$i+1;
        }
        return response()->json(array($problemas,$detalles));
        
    }
    public function store(Request $request)
    {
        $id_equipo=$request['id_equipo'];
        $eq=Equipo::find($id_equipo);
        $id=$request['id_cat'];
        if($eq->posicion==0){
            Detalle::create([
                'id_equipo'=>$request['id_equipo'],
                'id_problema'=>$request['id_problema'],
                'estado'=>$request['estado'],
                'tiempo'=>$request['tiempo'],
                'intento'=>$request['intento']
            ]);
            return $this->score($id);
        }
        else
            return response()->json(['error' => 'Concurso Finalizado'], 400);
    }
    
    public function show($id)
    {
        return response()->json(Detalle::find($id));
    }
    public function update(Request $request, $id)
    {
        $problema=Detalle::find($id);
        if (!$problema) 
            return response()->json("Este problema no existe",400);
        $problema->update($request->all());
        $lista=Detalle::where('id_categoria',$request->input('id_categoria'))->get();
        return response()->json($lista,201);
    }
    public function buscar($id)
    {
        $lista=Detalle::where('id_categoria',$id)->get();
        return response()->json($lista,201);
    }
    public function eliminar ($id,$id_cat)
    {
        Detalle::find($id)->delete();
        $lista=Detalle::where('id_categoria',$id_cat)->get();
        return response()->json($lista,201);        
    }
    
    public function delete(Request $detalle)
    {
        $det=Detalle::find($detalle->id);
        $eq=Equipo::find($det->id_equipo);
        if($eq->posicion==0){
            Detalle::find($detalle->id)->delete();
            return $this->score($detalle->id_cat);        
        }
        return response()->json(['error' => 'Concurso Finalizado'], 400);        
    }
    
}
