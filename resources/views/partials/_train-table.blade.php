
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codice Treno</th>
      <th scope="col">Carrozze</th>
      <th scope="col">Origine</th>
      <th scope="col">Destinazione</th>
      <th scope="col">Partenza</th>
      <th scope="col">Arrivo</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($trains as $train)    
    <tr @if ($train->cancelled) echo class="table-danger" 
        @elseif (!$train->on_time) echo class="table-warning"
        @else echo class="table-success"
        @endif>
        <th scope="row">{{$train->train_code}}</th>
        <td>{{$train->coaches_number}}</td>
        <td>{{$train->from_station}}</td>
        <td>{{$train->to_station}}</td>
        <td>{{$train->departure}}</td>
        <td>{{$train->arrival}}</td>
        @if (!$train->cancelled) 
        <td>{{$train->on_time ? 'In orario' : 'In Ritardo'}}</td>
        @else
        <td>CANCELLATO</td>
        @endif
    </tr>
    @endforeach
  </tbody>
</table>