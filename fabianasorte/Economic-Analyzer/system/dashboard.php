
<?php

require_once "classes/Template.php";

$template = new Template();

$template->header();

$template->sidebar();

$template->mainpanel();

require_once "DAO/BeneficiariosDAO.php";
require_once "DAO/PagamentosDAO.php";
try{
    $daobeneficiarios = new BeneficiariosDAO();
    $daopagamentos = new PagamentosDAO();
}
catch (Exception $e){
    echo "<h1>$e</h1>";
}

?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-server"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Total de pagamento</p>
                                    <?php
                                    foreach ($daopagamentos->Totaldepagamentos() as $item) {
                                        echo number_format($item->total);
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-info"></i> Total sum
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-wallet"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Total de pagamento mensal</p>
                                    <?php foreach ($daopagamentos->TotaldepagamentosUltimoMes() as $item) {

                                        echo number_format($item->total);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-calendar"></i> Last Month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-danger text-center">
                                    <i class="ti-pulse"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Média dos pagamentos do último mês</p>
                                    <?php foreach ($daopagamentos->MediaPagamentosDoUltimoMes() as $item) {
                                        echo number_format($item->total);

                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-timer"></i> In the last month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-info text-center">
                                    <i class="ti-user"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">

                                    <p>Total de beneficiários</p>
                                    <?php foreach ($daobeneficiarios->TotalDeBeneficiarios() as $item) {
                                        echo number_format($item->total);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-info"></i> Total
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Monthly beneficiaries</h4>
                        <p class="category">Every year</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Value
                                <i class="fa fa-circle text-danger"></i> Value
                                <i class="fa fa-circle text-warning"></i> Value
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-info-alt"></i> Historic Serie | <i class="ti-export"></i><a> Export PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Beneficiaries by state</h4>
                        <p class="category">Monthly update</p>
                    </div>
                    <div class="content">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Value
                                <i class="fa fa-circle text-danger"></i> Value
                                <i class="fa fa-circle text-warning"></i> Value
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-timer"></i> Total | <i class="ti-export"></i><a> Export PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Values per state</h4>
                        <p class="category">Monthly update</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Value
                                <i class="fa fa-circle text-warning"></i> Value
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-check"></i> Last Month | <i class="ti-export"></i><a> Export PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$template->footer();

?>

