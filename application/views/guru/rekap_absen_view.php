<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Data Siswa</span>
      </h1>
    </section>
    <!-- Report content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title" style="font-size: 25px;">Rekap Data Siswa</h3>
                    <h5>
                        <b><i><?php echo date('l'); ?>, 
                            <?php
                                $newDate = date("d M Y", strtotime(date("d M Y")));
                                echo $newDate; 
                            ?> 
                        </i></b> <p><i>Jumlah siswa :</b> <?php echo $countJumlahS; ?></i></p>
                    </h5>
                </div>
                <div class="box-body">
                    <?php $belumAbsen = $countJumlahS - $countSudahAbsen; ?>
                    <p><b>Jumlah siswa yang sudah melakukan absen hari ini : </b><?php echo $countSudahAbsen; ?></p>
                    <p><b>Jumlah siswa yang belum melakukan absen hari ini : </b><?php echo $belumAbsen; ?></p>
                    <div id="chart" class="col-lg-4">
                        <script type="text/javascript">

                         // Build the chart
                        Highcharts.chart('chart', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'Siswa sudah melakukan absen (<?php echo date("d M Y") ?>)'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: false
                                    },
                                    showInLegend: true
                                }
                            },
                            series: [{
                                name: 'Persentase',
                                colorByPoint: true,
                                data: [{
                                    name: 'Belum absen (<?php echo $belumAbsen; ?> anak)',
                                    y: <?php echo $belumAbsen; ?>
                                }, {
                                    name: 'Sudah Absen (<?php echo $countSudahAbsen; ?> anak)',
                                    y: <?php echo $countSudahAbsen; ?>,
                                    sliced: true,
                                    selected: true
                                }]
                            }]
                        });
                        </script>
                    </div>
                    <div id="chart2" class="col-lg-4">
                        <script type="text/javascript">
                            // Build the chart
                            Highcharts.chart('chart2', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: null,
                                    plotShadow: false,
                                    type: 'pie'
                                },
                                title: {
                                    text: 'Siswa sudah melakukan absen (<?php echo date("d M Y") ?>)'
                                },
                                tooltip: {
                                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: false
                                        },
                                        showInLegend: true
                                    }
                                },
                                series: [{
                                    name: 'Persentase',
                                    colorByPoint: true,
                                    data: [{
                                        name: 'Sudah dikonfirmasi (<?php echo $countTerconfirm; ?> anak)',
                                        y: <?php echo $countTerconfirm; ?>
                                    }, {
                                        name: 'Belum dikonfirmasi(<?php echo $countBelumTerconfirm; ?> anak)',
                                        y: <?php echo $countBelumTerconfirm; ?>,
                                        sliced: true,
                                        selected: true
                                    }]
                                }]
                            });
                        </script>
                    </div>
                    <div id="chartperbulan" class="col-lg-4">
                        <script type="text/javascript">
                            // Build the chart
                            Highcharts.chart('chartperbulan', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: null,
                                    plotShadow: false,
                                    type: 'pie'
                                },
                                title: {
                                    text: 'Keterangan Kehadiran Siswa (<?php echo date("M Y") ?>)'
                                },
                                tooltip: {
                                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: false
                                        },
                                        showInLegend: true
                                    }
                                },
                                series: [{
                                    name: 'Persentase',
                                    colorByPoint: true,
                                    data: [{
                                        name: 'Masuk (<?php echo $countSiswaMasukPerbulan; ?>)',
                                        y: <?php echo $countSiswaMasukPerbulan; ?>,
                                        sliced: true,
                                        selected: true
                                    }, {
                                        name: 'Izin (<?php echo $countSiswaIzinPerbulan; ?>)',
                                        y: <?php echo $countSiswaIzinPerbulan; ?>
                                    }, {
                                        name: 'Sakit (<?php echo $countSiswaSakitPerbulan; ?>)',
                                        y: <?php echo $countSiswaSakitPerbulan; ?>
                                    }]
                                }]
                            });
                        </script>
                    </div>
                    <div id="chartkethariini" class="col-lg-4">
                        <script type="text/javascript">
                            // Build the chart
                            Highcharts.chart('chartkethariini', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: null,
                                    plotShadow: false,
                                    type: 'pie'
                                },
                                title: {
                                    text: 'Keterangan Kehadiran Siswa (<?php echo date("d M Y") ?>)'
                                },
                                tooltip: {
                                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: false
                                        },
                                        showInLegend: true
                                    }
                                },
                                series: [{
                                    name: 'Persentase',
                                    colorByPoint: true,
                                    data: [{
                                        name: 'Masuk (<?php echo $countSiswaMasukH; ?> anak)',
                                        y: <?php echo $countSiswaMasukH; ?>,
                                        sliced: true,
                                        selected: true
                                    }, {
                                        name: 'Izin (<?php echo $countSiswaIzinH; ?> anak)',
                                        y: <?php echo $countSiswaIzinH; ?>
                                    }, {
                                        name: 'Sakit (<?php echo $countSiswaSakitH; ?> anak)',
                                        y: <?php echo $countSiswaSakitH; ?>
                                    }]
                                }]
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>