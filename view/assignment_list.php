<?php include('view/header.php'); ?>

<section id="list" class="list">
    <header class="list__row list__header">
        <h1>Assignments</h1>
        <form action="." method="get" id="list__header_select" class="list__header_select">
            <input type="hidden" name="action" value="list_assignments">
            <select name="course_id" required>
                <option value="0">View All Courses</option>
                <?php foreach ($courses as $course): ?>
                <?php if ($course['courseID'] == $course_id) { ?>
                <option value="<?= $course['courseID']; ?>" selected>

                    <?php } else { ?>
                <option value="<?= $course['courseID']; ?>">
                    <?php } ?>
                    <?= $course['courseName']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <button class="add-button bold">Submit</button>
        </form>
    </header>
    <?php if (assignments) { ?>
    <?php foreach ($assignments as $assignment): ?>
    <div class="list__row">
        <div class="list__item">
            <p class="bold">
                <?= $assignment['courseName']; ?>
            </p>
            <p>
                <?= $assignment['Description'] ?>
            </p>
        </div>
        <div class="list__removeItem">
            <form action="." method="post" id="delete_assignment_form">
                <input type="hidden" name="action" value="delete_assignment">
                <input type="hidden" name="assignment_id" value="<?= $assignment['ID']; ?>">
                <button class="delete-button bold">Delete</button>
            </form>
        </div>
    </div>
    </div>
    <?php endforeach; ?>
    <?php } else { ?>
    <br>
    <?php if ($course_id) { ?>
    <p class="bold">No assignments exist for this course.</p>
    <?php } else { ?>
    <p class="bold">No assignments exist.</p>
    <?php } ?>
    <br>
    <?php } ?>
</section>

<?php include('view/footer.php'); ?>