<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap -->
  <link href="{{ asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />


	<title>PHP Test</title>
</head>
<body>
	<h1>PHP TEST</h1>
	<h2>Sorted Item List</h2>

	<table class="table table-bordered">
    <thead class="thead-dark">
		<tr>
			<th>Item Type</th>
			<th>Price</th>
		</tr>

		@foreach ($order->getSortedItems() as $item)
			<tr>
				<td>{{ $item->getType() }}</td>
				<td>{{ $item->getPrice() }}</td>
			</tr>
		@endforeach

		<tr style="font-weight: bold;">
			<td>Total</td>
			<td>{{ $order->getTotalPrice() }}</td>
		</tr>
	</table>

	<h2>Console and controller price together:
    {{ $console_and_controller->getTotalPrice() }}
  </h2>


</body>
</html>
