[?php use_helper('I18N', 'Date'); ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets'); ?]
<div class="portlet box green-haze tasks-widget">
	<div class="portlet-title">
		<div class="caption">[?php echo <?php echo $this->getI18NString('list.title'); ?> ?]</div>
		<div class="tools">
			<a href="javascript:;" class="fullscreen">
			</a>
		</div>
	</div>
	<div class="portlet-body">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pull-left">[?php echo <?php echo $this->getI18NString('list.title'); ?> ?]</h1>
				<p class="pull-right">
					[?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)); ?]
				</p>
			</div>
			<div class="col-lg-12">
				[?php include_partial('<?php echo $this->getModuleName() ?>/flashes'); ?]

				[?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)); ?]

				<?php if ($this->configuration->hasFilterForm()): ?>
					[?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)); ?]
				<?php endif; ?>

				<?php if ($this->configuration->getValue('list.batch_actions')): ?>
					<form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')); ?]" method="post" class="form-inline">
				<?php endif; ?>
					[?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)); ?]

					<div class="pull-left">
						[?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)); ?]
					</div>

					<div class="pull-right form-inline">
						[?php include_partial('<?php echo $this->getModuleName() ?>/list_max_per_page', array('helper' => $helper, 'configuration' => $configuration, 'value' => $pager->getMaxPerPage())) ?]
						[?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
					</div>
				<?php if ($this->configuration->getValue('list.batch_actions')): ?>
					</form>
				<?php endif; ?>

				[?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)); ?]

			</div>
		</div>
	</div>
</div>