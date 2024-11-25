@include('static/header')
<div class="container-scroller">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->

        @include('static/navmenu')
        <!-- partial -->
        <div class="main-panel">
            <div class="card">
                <div class="card-header">
                    <h4>Anasayfa</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 row">
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
