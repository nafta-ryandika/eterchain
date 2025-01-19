<?php
require_once('connection.php');
?>
<style>
    td.nowrap-column {
        white-space: nowrap
    }
</style>

<table class="table table-hover" id="dataTable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" style="text-align: center !important;">Wallet</th>
            <th scope="col" style="text-align: center !important;">Point</th>
            <th scope="col" style="text-align: center !important;">Pool</th>
            <th scope="col" style="text-align: center !important;">Worker</th>
            <th scope="col" style="text-align: center !important;">Speed</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT 
                    id, wallet, `point`, pool_id, worker, speed, `log` 
                    FROM `user`
                    ORDER BY `point` DESC";
        $result = mysqli_query($conn, $query);

        $row = mysqli_num_rows($result);
        $i = 1;

        if ($row > 0) {
            while ($data = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td scope="row"><?= $i ?></td>
                    <td style="text-align: left !important;"><?= $data['wallet']; ?></td>
                    <td><?= $data['point']; ?></td>
                    <td><?= $data['pool_id']; ?></td>
                    <td><?= $data['worker']; ?></td>
                    <td><?= $data['speed']; ?></td>
                </tr>
        <?php
                $i++;
            }
        }
        ?>
    </tbody>
</table>