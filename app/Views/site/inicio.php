<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Josue Mamani" />
        <title>Tienda de abarrotes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="public/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <?= link_tag('https://fonts.googleapis.com/css?family=Montserrat:400,700'); ?>
        <?= link_tag('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');  ?>
        <!-- Core theme CSS (includes Bootstrap)-->
        <?= link_tag('public/css/styles.css');?>
        <script src="public/js/html2pdf.bundle.min.js"></script>
        <script src="public/js/reporte_pdf.js"></script>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?= base_url() ?>">Tienda de abarrotes</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Clientes</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Regalos</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Clientes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="public/assets/img/portfolio/cabin.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="public/assets/img/portfolio/cake.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
                <!-- About Section Heading-->
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Preferencia de regalos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <br>
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="card-footer small text-muted">
                                <button type="button" id="btn-reporte" name="btn-reporte" class="btn btn-dark">Generar PDF</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Registrar clientes</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>


                                    <form action="" id="frm-add-client" method="post">
                                      <div class="row">
                                        <div class="col">
                                          <input type="text" id="name" name="name" class="form-control" placeholder="Nombres">
                                          <small id="" class="text-muted">[caracteres alfabéticos]</small>
                                        </div>
                                        <div class="col">
                                          <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Apellidos">
                                          <small id="" class="text-muted">[caracteres alfabéticos]</small>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col">
                                          <input type="text" id="dni" name="dni" maxlength="8" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" class="form-control" placeholder="DNI">
                                          <small id="" class="text-muted">[min: 8 caracteres numéricos]</small>
                                        </div>
                                        <div class="col">
                                          <input type="text" id="cellphone" name="cellphone" maxlength="9" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" class="form-control" placeholder="Celular">
                                          <small id="" class="text-muted">[min:9 caracteres numéricos]</small>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row" style="justify-content: center;">
                                        <button type="" id="add-client" class="btn btn-success">Registrar cliente</button>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Registrar regalos</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <br>
                                    <form id="frm-add-gift" method="post">
                                    <div class="row">
                                        <div class="col">
                                          <input type="text" id="dni_gift" name="dni_gift" maxlength="8" class="form-control" placeholder="DNI del cliente">
                                          <small id="" class="text-muted">[min: 8 caracteres numéricos]</small>
                                        </div>
                                        <div class="col">
                                            <select class="form-control" id="idregalo" name="idregalo">
                                                <option value="" selected>Elegir regalo</option>
                                                <option value="1">Gaseosa</option>
                                                <option value="2">Jugo</option>
                                                <option value="3">Agua</option>
                                                <option value="4">Energizante</option>
                                                <option value="5">Yogurt</option>
                                            </select>
                                        </div>
                                      </div>
                                      <br>

                                      <br>
                                      <div class="row" style="justify-content: center;">
                                        <button id="add-gift" name="add-gift" class="btn btn-success">Añadir regalo</button>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!-- Core theme JS-->
        <script src="public/js/scripts.js"></script>
        <!-- AJAX form  grafico de barras -->

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <!-- SWEETALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
        <!-- Grafico de barras canvas js -->
        <script type="text/javascript">
            <?php
                $this->db =\Config\Database::connect();
                $builder = $this->db->table('cantidad_regalos');
                $result1=$builder->select('*')->get();
                foreach ($result1->getResultArray() as $row) {
                  $output[]=array(
                    'label' =>$row['nombrereg'],
                    'y' =>$row['cantidad']
                  );
                }
            ?>
            window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
              animationEnabled: true,
              theme: "light2", // "light1", "light2", "dark1", "dark2"
              title:{
                text: "Clientes v Regalos"
              },
              axisY: {
                title: "# Clientes"
              },
              data: [{
                type: "column",
                showInLegend: false,
                legendMarkerColor: "grey",
                dataPoints: <?= json_encode($output,JSON_NUMERIC_CHECK); ?>
              }]
            });
            chart.render();
            }
        </script>
        <script type="text/javascript">
            $(document).on("click","#add-client",function(e){
                e.preventDefault();
                var name =$("#name").val();
                var lastname =$("#lastname").val();
                var dni =$("#dni").val();
                var cellphone =$("#cellphone").val();
                $.ajax({
                    url:"<?php base_url(); ?>insertacliente",
                    type:"POST",
                    dataType: "JSON",
                    data:{
                        name: name,
                        lastname: lastname,
                        dni: dni,
                        cellphone: cellphone
                    },
                    success: function(data){
                        if (data.response==="success") {
                            Swal.fire({
                              icon: 'success',
                              title: 'El cliente ha sido registrado exitosamente.',
                              showConfirmButton: true
                            })
                        }else{
                            Swal.fire({
                            icon: 'warning',
                            title: 'Error al registrar cliente',
                            showConfirmButton: true
                            })
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).on("click","#add-gift",function(e){
                e.preventDefault();
                var dni =$("#dni_gift").val();
                var idregalo =$("#idregalo").val();
                $.ajax({
                    url:"<?php base_url(); ?>agregaregalo",
                    type:"POST",
                    dataType: "JSON",
                    data:{
                        dni: dni,
                        idregalo: idregalo
                    },
                    success: function(data){
                        if (data.response==="success") {
                            Swal.fire({
                              icon: 'success',
                              title: 'El regalo ha sido añadido exitosamente.',
                              showConfirmButton: true
                            })
                        }else{
                            Swal.fire({
                            icon: 'warning',
                            title: 'Error al añadir regalo',
                            showConfirmButton: true
                            })
                        }
                    }
                });
            });
        </script>
    </body>
</html>
