<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Pelayanan Surat</h1>
        <a href="<?php echo base_url() . 'admin/pelayanan_surat' ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>

    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" style="line-height:1.5!important">Jenis Surat Yang Dapat Dilayani</h6>
                    
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() . 'admin/pelayanan_surat_update' ?>" method="post">

                        <textarea id="editor1" name="surat" class="form-control"><?php echo $this->m_dah->get_option('pelayanan_surat'); ?></textarea>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>