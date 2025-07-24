<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ค้นหานักเรียนห้อง 609</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">ค้นหานักเรียนห้อง 609</h2>
    <form action="result.php" method="get" class="border p-4 bg-white rounded shadow">
      <div class="mb-3">
        <label for="keyword" class="form-label">กรอกชื่อหรือนามสกุล</label>
        <input type="text" name="keyword" class="form-control" placeholder="ตัวอย่าง: ศุภชัย" required>
      </div>
      <button type="submit" class="btn btn-success">ค้นหา</button>
    </form>
  </div>
</body>
</html>
