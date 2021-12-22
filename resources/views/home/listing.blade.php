<tr>
    <th scope="row">{{ $curViewUser['id'] }}</th>
    <td>{{ $curViewUser['name'] }}</td>
    <td>{{ $curViewUser['email'] }}</td>
    <td class="capitalize">{{ $curViewUser['role'] }}</td>
    <td>{{ $curViewUser['created_at']->format('d-m-Y') }}</td>
</tr>