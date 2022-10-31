<div class="container-xxl">
    <br>
    <h2 class="dahsboard-text mt-2 text-center">Peraturan BLUD</h2>
    <div class="square mt-3"></div>

    <div class="col-md-12">
        <div class="card card-primary mt-4">
            <div class="card-header">


                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <?php
                if ($this->session->flashdata('pesan')) {
                    echo ' <div class="alert alert-success alert-dismissible" role="alert">
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   ';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>Nama Peraturan</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($getAllPeraturan as $key => $value) { ?>
                                <tr>
                                    <td>Semua Peraturan</td>

                                    <td class="">
                                        <a href="<?= base_url('adminperaturan/edit/' . $value->id) ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                    </td>
                                </tr>



                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>