@foreach($user as $index => $usercek)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $usercek->name }}</td>
                    <td>{{ $usercek->email }}</td>
                    <td>{{ $usercek->username }}</td>
                    <td>{{ $usercek->level }}</td>
                    <td>{{ $usercek->password }}</td>
                    <td>{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}</td>
                </tr>
            @endforeach
