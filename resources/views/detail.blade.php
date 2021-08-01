<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Detail User
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- CSS Files -->
    <link href="{{asset('/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">

    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Admin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item ">
                <a class="nav-link" href="/data">
                  <i class="material-icons">content_paste</i>
                  <p>Dashboard</p>
                </a>
              </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/data">
              <i class="material-icons">content_paste</i>
              <p>Data</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/kirimppi">
              <i class="material-icons">send_and_archive</i>
              <p>Kirim PPI</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/vendor">
              <i class="material-icons">library_books</i>
              <p>Vendor</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/maps">
              <i class="material-icons">location_ons</i>
              <p>Cover Area</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/aktivasi">
              <i class="material-icons">view_list</i>
              <p>Aktivasi Iconnet</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/logout" onclick="confirm('Apakah Anda Ingin Logout')">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Detail User</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">


                                <div class="card-header card-header-primary mb-4">
                                    <h4 class="card-title ">Detail Item</h4>
                                    <p class="card-category">Rangkuman Detail Dari Item</p>
                                </div>


                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">

                                            <tbody>

                                                <tr>
                                                    <td>Project Activation Node ID</td>
                                                    <td>{{$data[0]->p_aktivasi_node_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Activation Request ID</td>
                                                    <td>{{$data[0]->a_request_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Customer Name</td>
                                                    <td>{{$data[0]->c_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bandwidth (Project Activation) (Project Activation)</td>
                                                    <td>{{$data[0]->bandwidth}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>{{$data[0]->status}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Service ID</td>
                                                    <td>{{$data[0]-> service_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>IO Number </td>
                                                    <td>{{$data[0]->io_number}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>{{$data[0]->address}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Created On</td>
                                                    <td>
                                                        {{date('d F Y',strtotime($data[0]->create_on))}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BAI Date</td>
                                                    <td>{{$data[0]->bai_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Duration</td>
                                                    <td>{{$data[0]->total_duration}}</td>
                                                </tr>
                                                <tr>
                                                    <td>WEEK PA DITERIMA</td>
                                                    <td>{{$data[0]-> week_pa_diterima}}</td>
                                                </tr>
                                                <tr>
                                                    <td>WEEK PA CLOSE</td>
                                                    <td>{{$data[0]->week_pa_close}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TAHUN PA DITERIMA</td>
                                                    <td>{{$data[0]-> tahun_pa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TAHUN PA CLOSE</td>
                                                    <td>{{$data[0]->tahun_pa_close}}</td>
                                                </tr>
                                                <tr>
                                                    <td>LOKASI</td>
                                                    <td>{{$data[0]->lokasi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KELURAHAN</td>
                                                    <td>{{$data[0]->kelurahan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KECAMATAN</td>
                                                    <td>{{$data[0]->kecamatan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KLASIFIKASI PA</td>
                                                    <td>{{$data[0]->klasifikasi_pa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>MITRA FEEDER</td>
                                                    <td>{{$data[0]->mitra_feeder}}</td>
                                                </tr>
                                                <tr>
                                                    <td>MITRA</td>
                                                    <td>{{$data[0]->mitra}}</td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS PA</td>
                                                    <td>{{$data[0]->status_pa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS PA OPEN</td>
                                                    <td>{{$data[0]->status_pa_opend}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KETERANGAN</td>
                                                    <td>{{$data[0]->keterangan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>FAT/ODP</td>
                                                    <td>{{$data[0]->fat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PORT FAT</td>
                                                    <td>{{$data[0]->port_fat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KOORDINAT FAT/ODP</td>
                                                    <td>{{$data[0]->koordinat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SN ONT</td>
                                                    <td>{{$data[0]->sn_ont}}</td>
                                                </tr>
                                                <tr>
                                                    <td>OLT</td>
                                                    <td>{{$data[0]->olt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PORT OLT</td>
                                                    <td>{{$data[0]->port_olt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>RESERVASI ONT</td>
                                                    <td>{{$data[0]->reservasi_ont}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TYPE ONT</td>
                                                    <td>{{$data[0]->type_ont}}</td>
                                                </tr>
                                                <tr>
                                                    <td>ADD ON TV</td>
                                                    <td>{{$data[0]->add_on_tv}}</td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS</td>
                                                    <td>{{$data[0]->status1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SN STB</td>
                                                    <td>{{$data[0]->sn_stb}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Aging</td>
                                                    <td>{{$data[0]->aging}}</td>
                                                </tr>
                                                <tr>
                                                    <td>RAB</td>
                                                    <td>{{$data[0]->rab}}</td>
                                                </tr>
                                                <tr>
                                                    <td>ALOKASI KABEL</td>
                                                    <td>{{$data[0]->alokasi_kabel}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PANJANG FEEDER</td>
                                                    <td>{{$data[0]-> panjang_feeder}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SC PROJECT BASED</td>
                                                    <td>{{$data[0]->sc_project}}</td>
                                                </tr>
                                                <tr>
                                                    <td>REASON</td>
                                                    <td>{{$data[0]->reason}}</td>
                                                </tr>
                                                <tr>
                                                    <td>START DATE</td>
                                                    <td>{{$data[0]->start_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>END DATE</td>
                                                    <td>{{$data[0]->end_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>DURASI</td>
                                                    <td>{{$data[0]->durasi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>AGING - SC</td>
                                                    <td>{{$data[0]->aging_sc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NEED SC</td>
                                                    <td>{{$data[0]->need_sc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Reason</td>
                                                    <td>{{$data[0]->reason1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Aging After SC</td>
                                                    <td>{{$data[0]->aging_after_sc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Start Date</td>
                                                    <td>{{$data[0]->start_date1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Endate</td>
                                                    <td>{{$data[0]-> end_date1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SC SPKK</td>
                                                    <td>{{$data[0]->sc_spkk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>FINAL AGING SPKK</td>
                                                    <td>{{$data[0]->final_aging}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Create</td>
                                                    <td>{{$data[0]->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Update</td>
                                                    <td>{{$data[0]->updated_at}}</td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('/assets/js/core/jquery.min.js')}}">
    </script>
    <script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/assets/js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{asset('/assets/js/plugins/moment.min.js')}}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{asset('/assets/js/plugins/sweetalert2.js')}}"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{asset('/assets/js/plugins/jquery.validate.min.js')}}"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{asset('/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{asset('/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{asset('/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset('/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{asset('/assets/js/plugins/fullcalendar.min.js')}}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{asset('/assets/js/plugins/jquery-jvectormap.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('/assets/js/plugins/nouislider.min.js')}}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{asset('/assets/js/plugins/arrive.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{asset('/assets/js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('/assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('/assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('/assets/demo/demo.js')}}"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
</body>

</html>