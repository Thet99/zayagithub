<input <?php if($row->required == 1): ?> required <?php endif; ?> type="datetime" class="form-control datepicker" name="<?php echo e($row->field); ?>"
       value="<?php if(isset($dataTypeContent->{$row->field})): ?><?php echo e(gmdate('m/d/Y g:i A', strtotime(old($row->field, $dataTypeContent->{$row->field})))); ?><?php else: ?><?php echo e(old($row->field)); ?><?php endif; ?>">
