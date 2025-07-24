<!-- form.php -->
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ฟอร์มกรอกข้อมูล</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">กรอกข้อมูลนักเรียน</h2>
    <form action="process.php" method="post" class="border p-4 bg-white rounded shadow">
      <div class="mb-3">
        <label for="fname" class="form-label">ชื่อ</label>
        <input type="text" name="fname" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="lname" class="form-label">นามสกุล</label>
        <input type="text" name="lname" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="class" class="form-label">ชั้น</label>
        <input type="text" name="class" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">เลขที่</label>
        <input type="number" name="number" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="plan" class="form-label">แผนการเรียน</label>
        <select name="plan" class="form-select" required>
          <option value="เทคโนโลยีวิศวกรรมศาสตร์">เทคโนโลยีวิศวกรรมศาสตร์</option>
          <option value="ศิลปศาสตร์">ศิลปศาสตร์</option>
          <option value="ภาษาอังกฤษ">ภาษาอังกฤษ</option>
          <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">เพศ</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="ชาย" required>
          <label class="form-check-label">ชาย</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="หญิง">
          <label class="form-check-label">หญิง</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
    </form>
  </div>
</body>
</html>
