<?php
    @$id = $_GET['id'];

    $sql    = "select * from tabel_buku where id_buku=$id";
    $show   = $database->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

    
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>edit Data Buku</h4>
                        <br>
                        <form action="model/buku/editbuku.php" method="POST">
                            <input type="hidden" name="id_buku" value="<?php echo $hasil['id_buku'] ?>">

                            <table class="table">
                                <tr>
                                    <td>isbn</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="isbn" id="isbn" value="<?php echo $hasil['isbn']?>"></td>
                                </tr>
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td><input class="form-control" name="nama_buku" id="nama_buku" cols="10" rows="6" value="<?php echo $hasil['nama_buku']?>"></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penulis" id="penulis" value="<?php echo $hasil['penulis']?>"></td>
                                </tr>
                                <tr>
                                    <td>penerbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penerbit" id="penerbit" value="<?php echo $hasil['penerbit']?>"></td>
                                </tr>
                                <tr>
                                    <td>tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?php echo $hasil['tahun_terbit']?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                        <button type="submit" class="btn btn-info">kembali</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>