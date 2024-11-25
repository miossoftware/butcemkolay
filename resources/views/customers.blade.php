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
                    <h4>Cari Ekle</h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered w-100 nowrap" id="customers_table"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>Cari Kodu</th>
                            <th>Cari Adı</th>
                            <th>Cari Türü</th>
                            <th>Cep No</th>
                            <th>Açıklama</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var customer_table = $('#customers_table').DataTable({
            "language": {"url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/tr.json"},
        })
    });
</script>
@include('static/footer')
