<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post">
            <div>
                <label>Name:</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Age:</label>
                <input type="number" name="age" min="0">
            </div>
            <div>
                <label>marks:</label>
                <input type="number" name="marks" min="0" max="100">
            </div>
            <div>
                <label>grade:</label>
                <select name="grade">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="FAIL">FAIL</option>
            </select>
            </div>
            <div>
                <label>Courses:</label>
                <select name="courses">
                <option value="1">PHP</option>
                <option value="2">JAVA</option>
                <option value="3">ASP</option>
                <option value="4">DIGITAL</option>
                <option value="5">ANDROID</option>
            </select>
            </div>
            <div>
                <label>Faculty:</label>
                <select name="faculty">
                <option value="1">Sumit</option>
                <option value="2">Demo</option>
                <option value="3">DIGI</option>
                <option value="4">DRU</option>
                <option value="5">ANY</option>
            </select>
            </div>
            <div>
                <input type="submit" name="add-stu" id="add-stu" value="send">
            </div>
        </form>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Marks</th>
                    <th>Grade</th>
                    <th>Course</th>
                    <th>Faculty</th>
                </tr>
            </thead>
            <tbody id="stdata">
            </tbody>
        </table>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function() {
        const tableCreator = function(data) {
            if(data !== undefined){
                $('#stdata').append('<tr><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.age + '</td><td>' + data.marks + '</td><td>' + data.grade + '</td><td>' + data.courses.name + '</td><td>' + data.faculty.name + '</td></tr>');                        
            }else{
                $.ajax({
                    url: 'http://localhost/php1.demo/jsonexample/index2.php',
                    method: 'get'
                })
                .done(function(result) {
                    if (result !== undefined) {
                        result = JSON.parse(result);
                        for (let index = 0; index <result.length; index++) {
                            var data = (result[index]);
                            $('#stdata').append('<tr><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.age + '</td><td>' + data.marks + '</td><td>' + data.grade + '</td><td>' + data.courses.name + '</td><td>' + data.faculty.name + '</td></tr>');                        
                        }
                    }
                })
                .fail(function() {
                    console.log('API ERROR');
                });
            }

        };
        tableCreator();

        $('#add-stu').click(function() {
            event.preventDefault();
            var name = $('input[name="name"]').val(),
                age = parseInt($('input[name="age"]').val()),
                marks = parseInt($('input[name="marks"]').val()),
                grade = $('select[name="grade"] option:selected').val(),
                courses = $('select[name="courses"] option:selected').val(),
                faculty = $('select[name="faculty"] option:selected').val();
            var student = {
                        "name": name,
                        "age": age,
                        "marks": marks,
                        "grade": grade,
                        "courses": courses,
                        "faculty": faculty
                        };
            $.ajax({
                    url: 'http://localhost/php1.demo/jsonexample/index.php',
                    method: 'post',
                    data: JSON.stringify(student)
                })
                .done(function(result) {
                    result = JSON.parse(result);
                    if (result !== undefined) {
                        tableCreator(result[0]);
                    }
                })
                .fail(function() {
                    console.log('API ERROR');
                });
        });
    });
</script>

</html>