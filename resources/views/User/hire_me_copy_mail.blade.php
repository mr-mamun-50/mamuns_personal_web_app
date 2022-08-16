Hi, {{ $name }}
<h3>You sent a hiring message to {{ config('app.name') }}</h3>

<table>
    <tbody>
        <tr>
            <td><b>Name: </b></td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td><b>Email: </b></td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td><b>Website: </b></td>
            <td>{{ $website }}</td>
        </tr>
        <tr>
            <td><b>Budget: </b></td>
            <td>{{ $budget }}</td>
        </tr>
        <tr>
            <td><b>Requirements: </b></td>
            <td><?php echo $requirements; ?></td>
        </tr>
    </tbody>
</table>

<br><br>
<div>
    <a href="{{ route('home') }}">
        Visit my personal website to get more information
    </a>
</div>
<br>

Thanks,<br>
{{ config('app.name') }}
