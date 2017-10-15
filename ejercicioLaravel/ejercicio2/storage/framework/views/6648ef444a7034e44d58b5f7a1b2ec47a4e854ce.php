<?php $__env->startSection('title','Ver todos los contactos'); ?>
<?php $__env->startSection('content'); ?>


	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Contactos</h2>
			</div>
			<?php if(session('status')): ?>
				<div class="alert alert-succes">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>		
			<?php if($contactosCtrl->isEmpty()): ?>
				<p>No hay contactos creados</p>
			<?php else: ?>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Télefono</th>
							<th>e-Mail</th>
							<th>Parentesco</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $contactosCtrl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo $contacto->id; ?> </td>
								<td>
									<a href="<?php echo action('controladorcontacto@show' , $contacto->name); ?>"><?php echo $contacto ->name; ?></a>
								</td>
								<td>
									<a href="<?php echo action('controladorcontacto@show' , $contacto->telephone); ?>"><?php echo $contacto->telephone; ?></a> 
								</td>
								<td>
									<a href="<?php echo action('controladorcontacto@show' , $contacto->email); ?>"><?php echo $contacto ->email; ?></a>
								</td>
								<td>
									<a href="<?php echo action('controladorcontacto@show' , $contacto->parents); ?>"><?php echo $contacto ->parents; ?></a>
								</td>


							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			<?php endif; ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>												
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>