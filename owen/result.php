<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ผลการค้นหา</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">ผลการค้นหา</h2>
    <?php if ($keyword === ''): ?>
      <div class="alert alert-warning">กรุณากรอกคำค้นหา</div>
    <?php elseif (empty($results)): ?>
      <div class="alert alert-danger">ไม่พบข้อมูลที่ค้นหา</div>
    <?php else: ?>
      <table class="table table-bordered table-hover bg-white">
        <thead class="table-dark">
          <tr>
            <th>เลขที่</th>
            <th>เลขประจำตัว</th>
            <th>ชื่อ - นามสกุล</th>
            <th>ห้องเรียน</th>
            <th>แผนการเรียน</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($results as $student): ?>
            <tr>
              <td><?= $student["no"] ?></td>
              <td><?= $student["id"] ?></td>
              <td><?= $student["name"] ?></td>
              <td><?= $student["room"] ?></td>
              <td><?= $student["plan"] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
    <a href="search_form.php" class="btn btn-secondary mt-3">ย้อนกลับ</a>
  </div>
</body>
</html>
