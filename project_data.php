<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
   $sid = $_GET["sid"]; echo "รหัสนักศึกษา : $sid<br>";
   $fname = $_GET["fname"]; echo "ชื่อ : $fname<br>";
   $lname = $_GET["lname"]; echo "นามสกุล : $lname<br>";
   $program = $_GET["program"]; echo "สาขาวิชา : $program<br>";
   $faculty = $_GET["faculty"]; echo "คณะ : $faculty<br>";
   $std_year = $_GET["std_year"]; echo "ชั้นปี : $std_year<br>";
   $prj_name_th = $_GET["prj_name_th"]; echo "ชื่อโครงงาน (ไทย) : $prj_name_th<br>";
   $prj_name_en = $_GET["prj_name_en"]; echo "ชื่อโครงงาร (อังกฤษ) : $prj_name_en<br>";
   $prj_type = $_GET["prj_type"]; echo "ประเภทโครงการ : $prj_type<br>";
   $prj_tool = $_GET["prj_tool"];
   $prj_tool_list = implode(",",$prj_tool);  echo "เครื่่องมือที่ใช้ในการพัฒนา : $prj_tool_list<br>";
   $prj_advisor = $_GET["prj_advisor"]; echo "อาจารย์ที่ปรึกษา: $prj_advisor<br>";

    ?>
</body>
</html> 