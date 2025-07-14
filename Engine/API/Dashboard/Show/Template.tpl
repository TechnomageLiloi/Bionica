<link href="<?php echo ROOT_URL; ?>/Engine/API/Dashboard/Show/Style.css" rel="stylesheet" />
<div id="game-dashboard-show" class="stylo">
    <h1 class="wrap-title">
        Dashboard
    </h1>
    <hr/>
    <table>
        <tr>
            <th>Bionic (<?php echo $total; ?>%)</th>
        </tr>
        <tr>
            <td>
                <div class="exercises">
                    <img src="<?php echo ROOT_URL; ?>/Engine/Images/Man.jpg" />

                    <?php foreach($percentages as $type => $percentage): ?>
                    <div class="percentage" style="top: <?php echo $coordinates[$type]['y']; ?>px;left: <?php echo $coordinates[$type]['x']; ?>px;">
                        <a href="javascript:void(0)" title="<?php echo $list[$type]; ?>" onclick="Bionic.Exercises.getCollection(<?php echo $type; ?>, $('#page'));"><?php echo $percentage; ?>%</a>
                    </div>
                    <?php endforeach; ?>

                </div>
            </td>
        </tr>
    </table>
</div>