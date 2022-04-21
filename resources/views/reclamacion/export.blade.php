
   <table>
     <thead>
         <tr>
             <th>stro Consecutivo</th>
             <th>Fecha de Ingreso</th>
             <th>Fecha de Respuesta</th>
             <th>Cliente</th>
             <th>Comercial</th>
             <th>Factura</th>
             <th>Codigo</th>
             <th>Cantidad</th>
             <th>Lote o Serial</th>
             <th>Marca</th>
             <th>Estado</th>
             <th>Problemas del equipo</th>
             <th>Descripcion de la Revision</th>
             <th>Solucion</th>
             <th>Tipo de garantia</th>
             <th>Numero de Documento</th>
             <th>Consecutivo Carta</th>
             <th>Observaciones</th>


         </tr>
     </thead>
     <tbody>
        @foreach ($reclamaciones as $reclamacion )

         <tr>
            <td>{{$reclamacion->id }}</td>
            <td>{{$reclamacion->fecha_ingreso }}</td>
            <td>{{$reclamacion->fecha_respuesta }}</td>
            <td>{{$reclamacion->cliente }}</td>
            <td>{{$reclamacion->comercial }}</td>
            <td>{{$reclamacion->factura }}</td>
            <td>{{$reclamacion->producto }}</td>
            <td>{{$reclamacion->cantidad }}</td>
            <td>{{$reclamacion->lote_serial }}</td>
            <td>{{$reclamacion->marca }}</td>
            <td>{{$reclamacion->estado }}</td>
            <td>{{$reclamacion->descripcion_problema }}</td>
            <td>{{$reclamacion->revision }}</td>
            <td>{{$reclamacion->solucion }}</td>
            <td>{{$reclamacion->tipo_garantia }}</td>
            <td>{{$reclamacion->num_documento }}</td>
            <td>{{$reclamacion->consecutivo_carta }}</td>
            <td>{{$reclamacion->observaciones }}</td>

         </tr>

         @endforeach
     </tbody>
   </table>



