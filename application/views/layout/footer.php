</div>
<footer>
    <div class="">
        <!--<p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |-->
            <!--<span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>-->
        </p>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->

</div>
<!-- /page content -->
</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<!-- chart js -->
<script src="<?php echo base_url() ?>assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="<?php echo base_url() ?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo base_url() ?>assets/js/icheck/icheck.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/datatables/datatables.js"></script>
<script>

<?php
$cad = '';
$keys = array_keys($_POST);
foreach ($_POST as $row => $value) {
    if ($cad != '') {
        $cad.='&';
    }
    $cad.=$row . '=' . $value;
}
?>

    $(document).ready(function () {

        $('#example').on('click', 'tr', function (event) {
            var table = $('#example').DataTable();
//            alert('Row index: ' + table.row(this));
            var array = table.row(this).data();
            console.log(array[1]);
        }).on('dblclick', 'td', function (event) {
            $(this).css('background', '#000');
        });


<?php
isset($_POST) ? $url = base_url() . 'Registro_visitas/get_personal_total/?' . $cad : $url = base_url() . 'Registro_visitas/get_personal_total';
?>
        $('#example').dataTable({
            "ajax": "<?php echo $url ?>",
            "order": [[0, "desc"]],
            "aoColumnDefs": [
                {
                    "bSortable": false,
                    "aTargets": ["no-sort"]
                }],
            "dom": 'T<"clear">lfrtip',
        });
    });

</script>
<?php
if (isset($js)) {
    foreach ($js as $row => $value) {
        echo $value;
    }
}
?>
</body>

</html>