<html>
    <head>
        <title>Data Pengguna</title>
    </head>
    <body>
        <h1>Data Pengguna</h1>
        <table border="1" cellpadding="2" cellspacing="o">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID level Pengguna</th>
            </tr>
                <tr>
                    <td>{{$data->user_id}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->level_id}}</td>
                </tr>
        </table>
    </body>