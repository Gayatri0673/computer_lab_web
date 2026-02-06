<!DOCTYPE html>
<html>

<head>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/search_bar.css">

    <style>
        /* Search input size */
        div.dataTables_wrapper div.dataTables_filter input {
            width: 200px;
            margin-left: 10px;
            background: #0d6efd !important;
        }

        /* Entries dropdown spacing */
        div.dataTables_wrapper div.dataTables_length {
            margin-left: 10px;
            background: #0d6efd !important;
        }

        /* Pagination button spacing */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 6px 12px;
            margin: 2px;
            background: #0d6efd !important;
        }

        body {
            background: #f2f2f2;
            font-family: Arial;
            overflow-y: auto;
        }

        /* Search Box */
        .search-box {

            /* Search input size */
            div.dataTables_wrapper div.dataTables_filter input {
                width: 200px;
                margin-left: 10px;
                background: #0d6efd !important;

            }

            /* Entries dropdown spacing */
            div.dataTables_wrapper div.dataTables_length {
                margin-left: 10px;
                background: #0d6efd;


            }

            /* Pagination button spacing */
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 6px 12px;
                margin: 2px;
                background: #0d6efd;
            }

            body {
                background: #f2f2f2;
                font-family: Arial;
                overflow-y: auto;
            }


            /* Search Box */
            .search-box {
                position: relative;
                background: #2f3640;
                height: 30px;
                border-radius: 40px;
                padding: 10px;
            }

            /* Input */
            .search-box input {
                border: none;
                outline: none;
                background: none;
                color: white;
                font-size: 16px;
                width: 0;
                transition: 0.4s;
            }

            /* Button */
            .search-btn {
                color: blue;
                width: 40px;
                height: 1px;
                border-radius: 50%;
                background: none;
                display: flex;
                justify-content: center;
                align-items: center;
                border: none;
            }

            /* Hover Effect */
            .search-box:hover input {
                width: 200px;
                padding: 0 10px;
            }

            .search-box:hover {
                box-shadow: 0 0 10px #999;
            }
        }

        /* Input */
        .search-box input {
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 16px;
            width: 0;
            transition: 0.4s;
        }

        /* Hover Effect */
        .search-box:hover input {
            width: 200px;
            padding: 0 10px;
        }

        .search-box:hover {
            box-shadow: 0 0 10px #999;
        }

        .sub-search {
            display: flex;
            align-items: center;
            border: 2px solid #7878ef;
            height: 40px;
            border-radius: 9px;
            padding: 0 10px;
            background: #fff;
            margin: 10px 9px 0 0;
            width: 60px;

            transition: width 0.3s ease;
            /* ← added */
        }

        /* Input */
        .sub-search input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 15px;
            background: transparent;
            color: #000;
        }

        /* Search button (icon fixed right) */
        .search-btn {
            background: none;
            border: none;
            color: #0d6efd;
            font-size: 16px;
            cursor: pointer;
        }

        .sub-search:hover,
        .sub-search:focus-within {
            width: 300px;
        }
    </style>
</head>

<body>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <div class="sub-search search-box mt-4">
        <input type="text" id="customSearch" placeholder="Search...">
        <button type="button" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.6/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#lab-table').DataTable({
                paging: false,
                searching: true,
                ordering: true,
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
                dom: 'rt<"bottom"ip>' // hides default search box
            });
            // Search while typing
            $('#customSearch').on('keyup', function() {
                table.search(this.value).draw();
            });
            // Search on icon click
            $('.search-btn').on('click', function() {
                table.search($('#customSearch').val()).draw();
            });
        });
    </script>
</body>

</html>