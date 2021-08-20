<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automovil;
use PDF;
class AutomovilesController extends Controller
{
    public function index()
    {
        $automovil = Automovil::all();
       
        return view('welcome',['automovil' => $automovil]); 
    }
    public function imprimir()
    {
        $automovil2 = Automovil::all();
      
        $pdf = PDF::loadView('pdf.reportepdf', ['automovil2' => $automovil2]);
        return $pdf->download('reporte'.time().'.pdf');
    }

    public function agregar()
    {
        $addAutomovil= new Automovil();

      $placa=$_POST['placa'];
      $tipo=$_POST['tipo'];
      $entrada=date('Y-m-d H:i:s');

      $addAutomovil->placa = $placa ;
      $addAutomovil->tipo = $tipo;
      $addAutomovil->entrada = $entrada;
      $addAutomovil->save();

      return redirect()->back();



    }
    public function modificar()
    {
        

      $id=$_POST['id'];
     $addAutomovil = Automovil::find($id);
      $salida=date('Y-m-d H:i:s');
      $total=0;
      

      
       if ($addAutomovil->tipo=="Oficial") {
          $total=0;
       }
       else if ($addAutomovil->tipo=="Residentes") {
        $entrada=$addAutomovil->entrada;
        $hora1 =strtotime($entrada);

        $hora2 = strtotime($salida);
    
        $total = ($hora1-$hora2)/60; 
      
       }
       else{
        $entrada=$addAutomovil->entrada;
        $hora1 =strtotime($entrada);

        $hora2 = strtotime($salida);
    
        $total = ($hora1-$hora2)/60; 
      $total=($total*3);
       }
        

     
    
     $addAutomovil->salida = $salida;
     $addAutomovil->total = $total;
     $addAutomovil->save();
      return redirect()->back();



    }

}

/*<div class="form-group">
<label for="">Placa del automovil</label>
<input class="form-control" type="text" name="salida" value="<?php echo $salida=date(' H:i:s');?>">
</div>  
<div class="form-group">
<label for="">Placa del automovil</label>
<input class="form-control" type="text" name="total" value="<?php echo $total->format('%H:%I:%S');?>">
</div>*/