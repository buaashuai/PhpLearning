<!--htmlspecialchars() 函数把特殊字符转换为 HTML 实体。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div>Name: <input type="text" name="name"></div>
    <div>E-mail: <input type="text" name="email"></div>
    <div>Website: <input type="text" name="website"></div>
    <div>Comment: <textarea name="comment" rows="5" cols="40"></textarea></div>
    <div>Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
    </div>
    <input type="submit">
</form>

<?php
// 定义变量并设置为空值
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);

    echo $name."\t".$email."\t".$website."\t".$comment."\t".$gender."\t";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>