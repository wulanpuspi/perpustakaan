
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><marquee><font color="black" face="fantasy">SELAMAT DATANG DI DATA PEGAWAI</font></marquee></h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="center">
                            <h6 class="m-0 font-weight-bold text-info"><font color="black" face="fantasy">Tabel Pegawai</font></h6>
                            <a href="beranda.php?page=pegawai&aksi=add">
                                <button class="btn btn-primary"><font color="white" face="fantasy">Tambah Data</font></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Jabatan</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Jabatan</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sql = "select * from tabel_pegawai";
                                        $show = $database->query($sql);

                                        foreach($show as $pegawai):
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $pegawai['nama_pegawai']?></td>
                                            <td><?php echo $pegawai['jenis_kelamin']?></td>
                                            <td><?php echo $pegawai['alamat']?></td>
                                            <td><?php echo $pegawai['no_hp']?></td>
                                            <td><?php echo $pegawai['jabatan']?></td>
                                            <td>
                                               <a href="beranda.php?page=pegawai&aksi=edit&id=<?php echo $pegawai['id_pegawai']?>"
                                                 class="btn btn-danger btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/pegawai/prosesdeletepegawai.php?id=<?php echo $pegawai['id_pegawai']?>"
                                                 class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                    </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>