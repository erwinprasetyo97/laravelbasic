 <!DOCTYPE html>
 <html>

 <head>
     <style>
         table,
         th,
         td {
             border: 1px solid black;
         }
     </style>
 </head>

 <body>

     <h2>Daftar Pelanggan</h2>
     <div><a href="{{route('pelanggan.create')}}">Tambah Pelanggan</a></div>
     <table>
         <tr>
             <th>Aksi</th>
             <th>Nama</th>
             <th>No Telepon</th>
             <th>Jenis Kelamin</th>
             <th>Alamat</th>
         </tr>
         @foreach($daftarPelanggan as $pelanggan)
         <tr>
             <td>
                 <a href="/pelanggan/1">Lihat</a> | <a href="/pelanggan/1/edit">Ubah</a>|
                 <form method="POST" action="/pelanggan/1" }>
                     @csrf
                     @method('DELETE')<button type="submit">Hapus</a>
                 </form>
             </td>
             <td>{{ $pelanggan["nama"] }}</td>
             <td>{{ $pelanggan["phone"] }}</td>
             <td>
                 {{ $pelanggan['kelamin']== "P"? "Perempuan" : "Laki-Laki" }}
             </td>
             <td>{{ $pelanggan["alamat"] }}</td>
         </tr>
         @endforeach
         <!-- <tr>
             <td>
                 <a href="/pelanggan/2">Lihat</a> | <a href="/pelanggan/2/edit">Ubah</a>|
                 <form method="POST" action="/pelanggan/2" }>
                     @csrf
                     @method('DELETE')<button type="submit">Hapus</a>
                 </form>
             </td>
             <td>Jono</td>
             <td>089695372492</td>
             <td>Semarang</td>
         </tr> -->
     </table>
 </body>

 </html>