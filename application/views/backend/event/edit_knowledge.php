<?php
if($count!=0)
{
	$options[] = 'Seleccione';
	for($i=1;$i<=$count[0]->Count;$i++)
	{
		$options[] = $i;
	}
}
else
{
	$options[] = 'Seleccione';
	$options[] = '1';
}
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eventos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Saber
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									<?=form_open('events/edit_knowledge/'.$knowledge[0]->Id.'/2', array('role'=>'form','autocomplet'=>'off','class'=>'form-horizontal'))?>
									<?=validation_errors('<div class="alert-danger input-sm"><p><strong>','</strong> </div><br />')?>
									<?php if(isset($typeError)):?>
									    <div class="col-md-12">
									        <div class="alert alert-<?=($typeError == 1 )? 'success' : 'danger';?> <?=($typeError == 0 )? 'hide' : '';?> alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<strong><?=($typeError != 0 )? $titleError : '';?></strong> <?=$msg?>.
									        </div>
									    </div>
									<?php endif;?>
										<?php echo form_error('Content','<div class="alert alert-danger alert-dismissable">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<strong>Error!</strong>','.</div>'); ?>
										<div class="form-group">
                                            <label class="col-md-2">Saber</label>
											<div class="col-md-10">
												<?=form_textarea(array('name' => 'Content', 
												   'id'   => 'Content', 
												   'class'=> 'form-control',
												   'required' => '',
												   'value'=> (set_value('Content')!=0)?set_value('Content'):$knowledge[0]->Content))?>
											</div>
                                        </div>
										<?php echo form_error('Order','<div class="alert alert-danger alert-dismissable">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<strong>Error!</strong>','.</div>'); ?>
										<div class="form-group">
                                            <label class="col-md-2">Orden</label>
											<div class="col-md-10">
												<?php $settings = 'class="form-control" required=""'; ?>
												<?=form_dropdown('Order', $options,(set_value('Order')!=0)?set_value('Order'):$knowledge[0]->Order,$settings);?>
											</div>
                                        </div>
										<input type="hidden" name="Scheduled_Event_Id" value="<?=$event[0]->Id?>"/>
										<input type="hidden" name="Id" value="<?=$knowledge[0]->Id?>" />
										<div class="col-md-1 pull-right text-center">
											<a href="<?=site_url('events/knowledges/'.$event[0]->Id)?>" class="btn btn-info pull-right">Regresar</a>
										</div>
										<div class="col-md-1 pull-right text-center"></div>
										<div class="col-md-1 pull-right text-center">
											<button type="submit" class="btn btn-success pull-right">Guardar</button>
										</div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>