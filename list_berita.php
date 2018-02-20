
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Mahasiswa</h3>&nbsp;
                <h3 class="box-title"><a href="laporan.php"><button class="btn btn-default"><i class="glyphicon glyphicon-print"></i>
                    Print Data Mahasiswa</button></a>
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                include('koneksi.php');          
                $query=mysqli_query($conn,"select * from `user`");
                $no = 1;
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            <a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> &nbsp;
                            <a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            <?php include('button.php'); ?>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
            
            ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>       
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->