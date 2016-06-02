<?php $__env->startSection('content'); ?>
<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Activities</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="">
                    <a class="btn btn-danger" title="Delete" href="activities.php?delete_all=1">Delete all logs</a>
                    <?php if($message): ?>
                        <div class="alert alert-<?php echo e($message['type']); ?>">
                            <?php echo e($message['message']); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(count($activities) > 0): ?>
                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                        <thead>
                        <tr class="headings">
                            <th>User</th>
                            <th>Stream</th>
                            <th>DataStart</th>
                            <th>IP</th>
                            <th>User agent</th>
                            <th>Action</th>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach($activities as $key => $activity): ?>
                                <tr>
                                    <td><?php echo e($activity->user->username); ?></td>
                                    <td><?php echo e($activity->stream->name); ?></td>
                                    <td><?php echo e($activity->date_start); ?></td>
                                    <td><?php echo e($activity->user_ip); ?></td>
                                    <td><?php echo e($activity->user_agent); ?></td>
                                    <td class="center">
                                        <a class="btn btn-danger" href="activities.php?delete=<?php echo e($activity->id); ?>" title="Delete" onclick="return confirm('Are you sure?')">Remove</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                    <?php else: ?>
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">�</button>
                            No activity found
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
        <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
                    ],
                    'iDisplayLength': 50,
                    "sPaginationType": "full_numbers"
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>