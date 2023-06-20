<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        ul.pagination li:hover {
  
        }
        ul.pagination li a{
        text-decoration: none;
        padding:5px 10px;
        border:1px solid #dedede;
        border-radius: 6px;
        margin-right:2px;
        }
        ul.pagination li a:hover {
            background-color: #4aaff8;
            color:#fff;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data Karyawan</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                       
                    </tr>
                    <?php
                    foreach ($karyawan as $row) : ?>
                        <tr>
                            <td><?php echo $row->id_pegawai; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->jenis_kelamin; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <?= $pager->links() ?>
     
            </div>
        </div>
    </div>
</body>
</html>