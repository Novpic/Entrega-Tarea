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

<h2>Statistics</h2>



<table>
  <thead>
    <tr>
      <th>Mazda</th>
      <th>Toyota</th>
      <th>Chevrolet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>{{ $result[0] }}</td>
        <td>{{ $result[1] }}</td>
        <td>{{ $result[2] }}</td>
    </tr>
  </tbody>
</table>


</body>
</html>