<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/suppliers/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/supplier/add') ?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
								<label for="supplier_id">Id_supplier</label>
								<input class="form-control <?php echo form_error('supplier_id') ? 'is-invalid':'' ?>"
								 type="text" name="id" placeholder="supplier_id" />
								<div class="invalid-feedback">
									<?php echo form_error('supplier_id') ?>
								</div>
                            </div>

                            <div class="form-group">
								<label for="suplier_name">Name*</label>
								<input class="form-control <?php echo form_error('suplier_name') ? 'is-invalid':'' ?>"
								 type="text" name="suplier_name" placeholder="Supplier name" />
								<div class="invalid-feedback">
									<?php echo form_error('suplier_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="supplier_address">Address</label>
								<input class="form-control <?php echo form_error('supplier_address') ? 'is-invalid':'' ?>"
								 type="text" name="supplier_address" min="0" placeholder="Supplier address" />
								<div class="invalid-feedback">
									<?php echo form_error('supplier_address') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
