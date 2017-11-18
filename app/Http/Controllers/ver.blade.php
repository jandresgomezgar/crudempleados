<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td class="text-center">{{ $empleado->apellidos }}</td>
            <td class="text-center">{{ $empleado->nombre }}</td>
        </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>