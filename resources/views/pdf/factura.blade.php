<h3 class="seniat"> <strong>SENIAT</strong>  </h3>
<h4 class="nombreG">BODYFITNESS</h4>
<h4 class="rif">RIF: J-00000000-0</h4>
<h5 class="factura"><strong>FACTURA</strong></h5>

<p class="fecHora">14/09/2018             10:00AM</p><p></p>
<h5 class="datosP"><strong>Nombre:</strong>{{$personas->nombre}}/<strong>Cedula:</strong>{{$personas->cedula}}</h5>

<p class="NumFactura" >Factura Nª: 0000122</p>

<p class="datosF">Descripcion             Monto</p> 
<p class="costo">{{$personas->Plan->nombrePlan}} <strong>{{$personas->Plan->costoPlan}}Bs.S</strong></p>       
<p class="iva">IVA {{$iva->iva}}%</p>
<p class="total">TOTAL = {{$personas->Plan->costoPlan+($personas->Plan->costoPlan/$iva->iva)}}</p>

<style type="text/css">
*{
  font-size: 15px;
}
  .seniat
  {
      margin-left: 40%;
  }
  .nombreG{
    margin-left: 36%;
  }
  .rif{
    margin-left: 34%;
  }
  .factura{
    margin-left: 41%;
  }
  .fecHora{
    margin-left: 30%;
  }
  .datosP{
    margin-left: 14%;
  }
  .NumFactura{
    margin-left: 30%;
  }
  .datosF{
    margin-left: 30%;
  }
  .iva{
    margin-left:20%;
  }
  .total{
    margin-left:20%;
  }
  .costo{
    margin-left: 27%;
  }
</style>