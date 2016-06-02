<?php $__env->startSection('content'); ?>
        <!-- top tiles -->
<div class="row tile_count" onclick="document.location = 'streams.php?running=1'"  style="cursor:pointer">
    <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-user"></i> Online streams</span>
            <div class="count"><?php echo e($online); ?></div>
        </div>
    </div>
    <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count" onclick="document.location = 'streams.php?running=2'"  style="cursor:pointer">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-clock-o"></i> Offline streams</span>
            <div class="count"><?php echo e($offline); ?></div>
        </div>
    </div>
    <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count" onclick="document.location = 'streams.php'"  style="cursor:pointer">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-user"></i> Total streams</span>
            <div class="count green"><?php echo e($all); ?></div>
        </div>
    </div>


</div>
<!-- /top tiles -->



<div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2>SYSTEM</h2>
            </div>
            <div class="x_content">
                <h4>App Usage across versions</h4>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>SPACE</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo e($space['pr']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">

                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span><?php echo e($space['count']); ?> / <?php echo e($space['total']); ?></span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>CPU</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo e($cpu['pr']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">

                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span><?php echo e($cpu['count']); ?> / 100</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>MEMORY</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo e($mem['pr']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span><?php echo e($mem['count']); ?> / <?php echo e($mem['total']); ?></span>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>