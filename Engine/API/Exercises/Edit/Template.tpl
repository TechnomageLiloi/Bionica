<link href="<?php echo ROOT_URL; ?>/Engine/API/Exercises/Edit/Style.css" rel="stylesheet" />

<div id="exercises-edit">
    <a href="javascript:void(0)" onclick="Bionic.Exercises.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <a href="javascript:void(0)" onclick="Bionic.Exercises.getCollection(<?php echo $entity->getType(); ?>, $('#page'));">Cancel</a>
    <hr/>
    <table>
        <tr><td style="width: 10%;">Title</td><td><input type="text" name="title" value="<?php echo $entity->getTitle(); ?>" /></td></tr>

        <tr><td style="width: 10%;">Mark</td><td><input type="text" name="mark" value="<?php echo $entity->getMark(); ?>" />%</td></tr>

        <tr><td>Type</td><td>
            <select name="type">
                <?php foreach($types as $key => $value): ?>
                    <option value="<?php echo $key; ?>" <?php if($entity->getType() == $key): ?>selected="selected"<?php endif; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
            </select>
        </td></tr>

        <tr><td>Summary</td><td><textarea name="summary"><?php echo $entity->getSummary(); ?></textarea></td></tr>
    </table>
    <hr/>
    <a href="javascript:void(0)" onclick="Bionic.Exercises.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <a href="javascript:void(0)" onclick="Bionic.Exercises.getCollection(<?php echo $entity->getType(); ?>, $('#page'));">Cancel</a>
</div>