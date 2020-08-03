<!-- Cars -->
<div style="border:1px solid #ffc400;" class="m-3 p-1">
    <h3 style="color: #ffc400;">Cars</h3>
    <p class="mb-1 p-1">

        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseCarAdd" role="button" aria-expanded="false" aria-controls="multiCollapseCarAdd">Add</a>
        <a class="btn btn-danger" data-toggle="collapse" href="#multiCollapseCarEditDelete" role="button" aria-expanded="false" aria-controls="multiCollapseCarEditDelete">Show</a>

    </p>

    <div class="row">

        <div class="col-12">
            <div class="collapse multi-collapse" id="multiCollapseCarAdd">
                <div class="card card-body">
                    Add olacaq
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="collapse multi-collapse" id="multiCollapseCarEditDelete">
                <div class="card card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-sm  table-hover text-center">

                            <thead class="thead-dark">
                                <tr>

                                    <?php

                                    foreach (GetAllCars() as $count => $array) {
                                        foreach ($array as $Key => $Value) {
                                            echo "<th>" . ucfirst($Key) . "</th>";
                                        }
                                        echo "<th>Control</th>";
                                        break;
                                    }

                                    ?>

                                </tr>
                            </thead>
                            <tbody>


                                <?php

                                foreach (GetAllCars() as $count => $array) {
                                    echo "<tr>";
                                    foreach ($array as $Key => $Value) {
                                        echo "<td>$Value</td>";
                                    }

                                    echo '<td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a class="btn btn-info btn-sm" href="#"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>';


                                    echo "</tr>";
                                }


                                ?>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Cars -->



<!-- Users -->
<div style="border:1px solid #ffc400;" class="m-3 p-1">
    <h3 style="color: #ffc400;">Users</h3>
    <p class="mb-1 p-1">

        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseUserAdd" role="button" aria-expanded="false" aria-controls="multiCollapseUserAdd">Add</a>
        <a class="btn btn-danger" data-toggle="collapse" href="#multiCollapseUserEditDelete" role="button" aria-expanded="false" aria-controls="multiCollapseUserEditDelete">Show</a>

    </p>

    <div class="row">

        <div class="col-12">
            <div class="collapse multi-collapse" id="multiCollapseUserAdd">
                <div class="card card-body">
                    Add olacaq
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="collapse multi-collapse" id="multiCollapseUserEditDelete">
                <div class="card card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-sm  table-hover text-center">

                            <thead class="thead-dark">
                                <tr>
                                    <?php

                                    foreach (GetAllUsers() as $count => $array) {
                                        foreach ($array as $Key => $Value) {
                                            echo "<th>" . ucfirst($Key) . "</th>";
                                        }
                                        echo "<th>Control</th>";
                                        break;
                                    }

                                    ?>
                                </tr>
                            </thead>
                            <tbody>


                                <?php

                                foreach (GetAllUsers() as $count => $array) {
                                    echo "<tr>";
                                    foreach ($array as $Key => $Value) {
                                        echo "<td>$Value</td>";
                                    }

                                    echo '<td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a class="btn btn-info btn-sm" href="#"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>';


                                    echo "</tr>";
                                }


                                ?>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Users -->