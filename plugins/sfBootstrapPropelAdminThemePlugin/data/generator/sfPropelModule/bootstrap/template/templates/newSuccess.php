[?php use_helper('I18N', 'Date') ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div class="portlet box green-haze tasks-widget">
	<div class="portlet-title">
		<div class="caption">[?php echo <?php echo $this->getI18NString('new.title') ?> ?]</div>
		<div class="tools">
			<a href="javascript:;" class="fullscreen">
			</a>
		</div>
	</div>
	<div class="portlet-body">
		[?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>', array('class' => 'form-horizontal', 'role' => 'form')) ?]
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pull-left">[?php echo <?php echo $this->getI18NString('new.title') ?> ?]</h1>
				<div class="pull-right">
					[?php include_partial('<?php echo $this->getModuleName() ?>/form_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
				</div>
			</div>
		</div>

		[?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

		[?php include_partial('<?php echo $this->getModuleName() ?>/form_header', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]

		[?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]

		<div class="row">
			<div class="col-lg-12">
				<div class="pull-right">
					[?php include_partial('<?php echo $this->getModuleName() ?>/form_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
				</div>
			</div>
		</div>
	</form>

	[?php include_partial('<?php echo $this->getModuleName() ?>/form_footer', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]

	</div>
</div>
