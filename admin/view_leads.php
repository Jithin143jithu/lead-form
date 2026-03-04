<?php
include '../db.php';
$result = $conn->query("SELECT * FROM website_leads ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Aura Consultants | Leads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../favicon.ico">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        h2 {
            color: #00b2a8;
            margin-bottom: 20px;
        }

        .card {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        table.dataTable thead {
            background: #00b2a8;
            color: #fff;
        }

        table.dataTable thead th {
            border: none;
            font-weight: 600;
        }

        table.dataTable tbody tr:hover {
            background: #f0fbfa;
        }

        .dt-button {
            background: #00b2a8 !important;
            color: #fff !important;
            border: none !important;
            padding: 8px 16px !important;
            border-radius: 6px !important;
            font-weight: 500;
        }

        .dt-button:hover {
            background: #009c93 !important;
        }

        .dataTables_filter input {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 6px 10px;
        }

        .dataTables_length select {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 4px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #00b2a8 !important;
            color: #fff !important;
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #009c93 !important;
            color: #fff !important;
            border: none;
        }

        .page-header h2 {
            font-weight: 700;
            color: #00b2a8;
            margin-bottom: 4px;
        }

        .page-header p {
            color: #777;
            font-size: 14px;
        }
    </style>

</head>

<body>

    <div class="page-header">
        <h2>Website Leads</h2>
        <p>Total Registered Candidates</p>
    </div>

    <div class="card">

        <table id="leadsTable" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>District</th>
                    <th>Marital Status</th>
                    <th>Employment Status</th>
                    <th>Total Experience</th>
                    <th>Preferred Locations</th>
                    <th>Preferred Roles</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= htmlspecialchars($row['full_name']); ?></td>
                        <td><?= htmlspecialchars($row['phone']); ?></td>
                        <td><?= htmlspecialchars($row['email']); ?></td>
                        <td><?= htmlspecialchars($row['gender']); ?></td>
                        <td><?= date("d-m-Y", strtotime(htmlspecialchars($row['dob']))); ?></td>
                        <td><?= htmlspecialchars($row['district']); ?></td>
                        <td><?= htmlspecialchars($row['marital_status']); ?></td>
                        <td><?= htmlspecialchars($row['employment_status']); ?></td>
                        <td><?= htmlspecialchars($row['total_experience']); ?></td>
                        <td><?= htmlspecialchars($row['preferred_locations']); ?></td>
                        <td>
                            <?php
                            $roles = explode(',', $row['preferred_roles']);
                            foreach ($roles as $role) {
                                echo htmlspecialchars(trim($role)) . "<br>";
                            }
                            ?>
                        </td>
                        <td><?= date("d-m-Y", strtotime($row['created_at'])); ?></td>
                    </tr>
                    <?php
                } ?>

            </tbody>
        </table>

    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#leadsTable').DataTable({
                scrollX: true,
                pageLength: 10,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: 'Export to Excel',
                        exportOptions: {
                            format: {
                                body: function (data, row, column, node) {
                                    return data.replace(/<br\s*\/?>/gi, "\n");
                                }
                            }
                        }
                    }
                ],
                // order: [[0, 'desc']]
            });
        });
    </script>

</body>

</html>