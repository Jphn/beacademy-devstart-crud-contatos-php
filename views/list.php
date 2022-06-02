<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Phone</th>
			<th scope="col">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php

foreach ( $contacts as $key => $contact ) {
    $contact = explode( ';', $contact );

    echo '<tr>';
    echo "<td>{$contact[0]}</td>";
    echo "<td>{$contact[1]}</td>";
    echo "<td>{$contact[2]}</td>";
    echo "<td>
	<a href='/delete?id={$key}' class='btn btn-danger btn-sm'>Delete</a>
	<a href='/update?id={$key}' class='btn btn-warning btn-sm'>Edit</a>
	</td>";
    echo '<tr>';
}

?>
	</tbody>
</table>