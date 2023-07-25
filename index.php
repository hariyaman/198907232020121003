<!DOCTYPE html>
<html>
<head>
    <title>remote data recruitment</title>
    <meta charset="utf-8">
    <link href="Assets/content/shared/styles/examples-offline.css" rel="stylesheet">
    <link href="styles/kendo.common.min.css" rel="stylesheet">
    <link href="styles/kendo.rtl.min.css" rel="stylesheet">
    <link href="styles/kendo.default.min.css" rel="stylesheet">
    <link href="styles/kendo.dataviz.min.css" rel="stylesheet">
    <link href="styles/kendo.dataviz.default.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
    <script src="Assets/content/shared/js/console.js"></script>
    <script>
        
    </script>
    
    
</head>
<body>
    
        <div id="example">
            <div id="grid"></div>
            <script>
                $(document).ready(function() {
                    $("#grid").kendoGrid({
                        dataSource: {
                            transport: {
                                read: {
                                    url: "http://103.226.55.159/json/data_rekrutmen",
                                    dataType: "jsonp"
                                }
                            },
                            schema: {
                                model: {
                                    fields: {
                                        id: { type: "number" },
                                        nama: { type: "string" },
                                        nip: { type: "string" },
                                        posisi_yang_dipilih: { type: "string" }
                                    }
                                }
                            },
                            pageSize: 20,
                            serverPaging: true,
                            serverFiltering: true,
                            serverSorting: true
                        },
                        height: 550,
                        filterable: true,
                        sortable: true,
                        pageable: true,
                        columns: [{
                                field:"id",
                                filterable: false
                            },
                            
                            {
                                field: "nama",
                                title: "NAMA"
                            }, {
                                field: "nip",
                                title: "NIP"
                            }, {
                                field: "posisi_yang_dipilih",
                                title: "POSISI"
                            }
                        ]
                    });
                });
            </script>
</div>


    
</body>
</html>
