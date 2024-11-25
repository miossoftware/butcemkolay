@include('static/header')
<div class="container-scroller">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-category">Menüler</li>
                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a href="/dashboard" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                            <span class="menu-title">Anasayfa</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#customers" aria-expanded="false"
                       aria-controls="customers">
                        <i class="mdi mdi-account-badge-horizontal menu-icon"></i>
                        <span class="mx-2">Cari</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="customers">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Cari Tanımla</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Cari Açılış Fişi</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a href="#" class="nav-link"><i class="mdi mdi-download menu-icon"></i>
                            <span class="menu-title">Alış</span></a>
                    </div>
                </li>

                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a href="#" class="nav-link"><i class="mdi mdi-upload menu-icon"></i>
                            <span class="menu-title">Satış</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#till" aria-expanded="false" aria-controls="till">
                        <i class="mdi mdi-account-badge-horizontal menu-icon"></i>
                        <span class="mx-2">Kasa</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="till">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Kasa Tanımla</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kasa Açılış Fişi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kasa Tahsilat</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kasa Ödeme</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#banks" aria-expanded="false"
                       aria-controls="banks">
                        <i class="mdi mdi-bank menu-icon"></i>
                        <span class="mx-2">Banka</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="banks">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Banka Tanımla</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Banka Açılış Fişi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Havale Giriş</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Havale Çıkış</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#credit" aria-expanded="false"
                       aria-controls="credit">
                        <i class="mdi mdi-credit-card-plus menu-icon"></i>
                        <span class="mx-2">Krediler</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="credit">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Kredi Tanımla</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kredi Taksit Öde</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#credit-card" aria-expanded="false"
                       aria-controls="credit-card">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="mx-2">Kredi Kartı</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="credit-card">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Kredi Kartı Tanımla</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kart Harcama</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kart Ödeme</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false"
                       aria-controls="report">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="mx-2">Raporlar</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="report">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Cari Hesap Ekstresi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kasa Hesap Ekstresi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Banka Hesap Ekstresi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Kredi Genel Durum</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Genel Durum Raporu</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a href="/" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                            <span class="menu-title">Çıkış Yap</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="card">
                <div class="card-header">
                    <h4>Anasayfa</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 row">
                        <div class="banka_tanim_button mt-3 mx-3">
                            <button class="btn btn-success btn-sm" id="banka_tanimla_main_button"><i
                                    class="fa fa-plus-square"
                                    aria-hidden="true"></i> Banka
                                Ekle
                            </button>
                            <button class="btn  btn-sm" id="banka_guncelle_main" style="background-color: #F6FA70"><i
                                    class="fa fa-refresh" aria-hidden="true"></i> Banka Güncelle
                            </button>
                            <button class="btn btn-danger btn-sm" id="banka_sil"><i class="fa fa-trash"
                                                                                    aria-hidden="true"></i> Banka
                                Sil
                            </button>
                        </div>
                        <div class="col-12 row mx-1 mt-3">
                            <table class="table table-sm table-bordered w-100  nowrap" id="bank_list"
                                   style="font-size: 13px;">
                                <thead>
                                <tr>
                                    <th>Banka Kodu</th>
                                    <th>Banka Adı</th>
                                    <th>Şube Kodu</th>
                                    <th>Şube Adı</th>
                                    <th>Hesap Adı</th>
                                    <th>Hesap No</th>
                                    <th>Yatan</th>
                                    <th>Çekilen</th>
                                    <th>Bakiye</th>
                                    <th>B.Durumu</th>
                                    <th>Döviz Tipi</th>
                                    <th>IBAN No</th>
                                    <th>Yetkili Adı</th>
                                    <th>Yetkili Mail</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-12 row mt-2 no-gutters">
                            <div class="col-3"></div>
                            <div class="col-1">
                                <table class="table table-sm table-bordered display" style="background-color: white">
                                    <tr>
                                        <th>Döviz Türü</th>
                                    </tr>
                                    <tr>
                                        <th>TL</th>
                                    </tr>
                                    <tr id="usd_gorunum">
                                        <th>USD</th>
                                    </tr>
                                    <tr id="euro_gorunum">
                                        <th>EURO</th>
                                    </tr>
                                    <tr id="gbp_gorunum">
                                        <th>GBP</th>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-sm table-bordered w-100 display nowrap"
                                       style="background-color: white"
                                       id="design_table">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center">Yatan</th>
                                        <th style="text-align: center">Çekilen</th>
                                        <th style="text-align: center">Bakiye</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="toplam_y" style="text-align: right;font-weight: bold">0,00 TL</td>
                                        <td class="toplam_c" style="text-align: right;font-weight: bold">0,00 TL</td>
                                        <td class="toplam_b" style="text-align: right;font-weight: bold">0,00 TL</td>
                                    </tr>
                                    <tr>
                                        <td class="ara_toplam_usd" style="text-align: right;font-weight: bold">0,00
                                            USD
                                        </td>
                                        <td class="kdv_toplam_usd" style="text-align: right;font-weight: bold">0,00
                                            USD
                                        </td>
                                        <td class="genel_toplam_usd" style="text-align: right;font-weight: bold">0,00
                                            USD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ara_toplam_euro" style="text-align: right;font-weight: bold">0,00
                                            EURO
                                        </td>
                                        <td class="kdv_toplam_euro" style="text-align: right;font-weight: bold">0,00
                                            EURO
                                        </td>
                                        <td class="genel_toplam_euro" style="text-align: right;font-weight: bold">0,00
                                            EURO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ara_toplam_gbp" style="text-align: right;font-weight: bold">0,00
                                            GBP
                                        </td>
                                        <td class="kdv_toplam_gbp" style="text-align: right;font-weight: bold">0,00
                                            GBP
                                        </td>
                                        <td class="genel_toplam_gbp" style="text-align: right;font-weight: bold">0,00
                                            GBP
                                        </td>
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
<script>
    $(document).ready(function () {
        var table = $('#bank_list').DataTable({
            scrollY: '55vh',
            scrollX: true,
            "info": false,
            "paging": false,
            createdRow: function (row, data, dataIndex) {
                $(row).addClass("banka_selected");
            },
            "language": {"url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/tr.json"},
        })
    });
</script>
@include('static/footer')
