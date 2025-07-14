<link href="<?php echo ROOT_URL; ?>/Engine/API/Exercises/Collection/Style.css" rel="stylesheet" />
<a href="javascript:void(0)" class="butn" onclick="Bionic.Dashboard.show();">&ltrif; Back</a> &diams;
<a href="javascript:void(0)" onclick="Bionic.Exercises.create('<?php echo $type; ?>');">Create</a>
<?php if($collection->count()): ?>
    <div id="exercises-collection">
        <h1>Exercises: <?php echo $list[$type]; ?></h1>
        <hr/>
        <table>
            <tr>
                <td>Exercise</td>
                <td>Mark</td>
                <td>Summary</td>
                <td style="text-align: right;">Actions</td>
            </tr>
            <?php foreach($collection as $entity): ?>
                <tr>
                    <td>
                        <?php echo $entity->getTitle(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getMark(); ?>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('.summary').toggle();">Toggle</a>
                        <div class="summary" style="display: none;">
                            <?php echo $entity->parseSummary(); ?>
                        </div>
                    </td>
                    <td style="text-align: right;">
                        <a href="javascript:void(0)" onclick="Bionic.Exercises.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
                        <a href="javascript:void(0)" onclick="Bionic.Exercises.remove('<?php echo $entity->getKey(); ?>', '<?php echo $type; ?>');">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>