<?php
include "models/m_monitoring.php";
$brg = new Barang($connection);

?>


<div class="row">
  <div class="col-lg-12">
    <h1>Monitoring<small>Admin</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="icon-dashboard"></i> Monitoring</a></li>

    </ol>
  </div>
</div>


<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped">
        <tr>
          <th>No</th>
          <th>Nik </th>
          <th>Nama</th>
          <th>Tanggal Lahir </th>
          <th>Usia</th>
          <th>Jenis Kelamin</th>
          <th>Id Kasus</th>
          <th>Kecamatan</th>
          <th>Desa</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Tanggal Gejala</th>
          <th>tanggal Sample</th>
          <th>Tanggal Hasil</th>
          <th>Hasil Lab</th>
          <th>Diagnosa</th>
          <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $tampil = $brg->tampil();
        while ($data = $tampil->fetch_object()) {





        ?>

          <tr>
            <td align="center"><?= $no; ?></td>
            <td><?= $data->nik; ?></td>
            <td><?= $data->nama; ?></td>
            <td><?= $data->tanggal_lahir; ?></td>
            <td><?= $data->usia; ?></td>
            <td><?= $data->jenis_kelamin; ?></td>
            <td><?= $data->id_kasus; ?></td>
            <td><?= $data->kecamatan; ?></td>
            <td><?= $data->desa; ?></td>
            <td><?= $data->alamat; ?></td>
            <td><?= $data->no_telp; ?></td>
            <td><?= $data->tgl_gejala; ?></td>
            <td><?= $data->tgl_sample; ?></td>
            <td><?= $data->tgl_hasil; ?></td>
            <td><?= $data->hasil_lab; ?></td>
            <td><?= $data->diagnosa; ?></td>
            <td align="center">
              <button class="btn btn-info btn-xs">Edit</button>
              <button class="btn btn-danger btn-xs">Delete</button>
            </td>


          </tr>

        <?php
        } ?>

      </table>
    </div>

  </div>
</div>