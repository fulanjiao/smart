<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	1. 第一句首字母要大写：{$str1|capitalize}<br>
	2. 第二句模板变量 + 李晓军：{$str2|cat:"李晓军"}<br>
	3. 第三句输出当前日期：{$str3|date_format:"%Y/%m/%d"}<br>
	4. 第四句.php 程序中不处理，它显示默认值：{$str4|default:"没有值！"}<br>
	5. 第五句要让它缩进 8 个空白字母位，并使用"*"取替这 8 个空白字符：<br>
	{$str5|indent:8:'cA'}}<br>
	6. 第六句把 TEACHerLI@163.com 全部变为小写：{$str6|upper}<br>
	7. 第七句把变量中的 teacherli 替换成：李晓军：{$str7|replace:"teacherli":"李晓军
	"}<br>
	8. 第 八句为组合使 用变 量修改 器： {$str8|capitalize|cat:"这 里 是 新加 的时 间：
	"|date_format:"%Y 年%m 月%d 日"|lower}

</body>
</html>