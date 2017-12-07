<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });

</script>

<h2>Daftar Barang</h2>
<div class="divider"></div>
<br/>

<?php
echo "<table id='datatable' class='display' cellspacing='0' width='100%'>";
$header = "<thead>
        <tr>
            <th>Divisi</th>
            <th>Serial Number</th>
            <th>Tipe Barang</th>
            <th>Nama Barang</th>
            <th>Lokasi Asal</th>
            <th>Lokasi Sekarang</th>
            <th>Tanggal Buat</th>
            <th>Update Terakhir</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>";

$footer = "<tfoot>
        <tr>
            <th>Divisi</th>
            <th>Serial Number</th>
            <th>Tipe Barang</th>
            <th>Nama Barang</th>
            <th>Lokasi Asal</th>
            <th>Lokasi Sekarang</th>
            <th>Tanggal Buat</th>
            <th>Update Terakhir</th>
            <th>Status</th>
            <th>Aksi</th>            
        </tr>
    </tfoot>";
echo $header;
echo $footer;
echo "<tbody>";

foreach ($query as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row->Divisi;
    echo "</td><td>";
    echo "<a href='" . '' . "'>$row->SerialNumber</a>";
    echo "</td><td>";
    echo $row->TipeBarang;
    echo "</td><td>";
    echo $row->NamaBarang;
    echo "</td><td>";
    echo $row->Lokasi1;
    echo "</td><td>";
    echo $row->Lokasi2;
    echo "</td><td>";
    echo $row->TanggalBuat;
    echo "</td><td>";
    echo $row->LastUpdate;
    echo "</td><td>";
    echo "<a href='" . base_url('index.php/C_UbahStatus/UbahStatus') . '/' . $row->SerialNumber . "'>$row->Status</a>";
    echo "</td><td>";
    echo "<a href='" . base_url('index.php/C_KirimBarang/KirimBarang') . '/' . $row->SerialNumber . "'>Kirim</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
