@extends('main')
@section('content')

    <div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ $title }} </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a class="btn btn-round btn-primary" href="manage_stream.php" title="Add">
                                Nuevo stream
                            </a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <form action=""method="post">
                        <input type="submit" name="mass_start" value="Iniciar" class="btn btn-small btn-success" onclick="return confirm('estas seguro?')">
                        <input type="submit" name="mass_stop" value="Parar" class="btn btn-small btn-danger" onclick="return confirm('estas seguro?')">
                        <input type="submit" name="mass_delete" value="Borrar" class="btn btn-small btn-danger" onclick="return confirm('estas seguro?')">
                        @if(count($streams) > 0)
                            @if($message)
                                <div class="alert alert-{{ $message['type'] }}">
                                    {{ $message['message'] }}
                                </div>
                            @endif
                    <div class="">


                            <table id="example" class="table table-striped responsive-utilities jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Categoria</th>
                                    <th>Video</th>
                                    <th>Audio</th>
                                    <th class=" no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>


                                @foreach($streams as $key => $stream)

                                    <tr>
                                        <td class="center"><input type="checkbox" class="tableflat check"  value="{{ $stream->id }}" name="mselect[]"></td>
                                        <td>
                                            {{ $stream->name }}

                                            @if($stream->checker == 2)
                                                <span class="label label-info">streamurl2</span>
                                            @endif
                                            @if($stream->checker == 3)
                                                <span class="label label-info">streamurl3</span>
                                            @endif
                                        </td>
                                        <td class="center"><span class="label label-{{ $stream->status_label['label'] }}">{{ $stream->status_label['text'] }}</span></td>
                                        <td class="center">{{ $stream->category ? $stream->category->name : '' }} </td>
                                        <td>
                                            @if($stream->video_codec_name)
                                            {{ $stream->video_codec_name }}
                                                @else
                                                Empty
                                            @endif
                                        </td>
                                        <td>
                                            @if($stream->audio_codec_name)
                                                {{ $stream->audio_codec_name }}
                                            @else
                                                Empty
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($stream->status == 1)
                                                <a class="btn btn-danger" title="STOP STREAM" href="streams.php?stop={{ $stream->id }}">Parar</a>
                                            @elseif ($stream->status != 1)
                                                <a class="btn btn-success" title="START STREAM" href="streams.php?start={{ $stream->id }}">Iniciar</a>
                                            @endif

                                            <a class="btn btn-info" href="manage_stream.php?id={{ $stream->id }}" title="Edit">
                                                Editar
                                            </a>
                                            <a class="btn btn-danger" href="streams.php?delete={{ $stream->id }}" title="Delete" onclick="return confirm('estas seguro?')">
                                                Borrar
                                            </a>

                                        </td>
                                @endforeach

                                </tbody>
                                </table>
                            @else
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">�</button>
                                    No hay streams
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
@endsection

@section('js')
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


            $('table input').on('ifChecked', function () {
                check_state = '';
                $(this).parent().parent().parent().addClass('selected');
                countChecked();
            });
            $('table input').on('ifUnchecked', function () {
                check_state = '';
                $(this).parent().parent().parent().removeClass('selected');
                countChecked();
            });

            var check_state = '';
            $('.bulk_action input').on('ifChecked', function () {
                check_state = '';
                $(this).parent().parent().parent().addClass('selected');
                countChecked();
            });
            $('.bulk_action input').on('ifUnchecked', function () {
                check_state = '';
                $(this).parent().parent().parent().removeClass('selected');
                countChecked();
            });
            $('.bulk_action input#check-all').on('ifChecked', function () {
                check_state = 'check_all';
                countChecked();
            });
            $('.bulk_action input#check-all').on('ifUnchecked', function () {
                check_state = 'uncheck_all';
                countChecked();
            });

            function countChecked() {
                if (check_state == 'check_all') {
                    $(".bulk_action input[name='mselect[]']").iCheck('check');
                }
                if (check_state == 'uncheck_all') {
                    $(".bulk_action input[name='mselect[]']").iCheck('uncheck');
                }
                var n = $(".bulk_action input[name='mselect[]']:checked").length;
                if (n > 0) {
                    $('.column-title').hide();
                    $('.bulk-actions').show();
                    $('.action-cnt').html(n + ' Records Selected');
                } else {
                    $('.column-title').show();
                    $('.bulk-actions').hide();
                }
            }
        </script>
@endsection

