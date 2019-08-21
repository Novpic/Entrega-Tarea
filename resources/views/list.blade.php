<!DOCTYPE html>
<html>
<head>
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: left;
  padding: 8px;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {background-color: #f2f2f2;}

</style>
</head>
<body>

<h2>List</h2>


@if ( $cars->isEmpty() )
  <div>
    No se encontraron nuevos inversionistas para validar.
  </div>
@else
<table>
  <thead>
    <tr>
      <th>Plate</th>
      <th>Brand</th>
      <th>Extra</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($cars as $car)
    <tr>
      @if ( $car->brand == "mazda")
        <td>{{ $car->plate }}</td>
        <td>Mazda</td>
        <td style="color:#1FC63B";>Los de Mazda son los mejores</td>
      @elseif( $car->brand == "toyota")
        <td style="color:#FF0000";>
          <b> {{ $car->plate }}</b>
        </td>
        <td style="color:#FF0000";>
          <b>Toyota</b>
        </td>
      @else
      <td>{{ $car->plate }}</td>
      <td>{{ $car->brand }}</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
@endif


</body>
</html>