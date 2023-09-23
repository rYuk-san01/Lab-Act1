<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Activity 1</title>
</head>
<body>
    <h1>Student Information</h1>
    <form action="<?= base_url("save") ?>" method="post">
    <?php if (isset($d['ID'])): ?>
        <input type="hidden" name="ID" value="<?= $d['ID'] ?>">
        <?php endif;?>

        <label for="StudName">Name</label>
        <input type="text" name="StudName" placeholder="Name" require value="<?=isset($d['StudName']) ? $d['StudName'] : ''?>">
        
        <label for="StudGender">Gender</label>
        <select id="StudGender" name="StudGender" required>
            <option value="Male" <?=isset($d['StudGender']) && $d['StudGender'] === 'Male' ? 'selected' : ''?>>Male</option>
            <option value="Female" <?=isset($d['StudGender']) && $d['StudGender'] === 'Female' ? 'selected' : ''?>>Female</option>
    </select>

    <label for="StudCourse">Course</label>
        <input type="text" name="StudCourse" placeholder="Name" require value="<?=isset($d['StudCourse']) ? $d['StudCourse'] : ''?>">

        <label for="StudSection">Gender</label>
        <select id="StudSection" name="StudSection" required>
            <option value="F1" <?=isset($d['StudSection']) && $d['StudSection'] === 'F1' ? 'selected' : ''?>>F1</option>
            <option value="F2" <?=isset($d['StudSection']) && $d['StudSection'] === 'F2' ? 'selected' : ''?>>F2</option>
            <option value="F3" <?=isset($d['StudSection']) && $d['StudSection'] === 'F3' ? 'selected' : ''?>>F3</option>
            <option value="F4" <?=isset($d['StudSection']) && $d['StudSection'] === 'F4' ? 'selected' : ''?>>F4</option>
            <option value="F5" <?=isset($d['StudSection']) && $d['StudSection'] === 'F5' ? 'selected' : ''?>>F5</option>
            <option value="F6" <?=isset($d['StudSection']) && $d['StudSection'] === 'F6' ? 'selected' : ''?>>f6</option>
    </select>

        <label for="StudYear">Year</label>
        <input type="text" name="StudYear" placeholder="Name" require value="<?=isset($d['StudYear']) ? $d['StudYear'] : ''?>">      
    
        <input type="submit" value="save">
    </form>
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Student Gender</th>
            <th>Student Course</th>
            <th>Student Section</th>
            <th>Student Year</th>
            <th>Action</th>
        </tr>
        <?php foreach ($main as $row): ?>
            <tr>
                <td><?= $row['StudName'] ?></td>
                <td><?= $row['StudGender'] ?></td>
                <td><?= $row['StudCourse'] ?></td>
                <td><?= $row['StudSection'] ?></td>
                <td><?= $row['StudYear'] ?></td>
                <td><a href="/delete/<?= $row['ID'] ?>">Delete</a>
                    <a href="update/<?= $row['ID'] ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>